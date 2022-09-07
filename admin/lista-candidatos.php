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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Whatsapp</th>
                <th scope="col">Idade</th>
                <th scope="col">Situação Profissional</th>
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