<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BooksController extends AbstractController
{
    #[Route('/', name: 'book_list', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('List all books');
    }

    #[Route('/{slug}', name: 'book_show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        return new Response('Showing book ' . $id . '!');
    }
}
