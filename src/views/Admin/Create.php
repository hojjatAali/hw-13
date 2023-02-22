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
<form action="/Add" method="post">
<div class="row d-flex justify-content-center pt-1">
    <div class="form-outline mb-4 col-lg-8 ">
        <input name="NameOfPart" type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Name of part</label>
    </div>
    <button type="submit" class="btn btn-primary btn-block col-5">Create Part</button>

</div>



</form>

</body>
</html>


