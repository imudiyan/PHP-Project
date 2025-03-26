
<?php
include ("connect.php");
include ("function.php");
$error = "";

if (!(logged_in())){
  header (location:signin.php);
}

$useremail= $_SESSION['email'];

$getbookdata = mysqli_query($connection,"Select * from  books where User_id in( select User_id from registered_user where Email= '$userEmail'");
$retrivebookdate = mysqli_fetch_assoc ($getbookdata);

print_r($retrivebookdate);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Assets/bootstrap.css">
    <link rel="stylesheet" href="Assets/style.css">

    <title>Edit Book | Book Xchange</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Book Xchange</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="browse.html">Browse Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addbook.html">Add Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>
          </ul>

          <ul class="navbar-nav navbar-right">
            <li><a class="nav-link">Last Login <b>March 31, 2021</b>.</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">dwarfplanet</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    <li><a class="dropdown-item" href="myprofile.html">My Profile</a></li>
                    <li><a class="dropdown-item" href="myinventory.html">My Inventory</a></li>
                    <li><a class="dropdown-item" href="index.html">Sign Out</a></li>
                </ul>
            </li>
      </ul>
        </div>
      </div>
    </nav>

    <main class="flex-shrink-0">
      <div class="container py-4 container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Book Information</h1>
        </div>

        <div class="row">
          <form class="form-horizontal addbook">
            <h3>Book Details</h3><hr>
            <table   class="table table-sm profileborder">
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: left;" for="bookCover">Book Cover</label></td>
                <td>
                  <img src="Images/book-cover.jpg" class="avatar img-circle" alt="avatar" height="120px" width="90px">
                  <h6>Upload a different photo...</h6>
                  <input type="file" class="form-control" id="bookCover">
                </td>
              </tr>
            <tr>  
              <td><label class="col-sm-7 control-label" style="text-align: left;">Book Title</label></td>
              <td><input type="text" class="form-control" value="1984"></td>
            </tr>
            <tr>
              <td><label class="col-sm-7 control-label" style="text-align: left;">Book's Author</label></td>
              <td><input type="text" class="form-control" value="George Orwell"></td>
            </tr>
            <tr>
              <td><label class="col-sm-7 control-label" style="text-align: left;">Book ISBN</label></td>
              <td><input type="text" class="form-control" value="9780141391700"></td>
            </tr>
              <tr>
              <td><label class="col-sm-7 control-label" style="text-align: left;">Book's Genre</label></td>
              <td><input type="text" class="form-control" value="Fiction"></td>
            </tr>
              <tr>
              <td><label class="col-sm-7 control-label" for="BookCondition" style="text-align: left;">Book Condition</label></td>
              <td>
                <select class="form-control" id="BookCondition">
                  <option>New</option>
                  <option>Decent</option>
                  <option>Not so great</option>
                </select>
              </td>
            </tr>
          </table>
          </form>
          <br>
          <form class="form-horizontal addbook">
            <h3>Pickup Details</h3><hr>
            <table   class="table table-sm profileborder">
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: left;" for="bookCover">Phone</label></td>
                <td><input type="text" class="form-control" id="bookCover" value="807 123-1234"></td>
              </tr>
            <tr>  
              <td><label class="col-sm-7 control-label" style="text-align: left;">Email</label></td>
              <td><input type="email" class="form-control" value="dwarfplanet@email.com"></td>
            </tr>
            <tr>
              <td><label class="col-sm-7 control-label" style="text-align: left;" for="pickupNote">Note</label></td>
              <td><textarea class="form-control" id="pickupNote" rows="3" value="pls only call me between 7am-9pm"></textarea></td>
            </tr>
            <tr>
              <td><label class="col-sm-7 control-label" for="shareInfo" style="text-align: left;">Share</label></td>
              <td>
                <select class="form-control" id="shareInfo">
                  <option>Everyone</option>
                  <option>Registred User</option>
                </select>
              </td>
            </tr>
          </table>
          </form>
          <br>
          <a href="myinventory.html"><img src="Images/update.png" alt="updateButton" style="width:200px;height:60px;"></a>

        </div>

    
      </div>
    </main>

      <footer class="footer bg-dark mt-auto py-3 bg-light">
        <div class="container">
            <p class="text-light">copyright © 2021 bookxchange.ca</p>
        </div>
    </footer>
    <script src="Assets/bootstrap.bundle.min.js"></script>
</body>
</html>