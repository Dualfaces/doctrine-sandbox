<?php

use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity
 *
 * @author Tomáš Kolinger
 *
 * @property CategoryEntity $category
 * @property string $name
 * @property-read string $slug
 * @property-read DateTime $createDate
 * @property DateTime $publishDate
 * @property string $content
 */
class NewsEntity extends Square\Model\Entity
{
	/**
	 * @orm\ManyToOne(targetEntity="CategoryEntity", fetch="EAGER")
	 *
	 * @var CategoryEntity
	 */
	private $category;

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
	 * @orm\Column(type="datetime")
	 *
	 * @var DateTime
	 */
	private $createDate;

	/**
	 * @orm\Column(type="datetime")
	 *
	 * @var DateTime
	 */
	private $publishDate;

	/**
	 * @orm\Column(type="text")
	 *
	 * @var string
	 */
	private $content;

	/************************ initialization ************************/

	public function __construct()
	{
		$this->createDate = new \DateTime;
	}

	/************************ getters & setters ************************/

	/**
	 * @return CategoryEntity
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param CategoryEntity
	 */
	public function setCategory(CategoryEntity $category)
	{
		$this->category = $category;
	}

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

	/**
	 * @return DateTime
	 */
	public function getCreateDate()
	{
		return $this->createDate;
	}

	/**
	 * @return DateTime
	 */
	public function getPublishDate()
	{
		return $this->publishDate;
	}

	/**
	 * @param DateTime
	 */
	public function setPublishDate(DateTime $publishDate)
	{
		$this->publishDate = $publishDate;
	}

	/**
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param string
	 */
	public function setContent($content)
	{
		$this->content = self::normalizeString($content);
	}
}
