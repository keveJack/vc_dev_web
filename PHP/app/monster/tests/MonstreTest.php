<?php declare(strict_types=1);
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

require_once 'filrouge/monstre.php';

final class MonstreTest extends TestCase
{
    /**
     * TESTS UNITAIRE POUR LA SEANCE 2
     */
    public function testNotNull(): void
    {
        $monstre = new Monstre();
        $this->assertNotNull($monstre);
    }
    public function testAttributesAttaque(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('attaque', $monstre);
    }
    
    public function testAttributesDefense(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('defense', $monstre);
    }
    
    public function testAttributesPV(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('pv', $monstre);
    }

    public function testAttributesAttaqueIsInt(): void
    {
        $monstre = new filrouge\Monstre();
        $monstre->attaque = 5;
        $this->assertIsInt($monstre->attaque);
    }
    public function testAttributesDefenseIsInt(): void
    {
        $monstre = new filrouge\Monstre();
        $monstre->defense=3;
        $this->assertIsInt($monstre->defense);
    }
    public function testAttributesPVIsInt(): void
    {
        $monstre = new filrouge\Monstre();
        $monstre->pv=3;
        $this->assertIsInt($monstre->pv);
    }
    public function testCalculDefense():void
    {
        $monstre = new filrouge\Monstre();
        $monstre->attaque = 5;
        $monstre->defense=3;
        $monstre->pv=3;
        $this->assertEquals(9,$monstre->calculerDefense());
    }
    public function testCalculAttaque():void
    {
        $monstre = new filrouge\Monstre();
        $monstre->attaque = 5;
        $monstre->defense=3;
        $monstre->pv=3;
        $this->assertEquals(15,$monstre->calculerAttaque());
    }
   
}