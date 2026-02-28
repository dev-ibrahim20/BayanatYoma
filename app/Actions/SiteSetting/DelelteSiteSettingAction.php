<?php


namespace App\Actions\SiteSetting;

use App\Models\SiteSetting;


class DelelteSiteSettingAction
{
    public function execute($id)
    {
        $this->handelDestroy($id);
    }

    public function handelDestroy($id)
    {
        SiteSetting::where('id', $id)->delete();
    }
}