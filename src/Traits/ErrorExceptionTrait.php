<?php

namespace MG\Inbox\Traits;

use Illuminate\Auth\Access\AuthorizationException;

trait ErrorExceptionTrait {

    public function unAuthorized(){
        throw  new AuthorizationException('this_action_not_authorized');
    }

}