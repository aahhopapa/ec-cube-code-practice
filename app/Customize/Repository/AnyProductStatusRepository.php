<?php

namespace Customize\Repository;

use Customize\Entity\AnyProductStatus;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * AnyProductStatusRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnyProductStatusRepository extends AbstractRepository
{

    public function __construct(
        RegistryInterface $registry
    ) {
        parent::__construct($registry, AnyProductStatus::class);
    }

}