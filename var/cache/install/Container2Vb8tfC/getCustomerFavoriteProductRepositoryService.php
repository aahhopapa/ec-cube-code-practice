<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\CustomerFavoriteProductRepository' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CustomerFavoriteProductRepository.php';

return $this->privates['Eccube\\Repository\\CustomerFavoriteProductRepository'] = new \Eccube\Repository\CustomerFavoriteProductRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
