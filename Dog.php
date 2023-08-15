<?php

class Dog
{
    public function sound()
    {
        return "Загальні звуки";
    }

    public function hunt()
    {
        return "Собака на полюванні";
    }
}

class ShibaInu extends Dog
{
    public function sound()
    {
        return "Гав";
    }
}

class Pug extends Dog
{
    public function sound()
    {
        return "Гав Гав";
    }

    public function hunt()
    {
        return "Мопсу льні полювати";
    }
}

class Dachshund extends Dog
{
    public function sound()
    {
        return "Гав";
    }
}

class PlushLabrador extends Dog
{
    public function hunt()
    {
        return "Лабрадор на полюванні";
    }
}

class RubberDachshund extends Dog
{
    public function sound()
    {
        return "Пііі";
    }

    public function hunt()
    {
        return "Такса не полює";
    }
}
