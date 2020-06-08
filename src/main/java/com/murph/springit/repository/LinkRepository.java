package com.murph.springit.repository;

import com.murph.springit.domain.Link;

import org.springframework.data.jpa.repository.JpaRepository;

public interface LinkRepository extends JpaRepository<Link, Long> {
    
}