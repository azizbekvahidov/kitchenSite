<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomePageMediaRequest;
use App\Http\Requests\Admin\HomePageSettingRequest;
use App\Models\HomePageMedia;
use App\Models\HomePageSetting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class HomePageSettingController extends Controller
{
    public function edit(): Factory|View|Application
    {
        $homePageSettings = HomePageSetting::query()->first();
        $homePageMedia = HomePageMedia::query()->get();
        return view('admin.home_page_setting', compact('homePageSettings', 'homePageMedia'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param HomePageSettingRequest $homePageSettingUpdateRequest
     * @return Application|RedirectResponse|Redirector
     */
    public function update(HomePageSettingRequest $homePageSettingUpdateRequest)
    {
        $validated = $homePageSettingUpdateRequest->validated();
        $homePageSetting = HomePageSetting::query()->first();
        if ($homePageSetting) {
            $homePageSetting->update($validated);
        }else {
            $homePageSetting = HomePageSetting::query()->create($validated);
        }

        return redirect(route('dashboard.home_page_setting.edit'));
    }

    public function upload(HomePageMediaRequest $homePageSettingStoreRequest): Redirector|Application|RedirectResponse
    {

        foreach ($homePageSettingStoreRequest->file('media') as $image) {
            if ($image->getMimeType() == "video/mp4"){
                $image = $image->store('videos', 'public');
            }else{
                $image = $image->store('images', 'public');
            }
            HomePageMedia::query()->create([
                "path" => $image,
                "group" => $homePageSettingStoreRequest->validated('group'),
            ]);
        }
        return redirect(route('dashboard.home_page_setting.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param HomePageMedia $homePageMedia
     * @return Application|RedirectResponse|Redirector
     */
    public function delete(HomePageMedia $homePageMedia): Redirector|RedirectResponse|Application
    {
        Storage::disk('public')->delete($homePageMedia->path);
        $homePageMedia->delete();
        return redirect(route('dashboard.home_page_setting.edit'));
    }
}
