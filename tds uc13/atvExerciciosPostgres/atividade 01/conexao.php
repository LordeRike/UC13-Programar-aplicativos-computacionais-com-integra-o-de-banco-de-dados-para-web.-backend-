<?php
    $host = 'localhost';  // substitua pelo nome do host do seu servidor PostgreSQL
    $port = 5432;        // substitua pela porta do servidor PostgreSQL (normalmente 5432)
    $database = 'novaLoja'; // substitua pelo nome do banco de dados que você deseja conectar
    $user = 'postgres';      // substitua pelo nome de usuário do PostgreSQL
    $password = '1234'; 

    $conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
    if (!$conn) {
        echo "Erro ao conectar ao banco de dados PostgreSQL";
        exit;
    }else {
        $query = 'select id, descricao, valor, quantidade from produto';

        $result = pg_query($conn, $query);
        if (!$result) {
            echo "Erro ao executar a consulta";
            exit;
        } else {
            
            
            echo "<h2> Foma de exibição 2 </h2>";	
            echo "<table>";
            echo "<tr>";
            echo "<th>ID Produto</th>";
            echo "<th>Descrição</th>";
            echo "<th>Valor</th>";
            echo "<th>Quantidade</th>";
            echo "</tr>";

            if (pg_num_rows($result) > 0) {
                while ($row = pg_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";	
                    echo "<td>" . $row['descricao'] . "</td>";			
                    echo "<td>" . $row['valor'] . "</td>";
                    echo "<td>" . $row['quantidade'] . "</td>";
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
    pg_close($conn);
?>