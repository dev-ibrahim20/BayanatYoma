<?php 

namespace App\Services;

use App\Actions\Client\DestoryClientAction;
use App\Actions\Client\StoreClientAction;
use App\Actions\Client\UpdateClientAction;
use Illuminate\Support\Facades\DB;


class ClientService
{
    public function store($data)
    {
        DB::transaction(function () use ($data): void {
            app(StoreClientAction::class)->execute($data);  
        });
    }


    public function update($id, $data)
    {
        DB::transaction(function () use ($id, $data): void {
            app(UpdateClientAction::class)->execute($id, $data);  
        });
    }

    public function destroy($id)
    {
        DB::transaction(function () use ($id): void {
            app(DestoryClientAction::class)->execute($id);  
        });
    }
}