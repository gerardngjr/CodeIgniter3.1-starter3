<?php

/**
 * Created by PhpStorm.
 * User: kwanc
 * Date: 2016-11-04
 * Time: 11:46 AM
 */
class Toggle extends Application {
    public function index()	{
        $origin = $_SERVER['HTTP_REFERER'];
        $role = $this->session->userdata('userrole');
        if ($role == 'user') $role = 'admin';
        else $role = 'user';
        $this->session->set_userdata('userrole', $role);
        redirect($origin);
    }
}