<?php defined('BASEPATH') or die();

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($name = null)
    {
        $this->data['name'] = is_null($name) ? 'World' : $name;
        $this->display('welcome');
    }
}
