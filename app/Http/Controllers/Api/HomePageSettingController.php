<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageResource;
use App\Models\HomePageMedia;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;

class HomePageSettingController extends Controller
{
    public function homePage()
    {
        $homePageSettings = HomePageSetting::first();
        $homeMedia = HomePageMedia::all()->groupBy('group');
        return HomePageResource::make([
            'homePageSettings' => $homePageSettings,
            'home_page' => $homeMedia['home_page'],
            'images' => $homeMedia['images']
        ]);
    }
}
