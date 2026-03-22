<?php

namespace BrainGames\Cli;

use function cli\{line, prompt};

function hello(): void  // меняем null на void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}