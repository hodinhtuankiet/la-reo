<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;
    /**
     * Create a new profile composer.
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $view->with('count', $this->users->count());
    }
}
