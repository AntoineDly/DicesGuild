<?php

namespace App\Repository\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements IBaseRepository
{
    /**      
     * @var Model      
     */     
    protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }

    public function index()
    {
        return $this->Model->all();
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function read($id)
    {
        return $this->model->find($id);
    }

    public function update(array $attributes, $id)
    {

    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}