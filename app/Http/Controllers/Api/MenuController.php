<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesMenusResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\MenuCategoriesResource;
use App\Http\Resources\MenuResource;
use App\Models\Branch;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(Branch $branch)
    {
        $menu = MenuCategory::query()->where('branch_id', '=', $branch->id)->with('menu')->get();
        return MenuCategoriesResource::collection($menu);
    }
}
