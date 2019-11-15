<?php

use Illuminate\Database\Seeder;
use App\HeaderInformation;
use App\HeaderKeywords;
use App\HeaderViewports;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Header Information
        $information = new HeaderInformation();
        $information -> author = 'DioneMR';
        $information -> description ='Gow-Mac In-house Customer Application Database.';
        $information -> is_active = true;
        $information -> pages = 'all';
        $information -> save();

        // Keywords Data
        $keywords = ["gow-mac", "applications", "in-house", "database"];
        foreach($keywords as $keyword){
            $keyword_data = new HeaderKeywords();
            $keyword_data -> name = $keyword;
            $keyword_data -> is_active = true;
            $keyword_data -> pages = 'all';
            $keyword_data -> save();
        }

        // Viewport Data
        $viewports = ["width=device-width", "initial-scale=1", "maximum-scale=1"];
        foreach ($viewports as $viewport){
            $property_data = new HeaderViewports();
            $property_data -> property = $viewport;
            $property_data -> is_active = true;
            $property_data -> pages = 'all';
            $property_data -> save();
        }

    }
}
