<?php

namespace App\Controllers;


class Page extends BaseController
{
     public function page()
     {
          return view('page/home');
     }

     public function about()
     {
          return view('page/about');
     }
}
