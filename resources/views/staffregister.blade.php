<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .bg-img {
            background-image: url("");
            background-repeat: no-repeat;
            position: relative;
            background-size: cover;
            background-position: center;
            background-color: rgb(104, 162, 238);
           
        }
        label{
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            font-size:  large;
        }
        input{
            font-style: italic;
            font-size: small;
          
        }
        select{
            font-style: italic;
            font-size: small;
        }
        button{
         margin-left: 180px;
        }
    </style>
</head>
<body>
    <div class="bg-img">
        <form action="" method="POST" class="container" style="border: solid; width: 600px; background-color: rgb(248, 246, 242);">
          <h4 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><u> Register Here</u></h4>
      <table cellpadding="5">
          <tr>
              <td style="width: 40%;">
                  <label for="first Name">First Name :</label><br>
                  <input type="text" name="firstname" placeholder="First Name" style="width: 100%;">
                </td>
              <td style="width: 40%;"> <label for="first Name">Last Name :</label><br>
                <input type="text" name="Lastname" placeholder="Last Name Name" style="width: 100%;"></td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="user">Username :</label><br>
              <input type="text" name="user" placeholder="Username" style="width: 100%;">
            </td>
        </tr>
        <tr>
            <td style="width: 40%;">
                <label for="first Name">Password:</label><br>
                <input type="password" name="pass" placeholder="Password" style="width: 100%;">
              </td>
            <td style="width: 40%;"> <label for="first Name">Confirm Password :</label><br>
              <input type="password" name="cpass" placeholder="Confirm Password" style="width: 100%;"></td>
        </tr>
          <tr>
              <td colspan="2">
                <label for="email">Email :</label><br>
                <input type="text" name="email" placeholder="Email" style="width: 100%;">
              </td>
          </tr>

          <tr>
            <td style="width: 40%">
              <label for="mobile">Conatct Number :</label><br>
              <input type="number" name="mobile" placeholder="Mobile Number" style="width: 100%;">
            </td>
            <td style="width: 40%;">
                <label for="email">DOB:</label><br>
                <input type="date" name="email" style="width: 100%;">
             </td>  
        </tr>
        
            
        
        <tr>
        <td style="width: 40%">
            <label for="gender">Gender :</label><br>
            <input type="radio" id="male" name="gender" value="male">
             <label for="male">Male</label>&nbsp;&nbsp;&nbsp;
             <input type="radio" id="female" name="gender" value="female">
             <label for="male">Female</label><br>        
              </td>
            </tr>
        <tr>
            <td colspan="2">
                <label for="address">Address :</label><br>
               <textarea name="address" id="address" cols="40" rows="4"></textarea>
              </td>
        </tr>
        <tr>
            <td style="width: 40%;">
                <label for="Qualification">Qualification :</label><br>
                <input type="text" name="quali" placeholder="Qualification" style="width: 100%;">
              </td>
            <td style="width: 40%;"> <label for="position">Position you are applying for:</label><br>
                <select name="position" id="post" style="width: 100%;">
                    <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Head Of Department">Head Of Department</option> 
                  </select>
        </tr>
        <tr>
            <td style="width: 40%;">
              <label for="exp">Year of  Experience :</label><br>
              <input type="text" name="exp" placeholder="Experience" style="width: 100%;">
            </td>
        </tr>

        <tr>
            <td  style="width: 40%;">
                <label for="exampleFormControlFile1">Profile :</label>
                <img src="{{url('images/staicon.png')}}" alt="" width="50px"><br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" width="100%">
             
            </td>

        </tr>
        <tr>
            <td><button class="btn btn-primary">Register</button></td>
        </tr>
      </table>
      </form>
      </div>
  
    
</body>
</html>