<?php

namespace App\Service\Base;

use App\Repository\Base\IBaseRepository;

class BaseService implements IBaseService
{
    /**      
     * @var Repository      
     */     
    protected $repository;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param IBaseRepository $repository      
     */     
    public function __construct(IBaseRepository $repository)     
    {         
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }

    public function read($id)
    {
        return $this->repository->read($id);
    }

    public function update(array $attributes, $id)
    {
        return $this->repository->update($attributes, $id);
    }

    public function delete($id)
    {
        return $this->respository->delete($id);
    }
}