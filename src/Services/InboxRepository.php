<?php

namespace MG\Inbox\Services;


use MG\Inbox\Model\Inbox;

class InboxRepository {


    public function find($id){
        return $this->resolve($id);
    }

    private function resolve($id){
        if ($id instanceof Inbox){
            return $id;
        }

        return Inbox::query()->findOrFail($id);
    }

}