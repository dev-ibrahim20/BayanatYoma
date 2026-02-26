<?php

namespace App\Interfaces;

interface ServiceRepositoryInterface
{
    public function getAll($search = null);
    public function getPublished($search = null);
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}