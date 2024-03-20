<?php

namespace App\Controller;

use App\Entity\Software;
use App\Repository\SoftwareRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoftwareController
{
    private SoftwareRepository $repository;

    public function __construct(SoftwareRepository $repository)
    {
        $this->repository = $repository;
    }

    #[Route('/software', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $softwares = $this->repository->findAll();
        return new JsonResponse($softwares);
    }

    #[Route('/software/{id}', methods: ['GET'])]
    public function show(Software $software): JsonResponse
    {
        return new JsonResponse($software);
    }

    #[Route('/software', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $software = new Software();
        $software->setProductName($request->get('productName'));
        $software->setVendor($request->get('vendor'));

        $this->repository->save($software);

        return new JsonResponse($software, Response::HTTP_CREATED);
    }

    #[Route('/software/{id}', methods: ['PUT'])]
    public function update(Software $software, Request $request): JsonResponse
    {
        $software->setProductName($request->get('productName'));
        $software->setVendor($request->get('vendor'));

        $this->repository->save($software);

        return new JsonResponse($software, Response::HTTP_OK);
    }

    #[Route('/software/{id}', methods: ['DELETE'])]
    public function delete(Software $software): JsonResponse
    {
        $this->repository->remove($software);
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}