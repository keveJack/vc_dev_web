<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use aventures\Personnage;

require_once './src/Personnage.php';

final class PersonnageTest extends TestCase
{
    /**
     * TESTS UNITAIRES POUR LA CLASSE PERSONNAGE
     */

    public function testNotNull(): void
    {
        $personnage = new Personnage();
        $this->assertNotNull($personnage);
    }

    public function testPrivatePrenom(): void
    {
        $personnage = new Personnage();
        $reflector = new ReflectionClass($personnage);
        $this->assertNotEmpty($reflector->getProperty('_prenom'));
    }

    public function testPrivateForceAttaque(): void
    {
        $personnage = new Personnage();
        $reflector = new ReflectionClass($personnage);
        $this->assertNotEmpty($reflector->getProperty('_forceAttaque'));
    }

    public function testPrivatePointDeVies(): void
    {
        $personnage = new Personnage();
        $reflector = new ReflectionClass($personnage);
        $this->assertNotEmpty($reflector->getProperty('_pointsDeVie'));
    }

    public function testGetPrenomTest1(): void
    {
        $personnage = new Personnage();
        $this->assertEquals("", $personnage->getPrenom());
    }

    public function testGetPrenomTest2(): void
    {
        $personnage = new Personnage('Bilbo', 5, 10);
        $this->assertEquals("Bilbo", $personnage->getPrenom());
    }

    public function testGetForceAttaque(): void
    {
        $personnage = new Personnage('Bilbo', 5, 10);
        $this->assertEquals(5, $personnage->getForceAttaque());
    }

    public function testGetPointsDeVie(): void
    {
        $personnage = new Personnage('Bilbo', 5, 10);
        $this->assertEquals(10, $personnage->getPointsDeVie());
    }

    public function testSetPrenom(): void
    {
        $personnage = new Personnage();
        $personnage->setPrenom("");
        $this->assertEquals("", $personnage->getPrenom());
    }

    public function testSetForceAttaque(): void
    {
        $personnage = new Personnage();
        $personnage->setForceAttaque(0);
        $this->assertEquals(0, $personnage->getForceAttaque());
    }

    public function testSetPointsDeVie(): void
    {
        $personnage = new Personnage();
        $personnage->setPointsDeVie(0);
        $this->assertEquals(0, $personnage->getPointsDeVie());
    }

    public function testSetPrenomWithXSS(): void
    {
        $personnage = new Personnage();
        $personnage->setPrenom("<script>alert('XSS')</script>");
        $this->assertEquals("&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;", $personnage->getPrenom());
    }

    public function testSetPointsDeVieWithNegativeValue(): void
    {
        $personnage = new Personnage();
        $personnage->setPointsDeVie(-10);
        $this->assertEquals(-1, $personnage->getPointsDeVie());
    }

    public function testSetPointsDeVieWithPositiveValue(): void
    {
        $personnage = new Personnage();
        $personnage->setPointsDeVie(100);
        $this->assertEquals(100, $personnage->getPointsDeVie());
    }

    public function testSetForceAttaqueWithNegativeValue(): void
    {
        $personnage = new Personnage();
        $personnage->setForceAttaque(-5);
        $this->assertEquals(0, $personnage->getForceAttaque());
    }

    public function testSetForceAttaqueWithPositiveValue(): void
    {
        $personnage = new Personnage();
        $personnage->setForceAttaque(20);
        $this->assertEquals(20, $personnage->getForceAttaque());
    }
}
