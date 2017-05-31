<?php

namespace gestionBundle\Controller;

use gestionBundle\Entity\Modele;
use gestionBundle\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class voitureControllerController extends Controller
{
	public function afficheVoitureAction()
	{
		$em = $this->getDoctrine()->getManager();

		$voiture = $em->getRepository('gestionBundle:Voiture')->findAll();
		return $this->render('gestionBundle:voitureController:affiche.html.twig', array(
			"voitures"=> $voiture,
		));
	}

	public function ajouterVoitureAction()
	{
		$modele = new modele();
		$modele->setLibele('407');
		$modele->setPays('France');

		$voiture = new voiture();
		$voiture->setMarque('peugeot');
		$voiture->setSerie('110 tunis 1123');
		$voiture->setDateCir(new \DateTime('2010-01-01T15:03:01.012345Z'));

		$voiture->setModeleId($modele);


		$em = $this -> getDoctrine()->getManager();

		$em->persist($voiture);
		$em->persist($modele);

		$em->flush();

		return new Response('voiture ajoute par id '.$voiture->getId().'<br> modele ajouter par id '.$modele->getId());
	}

}
