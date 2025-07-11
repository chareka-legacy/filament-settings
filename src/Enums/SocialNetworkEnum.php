<?php

namespace Chareka\FilamentSettings\Enums;

use Chareka\FilamentSettings\Traits\WithOptions;

enum SocialNetworkEnum: string
{
    use WithOptions;

    case WHATSAPP = 'whatsapp';
    case FACEBOOK = 'facebook';
    case INSTAGRAM = 'instagram';
    case TWITTER = 'x_twitter';
    case YOUTUBE = 'youtube';
    case LINKEDIN = 'linkedin';
    case TIKTOK = 'tiktok';
    case PINTEREST = 'pinterest';
}
