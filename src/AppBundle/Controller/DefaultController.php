<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Address;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Dealer;
use AppBundle\Entity\Lead;
use AppBundle\Entity\ProcessContainer;
use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em        = $this->getDoctrine()->getEntityManager();
        $container = $em->getRepository(ProcessContainer::class)->find(1);
        if (false === isset($container)) {
            $container = $this->createTestData($em);
        }

        die('Dump----> <pre>' . print_r(Debug::dump($container), true) . '</pre><---- DumpEnd');
    }

    /**
     * @param EntityManager $em
     *
     * @return ProcessContainer
     */
    protected function createTestData(EntityManager $em)
    {
        $customerAddress = (new Address())->setCity('Leipzig')
            ->setStreet('TestStraße')
            ->setStreetNumber(42)
            ->setZipCode(04155);
        $customer        = (new Customer())->setName('Bernd Stromberg')
            ->addAddress($customerAddress);

        $dealerAddress = (new Address())->setCity('Berlin')
            ->setStreet('Blafasel')
            ->setStreetNumber(323)
            ->setZipCode(33322);
        $dealer        = (new Dealer())->setName('Dealer deines Vertrauens')
            ->addAddress($dealerAddress);
        $lead          = (new Lead())->setCreateDate(new \DateTime())
            ->setMonthlyRate(123.3)
            ->setWithDelivery(true);

        $container = (new ProcessContainer())->addObject($customer)
            ->addObject($dealer)
            ->addObject($lead);
        $em->persist($container);
        $em->flush();

        return $container;
    }
}
