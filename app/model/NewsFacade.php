<?php

/**
 * @author Tomáš Kolinger
 */
class NewsFacade extends Square\Model\Facade
{
	/**
	 * @return NewsEntity
	 */
	public function create()
	{
		return parent::create();
	}

	/**
	 * @return NewsEntity[]
	 */
	public function findPublished()
	{
		$qb = $this->createQueryBuilder('e');

		$qb->where('e.publishDate < :publishDate')
			->setParameter('publishDate', new \DateTime);

		$query = $qb->getQuery();
		return $query->getResult();
	}
}
