<?php

//phpinfo();
$host = 'localhost';  // substitua pelo nome do host do seu servidor PostgreSQL
$port = 5432;        // substitua pela porta do servidor PostgreSQL (normalmente 5432)
$database = 'loja'; // substitua pelo nome do banco de dados que você deseja conectar
$user = 'postgres';      // substitua pelo nome de usuário do PostgreSQL
$password = '1234';    // substitua pela senha do PostgreSQL

$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
if (!$conn) {
	//Se ocorreu alguma falha na conexão exibe uma mensagem e aborta a conexão do restante do código
    echo "Erro ao conectar ao banco de dados PostgreSQL.";
    exit;
}else{
	//Se conectou podemos fazer nosso select, que neste exemplo ficará salvo na variavel $query
    $query = 'select id_cliente, nome, endereco from cliente';
	
	// Armazena na variavél #result o resultado da consulta
	$result = pg_query($conn, $query);
	if (!$result) {
		// Se deu algum erro na execução do select dá uma mensagem e aborta o resto da execução do código
		echo "Erro ao executar a consulta.";
		exit;
	}else
	{
		// Se o select foi executado com sucesso
		echo "<h2> Foma de exibição 1 </h2>";	 
		if (pg_num_rows($result) > 0) { // teste para saber se o select retornou algum registro
			while ($row = pg_fetch_assoc($result)) { // esse while percorre registro à registro do resultado do select
				// Acessar os valores das colunas pelo nome
				$ID = $row['id_cliente']; // obtem o valor do campo idcliente da linha que esta sendo lida e armazena na variavel $ID
				$NOME = $row['nome'];
				$ENDERECO = $row['endereco'];
			
			echo $ID." - ".$NOME." - ".$ENDERECO."<br>"; // monta uma mensagem com as variaveis alimentadas anteriromente
			}
				
		} else {
			echo "Nenhum resultado encontrado.";
		}
		
		// Reposiciona o ponteiro no primeiro registro
		pg_result_seek($result, 0);
		echo "<br>";
		echo "<br>";

       // Exibir o resultado em uma tabela
	   //Monta o cabeçalho da tabela
		echo "<h2> Foma de exibição 2 </h2>";	
		echo "<table>";
		echo "<tr>";
		echo "<th>ID Cliente</th>";
		echo "<th>Nome</th>";
		echo "<th>Endereço</th>";
		echo "</tr>";

		// se o select retornou registros percorre registro a registro montando as linhas
		if (pg_num_rows($result) > 0) {
			while ($row = pg_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['id_cliente'] . "</td>";	
				echo "<td>" . $row['nome'] . "</td>";			
				echo "<td>" . $row['endereco'] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
		}
		echo "</table>";

		pg_result_seek($result, 0);
		echo "<br>";
		echo "<br>";
		echo "<h2> Foma de exibição 3 </h2>";		
		echo "<table>";
		echo "<tr>";
		echo "<th>ID Cliente</th>";
		echo "<th>Nome</th>";
		echo "<th>Endereço</th>";
		echo "</tr>";
    // se o select retornou registros percorre registro a registro montando as linhas
	// semelhante ao anterior mas utilizando o forech
		if (pg_num_rows($result) > 0) {
			while ($row = pg_fetch_assoc($result)) {
				echo "<tr>";
				foreach ($row as $value) {
					echo "<td>" . $value . "</td>";
				}
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
		}

		echo "</table>";
	}	

}

pg_close($conn);
?>