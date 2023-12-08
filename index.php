<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST["name"]; 
   $oplata = $_POST["oplata"];
   $min = $_POST["min"];
   $max = $_POST["max"];
   $num = $_POST["num"];

   if($min <= 1000 && $max <=2000){
    echo "Здравстуйте $name, в течении скорого времени на номер $num прийдет суведомление об операции.\n
    Сумма буста составляет 1300 рублей";
   }else{
    echo "I'm Sorry, на таком рейтинге я забустить не могу";
   }
}
?>