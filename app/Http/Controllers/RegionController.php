<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller{
    public function index() {
        return Region::all();
    }

    public function show(Region $region) {
        return Region::findOrFail($region->id);
    }

    public function store(Request $request) {
        $region = new Region();
        $region->name = request('name');
        return $region->save();
    }

    public function update(Request $request, Region $region) {
        $region->name = request('name');
        $region->save();
    }

    public function destroy(Region $region) {
        return $region->delete();
    }
}
