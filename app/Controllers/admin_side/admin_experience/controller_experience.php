<?php

namespace App\Controllers\admin_side\admin_experience;
use App\Controllers\BaseController;

class controller_experience extends BaseController
{
    public function index()
    {
        return view('admin_side/admin_experience/admin_experience');
    }
}