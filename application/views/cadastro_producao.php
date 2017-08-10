<div class="container">
    <div class="starter-template">
        <h1>Nova Produção</h1>
        <p>Preencha os dados da produção que deseja cadastrar.</p>
    </div>

    <div class="col-md-12">
        <form class="form-control" action="<?= base_url() ?>producao/cadastro">
            <br />
            <br />
            <br />
            <div class="col-md-8">
                <div class="form-group">
                    <label for="InputTitulo">Título da Produção*</label>
                    <input type="text" class="form-control" id="InputTitulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="InputAutor">Autor(es)*</label>
                    <input type="text" class="form-control" id="InputAutor" placeholder="Autor(es)">
                </div>
                <div class="form-group">
                    <label for="InputDescricao">Descrição*</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputTamanho">Tamanho do Arquivo*</label>
                        <input type="number" class="form-control" id="InputTamanho">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputArea">Área de Interesse</label>
                        <select class="form-control">
                            <option>Gamificação</option>
                            <option>Letramento Digital</option>
                            <option>Informática na Academia</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="TipoProducao">Tipo de Produção</label>
                    <select class="form-control">
                        <option>Apostila</option>
                        <option>Apresentação</option>
                        <option>Jogo</option>
                        <option>Livro/Ebook</option>
                        <option>Publicação em Periódico</option>
                        <option>Vídeo</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </form>
    </div>
</div><!-- /.container -->