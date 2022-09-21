<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jovem Capacitado | Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body style="background-image: linear-gradient(to right, #009933ff , #096136ff);">
    <nav class="navbar navbar-expand-lg" style="background-color: #095b3cff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo-jovem-capacitado.jpeg" alt="Projeto Jovem capacitado" width="100" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 style="text-align: center;">Faça seu Cadastro</h2>

        <form action="" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input name="nome-candidato" type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo" required>
            </div>

            <div class="col-md-6">
                <label for="exampleDataList" class="form-label">Cidade</label>
                <input name="cidade-candidato" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Sua Cidade" required>
                <datalist id="datalistOptions">
                    <option value="Horizonte">
                    <option value="Pacajus">
                    <option value="Chorozinho">
                    <option value="Itaitinga">
                </datalist>
            </div>

            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Telefone para contato</label>
                <input name="telefone-candidato" type="text" class="form-control" id="inputAddress" placeholder="85900000000" required>
            </div>

            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Whatsapp</label>
                <input name="whats-candidato" type="text" class="form-control" id="inputAddress" placeholder="85900000000" required>
            </div>

            <div class="col-md-8">
                <label for="inputState" class="form-label">Situação Profissional</label>
                <select name="situacao-emprego-candidato" id="inputState" class="form-select" required>
                    <option selected>Selecione</option>
                    <option value="1">Em busca de emprego</option>
                    <option value="2">Empregado</option>
                    <option value="3">Estudante</option>
                    <option value="4">Em busca do 1º emprego</option>
                    <option value="5">Estagiário</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="inputZip" class="form-label">Idade</label>
                <input name="idade-candidato" type="number" class="form-control" id="inputZip" max="90" min="6" required>
            </div>

            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" name="btn-cadastro" class="btn btn-primary btn-sm" style="--bs-btn-padding-y: .5rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 1rem;">Enviar</button>
            </div>
        </form>
        <?php
            include("config/conexao.php");
            
            if(isset($_POST["btn-cadastro"])){
                $nomeC = $_POST["nome-candidato"];
                $cidadeC = $_POST["cidade-candidato"];
                $telC = $_POST["telefone-candidato"];
                $whatsC = $_POST["whats-candidato"];
                $sitEmpregoC = $_POST["situacao-emprego-candidato"];
                $idadeC = $_POST["idade-candidato"];
                

                $cadCandidato = "INSERT INTO tb_candidato (nome_candidato,cidade_candidato,telefone_candidato,whatsapp_candidato,situacao_emprego,idade_candidato) VALUES (:nomeC,:cidadeC,:telC,:whatsC,:situacaoC,:idadeC)";
                try{
                    $resultCad = $connect->prepare($cadCandidato);
                    $resultCad->bindParam(":nomeC",$nomeC,PDO::PARAM_STR);
                    $resultCad->bindParam(":cidadeC",$cidadeC,PDO::PARAM_STR);
                    $resultCad->bindParam(":telC",$telC,PDO::PARAM_STR);
                    $resultCad->bindParam(":whatsC",$whatsC,PDO::PARAM_STR);
                    $resultCad->bindParam(":situacaoC",$sitEmpregoC,PDO::PARAM_STR);
                    $resultCad->bindParam(":idadeC",$idadeC,PDO::PARAM_STR);
                    $resultCad->execute();

                    $cont = $resultCad->rowCount();
                    if($cont > 0){
                        echo"
                        <div class='alert alert-primary' role='alert'>
                            Dados enviados!
                        </div>";
                    }
                }catch(PDOException $erro){
                    echo "ERRO de PDO (Cadastro) = ".$erro->getMessage();
                }
                
            }

            
        ?>
            

            
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
    <form action="" method="post">

    </form>
</body>
</html>