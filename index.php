<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="mx-auto" style="width: 1000px;" >
<h1>Crear empleado</h1>
<div class="alert alert-primary" role="alert">
    Los campos con asterisco son obligatorios!
</div>
<form class="row g-3" method="post" action="">
    <div class="col-md-6">
        <label for="inputName" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="inputName" id="inputName">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Correo</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Sexo</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Area</label>
        <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Gerencia</option>
            <option>Contabilidad</option>
        </select>
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Descripccion</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Roles</label>
        <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Profesional de proyectos
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
        <label class="form-check-label" for="defaultCheck2">
            Gerente Estrategico
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
        <label class="form-check-label" for="defaultCheck2">
            Auxiliar administrativo
        </label>
    </div>
    <div class="col-12">
        <button type="submit" name="reg" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>

<?php
    if(isset($_POST['reg']))
    {
        echo( $_POST['inputName']);
        /*
        $name = $_POST['inputName'];
        header("Location: http://localhost/nexura/insert.php?table=0&nombre=$name&area_id=1&boletin=3&desc=Descripcion&email=correo@ut.edu.co&sexo=F");
        */
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>