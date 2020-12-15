<?php


namespace App\Services;


use App\Repositories\Contracts\MessageBaseRepositoryInterface;
use App\Support\Responses\ServiceResponse;
use Exception;

class MessageService
{
    /** @var MessageBaseRepositoryInterface */
    protected static $messageRepository;

    public function __construct(MessageBaseRepositoryInterface $messageRepository)
    {
        self::$messageRepository = $messageRepository;
    }

    public static function store(array $data): ServiceResponse
    {
        try {
            $model = self::$messageRepository->create($data);

            return new ServiceResponse(true, $model);
        } catch (Exception $e) {
            return new ServiceResponse(false, null);
        }
    }

}