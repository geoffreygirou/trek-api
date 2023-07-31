<?php

namespace App\Story;

use App\Factory\TrekFactory;
use Zenstruck\Foundry\Story;

final class DefaultTrekStory extends Story
{
    public function build(): void
    {
        TrekFactory::createMany(10);
    }
}
