<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Editar - Agenda</h1>
</br>

<form method="POST" enctype="multipart/form-data">

        <table border="1" width="100%">
    <tr>
        <td>
    <label form="name">Nome</label><br/>

	<input type="text" name="nome" value="<?php echo $agenda['title']; ?>" placeholder="Nome" class="form-control" /><br/>
</td>
    <td>
            <label form="date">Data </label><br/>

    	<input type="date" name="date" class="form-control" value="<?php echo $agenda['start']; ?>" placeholder="Data" class="form-control" /><br/>
</td>
</tr>
</table>
</br></br>
<div style="text-align:center">
    <input type="submit" value="Editar" class="btn btn-default" /></div>

</form>

</body>
</html>