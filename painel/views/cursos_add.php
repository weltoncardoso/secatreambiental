<!DOCTYPE html>
<html>
<head>
	<link rel="sortcut icon" href="logo.ico" type="image/x-icon" />
</head>
<body>
<script type="text/javascript">
function c(id) {
    var letra = document.getElementById(id).value;
    letra = letra.split("");
    var tmp = "";
    for (i = 0; i < letra.length; i++) {
        if (letra[i - 1]) {
            if (letra[i - 1] == " " || letra[i - 1] == ".") {
                letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
            }
        } else {
            letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
        }
        tmp += letra[i];
    }
    document.getElementById(id).value = tmp;
}
</script>

<h1>Cursos - Adicionar</h1>
<form method="POST" enctype="multipart/form-data">

        <table border="1" width="100%">
<tr>
    <td>
    <label form="titulo">Nome</label><br/>
	<input onkeyup="c('input-1')"  placeholder="nome"  class="form-control" required class="inp_editar" type="text" name="nome" id="input-1"/><br/>
</td>
<td>
        <label form="descricao">Descrição</label><br/>

    <textarea name="descricao"  maxlength="500" placeholder="Descrição da Noticia" class="form-control"></textarea><br/>
</td>
</tr>
<tr>
    <td>

         <label form="image">Imagem</label><br/>
    <input type="file" name="imagem" /><br/>

	</td>
    <td>
   

            <label form="preco">Preço</label><br/>

    <input name="preco" placeholder="Preço" class="form-control"/><br/>
</td>

</table>
</br>
	<input type="submit" value="Salvar" class="btn btn-default" />

</form>
</body>
</html>

