<?php

namespace App\Controller;

class BaseController
{

    public function render(string $view, array $vars, string $titlePage): void
    {
        $baseLayout = "../src/View/base_layout.php";
        $view = "../src/View/$view.php";

        foreach ($vars as $name => $value) {
            ${$name} = $value;
        }

        ob_start();
        include $view;
        $content = ob_get_clean();
        $title = $titlePage;
        include $baseLayout;
        ob_get_clean();
    }

}
