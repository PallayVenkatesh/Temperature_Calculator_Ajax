<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Celsius to Fahrenheit and back without reloading</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <style>
            .wrapper{
                padding-top: 50px;
            }
            body{
                background-image: url("assets/image/temp.jpg");
                
            }
            #form-content{
                margin: 0 auto;
                width: 500px;
            }
            #version{border-radius: 10px }
        </style>
    </head>
    <body>



        <div class="wrapper">

            <div class="container">

                <div class="page-header">
                    <h1 style="color: darkblue">
                        Celsius to Fahrenheit and back without reloading
                    </h1>
                </div>

                <div class="col-lg-12">

                    <div class="row">

                        <div id="form-content">

                            <form method="post" id="reg-form" autocomplete="off">

                                <div class="form-group">
                                    <input type="text" pattern="[0-9]*\.?[0-9]+" class="form-control" name="txt_fname" id="temp" placeholder="Enter Temperature in celcius or fahrenheit" required
                                           oninvalid="this.setCustomValidity('Please Enter valid Input')"/>
                                </div>

                                <div class="form-group">
                                    <div class="alert alert-info">
                                        <strong>Convert to</strong> 
                                    </div>
                                    <select name="scale" id="version"> <option value="celcius">Celsius</option> <option value="fahrenheit">Fahrenheit</option>  </select>
                                </div>







                                <hr />

                                <div class="form-group">
                                    <button class="btn btn-primary">Submit</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="assets/jquery-1.12.4-jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            
            
            
            
            $(document).ready(function () {

                // submit form using $.ajax() method

                $('#reg-form').submit(function (e) {

                    

                    e.preventDefault(); // Prevent Default Submission

                    $.ajax({
                        url: 'temperature.php',
                        type: 'POST',
                        data: $(this).serialize() // it will serialize the form data
                    })
                            .done(function (data) {
                                $('#form-content').fadeOut('slow', function () {
                                    $('#form-content').fadeIn('slow').html(data);
                                });
                            })
                            .fail(function () {
                                alert('Ajax Submit Failed ...');
                            });
                });



            });
        </script>
    </body>
</html>