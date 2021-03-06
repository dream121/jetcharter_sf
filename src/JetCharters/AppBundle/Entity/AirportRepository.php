<?php

namespace JetCharters\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * AirportRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AirportRepository extends EntityRepository
{
    public function searchAirports($search)
    {

        if ($search != '') {
            return $this->_em->createQuery("SELECT a FROM JetChartersAppBundle:Airport a WHERE a.name LIKE :name OR a.icaoCode LIKE :icaoCode ")
                ->setParameter('name', '%' . $search . '%')
                ->setParameter('icaoCode', '%' . $search . '%')
                ->setMaxResults(10)
                ->getResult();
        }

    }

    public function findAirportByName($name)
    {

        if ($name != null) {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('a')
                ->from('JetChartersAppBundle:Airport', 'a')
                ->where('a.name = :name')->setParameter('name', $name);

            return $tags = $qb->getQuery()->getSingleResult();
        }
    }

    public function findAllAirportsByState()
    {
        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('a.id, a.state, COUNT(a.id) as countAirports')
            ->from('JetChartersAppBundle:Airport', 'a')
            ->where('a.countryCode = :country')->setParameter('country', 'US')
            ->andWhere('a.state !=\'\' ')
            ->andWhere('a.maxRunway > 0')
            ->groupBy('a.state')
            ->orderBy('a.state');
        return $qb->getQuery()->getResult();
    }

    public function findAllAirportsByCountry()
    {

        //"select full, count(*) from airports left join countries on (abbreviation = country_code) where country_code != 'US' group by country_code order by full";

        // Equivalent DQL query: "select u from User u where u.name=?1"
        // User owns no associations.
        /*$rsm = new ResultSetMapping;
        $rsm->addEntityResult('JetChartersAppBundle:Airport', 'a');
        $rsm->addFieldResult('a', 'id', 'id');
        $rsm->addFieldResult('a', 'COUNT(*)', 'airportCount');
        $rsm->addJoinedEntityResult('JetChartersAppBundle:Country' , 'c', 'a', 'airports');

        $query = $this->_em->createNativeQuery('select a.id, b.full, count(*) as airportCount from airports a inner join countries b on (b.abbreviation = a.country_code) where a.country_code != \'US\' group by a.country_code order by b.full', $rsm);
        $query->setParameter(1, 'romanb');

        $users = $query->getResult();*/

        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('a.countryCode, c.full, count(a.id) as airportCount')
            ->from('JetChartersAppBundle:Airport', 'a')
            ->join('JetChartersAppBundle:Country', 'c')
            ->where('a.countryCode != :country')->setParameter('country', 'US')
            ->andWhere('a.countryCode = c.abbreviation')
            ->andWhere('a.maxRunway > 0')
            ->groupBy('a.countryCode')
            ->orderBy('c.full');

        return $qb->getQuery()->getResult();
    }

    public function findAirportByLocation($location)
    {

        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('a')
            ->from('JetChartersAppBundle:Airport', 'a')
            ->join('JetChartersAppBundle:Country', 'c')
            ->where('(c.full = :full OR a.state = :state)')
            ->setParameter('full', $location)
            ->setParameter('state', $location)
            ->andWhere('a.countryCode = c.abbreviation')
            ->andWhere('a.maxRunway > 0')
            ->orderBy('c.full, a.city, a.name');

        return $qb->getQuery()->getResult();
    }

    public function findCityByAirportCode($city_airport_code)
    {
        return $city = $this->getEntityManager()->createQueryBuilder()
            ->select('a.city')
            ->from('JetChartersAppBundle:Airport', 'a')
            ->where('a.icaoCode = :icao_code')->setParameter('icao_code', $city_airport_code)
            ->orWhere('a.lfiCode = :lfi_code')->setParameter('lfi_code', $city_airport_code)
            ->orWhere('a.iataCode = :iata_code')->setParameter('iata_code', $city_airport_code)
            ->orWhere('a.faaCode = :faa_code')->setParameter('faa_code', $city_airport_code)
            ->getQuery()->execute();
    }

    
    public function findNearestAirports($lat, $lang, $airportId)
    {
    
		if ($lat!='' && $lang!='' &&  $airportId>0) {
			$sql = 
			"SELECT *, ( 3959 * acos( cos( radians(".$lat.") ) * cos( radians( n_latitude ) ) * 
			cos( radians( n_longitude ) - radians(".$lang.") ) + sin( radians(".$lat.") ) * 
			sin( radians( n_latitude ) ) ) ) AS distance 
			FROM airports 
			WHERE id!='".$airportId."'
			HAVING distance <= 100 
			ORDER BY distance 
			LIMIT 0 , 40"
			;
			
			$stmt = $this->getEntityManager()->getConnection()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
    }

}
