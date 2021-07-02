<?php
namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller{
    public function about()
    {
        echo "this is About Page.";
    }

    public function contact()
    {
        echo "this is contact Page.";
    }

    public function service()
    {
        echo "this is service Page.";
    }
}