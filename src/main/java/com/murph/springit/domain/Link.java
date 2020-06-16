package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToMany;

import java.util.ArrayList;
import java.util.List;
import lombok.Data;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.NonNull;
import lombok.RequiredArgsConstructor;
import lombok.Setter;
import lombok.ToString;


@Entity
@RequiredArgsConstructor
@Getter @Setter
@ToString
@NoArgsConstructor
public class Link extends Auditable {
	 
	@Id
	@GeneratedValue
	private long id;
	@NonNull
	private String title;
	@NonNull
    private String url;


	@OneToMany(mappedBy = "link")
	private List<Comment> comments = new ArrayList<>();

	public void addComment(Comment comment) {
		comments.add(comment);
	}
}