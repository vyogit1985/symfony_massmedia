<?php
// src/MassMedia/BlogBundle/Controller/CategoryController.php

namespace MassMedia\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MassMedia\BlogBundle\Entity\Category;
use MassMedia\BlogBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Blog controller.
 */
class CategoryController extends Controller {
    /**
     * Show a category entry
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('MassMediaBlogBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category of posts.');
        }
        
        $posts = $em->getRepository('MassMediaBlogBundle:Post')
                   ->getPostsForCategory($category->getId());

        return $this->render('MassMediaBlogBundle:Category:show.html.twig', array(
            'category' => $category,
            'posts' => $posts
        ));
    }
    
    /**/
    public function newAction() {
        $category = new Category();
        $form   = $this->createForm(CategoryType::class, $category);

        return $this->render('MassMediaBlogBundle:Category:form.html.twig', array(
            'category' => $category,
            'form'   => $form->createView()
        ));
    }

    public function createAction(Request $request) {
        $category = new Category();
        $form    = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('MassMediaBlogBundle_category_show', array(
                    'id' => $category->getId())) .
                '#category-' . $category->getId()
            );
        }

        return $this->render('MassMediaBlogBundle:Category:create.html.twig', array(
            'category' => $category,
            'form'    => $form->createView()
        ));
    }
    
    /**/
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine();
        $category = $em->getRepository('MassMediaBlogBundle:Category')->find($id);
        
        if (!$category) {
            throw $this->createNotFoundException('Unable to find category.');
        }
        
        $form = $this->createForm(CategoryType::class, $category);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($category);
            $em->flush();
            
            return $this->redirect($this->generateUrl('MassMediaBlogBundle_category_show', array(
                    'id' => $category->getId())) .
                '#category-' . $category->getId()
            );
        }
        
        return $this->render('MassMediaBlogBundle:Category:update.html.twig', array(
            'category' => $category,
            'form_update'    => $form->createView()
        ));
      
    }
}
