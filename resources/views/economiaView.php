<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .Titulo{
        text-align: center;
       }

       table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
    <h1 class="Titulo">Economias por PIB Per Capita</h1>
    
    <h2>Fundo Monetário Mundial (2024)</h2>
<table>
  <tr>
    <th>Posição</th>
    <th>País</th>
    <th style="color: blue;">US$</th>
  </tr>
  <tr>
 <?php
  
 $x = 0;
  foreach($ONUS as $ONU){
    echo"<tr>";
    echo"<td>".++$x."</td>";
    echo"<td>".$ONU->países."</td>";
    echo"<td>".$ONU->economia."</td>";
    echo"</tr>";
  }
 ?>
  </tr>
  <div>
  <a href="/Inicio"><h2>Retornar</h2></a>
  </div>
</table>
</body>
</html>