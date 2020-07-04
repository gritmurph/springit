package com.murph.springit.domain;

import java.util.Date;
import java.time.LocalDateTime;
import java.time.ZoneId;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

import com.murph.springit.service.BeanUtil;

import org.ocpsoft.prettytime.PrettyTime;

import lombok.*;

@Entity
@RequiredArgsConstructor
@Getter 
@Setter
@NoArgsConstructor
public class Comment extends Auditable {

	@Id
	@GeneratedValue
	private Long id;

	@NonNull
	private String body;

	@ManyToOne
	@NonNull
	private Link link;

	public String getPrettyTime() {
		PrettyTime pt = BeanUtil.getBean(PrettyTime.class);
		return pt.format(convertToDateViaInstant(getCreationDate()));
	}
	
	private Date convertToDateViaInstant(LocalDateTime dateToConvert) {
		return java.util.Date.from(dateToConvert.atZone(ZoneId.systemDefault()).toInstant());
	}
}