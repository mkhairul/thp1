<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Services\PropertyService;

class PropertyController extends Controller
{
    public function listAll() {
        return response()->json(Property::all());
    }

    public function filter(Request $request) {
        try {
            $filters = json_decode(file_get_contents('php://input'), true)['filters'];
        } catch(\Exception $e) {
            throw new \Exception('No filters');
        }
        $service = new PropertyService();
        return response()->json($service->filter($filters));
    }
}
