<?php require_once "database.php";
session_start();
$user = $_SESSION["uname"];
if($user==""){
    header("location:signup.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>inShare - A file sharing website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/welcome.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <img src="Assets/image/logo.png" width="170" height="60" class="d-inline-block align-top" alt="">
            </a>
            <span class="user  ml-auto " style="color: #55ACEE;"><?= $user ?></span>
            <span class="nav-vr-line mx-3">|</span>
            <a href="logout.php"> <span class="user mr-5"><i class="fa fa-sign-out" aria-hidden="true"></i></span></a>
        </nav>
    </div>

    <section>
        <div class="container mt-5">
            <div class="main sendBox">
                <div class="imgBx"><img src="Assets/image/sendimg.png" alt="" /></div>
                <div class="container">
                    <div class="row it">
                        <div class="col-sm-12" id="one">
                            <form action="welcome.php" method="post" enctype="multipart/form-data">
                                <div id="uploader">
                                    <div class="row">
                                        <div class="col-sm-12 file-upl">
                                            <div class="fileUpload btn btn-orange">
                                                <div class="icon">
                                                    <img class="img-fluid" src="Assets/image/share_logo.png" alt="">
                                                </div>
                                                <span class="upl mt-2"><span class="browse">Browse</span>&nbsp;your
                                                    file</span>
                                                <input type="file" class="upload up" name="file_sender" id="file-upload" onchange="readURL(this);" />
                                            </div><!-- btn-orange -->
                                        </div><!-- col-3 -->
                                    </div>
                                    <div class="row uploadDoc">
                                        <div class="col-sm-12 email-area">
                                         <input type="text" class="form-control" name="file_name" placeholder="File Name">
                                        </div>
                                          <div class="col-sm-12 email-area">
                                          <input type="text" class="form-control" name="sender_email" placeholder="Email">
                                          </div>  
                                    </div>
                                    <!--row-->
                                </div>
                                <!--uploader-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div id="file-upload-filename"></div>
                                        <div class="btn-area text-center">
                                            <a class="btn btn-new" onclick="toggleForm();" name="received"><i class="fa fa-eye"></i>
                                                Received
                                                files</a>
                                            <input type="submit" name="send_btn" value="Send" class="btn btn-next">
                                            

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--one-->
                    </div><!-- row -->
                </div><!-- container -->
            </div>
            <div class="main receiveBox">
                <div class="formBx">
                    <div class="container-fluid receiveBox-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sender id</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <!---------------- File retrive from database------------------------->
                            <?php
                            if ($con==true) {
                                $sql1 = "Select * from user_signup where email='$user'";
                                $result = mysqli_query($con, $sql1);
                                while ($row = mysqli_fetch_assoc($result)) {
                                        
                            ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?=$row["sender_name"];?></td>
                                            <td><?=$row["file_n"];?></td>
                                            <td>DOWNLOAD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                            <?php
                                }
                            }
                            ?>
                        </table>
                        <form action="" onsubmit="return false;">
                            <a class="btn btn-send" onclick="toggleForm();"><i class="fa fa-paper-plane mr-2"></i>Send files</a>
                            </p>
                        </form>
                    </div>

                </div>
                <div class="imgBx"><img src="Assets/image/receiveimg.png" alt="" /></div>
            </div>
        </div>
    </section>

    <script src="Assets/js/index.js"></script>
    <!-- Optional JavaScript -->
    <script>
        var input = document.getElementById('file-upload');
        var infoArea = document.getElementById('file-upload-filename');
        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
        };
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST["send_btn"])) {
    $file = addslashes(file_get_contents($_FILES["file_sender"]["tmp_name"]));
    
    $s_email = $_POST["sender_email"];
    $f_name =  $_POST["file_name"];
    $sender = $user;
    $sql = "UPDATE user_signup set file_n ='$f_name', file='$file', sender_name='$sender' where email='$s_email'";
    if (mysqli_query($con, $sql)) {
        echo "<script> alert('File send successfully')</script>";
    } else {
        echo "<script> alert('Somthing went wrong')</script>";
    }
}

?>