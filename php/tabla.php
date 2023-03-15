<?php
/*
En el ejercicio, mencionan que  se debe crear una tabla que
contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional)

No entendi si se debe imprimir los indice se un impar o que el indice de un array que sea impar
imprimir dicha informacion, en todo caso se menciona que es opcional y para lograr resultado
solo se debe realizar una condicional con el indice del array es decir:
if($index %2 !==0) echo $empleados; 
*/

$empleados = [
    ["Nombre" => "Marcelo","Apellido" => "Velez", "Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],
    ["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],
    ["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],
    ["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],
    ["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],
    ["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col justify-center">
            <h2>Tabla de empleados</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre y Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Area</th>
            <th scope="col">Correo</th>
            </tr>       
        </thead>
  <tbody>
    <? foreach($empleados as $index=>$data): ?>
        <tr>
            <th scope="row"><? echo $index; ?></th>
            <td><? echo $data['Nombre'].' '.$data['Apellido']; ?></td>
            <td><? echo $data['Edad']; ?></td>
            <td><? echo $data['Area']; ?></td>
            <td><? echo $data['Correo']; ?></td>
        </tr>
    <? endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>