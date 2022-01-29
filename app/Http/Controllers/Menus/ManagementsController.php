<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementsController extends Controller
{
    public function index() {
        // $data = array(
        //     'title' => 'Solution Management',
        //     'tabs' => ['Home', 'View', 'Settings'],
        //     'contents' => ['HOME CONTENT', 'VIEW CONTENT', request()->server('SERVER_ADDR')]
        // );

        $data = array(
            'title' => 'Solution Management',
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
                    // 'content' => request()->server('SERVER_ADDR')
                    'content' => json_encode(config('database.connections'), JSON_PRETTY_PRINT)
                )
            )
        );
        
        return view('menus.management.index')->with($data);
    }
}
