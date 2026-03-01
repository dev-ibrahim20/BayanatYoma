<?php

namespace App\Actions\AboutUs;

use App\Models\AboutUs;


class CreateAboutUsAction
{
    public function execute($data)
    {
        $this->handleMainImage($data);
        $this->handleCreate($data);
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


    private function handleCreate($data)
    {
        AboutUs::create($data);   
    }
}
