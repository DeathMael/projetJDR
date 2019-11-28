<?php

namespace App\Repository;

use App\Entity\Apropos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Apropos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apropos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apropos[]    findAll()
 * @method Apropos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AproposRepository extends ServiceEntityRepository {
	public function __construct(ManagerRegistry $registry) {
		parent::__construct($registry, Apropos::class);
	}

	// /**
	//  * @return Apropos[] Returns an array of Apropos objects
	//  */
	/*
	    public function findByExampleField($value)
	    {
	        return $this->createQueryBuilder('e')
	            ->andWhere('e.exampleField = :val')
	            ->setParameter('val', $value)
	            ->orderBy('e.id', 'ASC')
	            ->setMaxResults(10)
	            ->getQuery()
	            ->getResult()
	        ;
	    }
*/

	/*
		    public function findOneBySomeField($value): ?Apropos
		    {
		        return $this->createQueryBuilder('e')
		            ->andWhere('e.exampleField = :val')
		            ->setParameter('val', $value)
		            ->getQuery()
		            ->getOneOrNullResult()
		        ;
		    }
	*/
}