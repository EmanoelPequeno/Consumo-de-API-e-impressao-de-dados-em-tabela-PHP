<?php 
    include_once "imprime.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cursos</title>
    <style>
       .container {     
        position: absolute;
        top: 0; bottom: 0;
        left: 0; right: 0;
        margin: auto;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-8">
                <h1>UTD DATABASE - Cursos</h1><br>
                <table class="table">                             
                    <thead>                    
                        <th>id</th>
                        <th>Nome</th>  
                        <th>Status</th>                
                    </thead>
                    <tbody>
                        <?php while ($dado = $query->fetch_array()){ ?>
                            <tr>
                                <td><?=json_encode($dado['id_cursos'])?></td>
                                <td><?=json_encode($dado['nome'])?></td>
                                <td><?=json_encode($dado['status'])?></td> 
                            </tr>                           
                        <?php } ?>
                    </tbody>
                </table><br>   
                <a href="Cadastro.php">
                    <button type=button class="btn btn-primary">Voltar</button>      
                </a>            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>