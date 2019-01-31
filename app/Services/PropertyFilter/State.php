<?php

namespace App\Services\PropertyFilter;

class State {
    public static function filter($property, $filter)
    {
        return $property->where('state', $filter);
    }
}