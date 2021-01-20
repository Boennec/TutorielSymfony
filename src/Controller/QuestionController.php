<?php
//the class created in the src directory need a namespace "App\"
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
/**
 * @Route("/")
 */
 public function homepage() {

        return new Response('What a nice controller we have here');
    }

/**
 * @Route("/questions/{slug}")
 */
    public function show($slug) {

        $answers = ['red', 'blue', 'white', 'orange'];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-',' ', $slug)),
            'answers'  => $answers,

        ]);

        return new Response(sprintf(
            'future page to show a question "%s"!',
            $slug
        ));
    }
}