<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>	
	<title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div>
                <h1>STUDENT FORM VELIDATION</h1>
                </div>
            </div>
        </div>
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12">
    			<div style="width:100%;background-color:#ff006f">
    			<form action="action.php" method="Post" enctype="multipart/form-data" name="myForm"    >
<table class="table">

    <tr>
      <th scope="col">First-Name</th>
      <th scope="col">Middle-Name</th>
      <th scope="col">Last-Name</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="firstn" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="middlen"></th>
      <th scope="col"><input class="form-control" type="text" name="lastn"></th>
    </tr>
  <tr>
      <th scope="col">Father's name</th>
      <th scope="col">Occupation</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="fname2" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="foccu"></th>
      
    </tr>
  <tr>
      <th scope="col">Mother's name</th>
      <th scope="col">Occupation</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="mname" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="moccu"></th>
      
    </tr>
    <tr>
      <th scope="col">Address 1</th>
      <th scope="col">Address 2</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="address1" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="address2"></th>
      
    </tr>
    <tr>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="country" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="city"></th>
      <th scope="col"><input class="form-control" type="text" name="state"></th>
    </tr>
    <tr>
      <th scope="col">Course</th>
      <th scope="col">Contact Number</th>
    </tr>
    <tr>
      <th scope="col"><select class="form-control" name="course">
                        <option>BCA</option>
                        <option>BBA</option>
                        <option>MCA</option>
                        <option>B.Pharma</option>
                        <option>B.Tech</option> 
                    </select>

      </th>
      <th scope="col"><input  class="form-control" type="text" name="contact"></th>
      
    </tr>
    <tr>
      <th scope="col">Email Address</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="email" name="email" ></ins></th>
      
    </tr>
    <tr>
      <th scope="col">Course</th>
      <th scope="col">Stream</th>
      <th scope="col">Per(%)</th>
    </tr>
    <tr>
      <th scope="col"><input class="form-control" type="text" name="course1" ></ins></th>
      <th scope="col"><input class="form-control" type="text" name="stream1"></th>
      <th scope="col"><input class="form-control" type="text" name="Percentage1" ></th>
    </tr>
    
    
    <tr>
      <th scope="col"><input class="form-control btn-primary" type="button" name="submit" value="submit" onclick="validate()"></th>
    </tr>
</table>
</form>



<script> 
    function validate() {
        var x = document.forms["myForm"]["firstn"].value;
        if (x == "") 
        {
        alert("Name must be filled out");
        return false;
        }
        
        var y = document.forms["myForm"]["lastn"].value;
        if (y == "") 
        {
        alert("Last Name must be Filled out");
        return false;
        }
        var a = document.forms["myForm"]["fname2"].value;
        if (a == "") 
        {
        alert("Please filled Father's Name ");
        return false;
        }
        var b = document.forms["myForm"]["foccu"].value;
        if (b == "") 
        {
        alert("Please filled Father's Occupation");
        return false;
        }
        var d = document.forms["myForm"]["mname"].value;
        if (d == "") 
        {
        alert("Please filled Mother's Name");
        return false;
        }
        var e = document.forms["myForm"]["moccu"].value;
        if (e == "") 
        {
        alert("Please filled Mother's Occupation");
        return false;
        }
        var f = document.forms["myForm"]["address1"].value;
        if (f == "") 
        {
        alert("Please filled Address 1");
        return false;
        }
        var g = document.forms["myForm"]["address2"].value;
        if (g == "") 
        {
        alert("Please filled Address 2");
        return false;
        }
        var h = document.forms["myForm"]["country"].value;
        if (h == "") 
        {
        alert("Please filled country's Name");
        return false;
        }
        var i = document.forms["myForm"]["city"].value;
        if (i == "") 
        {
        alert("Please filled City Name");
        return false;
        }
        var j = document.forms["myForm"]["state"].value;
        if (j == "") 
        {
        alert("Please filled State's Name");
        return false;
        }
        var k = document.forms["myForm"]["course"].value;
        if (k == "") 
        {
        alert("Please filled Course Name");
        return false;
        }
        var s = document.forms["myForm"]["contact"].value;
  if (s == "" ) {
    alert("Mobile number not should be blank");
    return false;
              }
              var t = document.forms["myForm"]["contact"].value;
  if (t.length < 10 ) {
    alert("Mobile Length Less 10 Digit");
    return false;
              }
              var u = document.forms["myForm"]["contact"].value;
  if (u.length > 10 ) {
    alert("Mobile Length Greater from 10 Digit");
    return false;
              }
              var v = document.forms["myForm"]["contact"].value;
              if (isNaN(v)) {
    alert("USE only number value not char");
    return false;
              }
        
      var m = document.forms["myForm"]["email"].value;
        if (m == "") 
        {
        alert("Please filled email address");
        return false;
        } 

      var v = document.forms["myForm"]["Percentage1"].value;
  if (v == "" ) {
    alert("Persentage not should be blank");
    return false;
              }
              var w = document.forms["myForm"]["Percentage1"].value;
  if (w.length > 2 ) {
    alert("Percentage not should be greter than 2 number");
    return false;
              }
              
              var z = document.forms["myForm"]["Percentage1"].value;
              if (isNaN(z)) {
    alert("USE only number value not char");
    return false;
              }
        

                        }
      
         
</script>
    			


                </div>
    		</div>
    		
    		
    	</div>
    </div>
</body>
</html>