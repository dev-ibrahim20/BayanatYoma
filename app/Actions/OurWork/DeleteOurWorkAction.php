<?php

namespace App\Actions\OurWork;

use App\Actions\Service\DeleteServiceAction;
use App\Models\OurWork;

class DeleteOurWorkAction
{
    public function execute($id): void
    {
        $this->handleDelete($id);
    }


    private function handleDelete($id): void
    {
        // Your database operations here
        OurWork::where('id', $id)->delete();
    }

}