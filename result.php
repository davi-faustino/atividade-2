<!-- 2) Realizar um sistema que retorne um texto qualquer com quebra de linha em qualquer virgula que tenha no texto numerando o mesmo a partir do numero 100. E que remova todas as vogais. 

Ex:(
    Entrada: Olha a bomba, que legal, acho que esta faltando um pin...
    Saida: 101 > lh  bmb
               102 > q Lgl
               103 > ch qu st fltnd um pn...
) -->
<?php
	$texto = explode(',', $_POST['texto']);
	$i = 100;

	$lowvgs = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
	$newtext = str_replace($lowvgs, "", $texto);


	foreach ($newtext as $v) {
		$i++;
    	echo $i ." > $v\n". "<br/>";
    	
	}

?>