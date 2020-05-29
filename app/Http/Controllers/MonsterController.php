<?php

namespace App\Http\Controllers;

use App\Monster;
use App\Attribute;
use App\Region;
use Illuminate\Http\Request;

class MonsterController extends Controller{
    public function index() {
        return Monster::all();
    }

    public function show(Monster $monster) {
        return Monster::findOrFail($monster->id);
    }

    public function store(Request $request) {
        $monster = new Monster();
        $monster->name = request('name');
        $monster->attribute_id = request('attribute_id');
        $monster->region_id = request('region_id');
        $monster->size = request('size');
        $monster->weight = request('weight');
        $monster->attack_name = request('attack_name');
        $monster->attack_description = request('attack_description');
        return $monster->save();
    }

    public function update(Request $request, Monster $monster) {
        $monster->name = request('name');
        $monster->attribute_id = request('attribute_id');
        $monster->region_id = request('region_id');
        $monster->size = request('size');
        $monster->weight = request('weight');
        $monster->attack_name = request('attack_name');
        $monster->attack_description = request('attack_description');
        $monster->save();
    }

    public function destroy(Monster $monster) {
        return $monster->delete();
    }
}
