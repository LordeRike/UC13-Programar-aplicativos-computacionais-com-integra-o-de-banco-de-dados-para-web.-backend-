<?php
    include 'conexao.php';

    $conn = Obterconexao();

    $listar = "%" . $_POST["listar"] . "%";
    $query = "SELECT id, descricao, valor, quantidade FROM produto WHERE descricao ILIKE $1";

    $stmt = pg_prepare($conn, "select_query", $query);
    $result = pg_execute($conn, "select_query", array($listar));

    if (!$result) {
        echo "Erro ao executar a consulta";
        exit;
    }

    echo "<h2>Forma de exibição 2</h2>";	
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID Produto</th>";
    echo "<th>Descrição</th>";
    echo "<th>Valor</th>";
    echo "<th>Quantidade</th>";
    echo "</tr>";

    if (pg_num_rows($result) > 0) {
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";	
            echo "<td>" . htmlspecialchars($row['descricao']) . "</td>";			
            echo "<td>" . htmlspecialchars($row['valor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['quantidade']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum resultado encontrado.</td></tr>";
    }
    
    echo "</table>"; 
    pg_close($conn);
?>