<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(LoggerInterface $logger): Response
    {

        $logger->error('Test-Log aus Controller', [
            'time' => new \DateTimeImmutable()->format(DATE_ATOM),
        ]);


        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
