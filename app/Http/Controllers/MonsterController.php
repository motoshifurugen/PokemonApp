<?php

namespace App\Http\Controllers;

use App\Monster;
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
        return $monster->save();
    }

    public function update(Request $request, Monster $monster) {
        $monster->name = request('name');
        $monster->save();
    }

    public function destroy(Monster $monster) {
        return $monster->delete();
    }
}
