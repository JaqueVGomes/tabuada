<?php 
// Aqui iria o código PHP se precisasse. 
// Nesse caso não precisamos declarar variáveis antes, o PHP vai receber via POST no resultado. 
// Como nas aulas anteriores - base do projeto aulas passadas 
?>
<!-- JAMAIS REALIZE ECHO ANTES DO <!DOCTYPE html>  isso é da aula de setembro mas não posso esquecer!-->  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com POST</title>

    <!-- link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS dentro da tag <style>,  */
        body { background:#f8fafc; }
        header { background:#fff; border-bottom:1px solid #e5e7eb; }
        .card { box-shadow:0 8px 24px rgba(16,24,40,.06); }
    </style>
</head>
<body>
<header class="py-3 mb-4">
    <div class="container">
        <h1 class="h4">FATEC - Formulário com Tabuada</h1>
   </div>
</header>
<main class="container my-4"> <!-- copiei do boostrap na parte de grid, so troquei o alinhamento -->
  <div class="row">
      <div class="col">
      <div class="card"> <!-- caixinha para ficar bonitinho -->
        <div class="card-header bg-white"><strong>Formulário</strong></div>
        <div class="card-body">
          <!-- method="POST" -> envia dados de forma segura
               action="resultado-tabuada.php" -> para onde vai os dados -->
          <form method="POST" action="resultado-tabuada.php">
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <!-- input type text, recebe nome digitado -->
              <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="mb-3">
              <label class="form-label">Semestre atual</label>
              <!-- select seleção, opções do 1º ao 6º semestre, igual fizemos na ultima aula  -->
              <select name="semestre" class="form-select">
                <option value="" disabled selected>Selecione…</option>
                <option value="1">1º</option>
                <option value="2">2º</option>
                <option value="3">3º</option>
                <option value="4">4º</option>
                <option value="5">5º</option>
                <option value="6">6º</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Número (1 a 10)</label>
              <!-- input type number -> só aceita números, com limite min e max -->
              <input type="number" name="numero" min="1" max="10" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpar</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
</main>
</body>
</html>
