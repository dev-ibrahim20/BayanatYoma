<?php

namespace App\Actions\Client;

use App\Models\Client;


class DestoryClientAction
{
    public function execute($id): void
    {
        $this->handleDestory($id);
    }

    public function handleDestory($id): void
    {
        Client::destroy($id);
    }
}