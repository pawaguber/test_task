<?php

require_once 'Dog.php';

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testShibaInuSound()
    {
        $shibaInu = new ShibaInu();
        $this->assertEquals("Гав", $shibaInu->sound());
    }

    public function testPugSound()
    {
        $pug = new Pug();
        $this->assertEquals("Гав Гав", $pug->sound());
    }

    public function testDachshundSound()
    {
        $dachshund = new Dachshund();
        $this->assertEquals("Гав", $dachshund->sound());
    }

    public function testPlushLabradorHunt()
    {
        $plushLabrador = new PlushLabrador();
        $this->assertEquals("Лабрадор на полюванні", $plushLabrador->hunt());
    }

    public function testRubberDachshundSound()
    {
        $rubberDachshund = new RubberDachshund();
        $this->assertEquals("Пііі", $rubberDachshund->sound());
    }

    public function testPugHunt()
    {
        $pug = new Pug();
        $this->assertEquals("Мопсу льні полювати", $pug->hunt());
    }

    public function testRubberDachshundHunt()
    {
        $rubberDachshund = new RubberDachshund();
        $this->assertEquals("Такса не полює", $rubberDachshund->hunt());
    }
}
