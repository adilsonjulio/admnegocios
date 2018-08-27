		<?php
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$dbname = "administranego";
			//Criar a conexao
			$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
			?> <a href="index.php">Voltar</a><br><br><?php
			$verifica = 0;

			$nome_curso = $_POST['nome_curso'];
			$conteudo_curso = $_POST['conteudo_curso'];
			
			if(!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])){
				$result_cursos = "SELECT * FROM imoveis WHERE descricao LIKE '%$nome_curso%' or cidade LIKE '%$conteudo_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
				$verifica = mysqli_num_rows($resultado_cursos);

			}elseif(!empty($_POST['nome_curso'])){		
				$result_cursos = "SELECT * FROM imoveis WHERE descricao LIKE '%$nome_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);		
				$verifica = mysqli_num_rows($resultado_cursos);

			}elseif(!empty($_POST['conteudo_curso'])){		
				$result_cursos = "SELECT * FROM imoveis WHERE cidade LIKE '%$conteudo_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);	
				$verifica = mysqli_num_rows($resultado_cursos);	
			}
			
			if($verifica > 0){
				while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
					echo "Nome do curso: ".$rows_cursos['descricao']."<br>";
					echo "Conteúdo do curso: ".$rows_cursos['cidade']."<hr>";
				}
			}else{
				echo "Nenhum curso encontrado na pesquisa";
			}
			
			
		?>

