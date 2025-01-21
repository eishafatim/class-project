<?php 
include ('php/query.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<body>
    <div class="container">
        <form>
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" value="<?PHP echo $username?>"  name="uname" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <small id="helpId" class="text-danger" <?PHP echo $userNameErr?>>Help text</small>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" value="<?PHP echo $username?>" name="uemail" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                <small id="helpId" class="text-danger" <?PHP echo $userEmailErr?>>Help text</small>


                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" value="<?PHP echo $username?>" name="upassward" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                    <small id="helpId" class="text-danger" <?PHP echo $userPasswordErr?>>Help text</small>


                    <div class="mb-3">
                        <label for="" class="form-label">Confrim Password</label>
                        <input type="text" value="<?PHP echo $username?>" name="uconfirm password" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                        <small id="helpId" class="text-danger" <?PHP echo $userConfirmPasswordErr?> >Help text</small>
</form>
                    </div>
</body>

</html>
