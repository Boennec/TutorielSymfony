<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;//class created for JSON responses
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController {



/**
 * @Route("/comment/{id}/vote/{direction}")
 */
public function commentVote($id, $direction){

//toto use id to query database

    if($direction === 'up') {
        $currentVoteCount = rand(7,100);
    } else {
        $currentVoteCount = rand(0,5);
    }

    return $this->Json (['votes' => $currentVoteCount]);
}


}
