<?php

namespace App\Actions\Client;

use App\Models\Client;

class StoreClientAction
{
    public function execute($data)
    {
        $data = $this->handelUplode($data);
        $this->handelCreate($data);
    }


    public function handelUplode($data)
    {
        if (isset($data['image']) && $data['image'] !== null) {
            $image = $data['image'];
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/client'), $imageName);
            $data['image'] = 'assets/images/client/' . $imageName;
        }
        return $data;
    }


    public function handelCreate($data)
    {
        Client::create($data);
    }
}