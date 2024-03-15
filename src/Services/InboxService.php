<?php

namespace MG\Inbox\Services;

use Illuminate\Support\Facades\DB;
use MG\Inbox\Model\Inbox;
use MG\Inbox\Traits\ErrorExceptionTrait;

class InboxService {

    use  ErrorExceptionTrait;
    public function __construct(private InboxRepository $repository) {
    }

    public function send(array $params, int $receiver_id) {
        $params['sender_id'] = auth()->id();
        $params['receiver_id'] = $receiver_id;
        return DB::transaction(function () use ($params){
            $inbox = new InboxService();
            $inbox->fill($params);
            $inbox->save();
            return $inbox;
        });
    }

    public function toggleReadStatus($id) {
        $receiver = auth()->id();
        $message = $this->repository->find($id);
        $this->validateMessageBelongsToReceiver($message,$receiver);
        return DB::transaction(function () use ($message){
            $message->is_read = !$message->is_read;
            $message->save();
            return $message;
        });
    }

    public function delete($id) {
        $sender = auth()->id();
        $message = $this->repository->find($id);
        $this->validateMessageBelongsSender($message,$sender);
        return DB::transaction(function () use ($message){
            $message->delete();
            return $message;
        });
    }

    public function toggleStar($id){
        $user_id = auth()->id();
        $message = $this->repository->find($id);
        $this->validateMessageBelongsToUsers($message,$user_id);
        return DB::transaction(function () use ($message){
                $message->is_starred = !$message->is_starred;
                $message->save();
                return $message;
        });

    }

    private function validateMessageBelongsToReceiver(Inbox $message, int|string|null $receiver_id): void {
        if ($message->receiver_id !== $receiver_id){
            $this->unAuthorized();
        }
    }

    private function validateMessageBelongsSender(Inbox $message, int|string|null $sender_id): void {
        if ($message->sender_id !== $sender_id){
           $this->unAuthorized();
        }
    }

    private function validateMessageBelongsToUsers(Inbox $message, int $user_id): void {
        if ($message->receiver_id !== $user_id || $message->sender_id !== $user_id){
            $this->unAuthorized();
        }
    }
}
