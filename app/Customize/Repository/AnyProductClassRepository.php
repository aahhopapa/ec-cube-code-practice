<?php

namespace Customize\Repository;

use Customize\Entity\AnyProductClass;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * AnyProductClassRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnyProductClassRepository extends AbstractRepository
{

    public function __construct(
        RegistryInterface $registry
    ) {
        parent::__construct($registry, AnyProductClass::class);
    }

}