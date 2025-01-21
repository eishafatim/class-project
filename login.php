<?php 
include ('php/query.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <form method='post'>
<div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" value="<?PHP echo $username?>" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                <small id="helpId" class="text-danger" <?PHP echo $userEmailErr?>>Help text</small>
</div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" value="<?PHP echo $username?>" name="uPassward" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                    <small id="helpId" class="text-danger" <?PHP echo $userPasswordErr?>>Help text</small>
   <button name='userlogin'  class='btn' >login</button>
                </form>
                </div>


</body>
</html>