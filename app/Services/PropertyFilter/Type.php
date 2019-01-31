<?php

namespace App\Services\PropertyFilter;

class Type {
    public static function filter($property, $filter)
    {
        return $property->where('type', $filter);
    }
}