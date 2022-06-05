<?php

interface AbstractFactory {
    public function cheese();
    public function fishes();
}

class MealsFactory implements AbstractFactory{
    public function cheese(){
        return new chesseFactory();
    }
    public function fishes(){
        return new fishesFactory();
    }
}
class chesseFactory {
    public function usefulFunctionChesse(){
        echo "welcome cheeses";
    }
}
class fishesFactory {
    public function usefulFunctionFishes(){
        echo "welcome fishes";
    }
}
function clientCode($factory)
{
    $chess = $factory->cheese();
    $fishes = $factory->fishes();
    echo $chess->usefulFunctionChesse() . "\n";
    echo $fishes->usefulFunctionFishes() . "\n";
}

clientCode(new MealsFactory() );


?>
