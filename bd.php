<?php


if ($_POST['email']== $_POST['emailconf'] AND $_POST['senha']== $_POST['senhaconf']) {
    echo "Usuario confirmado";


$pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','' );

$sql = $pdo->prepare("INSERT INTO 'usuario' VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?) ");

$sql->execute(array($_POST['nome'],
                    $_POST['sobrenome'],
                    $_POST['end'],
                    $_POST['num'],
                    $_POST['cidade'],
                    $_POST['estado'],
                    $_POST['sexo'],
                    $_POST['RG'],
                    $_POST['CPF'],
                    $_POST['Data de nascimento'],
                    $_POST['email'],
                   sha1($_POST['senha']),









));

echo "dados gravados "
echo "<meta http-equiv="refresh" content='3;'URL='index.php'/>";

} else {
    echo "usuario esta difirente";
}

















?>