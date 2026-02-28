<?php

namespace App\Actions\SocialMedia;

use App\Models\SocialMedia;

class DestroySocialMediaAction
{
    public function execute($id)
    {
        $this->handledestroy($id);
    }

    public function handledestroy($id)
    {
        SocialMedia::where('id', $id)->delete();
    }
}