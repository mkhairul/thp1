<?php

namespace App\Services;

use App\Property;
use DB;

class PropertyService {

    /**
     * Iterate through the filters, using the keys as the Filter class
     * @return collection
     */
    public function filter($filters)
    {
        DB::enableQueryLog();
        $property = new Property;

        foreach($filters as $key => $value)
        {
            try{            
                $class = '\\App\\Services\\PropertyFilter\\'. ucfirst($key);
                $property = $class::filter($property, $value);
            } catch (\Throwable $e) {
                throw new \Exception($key . ' filter does not exists' . $e->getMessage());
            }
        }

        return $property->get();
    }

}