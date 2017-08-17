<div class="container">
    <div class="starter-template">
        <h1>Nova Produção</h1>
        <p>Preencha os dados da produção que deseja cadastrar.</p>
    </div>

    <div class="panel panel-default col-md-offset-2 col-md-8">
        <form action="<?= base_url() ?>Producao/cadastrar" method="post">
            <br>
            <div class="col-md-12">
                <div class="col-md-12 form-group">
                    <label for="InputTitulo">Título da Produção*</label>
                    <input type="text" class="form-control" id="InputTitulo" name="titulo" placeholder="Título" required>
                </div>
                <div class="col-md-12 form-group">
                    <label for="InputAutor">Autor(es)*</label>
                    <input type="text" class="form-control" id="InputAutor" name="autor" placeholder="Autor(es)" required>
                </div>
                <div class="col-md-12 form-group">
                    <label for="InputDescricao">Descrição*</label>
                    <textarea class="form-control" name="descricao"rows="3" required></textarea>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputArea">Área de Interesse</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="area" value="1">
                                Gamificação
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="area" value="2">
                                Informática na Academia
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="area" value="3">
                                Letramento Digital
                            </label>
                        </div>
                    </div>
                </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="TipoProducao">Tipo de Produção</label>
                    <select class="form-control" name="tipo">
                        <option>Apostila</option>
                        <option>Apresentação</option>
                        <option>Jogo</option>
                        <option>Livro/Ebook</option>
                        <option>Publicação em Periódico</option>
                        <option>Vídeo</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 form-group">
                    <label for="InputLink">Link para download*</label>
                    <input type="text" class="form-control" id="InputLink" name="link" placeholder="http://.../" required>
                </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success col-md-6">Cadastrar</button>
            </div>
                <div class="col-md-12"><br><br></div>
            </div>
        </form>

    </div>

</div><!-- /.container -->