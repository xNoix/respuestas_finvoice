<?php
$empleados = [    ["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com"],
    ["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com"],
    ["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl"],
    ["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl"],
    ["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com"],
    ["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com"]
];

echo "<table><thead><tr><th>Nombre de pila</th><th>Edad</th><th>Área</th><th>Correo electrónico</th></tr></thead><tbody>";

foreach ($empleados as $index => $empleado) {
    if ($index % 2 != 0) {
        echo "<tr><td>{$empleado['Nombre']} {$empleado['Apellido']}</td><td>{$empleado['Edad']}</td><td>{$empleado['Area']}</td><td>{$empleado['Correo']}</td></tr>";
    }
}

echo "</tbody></table>";
?>

