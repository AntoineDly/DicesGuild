<?php

namespace App\Repository\Base;

interface IBaseRepository
{
    public function index();

    public function create(array $attributes);

    public function read($id);

    public function update(array $attributes, $id);

    public function delete($id);
}