
<?php
// O isset() verifica se uma variável existe
// Esse IF verifica se o campo "nome" foi enviado por POST
if (isset($_POST['nome'])) {
    echo "<h1>Resultado:</h1>";

    // Variáveis que vieram do formulário
    $nome = $_POST['nome'];
    $semestre = $_POST['semestre'];
    $numero = $_POST['numero'];

    echo "Nome: " . $nome . "<br>";
    echo "Semestre atual: " . $semestre . "º<br>";

    // cálculo de quantos semestres faltam
    $totalSemestres = 6; // cursos da Fatec tem 6 semestres
    $faltam = $totalSemestres - $semestre;
    if ($faltam < 0) { $faltam = 0; }

    echo "Faltam: " . $faltam . " semestre(s) para se formar.<br>";

    //essa parte fez quase eu desistir de tudo e trancar a facul :(
// título da tabuada
echo "<h2>Tabuada do número $numero</h2>";

// abre a tabela em HTML
echo "<table border='1' cellpadding='5'>";

// cabeçalho da tabela
echo "<tr>";
echo "<th>Número</th>"; //nao sei que nome dar
echo "<th>Operação</th>";
echo "<th>Resultado</th>";
echo "</tr>";

//  for -> repete de 0 até 10
for ($i = 0; $i <= 10; $i++) {

    // abre a linha
    echo "<tr>";

    // primeira coluna é para mostrar o valor do i
    echo "<td>$i</td>";

    // segunda coluna é para mostrar a operação (número x i)
    echo "<td>$numero x $i</td>";

    // terceira coluna é para mostrar o resultado da multiplicação
    echo "<td>" . ($numero * $i) . "</td>";

    // fecha a linha
    echo "</tr>";
}

// fecha a tabela 
echo "</table>";

// mais um surto, não nasci p isso 
} else {
    echo "<p style='color: red;'>Não veio nada por POST!</p>";
}

?>

