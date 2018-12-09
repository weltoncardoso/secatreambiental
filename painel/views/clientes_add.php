<!DOCTYPE html>
<html>
<head>
	<link rel="sortcut icon" href="logo.ico" type="image/x-icon" />
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
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
$('#regiao option').on('click', function(){
  var value = $( "#regiao option:selected").val();
    $('#estado option').css('display', 'none');
    $('.' + value).css('display', 'block');
    $('#estado').val($('.' + value).eq(0).val())
})
</script>

<h1>Adicionar - Clientes</h1>
</br>
<form method="POST" enctype="multipart/form-data">

        <table border="2" width="100%">
    <tr>
        <td>
    <label form="name">Nome</label><br/>
    <input onkeyup="c('input-1')"  placeholder="Nome..."  class="form-control" required class="inp_editar" type="text" name="nome" id="input-1"/><br/>
</td>
     <td>
    <label form="regiao">Regiao</label><br/>

<!-- select com as regiões do Brasil -->
<select id="regiao" name="regiao">
    <option value="CO">Centro-oeste</option>
    <option value="NE">Nordeste</option>
    <option value="N">Norte</option>
    <option value="SE">Sudeste</option>
    <option value="S">Sul</option>
</select>
</td>
</tr>
<td>
<!-- select com os estados do Brasil -->
<label form="estado">Estado</label><br/>
<select id="estado" name="estado">
    <option value="AC" class="N">Acre</option>
    <option value="AL" class="NE">Alagoas</option>
    <option value="AP" class="N">Amapá</option>
    <option value="AM" class="N">Amazonas</option>
    <option value="BA" class="NE">Bahia</option>
    <option value="CE" class="NE">Ceará</option>
    <option value="DF" class="CO">Distrito Federal</option>
    <option value="ES" class="SE">Espírito Santo</option>
    <option value="GO" class="CO">Goiás</option>
    <option value="MA" class="NE">Maranhão</option>
    <option value="MS" class="CO">Mato Grosso do Sul</option>
    <option value="MT" class="CO">Mato Grosso</option>
    <option value="MG" class="SE">Minas Gerais</option>
    <option value="PA" class="N">Pará</option>
    <option value="PB" class="NE">Paraíba</option>
    <option value="PR" class="S">Paraná</option>
    <option value="PE" class="NE">Pernambuco</option>
    <option value="PI" class="NE">Piauí</option>
    <option value="RJ" class="SE">Rio de Janeiro</option>
    <option value="RN" class="NE">Rio Grande do Norte</option>
    <option value="RS" class="S">Rio Grande do Sul</option>
    <option value="RO" class="N">Rondônia</option>
    <option value="RR" class="N">Roraima</option>
    <option value="SC" class="S">Santa Catarina</option>
    <option value="SP" class="SE">São Paulo</option>
    <option value="SE" class="NE">Sergipe</option>
    <option value="TO" class="N">Tocantins</option>
</select>
</td>
    <!-- <td>
    <label form="alunos">Quantidade de Alunos</label><br/>

        <input  placeholder="Quantidade de Alunos..."   class="form-control" required type="number" name="alunos"/><br/>

</td> -->
<td>
    <label form="imagem">Logo</label><br/>
	<input type="file" name="imagem" /><br/>
</td>
</table>
</br>
</br>
<div style="text-align:center">
	<input type="submit" value="Adicionar" class="btn btn-default" /></div>

</form>
</body>
</html>
