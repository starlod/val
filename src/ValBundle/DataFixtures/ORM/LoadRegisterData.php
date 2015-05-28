namespace ValBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use ValBundle\Entity\Register;

class LoadRegisterData implements FixtureInterface
{
    public function load($manager)
    {
        $entity = new Register();
        $entity->setEmail('admin');
        $entity->setPassword('test');
        $entity->setSalt('hoge');

        $manager->persist($entity);
        $manager->flush();
    }
}