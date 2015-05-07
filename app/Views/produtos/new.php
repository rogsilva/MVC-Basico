<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h2>Novo Produto</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="/produtos/novo" method="post">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="text" name="valor" class="form-control" id="valor" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control" id="descricao" rows="4" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" name="cadastrar" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Cadastrar</button>
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