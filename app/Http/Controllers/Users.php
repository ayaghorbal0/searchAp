<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class Users extends Controller
{
    function search($name)
    {
      return projects::where("project_name",$name)->get();
    }
}
