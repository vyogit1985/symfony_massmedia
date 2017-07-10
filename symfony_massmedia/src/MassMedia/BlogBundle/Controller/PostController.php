<?php
// src/MassMedia/BlogBundle/Controller/PostController.php

namespace MassMedia\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MassMedia\BlogBundle\Entity\Post;
use MassMedia\BlogBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 */
class PostController extends Controller {
    public function newAction($category_id) {
        $category = $this->getCategoryId($category_id);

        $post = new Post();
        $post->setCategoryId($category);
        $form   = $this->createForm(PostType::class, $post);

        return $this->render('MassMediaBlogBundle:Post:form.html.twig', array(
            'post' => $post,
            'form'   => $form->createView()
        ));
    }

    public function createAction(Request $request, $category_id) {
        $category = $this->getCategoryId($category_id);

        $post = new Post();
        $post->setCategoryId($category);
        $form    = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($post);
            $em->flush();
            
            return $this->redirect($this->generateUrl('MassMediaBlogBundle_category_show', array(
                    'id' => $post->getCategoryId()->getId())) .
                '#post-' . $post->getId()
            );
        }

        return $this->render('MassMediaBlogBundle:Post:create.html.twig', array(
            'post' => $post,
            'form'    => $form->createView()
        ));
    }

    protected function getCategoryId($category_id) {
        $em = $this->getDoctrine()
            ->getManager();

        $category = $em->getRepository('MassMediaBlogBundle:Category')->find($category_id);

        if (!$category) {
            throw $this->createNotFoundException('Не можу знайти категорію.');
        }

        return $category;
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('MassMediaBlogBundle:Post')->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find post.');
        }
        
        $comments = $em->getRepository('MassMediaBlogBundle:Comment')
                 ->getCommentsForPost($post->getId());

        return $this->render('MassMediaBlogBundle:Post:show.html.twig', array(
            'post'      => $post,
            'comments' => $comments
        ));
    }
    
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $comments = $em->getRepository('MassMediaBlogBundle:Comment')
                    ->getLatestBlogs();

        return $this->render('MassMediaBlogBundle:Post:show.html.twig', array(
            'comments' => $comments
        ));
    }
    
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine();
        $post = $em->getRepository('MassMediaBlogBundle:Post')->find($id);
        
        if (!$post) {
            throw $this->createNotFoundException('Unable to find post.');
        }
        
        $form = $this->createForm(PostType::class, $post);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($post);
            $em->flush();
            
            return $this->redirect($this->generateUrl('MassMediaBlogBundle_category_show', array(
                    'id' => $post->getCategoryId()->getId())) .
                '#post-' . $post->getId()
            );
        }
        
        return $this->render('MassMediaBlogBundle:Post:update.html.twig', array(
            'post' => $post,
            'form_update'    => $form->createView()
        ));
      
    }
}
