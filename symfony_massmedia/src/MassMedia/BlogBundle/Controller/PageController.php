<?php
// src/MassMedia/BlogBundle/Controller/PageController.php
namespace MassMedia\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Import new namespaces
use Symfony\Component\HttpFoundation\Request;
use MassMedia\BlogBundle\Entity\Enquiry;
use MassMedia\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction() {
        $em = $this->getDoctrine()
                   ->getManager();

        $categories = $em->getRepository('MassMediaBlogBundle:Category')
                    ->getLatestCategories();

        return $this->render('MassMediaBlogBundle:Page:index.html.twig', array(
            'categories' => $categories
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('MassMediaBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction(Request $request) {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST)) {
          $form->handleRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('MassMediaBlogBundle_contact'));
            }
        }

        return $this->render('MassMediaBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
