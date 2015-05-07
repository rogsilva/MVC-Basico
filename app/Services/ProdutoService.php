<?php

namespace App\Services;

use App\Models\Produto as ProdutoModel;

class ProdutoService
{

    private $model;


    public function __construct()
    {
        $this->model = new ProdutoModel();
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        $this->model->nome = $data['nome'];
        $this->model->descricao = $data['descricao'];
        $this->model->valor = $data['valor'];

        $this->model->save();

        return $this->model;
    }

    public function update(array $data, $id)
    {
        $produto = $this->model->find($id);

        $produto->nome = $data['nome'];
        $produto->descricao = $data['descricao'];
        $produto->valor = $data['valor'];

        $produto->save();

        return $produto;
    }

    public function delete($id)
    {
        $produto = $this->model->find($id);
        if($produto->delete())
            return true;

        return false;
    }

}