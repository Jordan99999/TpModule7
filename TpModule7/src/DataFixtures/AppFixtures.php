<?php

namespace App\DataFixtures;

use App\Entity\Vehicule;
use App\Entity\UserAdmin;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher; 
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $admin = new UserAdmin();
        $admin->setPseudo('Administrateur')
            ->SetEmail('admin@jeanbonot.fr')
            ->setRoles(['ROLE_USER']);

            $hashPassword = $this->hasher->hashPassword(
                $admin, 'password'
            );
            
            $admin->setPassword($hashPassword);

        $manager->persist($admin);

        for ($i = 1; $i < 31; $i++) {
            $vehicule = new Vehicule();
            $vehicule->setNom('citroen')
                ->setModele('ds4')
                ->setDescription('Description')
                ->setDateCreation(new \DateTimeImmutable('2023-01-01'))
                ->setImage('https://images.unsplash.com/photo-1611566026373-c6c8da0ea861?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
                ->setEnVente('1');
            $manager->persist($vehicule);
        }
        $manager->flush();

    }



    
}
