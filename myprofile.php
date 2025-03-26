<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Assets/bootstrap.css">
    <link rel="stylesheet" href="Assets/style.css">

    <title>My profile | Book Xchange</title>
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
                    <li><a class="dropdown-item active" href="myprofile.html">My Profile</a></li>
                    <li><a class="dropdown-item" href="myinventory.html">My Inventory</a></li>
                    <li><a class="dropdown-item" href="index.html">Sign Out</a></li>
                </ul>
            </li>
      </ul>
        </div>
      </div>
    </nav>

    <main class="flex-shrink-0">
        <div class="container">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My profile</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="editprofile.html"><img src="Images/editprofile.png" alt="EditProfileButton" style="width:200px;height:60px;"></a>
              </div>
            </div>
          </div>
    
          <div class="col-md-9 personal-info ">
            <form class="form-horizontal">
          <table  class="table table-sm profileborder">
            <tr>
              <td><img src="Images/avatar.png" class="avatar img-circle" alt="avatar" height="120px" width="120px"></td>
              <td>
                
                <div class="profile-head" style="text-align: left;">
                  <h3>
                      dwarfplanet
                  </h3><p class="proile-rating">RATING : <span>5/5</span></p>
                  <h6>
                      Books Given   : 3<br>
                      Book Borrowed : 2
                  </h6>
                  <br>
                </div>
              </td>
                </tr>
               
              <tr>  
                <td><label class="col-sm-7 control-label" style="text-align: right;">Username</label></td>
                <td><input type="text" class="form-control" disabled="true" value="dwarfplanet"></td>
              </tr>
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">First name</label></td>
                <td><input type="text" class="form-control" disabled="true"  value="Jay"></td>
              </tr>
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">Last name</label></td>
                <td><input type="text" class="form-control" disabled="true"  value="Patel"></td>
              </tr>
                <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">Birthdate</label></td>
                <td><input type="date" class="form-control" disabled="true"  value="07-09-1995"></td>
              </tr>
              <tr>  
                <td><label class="col-sm-7 control-label" style="text-align: right;">Phone</label></td>
                <td><input type="tel" class="form-control" disabled="true"  value="807 123-1234"></td>
              </tr>
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">E-mail address</label></td>
                <td><input type="email" class="form-control" value="dwarfplanet@email.com" disabled="true"></td>
              </tr>
              <tr>  
                <td><label class="col-sm-7 control-label" style="text-align: right;">Address line</label></td>
                <td><input type="text" class="form-control" disabled="true"  value="123 Arrowsmith Close"></td>
              </tr>
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">City</label></td>
                <td><input type="text" class="form-control" disabled="true"  value="Thunder Bay"></td>
              </tr>
              <tr>
                <td><label class="col-sm-7 control-label" style="text-align: right;">Postal Code</label></td>
                <td><input type="text" class="form-control" disabled="true"  value="P7B 5Y9"></td>
              </tr>
          </table>
            </form>
          </div>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Login History</h2>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Action</th>
                <th>Login Time</th>
                <th>IP Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Login</td>
                <td>March 31, 2021</td>
                <td>192.168.1.12</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Login</td>
                <td>March 28, 2021</td>
                <td>192.168.1.12</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Login</td>
                <td>March 23, 2021</td>
                <td>167.132.20.30</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Login</td>
                <td>March 21, 2021</td>
                <td>167.132.20.30</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Login</td>
                <td>March 16, 2021</td>
                <td>167.132.20.30</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Login</td>
                <td>March 13, 2021</td>
                <td>192.168.1.12</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Login</td>
                <td>March 11, 2021</td>
                <td>192.168.1.12</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Login</td>
                <td>March 10, 2021</td>
                <td>167.132.20.30</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Login</td>
                <td>March 7, 2021</td>
                <td>192.168.1.12</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Register</td>
                <td>March 1, 2021</td>
                <td>192.168.1.12</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <br>
      </main>
      
      <footer class="footer bg-dark mt-auto py-3 bg-light">
        <div class="container">
            <p class="text-light">copyright © 2021 bookxchange.ca</p>
        </div>
    </footer>
    <script src="Assets/bootstrap.bundle.min.js"></script>
</body>
</html>