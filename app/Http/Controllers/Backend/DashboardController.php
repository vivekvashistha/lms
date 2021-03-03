<?php

namespace App\Http\Controllers\Backend;
use App\Domains\Auth\Services\UserService;
use App\Domains\Auth\Services\RoleService;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    
    
    /**
     * @var UserService
     */
    protected $userService;
    
    protected $roleService;

    /**
     * DeactivatedUserController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function index()
    {
        $user = $this->userService->getCountByRole();
        
        $data['CountRole'] = $user;
        return view('backend.dashboard',$data);
    }
}
