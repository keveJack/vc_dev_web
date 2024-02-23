<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class MonstreTest extends TestCase
{
       /**
     * TESTS UNITAIRE POUR LA SEANCE 3
     */
    public function testNotNull(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertNotNull($monstre);
    }
    public function testDefaultValues(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertNotNull($monstre);
        $this->assertEquals(1,$monstre->calculerDefense());
        $this->assertEquals(1,$monstre->calculerAttaque());
    }
    public function testAttributesAttaque(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('_attaque', $monstre);
    }
    
    public function testAttributesDefense(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('_defense', $monstre);
    }
    
    public function testAttributesPV(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertObjectHasProperty('_pv', $monstre);
    }

    public function testAttributesAttaqueIsInt(): void
    {
        $monstre = new filrouge\Monstre(5,3,3);

        $this->assertIsInt($monstre->getAttaque());
    }
    public function testAttributesDefenseIsInt(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertIsInt($monstre->getDefense());
    }
    public function testAttributesPVIsInt(): void
    {
        $monstre = new filrouge\Monstre();
        $this->assertIsInt($monstre->getPv());
    }
    public function testCalculDefense():void
    {
        $monstre = new filrouge\Monstre(5,3,3);

        $this->assertEquals(9,$monstre->calculerDefense());
    }
    public function testCalculAttaque():void
    {
        $monstre = new filrouge\Monstre(5,3,3);
        $this->assertEquals(15,$monstre->calculerAttaque());
    }
}