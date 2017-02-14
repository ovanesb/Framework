<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Link;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LinkType;
use AppBundle\Form\LinkTypeEdit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller {
    
    /**
     *
     * @var array
     */
    private $data = [];

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {


        $links = $this->getDoctrine()
                ->getRepository('AppBundle:Link')
                ->getAll();

        $stats = $this->getDoctrine()
                ->getRepository('AppBundle:Stats')
                ->getAll();


        foreach ($stats as $row) {
            @$this->data[$row->getLink()->getId()]['clicks'] += $row->getClicks();
            @$this->data[$row->getLink()->getId()]['impressions'] = $row->getImpressions();
        }

        return $this->render('default/index.html.twig', [
                    'links' => $links,
                    'stats' => $this->data
        ]);
    }

    /**
     * @Route("/link/add", name="link.add")
     */
    public function linkAddAction(Request $request) {

        //Build the form
        $link = new Link();
        $form = $this->createForm(LinkType::class, $link);

        // It will handle only POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Get the data from the form
            $link = $form->getData();

            //Save the data
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            $this->addFlash('Success', 'Link added successfully');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('forms/link.html.twig',
                ['form' => $form->createView()]
        );

    }

    /**
     * @Route("/link/edit/{id}", name="link.edit")
     */
    public function linkEditAction(Request $request) {

        $linkId = $request->attributes->get('id');

        $editLink = $this->getDoctrine()
                ->getRepository('AppBundle:Link')
                ->getLinkById($linkId);

        $form = $this->createForm(LinkTypeEdit::class, new Link());

        // It will handle only POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $editLink = $this->getDoctrine()
                    ->getRepository('AppBundle:Link')
                    ->updateLinkData($form);
  
            $this->addFlash('Success', 'Link Updated Successfully');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('forms/edit.html.twig', 
                ['form' => $form->createView(), 'link' => $editLink]
        );
    }

    /**
     * 
     * @Route("/impression")
     */
    public function impressionAction(Request $request) {

        $linkId = $request->query->get('linkId');

        $statsId = $this->getDoctrine()
                ->getRepository('AppBundle:Link')
                ->addImpression($linkId);

        if (!$statsId) {
            return $this->render('error/index.html.twig', 
                    ['message'=>'We were not able to find the linkId you have provided!'] 
            ); 
        }
  
        $this->getDoctrine()
                ->getRepository('AppBundle:Stats')
                ->updateImpression($statsId[0]['id']);

        $this->addFlash('Success', 'Impression has been increased successfully');

        return $this->redirectToRoute('homepage');
    }
    
}
