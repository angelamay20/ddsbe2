<!DOCTYPE html>

<html>

<head>
    <title>Dash</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
</head>
<style>
.container{
    
    margin-top:50px;
}
body {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/91.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}
</style>

<body class>
    <div class="container" style="margin-top:10px;">
        <div class="animated wow fadeInDown row justify-content-center">
            <div class="card w-100">
                <div class="card-header text-center bg-dark text-white">
                    <h1>Dashboard</h1>
                </div>
            <div class="card-body">
                <table class="table table-bordered" id="tbldata" width="100%">
                    <thead id="thead">
                        <form action="create" method="post">
                            <div class="form-group text-right">
                                <a href="login" class="btn btn-dark">Logout</a>
                            </div>
                        </form>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $id;
                            $username;
                            $password;
                            if (!empty($id)) {
                                for ($x = 0; $x < count($id); $x++) {
                            ?>    
                                <tr>
                                    <td class="text-center"><?php echo $id[$x]->id; ?></td>
                                    <td class="text-center"><?php echo $username[$x]->username; ?></td>
                                    <td class="text-center"><?php echo $password[$x]->password; ?></td>

                                </tr>
                            <?php
                                }
                            }else {
                                echo "The data you attempt to access doesn't exist or already deleted.";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script >
  
        new WOW().init();
    </script>
</body>
</html>