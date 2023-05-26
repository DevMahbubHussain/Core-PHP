<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Using Trait Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
         <?php   
                if($_SERVER['REQUEST_METHOD']==='POST')
                {
                    try
                    {
                        include_once('./classes/UserRegistration.php');
                        $registration = new UserRegistration();
                        $registration->registerUser($_POST['fname'], $_POST['lname'], $_POST['email'],$_FILES['image']);  
                    }
                    catch(Exception $e)
                    {
                        echo ' Error ' .  $e->getMessage();
                    }
                }
          ?>
         <?php require_once('view/form.php');?>
              <div class="col-md-4"></div>
        </row>
    </div>

</body>
</html> 