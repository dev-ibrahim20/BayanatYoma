<?php

namespace App\Actions\Service;

use App\Models\Service;

class DeleteServiceAction
{
    public function execute($id): void
    {
        $this->handleDelete($id);
    }


    


    private function handleDelete($id): void
    {
        // Your database operations here
        Service::where('id', $id)->delete();
    }

}