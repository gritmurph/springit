package com.murph.springit.repository;

import com.murph.springit.domain.Vote;

import org.springframework.data.jpa.repository.JpaRepository;

public interface VoteRepository extends JpaRepository<Vote, Long> {
    
}