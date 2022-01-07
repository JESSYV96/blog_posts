<?php

namespace App\Controller;

class BaseController
{

    public function render(): void
    {
        $baseLayout = "../src/View/base_layout.php";

        ob_start();
        require $baseLayout;
        ob_end_flush();
    }

}
