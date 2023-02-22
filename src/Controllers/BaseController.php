<?php

namespace Src\Controllers;

use Src\Model\Repository\AdminRepository;
use Src\Model\Repository\DoctorRepository;
use Src\model\Repository\LoginRepository;
use Src\Model\Repository\RegisterRepository;
use Src\Model\Repository\UserRepository;

class BaseController
{

    protected LoginRepository $loginRepository;
    protected UserRepository $userRepository;
    protected DoctorRepository $doctorRepository;
    protected AdminRepository $adminRepository;
    protected RegisterRepository $registerRepository;

    public function __construct()
    {
        $this->loginRepository = new LoginRepository();
        $this->userRepository = new UserRepository();
        $this->doctorRepository = new DoctorRepository();
        $this->adminRepository = new AdminRepository();
        $this->registerRepository = new RegisterRepository();
    }


    public function create()
    {


    }


    public function read()
    {


    }

    public function show($index)
    {


    }

    public function edit($id)
    {


    }

    public function update()
    {


    }

    public function delete()
    {

    }

    public function store()
    {


    }

}