 <?php
 session_start();    
    include_once 'conexao.php';
    $nome = $_POST['nomealuno'];
    $email = $_POST['emailaluno'];
    $senha = $_POST['senhaaluno'];
    $confsenhaaluno = $_POST['confsenhaaluno'];
    $rm = $_POST['rm'];
    $dataaluno = $_POST['dataaluno'];
    $descaluno = $_POST['descaluno'];
    $cursoaluno= $_POST['cursoaluno'];
    $habilidade = $_POST['habilidade'];
    $telaluno = $_POST['telefonealuno'];

    $insercao = "INSERT INTO `aluno`(`nomealuno`,`emailaluno`,`senhaaluno`,`confsenhaaluno`,`rm`,`dataaluno`,`descaluno`,`cursoaluno`,`habilidade`,`telefonealuno`) VALUES ('','','','','','','','','','')";
    
    $stmt = $pdo->prepare($consulta);
    
    // Vincula os parâmetros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    
    // Executa a consulta
    $stmt->execute();

    // Obtém o número de registros encontrados
    $registros = $stmt->rowCount();
    
    // Obtém o resultado
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultado);
    
    
    if($registros == 1){
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header('Location: restrita.php');
        //echo "ACESSO PERMITIDO PARA A RESTRITA.PHP";
    }else{        
        //echo "VOCÊ NÃO TEM PERMISSÃO";
        header('Location: index.php');
      }

        ?>