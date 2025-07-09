<?php

namespace Chareka\FilamentSettings\Enums;

use Chareka\FilamentSettings\Traits\WithOptions;

enum TypeFieldEnum: string
{
    use WithOptions;

    case Text = 'text';
    case Boolean = 'boolean';
    case Select = 'select';
    case Textarea = 'textarea';
    case Datetime = 'datetime';
    case Password = 'password';
    case Url = 'url';
}
