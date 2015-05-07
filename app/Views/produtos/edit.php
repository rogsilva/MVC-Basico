<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h2>Editar Produto</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="/produtos/editar/<?php echo $produto->id;?>" method="post">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" required="required" value="<?php echo $produto->nome;?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="text" name="valor" class="form-control" id="valor" required="required" value="<?php echo number_format($produto->valor, 2, '.', '');?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control" id="descricao" rows="4" required="required"><?php echo $produto->descricao;?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" name="atualizar" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Atualizar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/js/moneymask.js"></script>
<script>
    $(document).ready(function(){
        $('#valor').maskMoney({'thousands':'', 'decimal':'.', 'precision':2});
    });
</script>