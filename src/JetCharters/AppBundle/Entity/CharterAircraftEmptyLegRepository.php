<?php

namespace JetCharters\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CharterAircraftEmptyLegRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CharterAircraftEmptyLegRepository extends EntityRepository
{
	public function findByOperator($id, Operator $operator) {
		$emptyleg = $this->findOneBy(array('id' => $id, 'operator' => $operator));
		return $emptyleg;
	}

	public function findAllByOperator(Operator $operator) {
        $query = $this->getEntityManager()
            ->createQuery('SELECT e, d, o
                            FROM JetCharters\AppBundle\Entity\CharterAircraftEmptyLeg e
                            LEFT JOIN e.origin o
                            LEFT JOIN e.destination d
                            LEFT JOIN e.operator op
                            WHERE op = :operator')
            ->setParameter('operator', $operator);

        return $query->getResult();
	}

    public function searchAllBy($search = array()) {

        $from_date = !isset($search['from_date']) ? new \DateTime("now") : new \DateTime($search['from_date']);
        $from_date->setTime(0, 0, 0);
        $to_date = !isset($search['to_date']) ? new \DateTime("+30 days") : new \DateTime($search['to_date']);
        $to_date->setTime(0, 0, 0);


        $query = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('l')
            ->from('JetCharters\AppBundle\Entity\CharterAircraftEmptyLeg', 'l')
            ->andWhere('l.fromDate >= :from_date')->setParameter('from_date', $from_date)
            ->andWhere('l.toDate <= :to_date')->setParameter('to_date', $to_date);

        return $query->getQuery()->getResult();
    }
}
