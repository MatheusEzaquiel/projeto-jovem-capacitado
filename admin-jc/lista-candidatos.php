<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Candidatos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-image: linear-gradient(to right, #009933ff , #096136ff);">
    <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #095b3cff;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="../img/logo-jovem-capacitado.jpeg" alt="Projeto Jovem capacitado" width="100" height="50">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="lista-candidatos.php">Lista</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Whatsapp</th>
                <th scope="col">Idade</th>
                <th scope="col">Situação Profissional</th>
                <th scope="col">Editar/Remover</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once("../config/conexao.php");

                    try{
                        $selCandidato = "SELECT * FROM tb_candidato";
                        $resultSelCandidato = $connect->prepare($selCandidato);
                        $resultSelCandidato->execute();

                        $contSel = $resultSelCandidato->rowCount();
                        if($contSel > 0){
                            while($showC = $resultSelCandidato->FETCH(PDO::FETCH_OBJ)){
                                $showC->id_candidato;
                                $showC->nome_candidato;
                                $showC->cidade_candidato;
                                $showC->telefone_candidato;
                                $showC->whatsapp_candidato;
                                $showC->situacao_emprego;
                                $showC->idade_candidato;
                             
                                if($showC->situacao_emprego == 1){
                                    $sitEmprego = "Em busca de emprego";

                                }else if($showC->situacao_emprego == 2){
                                    $sitEmprego = "Empregado(a)";
                                }else if($showC->situacao_emprego == 3){
                                    $sitEmprego = "Estudante";
                                }else if($showC->situacao_emprego == 4){
                                    $sitEmprego = "Em busca do 1º emprego";
                                }else if($showC->situacao_emprego == 5){
                                    $sitEmprego = "Estagiário(a)";
                                }else{
                                    $sitEmprego = "Não informado";
                                }
                        
                ?>
    
                                <tr>
                                    <th scope='row'><?php echo $showC->id_candidato;?></th>
                                    <td><?php echo $showC->nome_candidato;?></td>
                                    <td><?php echo $showC->cidade_candidato;?></td>
                                    <td><?php echo $showC->telefone_candidato;?></td>
                                    <td><?php echo $showC->whatsapp_candidato;?></td>
                                    <td><?php echo $showC->idade_candidato;?></td>
                                    <td><?php echo $sitEmprego;?></td>
                                    <td>
                                        <a href="editar-candidato.php?idC=<?php echo $showC->id_candidato;?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </td>
                                </tr>
                <?php
                            }
                        }
                    }catch(PDOException $erro){
                        echo "ERRO de PDO (Seleção) = ".$erro->getMessage();
                    }
                ?>
            </tbody>
        </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
</body>
</html>