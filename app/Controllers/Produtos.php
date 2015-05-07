<?php
namespace App\Controllers;

use System\Core\Controller\BaseController;
use App\Services\ProdutoService;


class Produtos extends BaseController
{
    private $service;

    public function __construct()
    {
        $this->service = new ProdutoService();
    }

    public function index()
    {
        $listaProdutos = $this->service->getAll();

        $this->view('index', [
            'viewContent'=> 'produtos/index',
            'produtos'=> $listaProdutos,
        ]);
    }

    public function novo()
    {
        if(isset($_POST['cadastrar'])){
            $this->service->create($_POST);
            header("Location: /produtos/index");
        }

        $this->view('index', [
            'viewContent'=> 'produtos/new',
        ]);
    }

    public function editar($id)
    {
        if(isset($_POST['atualizar'])){
            $this->service->update($_POST, $id);
            header("Location: /produtos/index");
        }

        $produto = $this->service->findById($id);
        if(!$produto)
            header("Location: /produtos/index");

        $this->view('index', [
            'viewContent'=> 'produtos/edit',
            'produto' => $produto
        ]);
    }

    public function remover($id)
    {
        $this->service->delete($id);
        header("Location: /produtos/index");
    }

}