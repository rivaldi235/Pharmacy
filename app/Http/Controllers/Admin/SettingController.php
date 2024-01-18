<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QCod\AppSettings\SavesSettings;

class SettingController extends Controller
{
    use SavesSettings;

        // public function store(Request $request)
        // {
        //     $data = $request->except('_token');
        //     foreach ($data as $key => $value) {
        //         $setting = Setting::firstOrCreate(['key' => $key]);
        //         $setting->value = $value;
        //         $setting->save();
        //     }

        //     return redirect()->route('settings');
        // }
}
