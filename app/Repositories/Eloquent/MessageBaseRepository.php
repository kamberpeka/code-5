<?php

namespace App\Repositories\Eloquent;

use App\Models\Message\Message;
use App\Repositories\Contracts\MessageBaseRepositoryInterface;

class MessageBaseRepository extends BaseRepository implements MessageBaseRepositoryInterface
{
    protected function model()
    {
        return Message::class;
    }
}