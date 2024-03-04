<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TodolistRepository;

class TodolistController extends AbstractController
{
    /**
     * @Route("/todolist", name="todolist_index")
     */
    public function index(TodolistRepository $todolistRepository)
    {
        $todoLists = $todolistRepository->findAll();

        return $this->render('index.html.twig', [
            'todo_lists' => $todoLists,
        ]);
    }
}