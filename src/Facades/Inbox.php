<?php

namespace MG\Inbox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MG\Inbox\Inbox
 */
class Inbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MG\Inbox\Inbox::class;
    }
}
