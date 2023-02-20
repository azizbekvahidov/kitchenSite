<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuCategory\StoreRequest;
use App\Http\Requests\MenuCategory\UpdateRequest;
use App\Models\Branch;
use App\Models\MenuCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $menuCategories = MenuCategory::all();
        return view('admin.menu_categories.index',compact('menuCategories'));
    }

    public function list(Request $request)
    {
        $branchId = $request->get('branch_id');
        $menu_categories = MenuCategory::query()->where('branch_id', '=', $branchId)->get();
        return response()->json($menu_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $branches = Branch::all();
        return view('admin.menu_categories.create',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return Redirector|Application|RedirectResponse
     */
    public function store(StoreRequest $request): Redirector|RedirectResponse|Application
    {
        MenuCategory::query()->create($request->validated());
        return redirect(route('dashboard.menu_category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param MenuCategory $menu_category
     * @return Application|Factory|View
     */
    public function show(MenuCategory $menu_category)
    {
        return view('admin.menu_categories.show',compact('menu_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MenuCategory $menu_category
     * @return Application|Factory|View
     */
    public function edit(MenuCategory $menu_category)
    {
        $branches = Branch::all();
        return view('admin.menu_categories.edit',compact('menu_category','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param MenuCategory $menu_category
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateRequest $request, MenuCategory $menu_category)
    {
        $menu_category->update($request->validated());
        return redirect(route('dashboard.menu_category.show', $menu_category->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MenuCategory $menu_category
     * @return Application|RedirectResponse|Redirector
     */
    public function delete(MenuCategory $menu_category): Redirector|RedirectResponse|Application
    {
        $menu_category->menu()->delete();
        $menu_category->delete();
        return redirect(route('dashboard.menu_category.index'));
    }
}
