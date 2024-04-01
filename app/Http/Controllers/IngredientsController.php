<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use App\Models\Meat;
use App\Models\Optional;
use App\Models\Sauce;

class IngredientsController extends Controller
{
    public function ingredients()
    {
        $breads = Bread::all('type');
        $meats = Meat::all('type');
        $sauce = Sauce::all('type');
        $optionals = Optional::all('type');

        return response()->json([$breads, $meats, $sauce, $optionals]);
    }
}
