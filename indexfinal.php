<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http equiv="X-UA_Compatiable" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--CSS Section-->
    <style>
    #HeaderSection .navbar
{
    background-image:linear-gradient(to right,orange,grey);
    border-bottom: white 03px solid;
}

#HeaderSection .navbar a
{
    color:white;
}

#HeaderSection .navbar-name
{
    color:white;
}

#Footer .row
{
    
    float: inherit;
    margin-bottom: 0;
    text-align: center;
    
}

body{
    font-family: sans-serif;
    background: no-repeat center  center fixed;
    background-size: cover;
}

.main-section
{
    margin:0 auto;
    margin-top:120px;
    padding: 15px;
}

.modal-content
{
    background-color:#434e5a;
    opacity: .8;
    padding: 0 25px;
    border-radius: 10px;
}

.user-img img
{
width:135px;
height:120px;
border-radius:22mm;
}

.user-img
{
    margin-top: -60px;
    margin-bottom:45px;
}

.form-group
{
    margin-bottom:25px;
}

.form-group input
{
    height:38px;
    border-radius:5px;
    border:0;
    font-size: 18px;
    letter-spacing: 2px;

}

.font-input button
{
    width:40px;
    margin:5px 0 25px;
}

.btn-success
{
    background-color: #1c6288;
    font-size: 19px;
    border-radius: 5px;
    padding:7px 14px;
    border: 1px solid #daf1ff;
}

.btn-success:hover
{
    background-color: #13445e;
    border: 1px solid #daf1ff;
}

.forgot
{
    padding: 5px 0 25px;
}

    </style>
    <title>Event Planner</title>
</head>

<body>

    <!--Navigation-->
    <header id="HeaderSection">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-3">
            <div class="container-fluid">
                <div class="navbar-name">
                    <h2>Event Planner</h2>
                </div>

            </div>
        </nav>
    </header>
    <table>
        <tr>
            <td>
                <br>
            </td>
        </tr>
    </table>


    <!--MainSection-->
    <div id="MainSection">
        <div class="container">
            <div class="row">

                <!--First Section-->
                <div class="col-xs-7 col-sm-8 col-md">
                    <div class="mt-6">
                        <div class="modal-dialog text-center">
                            <div class="col-xs-7 main-section">
                                <div class="modal-content">
                                    <div class="col-12 user-img">
                                        <img src="face.jpeg">
                                    </div>

                                    <div class="col-xs-3 col-sm-4 col-md form-input">
                                        <form autocomplete="off" method="post" action="process.php">
                                                <div class="form-group text-white text-left">
                                                        <label for="text">User Name:</label>
                                                <input type="text" class="form-control" name="user"
                                                    placeholder="Enter User-Name">
                                            </div>
                                            <div class="form-group text-white text-left">
                                                    <label for="password">Password:</label>
                                                <input type="password" class="form-control" name="pass"
                                                    placeholder="Enter Password">
                                            </div>
                                            <button type="submit" class="btn btn-success">Log In</button>
                                        </form>
                                        <div class="col-12 forgot">
                                            
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <table>
        <tr>
            <td>
                <br>

            </td>
        </tr>
        <tr>
            <td>

                <br>
            </td>
        </tr>
    </table>


    <!--Footer-->

    <div id="Footer">
        <div class="container-fluid bg-dark text-white py-3 mb-0 fixed-bottom">
            <div class="row">
                <div class="col-xs-9 col-sm-10 col-md">
                    <div class="mt-6">
                        <small>
                            <p>COPYRIGHT 2019 &copy</p>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>