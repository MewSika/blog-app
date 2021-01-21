<?php
namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class CustomExtensions extends AbstractExtension {
    
    public function getFunctions()
    {
        return [
            new TwigFunction('activeClass', [$this, 'activeClass'], ['needs_context' => true])
        ];
    }

    public function activeClass(array $context, $page)
    {
        if(isset($context['current_page']) && $context['current_page'] === $page) {
            return ' active ';
        }
    }
}