<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Click;
use AppBundle\Entity\Stats;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ClickController extends Controller
{
    /**
     * @Route("/click", name="click")
     */

    public function indexAction(Request $request)
    {
        $linkId = $request->query->get('linkId');
         
        $link = $this->get('doctrine')->getEntityManager()->find('AppBundle:Link', $linkId);
        
        $this->getDoctrine()
              ->getRepository('AppBundle:Click')
              ->updateClick($link);
   
        
        $stats = $this->getDoctrine()
              ->getRepository('AppBundle:Stats')
              ->updateStats($link);
        
        if (!$stats) {
            return $this->render('error/index.html.twig', 
                    ['message'=>'Something went wrong please try again!'] 
            ); 
        }

        //The following generate image
        header("Content-Type: image/png");
        $im = @imagecreate(550, 70) or die("Cannot Initialize new GD image stream");

        $background_color = imagecolorallocate($im, 237, 239, 182);
        $text_color = imagecolorallocate($im, 165, 116, 69);
       
        imagestring($im, 20, 10, 1, $link->getDestination(), $text_color);
        imagestring($im, 20, 10, 20, 'This link has got ['. $stats->getImpressions() .'] Impressions', $text_color);
        imagestring($im, 20, 10, 40, 'This link has got ['. $stats->getClicks() . '] Clicks'  , $text_color);

        imagepng($im);
        imagedestroy($im); 
        
        exit;
    }
}
