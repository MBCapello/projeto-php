<div class="container">
    <h1>Editar Contato</h1>
    <hr>
    <div class="d-flex justify-content-between">
        <form action="" method="post" class="d-flex-column mb-5 px-5 w-50 border-end border-secondary">
            <label class="form-label mt-1" for="nome">Nome</label>
            <input value="<?php echo $dados[0]; ?>" class="form-control" type="text" name="nome" id="nome"  required>
            <label class="form-label mt-1" for="email">E-mail</label>
            <input value="<?php echo $dados[1]; ?>" class="form-control" type="email" name="email" id="email"  required>
            <label class="form-label mt-1s" for="telefone">Telefone</label>
            <input value="<?php echo $dados[2]; ?>" class="form-control" type="tel" name="telefone" id="telefone" required>
            <br/>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Editar</button>
            
            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            Todos os dados estão corretos?<br/>
                            Click em "Finalizar" para salvar a edição.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" id="saveBtn">Finalizar</button>
                        </div>
                    </div>
                </div>
            </div> 
        </form >
        
        <div class="d-flex justify-content-center w-50">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gjmecwii.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        </div>
        
    </div>
</div>