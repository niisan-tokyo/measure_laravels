<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;

class NameController extends Controller
{
    public function createName()
    {
        $ids = [];
        for ($i = 0; $i < 5; $i++) {
            $name = new Name;
            $name->name = str_random(10);
            $name->save();
            $ids[] = $name->id;
        }

        return Name::find($ids);
    }
}
