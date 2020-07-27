<?php


namespace App\Traits;


use App\User;
use DeepCopy\TypeFilter\Spl\SplDoublyLinkedListFilter;
use SplDoublyLinkedList;

class Authentication
{


    public function ability($ability)
    {
        $list = new SplDoublyLinkedList();
        $data = [1,2,3,4,5];
        foreach ($data as $datum)
            $list -> push($datum);
    }
}
