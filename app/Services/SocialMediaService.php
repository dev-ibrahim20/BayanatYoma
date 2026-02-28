<?php

namespace App\Services;

use App\Actions\SocialMedia\CreateSocialMediaAction;
use App\Actions\SocialMedia\DestroySocialMediaAction;
use App\Actions\SocialMedia\UpdateSocialMediaAction;
use Illuminate\Support\Facades\DB;


class SocialMediaService
{

    public function create($data)
    {
        DB::transaction(function () use ($data){
            app(CreateSocialMediaAction::class)->execute($data);  
        });
    }


    public function update($data, $id)
    {
        DB::transaction(function () use ($data, $id){
            app(UpdateSocialMediaAction::class)->execute($data, $id);  
        });
    }


    public function destroy($id)
    {
        DB::transaction(function () use ($id){
            app(DestroySocialMediaAction::class)->execute($id);  
        });
    }

}