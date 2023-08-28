<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class DiscordController
{
    #[Route("/auth/discord/start", name: "auth_discord_start")]
    public function start(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient("discord")->redirect(["identify"]);
    }

    #[Route("/auth/discord/login", name: "auth_discord_login")]
    public function login(Request $request, ClientRegistry $clientRegistry)
    {
    }
}