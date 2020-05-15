<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Character;
use App\Entity\CharacterDc;
use App\Repository\CharacterRepository;
use App\Repository\CharacterDcRepository;
use App\Form\CharacterType;
use Symfony\Component\HttpFoundation\Request;


/**
* @Route("/home", name="home.")
*/
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
		return $this->render('index.html.twig');
    }
	/**
	* @Route("/dc", name="dc")
	*/
    public function dc(CharacterDcRepository $dcRepository)
    {
      $dcCharacters = $dcRepository->findAll();

		  return $this->render('dc.html.twig', [
        'dcCharacters' => $dcCharacters
      ]);
    }
	/**
  * @Route("/marvel", name="marvel")
  * @param CharacterRepository $postRepository
	*/
    public function marvel(CharacterRepository $postRepository)
    {
      $characters = $postRepository->findAll();

		  return $this->render('marvel.html.twig', [
          'characters' => $characters
      ]);
    }
    /**
	  * @Route("/create", name="create")
	  */
    public function create(Request $request)
    {
      $character = new Character;

      $form = $this->createForm(CharacterType::class, $character);
      $form->page_id = rand();
      $form->first_appearance = rand();
      $this->handleRequest($request);
     if($form->isSubmitted())
     {
      $em = $this->getDoctrine()->getManager();
      $em->persist($character);
      $em->flush();

      $this->addFlash(
        'notice',
        'Dodałeś nową postać!'
      );
     }
      

      return $this->render('create.html.twig', [
        'form' => $form->createView()
      ]);
    }
}
