<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Branche\StoreRequest;
use App\Http\Requests\Branche\UpdateRequest;
use App\Models\Branch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branches.index',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreRequest $request): Redirector|RedirectResponse|Application
    {

        Branch::query()->create($request->validated());
        return redirect(route('dashboard.branch.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Branch $branch
     * @return Application|Factory|View
     */
    public function show(Branch $branch): View|Factory|Application
    {
        return view('admin.branches.show',compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Branch $branch
     * @return Application|Factory|View
     */
    public function edit(Branch $branch): View|Factory|Application
    {
        return view('admin.branches.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Branch $branch
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateRequest $request, Branch $branch): Redirector|RedirectResponse|Application
    {
        $branch->update($request->validated());
        return redirect(route('dashboard.branch.show',$branch->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Branch $branch
     * @return Application|RedirectResponse|Redirector
     */
    public function delete(Branch $branch): Redirector|RedirectResponse|Application
    {
        $branch->delete();
        return redirect(route('dashboard.branch.index'));
    }
}
