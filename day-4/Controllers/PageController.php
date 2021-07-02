<?php

namespace APP\Controllers;

use APP\Core\Controller;


class PageController extends Controller{
    public function about()
    {
        echo "this is about page.";
    }

    public function contact()
    {
        echo "this is contact page.";
    }
}