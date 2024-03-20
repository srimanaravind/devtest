<?php
namespace App\Controller;

use App\Entity\Vendor;
use App\Repository\VendorRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VendorController
{
    private VendorRepository $repository;

    public function __construct(VendorRepository $repository)
    {
        $this->repository = $repository;
    }

    #[Route('/vendor', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $vendors = $this->repository->findAll();
        return new JsonResponse($vendors);
    }

    #[Route('/vendor/{id}', methods: ['GET'])]
    public function show(Vendor $vendor): JsonResponse
    {
        return new JsonResponse($vendor);
    }

    #[Route('/vendor', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $vendor = new Vendor();
        $vendor->setVendorName($request->get('vendorName'));

        $this->repository->save($vendor);

        return new JsonResponse($vendor, Response::HTTP_CREATED);
    }

    #[Route('/vendor/{id}', methods: ['PUT'])]
    public function update(Vendor $vendor, Request $request): JsonResponse
    {
        $vendor->setVendorName($request->get('vendorName'));

        $this->repository->save($vendor);

        return new JsonResponse($vendor, Response::HTTP_OK);
    }

    #[Route('/vendor/{id}', methods: ['DELETE'])]
    public function delete(Vendor $vendor): JsonResponse
    {
        $this->repository->remove($vendor);
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}