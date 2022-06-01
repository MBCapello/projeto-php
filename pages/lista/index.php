<div class="container">
    <h1>Lista</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telfone</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($contatos as $index => $contato) {
                    $partes = explode(";", $contato);

                    echo '<tr>';
                        echo "<td>{$partes[0]}</td>";
                        echo "<td>{$partes[1]}</td>";
                        echo "<td>{$partes[2]}</td>";
                        echo "<td class='d-flex justify-content-center'>
                                    <div class='dropdown'>
                                        <button class='btn btn-warning btn-sm dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                            </svg>
                                            Editar/excluir
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                        <li><a class='dropdown-item link-primary' href='/editar?id={$index}'>Editar</a></li>
                                        <li><a class='dropdown-item link-danger' href='/excluir?id={$index}'>Excluir</a></li>
                                        <li><a class='dropdown-item'>Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>";
                    '</tr>';
                    
                };
            ?>
        </tbody>
    </table>
</div>