<?php
/**
 * Created by PhpStorm.
 * User: dione
 * Date: 10/28/2019
 * Time: 10:58 AM
 */

namespace App\Dashboard\config;
use App\HeaderInformation;
use App\HeaderKeywords;
use App\HeaderViewports;

class Header
{
    var $header;
    public function __construct(){
        $this -> header = [
            'keywords' => HeaderKeywords::generate(),
            'viewPort' => HeaderViewports::generate(),
            'description' => HeaderInformation::where('is_active', true)->pluck('description')[0],
            'author' => HeaderInformation::where('is_active', true)->pluck('author')[0],
            'icon' => HeaderInformation::where('is_active', true)->pluck('icon')[0]

        ];
        return $this -> header;

    }
}
