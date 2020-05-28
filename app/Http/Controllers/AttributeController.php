<?php

namespace App\Http\Controllers;

use App\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller{
    public function index() {
        return Attribute::all();
    }

    public function show(Attribute $attribute) {
        return Attribute::findOrFail($attribute->id);
    }

    public function store(Request $request) {
        $attribute = new Attribute();
        $attribute->name = request('name');
        return $attribute->save();
    }

    public function update(Request $request, Attribute $attribute) {
        $attribute->name = request('name');
        $attribute->save();
    }

    public function destroy(Attribute $attribute) {
        return $attribute->delete();
    }
}
