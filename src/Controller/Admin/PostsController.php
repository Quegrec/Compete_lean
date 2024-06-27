<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\CreatePost;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostsController extends AbstractController
{
    #[Route('/actualites', name: 'posts_index')]
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

    #[Route('actualite/{slug}', name: 'post_show')]
    public function show($slug, PostRepository $postRepository): Response
    {
        $post = $postRepository->findOneBy([
            'slug' => $slug
        ]);

        // if(!$post){
        //     throw $this->createNotFoundException("Le produit n'existe pas");
        // }

        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/new-post' , name: 'admin_posts_new')]
    public function newpost(SluggerInterface $slugger, Request $request, EntityManagerInterface $entityManager): Response
    {  
		$post = new Post();
 
        $form = $this->createForm(CreatePost::class, $post);
        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $post->setSlug($slugger->slug($post->getTitle()));

                $pictureFile = $form->get('picture')->getData();

            if ($pictureFile instanceof UploadedFile) {
                $newFilename = $post->getSlug().'.'.$pictureFile->guessExtension();

                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception if something happens during file upload
                }

                $post->setPicture($newFilename);
            }
                            
                $entityManager->persist($post);
                $entityManager->flush();
            }
                
            return $this->render('admin/posts/new.html.twig', [
                'form' => $form->createView(),
            ]);
    }
}