<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JsonStorage
{
    private $db = [];

    public function __construct(string $table)
    {
        $this->db = DB::table($table);
    }

    public function getAll(): ?object
    {
       return $this->db->get();
    }

    public function addData(array $data): ?int
    {
        return $this->db->insertGetId($data);
    }

    public function getById($id): ?object
    {
        return $this->db->find($id);
    }

    public function getAllByParameter(string $parameter, $value): ?object
    {
        return $this->db->where($parameter, $value)->get();
    }
}
