<?php

namespace App\Actions\SiteSetting;

use App\Models\SiteSetting;


class UpdateSiteSettingAction
{
    public function execute($data, $id)
    {
        $data = $this->filterData($data);
        $this->handelUpdate($data, $id);   
    }


    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in the database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, function($key) use ($unwantedFields) {
            return !in_array($key, $unwantedFields);
        }, ARRAY_FILTER_USE_KEY);
    }


    public function handelUpdate($data, $id)
    {
        SiteSetting::where('id', $id)->update($data);   
    }

}