<?php

namespace App\Services;

use App\Actions\Client\UpdateClientAction;
use App\Actions\SiteSetting\CreateSiteSettingAction;
use App\Actions\SiteSetting\DelelteSiteSettingAction;
use App\Actions\SiteSetting\DeleteSiteSettingAction;
use App\Actions\SiteSetting\DeletSiteSettingAction;
use App\Actions\SiteSetting\DestroySiteSettingAction;
use App\Actions\SiteSetting\UpdateSiteSettingAction;
use Illuminate\Support\Facades\DB;

class SiteSettingService
{
    public function create($data)
    {
        DB::transaction(function () use ($data): void {
            // Your database operations here
            app(CreateSiteSettingAction::class)->execute($data);
        });
    }


    public function update($data, $id)
    {
        DB::transaction(function () use ($data, $id): void {
            // Your database operations here
            app(UpdateSiteSettingAction::class)->execute($data, $id);
        });
    }

    public function destroy($id)
    {
        DB::transaction(function () use ($id): void {
            // Your database operations here
            app(DelelteSiteSettingAction::class)->execute($id);
        });
    }
}