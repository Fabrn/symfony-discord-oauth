<?php

namespace App\Controller;

use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class SecurityController
{
    #[Route('/logout', name: 'app_logout')]
    public function logout()
    {
        throw new \Exception('Logging out');
    }
}