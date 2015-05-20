<?php
/**
 * Created by PhpStorm.
 * User: Grub
 * Date: 20/05/2015
 * Time: 21:35
 */

namespace BackOfficeBundle\Tests\Entity;

use BackOfficeBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class ProjetControllerTest  extends \PHPUnit_Framework_TestCase{
    protected $projet;

    public function setUp()
    {
        parent::setUp();

        $this->projet = new Projet();
    }

    public function testGetTitre()
    {
        $titre = 'Application de monitoring';

        $this->projet->setTitre($titre);

        $this->assertEquals($titre, $this->projet->getTitre());
    }
}

