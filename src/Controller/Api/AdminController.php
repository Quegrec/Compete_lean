<?php

namespace App\Controller\Api;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/admin')]
class AdminController extends AbstractController
{

    public function __construct(private EntityManagerInterface $em)
    {
    }

    #[Route('/create/initial', name: 'api_admin_create_initial', methods: ['POST'])]
    public function createInitialAdmin(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (empty($data['name']) || empty($data['password'])) {
            return $this->json([
                'status' => 'error',
                'message' => 'name and password are required'
            ], 400);
        }

        $user = new User();
        $user->setName($data['name']);
        $user->setPassword(
            password_hash($data['password'], PASSWORD_DEFAULT)
        );
        $user->setRoles(['ROLE_ADMIN']);

        $this->em->persist($user);
        $this->em->flush();

        return $this->json([
            'status' => 'success',
            'message' => 'Admin user created successfully'
        ]);
    }
}
