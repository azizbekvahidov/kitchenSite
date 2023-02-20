<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\StoreRequest;
use App\Http\Requests\Menu\UpdateRequest;
use App\Models\Branch;
use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $menus = Menu::query()->with(['menuCategory'])->get();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $branches = Branch::all();

        return view('admin.menu.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreRequest $request): Redirector|RedirectResponse|Application
    {
        Menu::query()->create($request->validated());
        return redirect(route('dashboard.menu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Menu $menu
     * @return Application|Factory|View
     */
    public function show(Menu $menu)
    {
        return view('admin.menu.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     * @return Application|Factory|View
     */
    public function edit(Menu $menu): View|Factory|Application
    {
        $branches = Branch::all();
        $categoryBranch = $menu->menuCategory->branch->menuCategories;
        return view('admin.menu.edit',compact('menu','branches', 'categoryBranch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Menu $menu
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateRequest $request, Menu $menu): Redirector|RedirectResponse|Application
    {
        $menu->update($request->validated());
        return redirect(route('dashboard.menu.show', $menu->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     * @return Application|RedirectResponse|Redirector
     */
    public function delete(Menu $menu): Redirector|RedirectResponse|Application
    {
        $menu->delete();
        return redirect(route('dashboard.menu.index'));
    }
}
