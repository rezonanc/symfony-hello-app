<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Person;

class PersonController extends AbstractController
{
    /**
     * @Route("/person/{id}", name="person_show")
     */
    public function show(Person $person)
    {
        $firstName = $person->getFirstName();
        $lastName = $person->getLastName();

        return new Response(
            "<html><body>{$firstName} {$lastName}</body></html>"
        );
    }

    /**
     * @Route("/person/{id}", name="person_remove")
     */
    public function remove(Person $person)
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Once the test is fixed, proceed further by uncommenting the following ->
        // $entityManager->remove($person);
        // $entityManager->flush();
        $firstName = $person->getFirstName();
        $lastName = $person->getLastName();

        return new Response(
            "<html><body>{$firstName} {$lastName} removed</body></html>"
        );
    }
}
