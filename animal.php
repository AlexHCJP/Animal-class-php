<?php

trait CanEat{
    function eat(){

    }
}
trait CanMove{
    function move(){

    }
}
trait CanCrawl{
    function crawl(){

    }
}
trait CanFly
{
    function fly(){

    }
}
trait HasBetterEyes{
    function zoom(){

    }
}
trait CanHunt{
    function hunt(){

    }
}
trait CanSwim{
    function swim(){

    }
}
trait CanMakeWeb{
    function makeWeb()
    {

    }
}
trait CanMeow{
    function meow(){}
}

interface BirdKind{
    function fly();
    function move();
}
interface PredatorKind{
    function hunt();
}
interface FishKind{
    function swim();
}
interface ArthropodsKind{
    function move();
}
interface SpiderKind extends ArthropodsKind {
    function makeWeb();
    function hunt();
}
interface CatKind{
    function hunt();
    function meow();
}

abstract class Animal {
    use CanEat;
    public $name;
}
abstract class AnimalCrawl extends Animal{
    use CanCrawl;
}
abstract class AnimalMove extends Animal{
    use CanMove;
}
abstract class AnimalFloating extends Animal {
    use CanSwim;
}


class Eagle extends AnimalMove implements BirdKind, PredatorKind {
    use CanFly, HasBetterEyes, CanHunt;
}
class Python extends AnimalCrawl implements PredatorKind{
    use CanHunt;
}
class Shark extends AnimalFloating implements PredatorKind, FishKind {
    use CanHunt;
}
class Spider extends AnimalMove implements SpiderKind{
    use CanMakeWeb, CanHunt;
}
class Cat extends AnimalMove implements CatKind{
    use CanHunt, CanMeow;
}

$shark = new Shark();