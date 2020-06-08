package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data
@NoArgsConstructor
public class Comment {

	@Id
	@GeneratedValue
	private long id;
    private String body;

	
	@ManyToOne
	private Link link;
}