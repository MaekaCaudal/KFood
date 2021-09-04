<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoreanMenu;

class KfoodController extends Controller
{
    public function createKfoodMenu(Request $request) {
        $menu = new KoreanMenu();
        $menu->type = $request->input('type');
        $menu->description = $request->input('description');
        $menu->quantity = $request->input('quantity');
        $menu->price = $request->input('price');
        $menu->save();
        return response()->json($menu);
    }

    public function getAllKfoodMenu(Request $request) {
        $menus = KoreanMenu::all();
        return response()->json($menus);
    }

    public function getKfoodMenuById(Request $request, $id) {
        $menu = KoreanMenu::find($id);
        return response()->json($menu);
    }

    public function updateKfoodMenuById(Request $request, $id) {
        $menu = KoreanMenu::find($id);
        $$menu->type = $request->input('type');
        $menu->description = $request->input('description');
        $menu->quantity = $request->input('quantity');
        $menu->price = $request->input('price');
        $menu->save();
        return response()->json($menu);
    }
public function deleteKfoodMenuById(Request $request, $id) {
        $menu = KoreanMenu::find($id)->delete();
        return response()->json($menu);
    }
}
