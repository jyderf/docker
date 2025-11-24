<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>


    <div class="container table">

        <p>Municipios</p>

        <?php
       

        // Crear conexión
        $conn = new mysqli("mysql", "root", "123", "municipios", 3306);


        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
        echo "Conexión exitosa<br>";

        // Realizar consulta SELECT
        $sql = "SELECT * FROM municipios.municipio";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data de cada fila
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["idmunicipio"] . " - Municipio: " . $row["municipio"] . "<br>";
            }
        } else {
            echo "0 resultados";
        }

        // Cerrar la conexión
        $conn->close();
        ?>


    </div>



</body>

</html>