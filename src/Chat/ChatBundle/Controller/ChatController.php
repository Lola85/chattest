<?php
namespace Chat\ChatBundle\Controller;
use Chat\ChatBundle\Entity\User;

use Chat\ChatBundle\Entity\Messages;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChatController extends Controller 
{

	public function indexAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$request = $this->get('request');
		if ($request->isXmlHttpRequest()) {
			$pseudo = $request->get('pseudo');
			
			if($request->get('req') == 1)
			{
				$user = $em->getRepository('ChatChatBundle:User')->findOneBy(array('pseudo'=>$pseudo));
				if (!$user){
				$utilisateur = new User();
				$utilisateur->setPseudo($pseudo);
				$utilisateur->setAge(26);
				$em->persist($utilisateur);
				$em->flush();}
				return new Response('req==1&pseudo='.$pseudo);
			}
			else if($request->get('req') == 2)
			{
				$message = new Messages();
				$msg = $request->get('msg');
				$message->setMessage($msg);
				
				$user = $em->getRepository('ChatChatBundle:User')->findOneBy(array('pseudo'=>$pseudo));
				
				$message->setUser($user);
				$em->persist($message);
				$em->flush();
				return new Response('req==2'.print_r($user));
			}
		}
		else 
		{
			return $this->render('ChatChatBundle:Chat:index.html.twig');
		}
	}
	
	public function actualiserAction() 
	{
		$cinqminute = time() - 600;
		$em = $this->getDoctrine()->getEntityManager();
		//$messages = $em->getRepository('ChatChatBundle:Messages')->findBy(
			//	array(''));
		$messages = $em->createQueryBuilder()
			->select('m')
			->from('ChatChatBundle:Messages', 'm')
			->where("m.date > $cinqminute")
			->getQuery()
			->getResult();
		
		$rep="";
		foreach ( $messages as $msg){
			$rep .= '<strong>'.$msg->getUser()->getPseudo() .'</strong><em> ('.
			date_format($msg->getDate(), 'H:i:s').')</em>: '.$msg->getMessage().'<br>';
		}
		return new Response($rep);
	}
	
}
