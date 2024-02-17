<?php

it('can send a message', function () {
    $inbox = new \MG\Inbox\Services\Inbox();
    $result = $inbox->send('Hello', 'Taylor');
    expect($result)->toBe('Message sent to Taylor');
});
