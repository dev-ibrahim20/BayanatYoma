<?php


namespace App\Actions\SiteSetting;

use App\Models\SiteSetting;


class CreateSiteSettingAction
{
    public function execute($data)
    {
        $this->handelCreate($data);
    }

    public function handelCreate($data)
    {
        SiteSetting::create($data);
    }

}