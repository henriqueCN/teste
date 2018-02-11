<html>
<head>

</head>

<body>

<center><h1>Formulario de Login</h1>
	<br>
	<form method = "post" action = "">
	Email:   <input type = "text" 
	name = "email"><br>
	<br>
	Senha:   <input type = "password" name = "senha"><br>
    <br>
    <input type = "submit" name = "confirma" Value = "Confirmar">
    </form>
</center>
<?php
if(isset($_POST['confirma']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testa";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM tabela WHERE email='".$_POST['email']."'AND senha='".$_POST['senha']."';");
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
$email = $row['email'];
$senha = $row['senha'];
$id = $row['id'];
if($email == $_POST['email'] && $senha == $_POST['senha'])
	header("Location: tela.php");
}
}
}
?>
</body>
</html>