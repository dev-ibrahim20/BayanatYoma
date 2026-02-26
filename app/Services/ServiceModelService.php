<?php

namespace App\Services;

use App\Actions\Service\DeleteServiceAction;
use App\Actions\Service\StoreServiceAction;
use App\Actions\Service\UpdateServiceAction;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceModelService
{
    public function create(array $data): void
    {
        DB::transaction(function () use ($data): void {
            // Your database operations here
            app(StoreServiceAction::class)->execute($data);
        });
    }


    public function update($id, array $data): void
    {
        DB::transaction(function () use ($id, $data): void {
            // Your database operations here
            app(UpdateServiceAction::class)->execute($id, $data);
        });
    }


    public function delete($id): void
    {
        DB::transaction(function () use ($id): void {
            // Your database operations here
            app(DeleteServiceAction::class)->execute($id);
        });
    }
}
