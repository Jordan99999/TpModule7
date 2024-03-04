<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UserController extends AbstractController
{
    #[Route('/user', name: 'index_user')]
    public function index(UserRepository $UserRepository)
    {
        $users= $UserRepository->findAll();
        return $this->render('user/index.html.twig', 
            ['users'=> $users]
        );
    }
    #[Route("/new", name: "new_user")]
    public function new_user( Request $request, EntityManagerInterface $em){

        $data=[];
        $user = new User();
        $form= $this->createForm(UserType::class, $user); 

        $data["form"]= $form;

        $form->handleRequest(($request));

        if($form->isSubmitted()&& $form->isValid()){
            $em->persist($user); 
            $em->flush(); 
            return $this->redirectToRoute("index_user"); 
        }; 
        return $this->render("user/new.html.twig",$data);
    }
    #[Route("/update/{id}", name:"update_user")]
    public function update(
        int $id , 
        UserRepository $userRepository,
        Request $request,
        EntityManagerInterface $em 
        ){

        $user = $userRepository->findOneBy(["id"=> $id]);

        $form = $this->createForm(UserType::class , $user , ["label"=> "modifier"]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($user);
            $em->flush(); 
            return $this->redirectToRoute("index_user");
        }

        return $this->render("user/update.html.twig" , ["form" => $form]);
    }
    #[Route("/delete/{id}", name:"delete_user")]
    public function delete(
        int $id,
        EntityManagerInterface $em , 
        UserRepository $userRepository
        ){
            $user = $userRepository->findOneBy(["id"=> $id]);
            $em->remove($user); 
            $em->flush(); 
            return $this->redirectToRoute("index_user");
    }

}
