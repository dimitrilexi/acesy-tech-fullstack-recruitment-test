<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;






class AjouterNote extends Controller{
	
	
/**
* @Route("/notes/ajouter", name="ajoutnote")
*/
	
	public function ajouaction(){
		
		return $this->render('ajoutnote.html.twig');
		
	}
	
	}