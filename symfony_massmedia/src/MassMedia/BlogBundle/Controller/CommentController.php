<?php
// src/MassMedia/BlogBundle/Controller/CommentController.php

namespace MassMedia\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MassMedia\BlogBundle\Entity\Comment;
use MassMedia\BlogBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 */
class CommentController extends Controller {
    public function newAction($post_id) {
        $post = $this->getPostId($post_id);

        $comment = new Comment();
        $comment->setPostId($post);
        $form   = $this->createForm(CommentType::class, $comment);

        return $this->render('MassMediaBlogBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    public function createAction(Request $request, $post_id) {
        $post = $this->getPostId($post_id);

        $comment  = new Comment();
        $comment->setPostId($post);
        $form    = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('MassMediaBlogBundle_post_show', array(
                    'id' => $comment->getPostId()->getId())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('MassMediaBlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getPostId($post_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $post = $em->getRepository('MassMediaBlogBundle:Post')->find($post_id);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find post.');
        }

        return $post;
    }

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine();
        $comment = $em->getRepository('MassMediaBlogBundle:Comment')->find($id);
        
        if (!$comment) {
            throw $this->createNotFoundException('Unable to find comment.');
        }
        
        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($comment);
            $em->flush();
            
            return $this->redirect($this->generateUrl('MassMediaBlogBundle_post_show', array(
                    'id' => $comment->getPostId()->getId())) .
                '#comment-' . $comment->getId()
            );
        }
        
        return $this->render('MassMediaBlogBundle:Comment:update.html.twig', array(
            'comment' => $comment,
            'form_update'    => $form->createView()
        ));
      
    }
}
