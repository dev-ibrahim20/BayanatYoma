<?php

namespace App\Services;

use App\Actions\AboutUs\CreateAboutUsAction;
use App\Actions\AboutUs\UpdateAboutUsAction;
use App\Actions\AboutUs\DestroyAboutUsAction;
use Illuminate\Support\Facades\DB;


class AboutUsService
{

    public function create($data)
    {
        DB::transaction(function () use ($data){
            app(CreateAboutUsAction::class)->execute($data);  
        });
    }


    public function update($data, $id)
    {
        DB::transaction(function () use ($data, $id){
            app(UpdateAboutUsAction::class)->execute($data, $id);  
        });
    }


    public function destroy($id)
    {
        DB::transaction(function () use ($id){
            app(DestroyAboutUsAction::class)->execute($id);  
        });
    }

}
