<?php

namespace App\Actions\SocialMedia;

use App\Models\SocialMedia;


class CreateSocialMediaAction
{
    public function execute($data)
    {
        $this->handelCreate($data);
    }


    private function handelCreate($data)
    {
        SocialMedia::create($data);   
    }
}