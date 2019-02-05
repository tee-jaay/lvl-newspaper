<?php

namespace App\Http\Controllers\Backend\Admin\Site;

use App\Models\Site\Cloudinary;

class CloudinarySettings
{
    public function __construct()
    {
        //Do your magic here
        $this->cloudinary = Cloudinary::all()->first->get();

    }
    public function setup_cloudinary(){
        $cloudinary_settings = \Cloudinary::config(array(
            "cloud_name" => $this->cloudinary->cloud_name,
            "api_key" => $this->cloudinary->api_key,
            "api_secret" => decrypt($this->cloudinary->api_secret)
        ));
        return $cloudinary_settings;
    }
}
