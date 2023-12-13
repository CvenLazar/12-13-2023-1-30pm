<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
        
      }
      table{
        margin:auto;
      }
     
    </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
                </li>
              
              </ul>
            </div>
          </nav>
        </header>
    </section>

    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Candidate Registration</h1>
                <form action="insert-candidate.php" method="post">
                <table>
                <tr>
                        <td class="td-1">Last Name :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="Lname" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">First Name :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="Fname" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Sex :</td>
                        <td><select name="Sex"  required >                          
                          <option>Male</option>
                          <option>Female</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input   required type="email" style="text-align: left;" name="Email"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Contact NO:  </td>
                        <td class="td-1"><input   required type="text" maxlength="11"  max="99999999999" style="text-align: left;" name="Contact"></td> 
                    </tr>
                    <tr>
                        <td class="td-1">Department :</td>
                        <td><select name="Department"  required >                          
                          <option>CITCS</option>
                          <option>CAS</option>
                          <option>CCJ</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Position :</td>
                        <td><select name="Position"  required >
                          
                          <option>President</option>
                          <option>Vice-President</option>
                          <option>Secretary</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Platform :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="Platform"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Achievements :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="Achievements"></td>
                    </tr>
                    
                    
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px; margin-top: 90px;">
                <img src="img/plmun.png" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
  
</body>
</html>