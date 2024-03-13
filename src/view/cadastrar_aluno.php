<?php
// abrir_chamado.php
require_once "../../validador_acesso.php";
?>

<!-- O conteúdo do arquivo abrir_chamado.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro Aluno</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Cadastro Aluno
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            
            <div class="card-header">
              Cadastro de alunos
            </div>
  
            <div class="card-body">
              <div class="row">
                <div class="col">
                  

                  <form method="post" action="registra_aluno.php">
                    <div class="form-group">
                      <label>Nome</label>
                      <input name="nome" type="text" class="form-control" placeholder="Nome">
                    </div>


                    <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Matrícula</label>
                      <input name="matricula" type="text" class="form-control" placeholder="Matrícula">
                    </div>


                    <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Cursos</label>
                      <select name="categoria" class="form-control">
                        <option>Seleciona o Curso</option>
                        <option>ENG Soft</option>
                        <option>Medicina</option>
                        <option>Fisioterapia</option>
                        <option>ENG Biomedica</option>
                        <option>ENG Mecatronica</option>
                      </select>
                    </div>
                    
                  
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                    
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>