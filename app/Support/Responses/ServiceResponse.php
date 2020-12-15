<?php

namespace App\Support\Responses;

use Illuminate\Database\Eloquent\Model;

class ServiceResponse
{
    /**
     * @var bool
     */
    private $success;

    /**
     * @var Model|null
     */
    private $model;

    /**
     * @param  bool  $success
     * @param  Model|null  $model
     */
    public function __construct(bool $success, ?Model $model = null)
    {
        $this->success = $success;
        $this->model = $model;
    }

    /**
     * @return bool
     */
    public function success()
    {
        return $this->success;
    }

    /**
     * @return Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'success' => $this->success,
            'model' => $this->model
        ];
    }
}
