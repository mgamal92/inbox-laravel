<?php

namespace MG\Inbox\Facades;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Facade;

/**
 *
 * @see \MG\Inbox\Services\InboxService
 * @method static \MG\Inbox\Model\Inbox send(array $params, int $receiver_id)
 * @method static \Illuminate\Database\Eloquent\Collection getUserInbox(int $user_id = null, int $pagination = null)
 * @method static Builder getQuery(array $params)
 * @method static  \MG\Inbox\Model\Inbox toggleReadStatus(int $id)
 * @method static \MG\Inbox\Model\Inbox delete(int $id)
 * @method static \MG\Inbox\Model\Inbox toggleStar(int $id)
 */
class Inbox extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'inbox';
    }
}
