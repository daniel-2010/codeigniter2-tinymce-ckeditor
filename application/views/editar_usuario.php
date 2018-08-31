
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>


    <div class="col-md-12">
        <form action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." value="<?= $usuario[0]->nome; ?>" required>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf..." value="<?= $usuario[0]->cpf; ?>"required> 
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." value="<?= $usuario[0]->endereco; ?>"required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="nivel">Nível: </label>
                    <select id="nivel" class="form-control" name="nivel" required>
                        <option value="0"> --- </option>
                        <option value="1" <?= $usuario[0]->nivel == 1 ? ' selected ' : ''; ?>> Administrador </option>
                        <option value="2" <?= $usuario[0]->nivel == 2 ? ' selected ' : ''; ?>> Usuário </option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email..." value="<?= $usuario[0]->email; ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input type="button" class=" btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="status">Status: </label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="0"> --- </option>
                        <option value="1" <?= $usuario[0]->status == 1 ? ' selected ' : ''; ?>> Ativo </option>
                        <option value="2" <?= $usuario[0]->status == 2 ? ' selected ' : ''; ?>> Inativo </option>

                    </select>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>
                            <input type="checkbox" value="1" name="funcao" id="checkbox" onchange="verificarcampo()" <?= $usuario[0]->funcao==1?' checked ':''; ?>>
                            Possui função extra?
                        </label>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Digite a função extra." name="descricao_funcao" value="<?= $usuario[0]->descricao_funcao ?>" <?= !$usuario[0]->funcao==1?' style="display:none;" ':''; ?> id="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>
                            Descrição:
                        </label>
                        <textarea name="descricao"><?= $usuario[0]->descricao ?></textarea>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for='senha_antiga'>Senha antiga:</label>
                            <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for='senha_nova'>Nova Senha:</label>
                            <input type="password" name="senha_nova" id="senha_nova" onkeyup="checarSenha()" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for='senha_confirmar'>Confirmar Senha:</label>
                            <input type="password" name="senha_confirmar" id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <div id="divcheck">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="enviarsenha" disabled>Salvar</button>
                </div>
            </div>
        </form>
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

<script>
    $(document).ready(function() {
        $("#senha_nova").keyup(checkPasswordMatch);
        $("#senha_confirmar").keyup(checkPasswordMatch);

    });
    function checarSenha() {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();


        if (password == '' || '' == confirmPassword) {
            $("#divcheck").html("<span style='color: red'>Campo de senha vazio!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else if (password != confirmPassword) {
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else {
            $("#divcheck").html("<span style='color: green'>Senha iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script>