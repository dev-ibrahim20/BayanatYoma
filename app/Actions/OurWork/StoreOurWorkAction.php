<?php

namespace App\Actions\OurWork;

use App\Models\OurWork;


class StoreOurWorkAction
{
    public function execute($data): void
    {
        $filteredData = $this->filterData($data);
        $uploadedData = $this->handleUpload($filteredData);
        $this->handleDate($uploadedData);
        $this->handleCreate($uploadedData);
    }


    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in the database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, fn($key) => !in_array($key, $unwantedFields), ARRAY_FILTER_USE_KEY);
    }

    private function handleUpload($data)
    {
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/our_work'), $imageName);
            $data['image'] = 'assets/images/our_work/' . $imageName;
        }
        return $data;
    }

    private function handleDate($data)
    {
        $data['date'] = now();
        return $data;
    }


    private function handleCreate($data)
    {
        OurWork::create($data);
    }


}
