<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $dobErr = $genderErr = $emailErr = $degreeErr =$bloodErr =$religionErr =$presentAddressErr= $lnameErr=$permanentAddressErr= $phoneErr= $PersonalWebsiteLinkErr=$usernameErr=$passErr="" ;

$name = $lname = $email = $dob = $gender = $comment = $degree =$blood =$religion =$presentAddress =$permanentAddress=$phone =$PersonalWebsiteLink = $username= $password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required and must be from letters, dashes, spaces and must not start with dash";
  } 
  elseif(strlen($name)<= 2) {
     $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $nameErr = "Name must be from letters, dashes, spaces and must not start with dash";

}
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required and must be from letters, dashes, spaces and must not start with dash";
  } 
  elseif(strlen($lname)<= 2) {
     $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
    $lnameErr = "Last Name must be from letters, dashes, spaces and must not start with dash";

}
  }
  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required and must be from letters, dashes, spaces and must not start with dash";
  } 
  elseif(strlen($username)<= 2) {
     $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)){
    $usernameErr = "User Name must be from letters, dashes, spaces and must not start with dash";

}
  }

   if(empty($_POST["presentAddress"])) 
    {
        $presentAddressErr= "present Address is required ";
    }else{
      $presentAddress= test_input($_POST["presentAddress"]);
    }
    if(empty($_POST["permanentAddress"])) 
    {
        $permanentAddressErr= "permanent Address  is required ";
    }else{
      $permanentAddress= test_input($_POST["permanentAddress"]);
    }

    if(empty($_POST["phone"]))
    {
        $phoneErr= "Phone is required";
    }else{
      $phone=test_input($_POST["phone"]);
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }
if (empty($_POST["religion"])) {
    $religionErr = "religion is required";
  } else {
    $religion = test_input($_POST["religion"]);
  }
 if (empty($_POST["PersonalWebsiteLink"])) {
    $PersonalWebsiteLinkErr = "website link is required";
  } else {
    $PersonalWebsiteLink = test_input($_POST["PersonalWebsiteLink"]);

  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);

  }
    if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["gender"]);

  }

  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

?>


<form method="post"  name="registration" onsubmit="validateform()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table>
<th>basic Info :</th>
  <tr> 

  <td> <b>First Name </b> </td>
  <td> <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"> </td>
 <td id="nameErr"> </td>
 </tr>
  <tr>   
  <td> <b>Last Name </b> </td>
  <td> <input type="text" name="lname" id="lname" onkeyup="checkLastName()" onblur="checkLastName()"> </td>
 <td id="lnameErr"> </td>
 </tr>

  <tr>
  <td><b> Gender </b> </td>
  <td>
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  </td>
  <td><span class="error">* <?php echo $genderErr;?></span></td>
</tr>

<tr>
  <td> <b> Date Of Birth </b> </td>
  <td> <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31"> </td>
  <td><span class="error">*<?php echo $dobErr;?></span></td>
</tr>

 <tr>
      <td>Religion</td>
      <td>
          <select name="religion">  
            <option value="">Select</option>}  
            <option value="Islam">Islam</option>  
            <option value="Hindu">Hindu</option>  
            <option value="Bodho">Bodho</option>  
            <option value="Christan">Christan</option>  
            <option value="Others">Others</option>  
            
          </select>
        </td>
        <td><span class="error">* <?php echo $religionErr;?></span></td>
</tr>  
<th>Contract Info :</th>
  <tr>
    <td>Present Address</td>
    <td><textarea id="presentAddress" name="presentAddress" rows="4" cols="50">
 
  </textarea>
</td>
<td><span class="error">* <?php echo $presentAddressErr;?></span></td>
  </tr>

  <tr>
    <td>Parmanent Address</td>
    <td><textarea id="permanentAddress" name="permanentAddress" rows="4" cols="50">
 
  </textarea>
</td>
<td><span class="error">* <?php echo $permanentAddressErr;?></span></td>
  </tr>
  
  <tr>
    <td><b> Phone </b> </td> 
  <td><input type="tel" name="phone" id="phone"></td>
  <td><span class="error">* <?php echo $phoneErr;?></span></td>
  </tr>
<tr>
  <td><b> E-mail </b> </td> 
  <td><input type="email" name="email" id="email" onkeyup="ValidateEmail()" onblur="ValidateEmail()"></td>
 <td id="emailErr"> </td>
 </tr> 
 <tr>
   <td>Personal Website Link: </td>
      <td><input type="url" name="PersonalWebsiteLink" id="PersonalWebsiteLink"></td>
      <td><span class="error">* <?php echo $PersonalWebsiteLinkErr;?></span></td>
 </tr>
 <br><br>
<tr>
  <br><br>
  <td></td>
 <th>Account Information</th>
 </tr>
 <tr>
                <td > user name   </td>
                

                <td><input type="text" name="username" id="username" onkeyup="checkuserName()" onblur="checkuserName()" /></td>
              <td id="usernameErr"> </td>
            </tr>

            <tr>
                <td>Password </td>
        
                <td><input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()" /></td> <br>
                 <td id="passErr"> </td>
            </tr>
 




    
    </table>
<input type="submit" name="submit" value="Submit">
</form>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $religion;
echo "<br>";
echo $presentAddress;
echo "<br>";
echo $permanentAddress;
echo "<br>";
echo $phone;
echo "<br>";
echo $PersonalWebsiteLink;
echo $username;
echo "<br>";

if(isset($_POST['submit'])){
      if(!empty($_POST['degree'])){
      foreach($_POST['degree'] as $checked){
        echo $checked."</br>";
      }
    }
  }
echo $blood;
?>
<script type="text/javascript" src="jsValidation.js"></script>
</body>
</html>