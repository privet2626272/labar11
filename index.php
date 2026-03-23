<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
echo "1. Файл создан и записан =)<br>";

$file = fopen("test.txt", "r");
$data = fread($file, filesize("test.txt"));
echo "2. Что внутри файла: " . $data . "<br>";
fclose($file);


rename ("test.txt", "mir.txt") or die ("Ошибка переименования файла");
echo "3. Файл переименован =)<br>";

       
       $dir = "folder";
       if(!file_exists($dir)){
  	    if(mkdir($dir)){
  	        echo "Папка создана =)";
  	    } else{
              echo "Ошибка: папка не может быть создана =(";
  	    }
       } else{
          echo "Папка уже существует =()";
       }

?>
