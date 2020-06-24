package com.murph.springit.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

import lombok.*;

@Entity
@RequiredArgsConstructor
@NoArgsConstructor
@Getter
@Setter
public class Vote extends Auditable  {
	
	@Id
	@GeneratedValue
    private long id;

    @NonNull
    private short direction;

    @NonNull
    @ManyToOne
    private Link link;
}