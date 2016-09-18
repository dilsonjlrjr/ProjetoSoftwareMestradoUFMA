package br.com.caelum.vraptor.controller;

import javax.inject.Inject;

import br.com.caelum.vraptor.Controller;
import br.com.caelum.vraptor.Get;
import br.com.caelum.vraptor.Path;
import br.com.caelum.vraptor.Result;
import br.com.caelum.vraptor.view.Results;
import br.ufma.mestrado.projetosoftware.model.User;
import br.ufma.mestrado.projetosoftware.model.repository.UserRepository;

@Controller
@Path("/user")
public class IndexController {

	@Inject
	private Result result;
	
	@Inject
	private UserRepository repository;

	/**
	 * @deprecated CDI eyes only
	 */
	protected IndexController() {
		this(null);
	}
	
	@Inject
	public IndexController(Result result) {
		this.result = result;
	}

	@Path("/")
	public void index() {
		result.include("variable", "VRaptor!");
	}
	
	@Get
	@Path("/list")
	public void listAll() {
	    result.use(Results.json())
	        .withoutRoot()
	        .from(repository.list())
	        .serialize();
	}
		
	@Get
	@Path("/save")
	public void saveUser() {
		
		User user = new User();
		user.setName("Higo");
		user.setLastname("Sampaio");		
		repository.save(user);
		
	}
}