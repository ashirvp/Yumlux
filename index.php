&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge">
    &lt;link rel="stylesheet" href="bootstrap.css">
    &lt;title>Contact Us Form In Php&lt;/title>
&lt;/head>
&lt;body>

    &lt;div class="container">
        &lt;div class="row">
            &lt;div class="col-lg-6 m-auto">
                &lt;div class="card mt-5">
                    &lt;div class="card-title">
                        &lt;h2 class="text-center py-2"> Contact Us &lt;/h2>
                        &lt;hr>
                        &lt;?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '&lt;div class="alert alert-danger">'.$Msg.'&lt;/div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '&lt;div class="alert alert-success">'.$Msg.'&lt;/div>';
                            }
                        
                        ?>
                    &lt;/div>
                    &lt;div class="card-body">
                        &lt;form action="process.php" method="post">
                            &lt;input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            &lt;input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            &lt;input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            &lt;textarea name="msg" class="form-control mb-2" placeholder="Write The Message">&lt;/textarea>
                            &lt;button class="btn btn-success" name="btn-send"> Send &lt;/button>
                        &lt;/form>
                    &lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/body>
&lt;/html>
