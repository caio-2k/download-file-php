<?php

//Link do arquivo, pode ser remoto ou local
$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

//Conteúdo do arquivo (o binário dele)
//essa função pode receber ou arquivo local ou url (link)
$content = file_get_contents($link);

//Tornando o conteúdo binário do arquivo legível pra transformar pelo que está vindo pela url
//em um arquivo real utilizando a função parse_url
$parse = parse_url($link);

//Nome base da variável parse a partir do link
$basename = basename($parse['path']);

//Criando o arquivo com o conteúdo no disco fisíco do servidor
$file = fopen($basename, "w+"); //Criando o arquivo

fwrite($file, $content); //Escrevendo o conteúdo do arquivo

fclose($file);

?>

<img src="<?=$basename?>">  
<!-- OBS: O símbolo "=" representa um "echo" do php, ou seja, estamos escrevendo
o basename -->