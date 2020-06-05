package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data
@NoArgsConstructor
public class Vote {
	
	@Id
	@GeneratedValue
    private long id;
    private int vote;

    //usr
    //ling
}