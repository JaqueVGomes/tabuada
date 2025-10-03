<?php 
// Aqui iria o código PHP 
// Mas não usei, pois o formulário envia para resultado-tabuada.php 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com POST</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* CSS dentro da tag style */
    body { background:#f8fafc; }
    header { background:#fff; border-bottom:1px solid #e5e7eb; }
  </style>
</head>
<body>
<header class="py-3 mb-4">
  <div class="container">
    <h1 class="h4">FATEC - Formulário com Tabuada</h1>
  </div>
</header>

<!-- copiei do grid do Bootstrap -->
<main class="container text-center my-4">
  <div class="row">
    <div class="col">
      <h5>Preencha os campos</h5>
      
      <!-- method POST = envia os dados de forma escondida
           action = para onde os dados vão (resultado-tabuada.php) -->
      <form method="POST" action="resultado-tabuada.php">
        
        <div class="mb-3">
          <label class="form-label">Nome</label>
         <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Semestre atual</label>
          <select name="semestre" class="form-select">
            <option value="" selected disabled>Selecione…</option>
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
          <input type="number" name="numero" min="1" max="10" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
      </form>
    </div>
  </div>
</main>
</body>
</html>
