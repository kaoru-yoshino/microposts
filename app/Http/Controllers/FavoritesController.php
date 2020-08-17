<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FavoritesController extends Controller
{
     public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
         public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
