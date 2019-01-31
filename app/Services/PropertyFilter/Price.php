<?php

namespace App\Services\PropertyFilter;

class Price {
    public static function filter($property, $filter)
    {
        if(!is_array($filter))
        {
            throw new \Exception('Invalid price filter');
        }
        return $property->where('price', $filter['condition'], $filter['value']);
    }
}