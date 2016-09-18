package br.ufma.mestrado.projetosoftware.model.repository;

import java.util.List;

import javax.enterprise.context.RequestScoped;
import javax.inject.Inject;

import org.hibernate.Criteria;
import org.hibernate.Session;

import br.ufma.mestrado.projetosoftware.model.User;

@RequestScoped
public class UserRepository {

	@Inject
	private Session session;
	
	private Criteria createCriteria() {
		return session.createCriteria(User.class);
	}
	
	@SuppressWarnings("unchecked")
	public List<User> list() {
		return this.createCriteria().list();
	}
	
	public void save(User user) {
		this.session.saveOrUpdate(user);
	}
	
}
