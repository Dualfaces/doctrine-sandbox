<?php

use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity
 */
class TestEntity
{
	/**
	 * @orm\Id
	 * @orm\GeneratedValue
	 * @orm\Column(type="integer")
	 * @var int
	 */
	private $id;

	/**
	 * @orm\Column
	 * @var string
	 */
	private $test;
}
