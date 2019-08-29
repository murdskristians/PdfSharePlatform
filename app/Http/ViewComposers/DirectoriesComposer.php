<?php

namespace App\Http\ViewComposers;

use App\User;
use App\FileDirectory;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DirectoriesComposer
{
    public $directories = array();
    public $userImage = '';
    
    /**
     * Create a movie composer.
     *
     * 
     *
     * @return void
     */
    public function __construct()
    {
        for ($index = 1; $index <= 4; $index++) {
            $this->directories[] = FileDirectory::get()->where('course_id', '=', $index)->sortBy('name');
        }

        if (Auth::user() != NULL)
        {
            $user = User::findOrFail(Auth::user()->id);
            $userImage = $user->image;
        }
        else $userImage = 0;
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(array('directories' => $this->directories, 'userImage' => $this->userImage));
    }
}
?>