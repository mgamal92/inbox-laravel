<?php

namespace MG\Inbox\Services;

use MG\Inbox\Model\Inbox;

class InboxRepository {

    private $search_operator;

    public function __construct() {
        $this->search_operator = config('inbox.database_search_operator');
    }


    public function find($id) {
        return $this->resolve($id);
    }

    private function resolve($id) {
        if ($id instanceof Inbox) {
            return $id;
        }

        return Inbox::query()->findOrFail($id);
    }

    public function baseQuery(array $params = []) {
        return Inbox::query()
                    ->when(isset($params['sender_id']), function ($q) use ($params) {
                        $q->where('sender_id', $params['sender_id']);
                    })
                    ->when(isset($params['receiver_id']), function ($q) use ($params) {
                        $q->where('receiver_id', $params['receiver_id']);
                    })
                    ->when(isset($params['search']), function ($q) use ($params) {
                        $q->where(function ($q) use ($params) {
                            $q->where('body', $this->search_operator, '%' . $params['search'] . '%')
                              ->orWhere('body', $this->search_operator, '%' . $params['search'] . '%');
                        });
                    })
                    ->when(isset($params['is_read']), function ($q) use ($params) {
                        $boolean_vale = filter_var($params['is_read'], FILTER_VALIDATE_BOOLEAN);
                        $q->where('is_read', $boolean_vale);
                    })
                    ->when(isset($params['is_starred']), function ($q) use ($params) {
                        $boolean_vale = filter_var($params['is_starred'], FILTER_VALIDATE_BOOLEAN);
                        $q->where('is_starred', $boolean_vale);
                    })
                    ->when(isset($params['user_id']), function ($q) use ($params) {
                        $q->where(function ($q) use ($params) {
                            $q->where('receiver_id', $params['user_id'])->orWhere('sender_id', $params['user_id']);
                        });
                    });
    }

}