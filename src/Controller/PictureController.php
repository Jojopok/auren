<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Form\PictureType;
use App\Repository\PictureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/illustration')]
class PictureController extends AbstractController
{
    #[Route('/', name: 'app_picture_index', methods: ['GET'])]
    public function index(PictureRepository $pictureRepository): Response
    {
        return $this->render('picture/index.html.twig', [
            'pictures' => $pictureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_picture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $picture = new Picture();
        $form = $this->createForm(PictureType::class, $picture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($picture);
            $entityManager->flush();

            return $this->redirectToRoute('app_picture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picture/new.html.twig', [
            'picture' => $picture,
            'form' => $form,
        ]);
    }

    #[Route('/digital', name: 'app_picture_digital', methods: ['GET'])]
    public function digital(PictureRepository $pictureRepository): Response
    {
        $pictures = $pictureRepository->findBy(['product' => 1]);

        return $this->render('picture/digital.html.twig', [
            'pictures' => $pictures,
        ]);
    }

    #[Route('/traditionelle', name: 'app_picture_show_traditionelle', methods: ['GET'])]
    public function traditionelle(PictureRepository $pictureRepository): Response
    {
        $pictures = $pictureRepository->findBy(['product' => 2]);

        return $this->render('picture/traditionelle.html.twig', [
            'pictures' => $pictures,
        ]);
    }

    #[Route('/graphisme', name: 'app_picture_show_graphisme', methods: ['GET'])]
    public function graphisme(PictureRepository $pictureRepository): Response
    {
        $pictures = $pictureRepository->findBy(['product' => 3]);

        return $this->render('picture/graphisme.html.twig', [
            'pictures' => $pictures,
        ]);
    }

    #[Route('/{id}', name: 'app_picture_show_id', methods: ['GET'])]
    public function show(Picture $picture): Response
    {
        return $this->render('picture/show.html.twig', [
            'picture' => $picture,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}/edit', name: 'app_picture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Picture $picture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PictureType::class, $picture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_picture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picture/edit.html.twig', [
            'picture' => $picture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_picture_delete', methods: ['POST'])]
    public function delete(Request $request, Picture $picture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$picture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($picture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_picture_index', [], Response::HTTP_SEE_OTHER);
    }
}
