package controller;

import java.io.IOException;



import javax.servlet.*;
import javax.servlet.http.HttpServlet;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class Profil extends HttpServlet {
	
	/*public void doGet( HttpServletRequest request, HttpServletResponse response )	throws ServletException, IOException {
		this.getServletContext().getRequestDispatcher( "/WEB-INF/index.jsp" ).forward( request, response );
	}*/
	
	@RequestMapping("/profil")
	public ModelAndView getindex(){
		String msg="hello";
		return new ModelAndView("profil","message",msg);
	}
}
