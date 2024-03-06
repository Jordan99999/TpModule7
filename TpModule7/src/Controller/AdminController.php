<?php

namespace App\Controller;

use App\Form\AdminType;
use App\Form\UserAdminType;
use App\Repository\AdminRepository;
use App\Repository\UserAdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'index_admin')]
    public function index(UserAdminRepository $useradminRepository)
    {
        $admins = $useradminRepository->findAll();
        return $this->render(
            'admin/index.html.twig',
            ['admins' => $admins]
        );
    }

    #[Route("admin/update/{id}", name: "update_admin")]
    public function update(
        int $id,
        UserAdminRepository $useradminRepository,
        Request $request,
        EntityManagerInterface $em
    ) {

        $admin = $useradminRepository->findOneBy(["id" => $id]);

        $form = $this->createForm(UserAdminType::class, $admin, ["label" => "modifier"]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($admin);
            $em->flush();
            return $this->redirectToRoute("index_admin");
        }

        return $this->render("user_admin/updateAdmin.html.twig", ["form" => $form]);
    }
    #[Route("admin/delete/{id}", name: "delete_admin")]
    public function delete(
        int $id,
        EntityManagerInterface $em,
        UserAdminRepository $useradminRepository
    ) {
        $admin = $useradminRepository->findOneBy(["id" => $id]);
        $em->remove($admin);
        $em->flush();
        return $this->redirectToRoute("index_admin");
    }
}
