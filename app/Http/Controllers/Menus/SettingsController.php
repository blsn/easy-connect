<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Global Settings',
            'tabs' => array(
                array( 
                    'name' => 'Home', 
                    'content' => 'HOME CONTENT'
                ), 
                array( 
                    'name' => 'View',  
                    'content' => 'VIEW CONTENT'
                ),
                array( 
                    'name' => 'Settings',  
                    'content' => request()->server('SERVER_ADDR')
                )
            )
        );
        
        return view('menus.setting.index')->with($data);
    }
}
