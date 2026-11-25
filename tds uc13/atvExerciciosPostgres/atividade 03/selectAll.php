<?php
    include 'conexao.php';

    $conn = Obterconexao();

    if (!$conn) {
        echo "Erro ao conectar ao bando de dados PostgreSQL";
        exit;
    } else {
        $query = 'select id, descricao, valor, quantidade from produto';
        $result = pg_query($conn, $query);
        if (!$result) {
            echo "Erro ao executar a consulta";
            exit;
        } else {
            
            
            echo "<h2> Listagem Geral de Produtos </h2>";	
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
                echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
            }

            pg_result_seek($result, 0);
            echo "<br>";
            echo "<br>";
        }
    }
    echo "</table>";
    pg_close($conn);
?>