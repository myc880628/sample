<?php

class Test_Index_Controller extends Base_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //$name = $this->ctx->user->manager_index->getTest();
        //var_dump($name);

        /*
        $admin = $this->base_ctx->admin->manager_info->getInfo();
        var_dump($admin);
        _dump($admin);
        */

        //_dump($this->base_ctx->rpc);
        $user = $this->base_ctx->rpc->user->getUserInfo(2);
        _dump($user);
    }
}