<?php
include '../model/sql.php';

session_start();
$email=$_POST['email'];
$senha=$_POST['password'];

$consulta=$link->prepare('SELECT * FROM administrador WHERE login=:email AND senha=:senha');
$consulta->bindvalue(':email',$email);
$consulta->bindvalue(':senha',$senha);
$consulta->execute();
if($consulta->rowCount()>0){
    while ($row = $consulta->fetch(PDO::FETCH_OBJ)) {
    ?>
    <tr>
        <td><?=$row->login?></td>
        <td><?=$row->senha?></td>
       
    </tr>
<?php }
}else {
    echo "<script> alert('Usuario não Existente') </script>";
}
?>