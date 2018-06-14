<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;






class TodolistController extends Controller{
	
	

/**
 * Matches /notes exactly
 *
 * @Route("/notes", name="note")
 */
	
public function indexaction(){
		
		return $this->render('note.html.twig');
		
	}
	
/**
 * Matches /signup exactly
 *
 * @Route("/signup", name="inscription")
 */	
public function testrout()
{
	return  $this->render('sign.html.twig');
	
}

} 
	
	
	