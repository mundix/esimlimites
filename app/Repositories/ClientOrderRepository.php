<?php

namespace App\Repositories;

use App\Models\ClientOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class ClientOrderRepository
{
    protected  $model;

    public  function  __construct()
    {
        $this->model = new ClientOrder();
    }

    public function store(FormRequest $request) : Model
    {
        $this->model->fill($request->all());
        $this->model->save();
        return $this->model->refresh();
    }
}