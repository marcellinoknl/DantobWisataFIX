<?php

namespace App\Http\Controllers;

use App\Models\MenuSubMenu;
use Illuminate\Http\Request;

class MenuSubMenuController extends Controller
{
    public function index(){
        $menus = MenuSubMenu::with('children')->where("is_parent","1")->get();

        return view('',["menus"=>$menus]);
    }

    public function create(Request $request){
        if($request->method()==="POST"){
            $newMenu = new MenuSubMenu();

            $newMenu->name = $request->name;
            $newMenu->deskripsi = $request->deskripsi;

            if($request->post("isParent")){
                $newMenu->is_parent = 1;
            }else{
                $newMenu->is_parent = 0;
                $newMenu->parent = $request->parent;
            }

            if($request->post("isHaveContent")){
                $newMenu->content = $request->content;
            }

            if($newMenu->save()){
                return redirect()->route("");//isinya dari name() web.php
            }
            return redirect()->back();
        }
    }
}
