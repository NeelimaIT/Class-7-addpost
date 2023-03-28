<?php
session_start();
// print_r($_SESSION['form_errors'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- navBar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Welcome to Online Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-2">
        <li class="iconbar">
          <a class="nav-link active" aria-current="page" href="#">Science Related Book</a>
        </li>
        <li class="iconbar">
          <a class="nav-link active" aria-current="page" href="#">Commerce Related Book</a>
        </li>
        <li class="iconbar">
          <a class="nav-link active" aria-current="page" href="#">Combined Books</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <!-- navbar end -->

    <!-- Form Start -->
    <div class="card col-lg-5 mx-auto mt-5">
    <div class="card-header text-center py-2 bg-dark text-light">Entry Your Library Form</div>


        <div class="card-body">
        <form action="./controller/addPost.php" method="GET">

                                   <!-- Subject NAme--> 
        
        <input value="<?php echo isset($_SESSION['old']['title']) ? 
        $_SESSION['old']['title'] : '' ?>"
        name="title" class="form-control mt-3"  type="text" 
        placeholder="Subject Name">
        <?php
        if (isset($_SESSION['form_errors']['title_error'])) {
          ?>
          <span><?= $_SESSION['form_errors']['title_error']?></span>
          <?php
        }
        ?>
                                <!-- Details of subject-->
        <textarea name="detail" class="form-control mt-3"  
        placeholder="Detail of Subjects"><?= isset($_SESSION['old']['detail']) ? $_SESSION['old']['detail'] : ''  ?></textarea>
        <?php
        if (isset($_SESSION['form_errors']['detail_error'])) {
          ?>
          <span><?= $_SESSION['form_errors']['detail_error']?></span>
          <?php
        }
        ?>
                           <!-- Student details-->
        <input value="<?php echo isset($_SESSION['old']['name']) ? 
        $_SESSION['old']['name'] : '' ?>"
        name="name" class="form-control mt-3"  type="name" 
        placeholder="Student Name">
        <?php
        if (isset($_SESSION['form_errors']['name_error'])) {
          ?>
          <span><?= $_SESSION['form_errors']['name_error']?></span>
          <?php
        }
        ?>


        <input value='<?php echo isset($_SESSION['old']['author']) ? $_SESSION['old']['author'] : '' ?>' name="author" class="form-control mt-3"  type="text" 
        placeholder="Author of Subjects">
        <button class="btn btn-success mt-3 rounded-0 w-100">Start Searching</button>
        </form>
        </div>

    </div>
    <!-- Form End -->
</body>
</html>

<?php
  session_unset();
?>