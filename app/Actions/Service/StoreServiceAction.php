<?php

namespace App\Actions\Service;

use App\Models\Service;
use Illuminate\Support\Facades\Log;

class StoreServiceAction
{
    public function execute(array $data)
    {
        // Remove unwanted fields
        $filteredData = $this->filterData($data);
        
        // Debug: Log the data types
        Log::info('StoreServiceAction - Features AR type: ' . gettype($filteredData['features_ar'] ?? 'not_set'));
        Log::info('StoreServiceAction - Features EN type: ' . gettype($filteredData['features_en'] ?? 'not_set'));
        
        $this->handleMainImage($filteredData);
        $this->convertFeaturesToJson($filteredData);
        return $this->handleCreate($filteredData);
    }

    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in the database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, fn($key) => !in_array($key, $unwantedFields), ARRAY_FILTER_USE_KEY);
    }

    private function handleMainImage(array &$data): self
    {
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/services'), $imageName);
            $data['image'] = 'assets/images/services/' . $imageName;
        }
        return $this;
    }

    private function convertFeaturesToJson(array &$data): self
    {
        // Handle features_ar
        if (isset($data['features_ar'])) {
            if (is_array($data['features_ar'])) {
                $data['features_ar'] = json_encode($data['features_ar']);
            } elseif (is_string($data['features_ar'])) {
                $data['features_ar'] = json_encode(explode(',', $data['features_ar']));
            }
        }

        // Handle features_en
        if (isset($data['features_en'])) {
            if (is_array($data['features_en'])) {
                $data['features_en'] = json_encode($data['features_en']);
            } elseif (is_string($data['features_en'])) {
                $data['features_en'] = json_encode(explode(',', $data['features_en']));
            }
        }

        return $this;
    }

    public function handleCreate(array $data)
    {
        return Service::create($data);
    }
}