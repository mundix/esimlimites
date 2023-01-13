<?php

namespace App\Repositories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class ApplicationRepository
{
    protected  $model;

    public  function  __construct()
    {
        $this->model = new Application();
    }

    public function store(FormRequest $request) : Model
    {
        $this->model->fill($request->all());
        $this->model->save();
        return $this->model->refresh();
    }
}