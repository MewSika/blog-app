<?php
namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class CustomExtensions extends AbstractExtension {
        
    /**
     * Ajout de fonctions personnalisées Twig
     *
     * @return void
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('activeClass', [$this, 'activeClass'], ['needs_context' => true]),
            new TwigFunction('currentPage', [$this, 'currentPage'], ['needs_context' => true])
        ];
    }
    
    /**
     * Renvoie la page active
     *
     * @param  Twig $context
     * @param  string $page
     * @return string 
     */
    public function activeClass(array $context, $page)
    {
        if(isset($context['current_page']) && $context['current_page'] === $page) {
            return ' active ';
        }
    }
    
    /**
     * Retourne la page courante pour référecement
     *
     * @param  Twig $context
     * @return string
     */
    public function currentPage(array $context)
    {
        if(preg_match("/\?p=\d+$/", $context['current_page'])){
            return preg_replace('/\?p=\d+$/', '', $context['current_page']);
        } elseif (preg_match("/\?q=/", $context['current_page'])) {
            return null;
        }
        return $context['current_page'];
    }
}