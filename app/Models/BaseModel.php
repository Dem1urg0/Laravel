<?php

namespace App\Models;

use App\Services\JsonStorage;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected $storage;
    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->storage = new JsonStorage($this->table);
    }

    public function getAll(): ?object
    {
        return $this->storage->getAll();
    }

    public function getById($id): ?object
    {
        return $this->storage->getById($id);
    }

    public function getAllByParameter(string $parameter, $value): ?object
    {
        return $this->storage->getAllByParameter($parameter, $value);
    }

    public function addData(array $data): ?int
    {
        return $this->storage->addData($data);
    }

}
