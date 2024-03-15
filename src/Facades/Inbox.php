<?php

namespace MG\Inbox\Facades;

use Illuminate\Support\Facades\Facade;
use MG\Inbox\Services\InboxService;

/**
 *
 * @see \MG\Inbox\Services\InboxService
 * @method static InboxService send(array $params, int $receiver_id)
 * @method static  toggleReadStatus(int $id)
 * @method static  delete(int $id)
 * @method static  toggleStar(int $id)
 */
class Inbox extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'inbox';
    }
}
