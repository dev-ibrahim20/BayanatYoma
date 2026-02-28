<?php

namespace App\Services;

use App\Actions\OurWork\DeleteOurWorkAction;
use App\Actions\OurWork\StoreOurWorkAction;
use App\Actions\OurWork\UpdateOurWorkAction;
use Illuminate\Support\Facades\DB;

class OurWorkService
{
    public function create(array $data): void
    {
        DB::transaction(function () use ($data): void {
            // Your database operations here
            app(StoreOurWorkAction::class)->execute($data);
        });
    }

    public function update($id, $data)
    {
        DB::transaction(function () use ($id, $data): void {
            // Your database operations here
            app(UpdateOurWorkAction::class)->execute($id, $data);
        });
    }

    public function delete($id)
    {
        DB::transaction(function () use ($id): void {
            // Your database operations here
            app(DeleteOurWorkAction::class)->execute($id);
        });
    }

}