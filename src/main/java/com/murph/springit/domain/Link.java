package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToMany;

import java.util.ArrayList;
import java.util.List;
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


	@OneToMany(mappedBy = "link")
	private List<Comment> comments = new ArrayList<>();



}