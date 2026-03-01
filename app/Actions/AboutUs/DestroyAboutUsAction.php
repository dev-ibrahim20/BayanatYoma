<?php

namespace App\Actions\AboutUs;

use App\Models\AboutUs;

class DestroyAboutUsAction
{
    public function execute($id)
    {
        $this->handleDestroy($id);
    }

    public function handleDestroy($id)
    {
        AboutUs::where('id', $id)->delete();
    }
}
