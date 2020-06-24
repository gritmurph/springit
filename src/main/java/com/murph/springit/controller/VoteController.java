package com.murph.springit.controller;

import java.util.Optional;

import javax.naming.LinkRef;

import com.murph.springit.domain.Link;
import com.murph.springit.domain.Vote;
import com.murph.springit.repository.LinkRepository;
import com.murph.springit.repository.VoteRepository;

import org.springframework.security.access.annotation.Secured;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class VoteController {
    
    private VoteRepository voteRepository;
    private LinkRepository linkRepository;

    public VoteController(LinkRepository linkRepository, VoteRepository voteRepository) {
        this.linkRepository = linkRepository;
        this.voteRepository = voteRepository;
    }

    @Secured({"ROLE_USER"})
    @GetMapping("/vote/link/{linkID}/direction/{direction}/votecount/{voteCount}")
    public int vote(@PathVariable Long linkID, @PathVariable short direction, @PathVariable int voteCount) {
        Optional<Link> optionalLink = linkRepository.findById(linkID);
        if( optionalLink.isPresent() ) {
            Link link = optionalLink.get();
            Vote vote = new Vote(direction,link);
            voteRepository.save(vote);

            int updatedVoteCount = voteCount + direction;
            link.setVoteCount(updatedVoteCount);
            linkRepository.save(link);
            return updatedVoteCount;
        }

        return voteCount;
    }
}