<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="add"  method="post">
  @csrf
   <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="studname" placeholder="Enter Name" name="studname">
    </div>
    <div class="form-group">
      <label for="text">course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
    </div>
    <div class="form-group">
      <label for="text">Fee</label>
      <input type="text" class="form-control" id="fee" placeholder="Enter fee" name="fee">
    </div>
    <div class="form-group">
      <label for="text">Gender</label><br>
      <input type="radio" class="form mt-3 " id="radio_btn"  name="gender">Female
      <input type="radio" class="form ml-5" id="radio_btn"  name="gender">Male
    </div>
    <div class="form-group">
     <label for="text">Select your city</label>
     <select name="city" id="city" class="form-control">
       <option value="Mohali">Mohali</option>
       <option value="Chandigarh">Chandigarh</option>
       <option value="Panchkula">Panchkula</option>
       <option value="Sirsa">Sirsa</option>
       <option value="Ambala">Ambala</option>
       <option value="Amritsar">Amritsar</option>
     </select>
    </div>
    <div class="form-group ">
      <label for="text" class="mt-4 mb-3">Facilities</label><br>
      <input type="checkbox" name="facility" class="" id="Food" value="Food" /> Food
      <input type="checkbox" name="facility" class="ml-5" id="Transportation" value="Transportation" /> Transportation
      <input type="checkbox" name="facility" class="ml-5" id="sports" value="sports" /> sports
      <input type="checkbox" name="facility" class="ml-5" id="cafe" value="cafe" /> cafe
    </div>
    <div class="form-group form-check ">
      <label class="form-check-label mt-3">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>

