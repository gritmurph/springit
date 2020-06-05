package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

import lombok.Data;
import lombok.NoArgsConstructor;
import lombok.NonNull;


@Entity
@NoArgsConstructor
@Data
public class Link {
	 
	@Id
	@GeneratedValue
	private long id;
	@NonNull
	private String title;
	@NonNull
    private String url;


    //comment



}