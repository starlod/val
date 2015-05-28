<?php
namespace ValBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ValBundle\Entity\Register;

class LoadRegisterData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $entity = new Register();
        $entity->setName('相坂優歌');
        $entity->setSiteUrl('http://ameblo.jp/aiyu-nyan/');
        $entity->setFeedUrl('http://rssblog.ameba.jp/aiyu-nyan/rss20.xml');
        // $entity->setTwitter('');
        // $entity->setFirstName('');
        // $entity->setLastName('');

        $manager->persist($entity);
        $manager->flush();
    }
}