<?php

use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity
 *
 * @author Tomáš Kolinger
 *
 * @property string $name
 * @property-read string $slug
 */
class CategoryEntity extends Square\Model\Entity
{
	/**
	 * @orm\Column
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @orm\Column(unique=true)
	 *
	 * @var string
	 */
	private $slug;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string
	 */
	public function setName($name)
	{
		$this->name = self::normalizeString($name);
		$this->slug = \Nette\Utils\Strings::webalize($name);
	}

	/**
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}
}
