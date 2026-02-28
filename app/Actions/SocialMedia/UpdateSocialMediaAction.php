<?php

namespace App\Actions\SocialMedia;

use App\Models\SocialMedia;


class UpdateSocialMediaAction
{
    public function execute($data, $id)
    {
        $data = $this->filterData($data);
        $this->handleupdate($data, $id);
    }


    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in the database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, function($key) use ($unwantedFields) {
            return !in_array($key, $unwantedFields);
        }, ARRAY_FILTER_USE_KEY);
    }


    public function handleupdate($data, $id)
    {
        SocialMedia::where('id', $id)->update($data);
    }
}