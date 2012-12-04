<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';

		$repository = $this->context->doctrine->entityManager->getRepository('TestEntity');
		dump($repository->findAll());
	}

}
