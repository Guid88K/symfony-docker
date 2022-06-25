<?php

namespace App\Controller;

use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
	#[Route('/project', name: 'app_project', methods: 'GET')]
	public function index(): JsonResponse
	{
		$data[] = [
			'id' => 'test',
			'name' => 'test',
		];

		return $this->json($data);
	}
}
