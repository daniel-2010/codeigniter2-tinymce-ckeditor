
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h1 class="page-header">Novo Usuário</h1>
    </div>


    <div class="col-md-12">
        <form action="<?= base_url() ?>usuario/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf..." required> 
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="nivel">Nível: </label>
                    <select id="nivel" class="form-control" name="nivel" required>
                        <option value="0"> --- </option>
                        <option value="1"> Administrador </option>
                        <option value="2"> Usuário </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha..." required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="status">Status: </label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="0"> --- </option>
                        <option value="1"> Ativo </option>
                        <option value="2"> Inativo </option>

                    </select>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>
                            <input type="checkbox" value="1" name="funcao" id="checkbox" onchange="verificarcampo()">
                            Possui função extra?
                        </label>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Digite a função extra." name="descricao_funcao" style="display:none;" id="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>
                            Descrição:
                        </label>
                        <textarea name="descricao"></textarea>
<!--                        <script>
                            CKEDITOR.replace('descricao');
                        </script>-->
                    </div>
                </div>
            </div>

            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
        </form>

    </div>


</div>
</div>
</div>

<script>
    function verificarcampo() {
        if ($("#checkbox").is(":checked")) {
            $("#text").css("display", "block");
        } else {
            $("#text").css("display", "none");
        }
    }

</script>