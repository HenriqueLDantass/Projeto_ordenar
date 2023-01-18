<?php
//Conexão ao banco de dados
include "config.php";
if(isset($_GET['ordem']) && empty($_GET['ordem']) == false){
    $ordem = addslashes($_GET['ordem']);
    $sql = "SELECT *FROM usuarios ORDER BY ".$ordem;
}else{
    $ordem = "";
    $sql = "SELECT * FROM usuarios";
}
?>
<form method="GET">
<select name="ordem" style="margin: 5px 0px;" onchange="this.form.submit()">
    <option value=""></option>
    <option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':''; ?>>Pelo nome</option>
		<option value="idade" <?php echo ($ordem=="idade")?'selected="selected"':''; ?>>Pela idade</option>
</select>

</form>




<table border="1" width = "400px">
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>

    <?php
   
    $sql =$pdo->query($sql);
    if($sql->rowCount()>0){
        foreach($sql->fetchAll() as $pessoas):?>
                <tr>
                    <td><?php echo $pessoas['nome']?></td>
                    <td><?php echo $pessoas['idade']?></td>
                </tr>

            
        
        <?php endforeach;
    }

?>
</table>

