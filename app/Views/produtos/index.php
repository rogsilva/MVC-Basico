<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h2>Produtos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="/produtos/novo" class="btn btn-info" title="Novo Produto"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($produtos)):?>
                        <?php foreach($produtos as $produto):?>

                            <tr>
                                <td><?php echo $produto->nome;?></td>
                                <td><?php echo (strlen($produto->descricao) > 50) ? substr($produto->descricao, 0, 50).'...' : $produto->descricao;?></td>
                                <td><?php echo number_format($produto->valor, 2, ',', '.');?></td>
                                <td><?php echo date('d/m/Y H:i:s', strtotime($produto->created_at));?></td>
                                <td><?php echo date('d/m/Y H:i:s', strtotime($produto->updated_at));?></td>
                                <td>
                                    <a href="/produtos/editar/<?php echo $produto->id;?>" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="/produtos/remover/<?php echo $produto->id;?>" title="Remover" onclick="return confirm('Este registro será removido!')"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>

                    <?php else :?>
                        <tr>
                            <td colspan="6">Não há produtos cadastrados</td>
                        </tr>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
