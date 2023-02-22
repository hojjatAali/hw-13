<?php
require_once '../public/header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="/edit" method="post">
    <div class="row d-flex justify-content-center pt-1">
        <div class="form-outline mb-4 col-lg-8 ">
            <input name="name" type="text" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">name:</label>
        </div>
        <div class="form-outline mb-4 col-lg-8 ">
            <input name="speciality" type="text" id="form2Example12" class="form-control" />
            <label class="form-label" for="form2Example12">speciality</label>
        </div>
        <div class="form-outline mb-4 col-lg-8 ">
            <input name="medicalId" type="text" id="form2Example22" class="form-control" />
            <label class="form-label" for="form2Example22">medical id</label>
        </div>
        <div class="form-outline mb-4 col-lg-8 ">
            <input name="NameOfEditedPart" type="file" id="form2Example32" class="form-control" />
            <label class="form-label" for="form2Example32">Profile picture</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block col-5">confirm</button>

        <p> go to home page </p>

        <a class="btn btn-primary btn-block mb-4" href="../Home/index.php"> HOME</a>


    </div>



</form>

</body>
</html>


