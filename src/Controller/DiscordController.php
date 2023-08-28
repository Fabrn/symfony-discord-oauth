<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route("/auth/discord", name: "auth_discord_")]
final class DiscordController
{
    #[Route("/login", name: "login")]
    public function login(Request $request, ClientRegistry $clientRegistry)
    {
    }

    #[Route("/start", name: "start")]
    public function start(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient("discord")->redirect(["identify"]);
    }
}