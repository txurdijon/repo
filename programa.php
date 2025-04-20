<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Tami</title>
</head>
<body>

    <h1>Hola Tami, aprieta el botón</h1>

    <form method="post">
        <button type="submit" name="apretar">Apretar</button>
    </form>

    <?php
    if (isset($_POST['apretar'])) {
        // URL pública de tu imagen en Azure Blob Storage
        $imagenURL = "https://micu.blob.core.windows.net/micontenedor/tami.jpg";
        echo "<br><img src='$imagenURL' alt='Imagen desde Azure' style='max-width:400px;'>";
    }
    ?>

</body>
</html>
