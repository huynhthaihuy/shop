<?php

namespace App\Http\View\Composer;

use App\Models\Menu;
use Illuminate\View\View;

class MenuComposer{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
       
    }
 
    public function compose(View $view)
    {
        $menus = Menu::select('id','name','parent_id')->where('active',1)->orderByDesc('id')->get();

        $view->with('menus',$menus);
    }
}