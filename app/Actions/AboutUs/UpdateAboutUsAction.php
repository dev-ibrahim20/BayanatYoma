<?php

namespace App\Actions\AboutUs;

use App\Models\AboutUs;


class UpdateAboutUsAction
{
    public function execute($data, $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $this->handleMainImage($data);
        $data = $this->filterData($data);
        $this->handleUpdate($data, $id);
    }


    private function filterData(array $data): array
    {
        // Remove fields that shouldn't be in database
        $unwantedFields = ['_token', '_method'];
        
        return array_filter($data, function($key) use ($unwantedFields) {
            return !in_array($key, $unwantedFields);
        }, ARRAY_FILTER_USE_KEY);
    }

    private function handleMainImage(array &$data): self
    {
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/about-us'), $imageName);
            $data['image'] = 'assets/images/about-us/' . $imageName;
        }
        return $this;
    }


    public function handleUpdate($data, $id)
    {
        AboutUs::where('id', $id)->update($data);
    }
}
