<?php
namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

abstract class BaseFixture extends Fixture {
	private $manager;

	abstract protected function loadData(ObjectManager $em);

	public function load(ObjectManager $manager) {
		$this->manager = $manager;

		$this->loadData($manager);
	}
}