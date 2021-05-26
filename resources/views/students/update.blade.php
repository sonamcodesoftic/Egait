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
  <form action="/submit/{{$student->id}}"   method="post">
  @csrf
  <input type="hidden" value="{{$student->id}}" name="student_id" />
   <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="studname" placeholder="Enter Name" name="studname" value="{{$student->studname}}" />
    </div>
    <div class="form-group">
      <label for="text">course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter course" name="course" value="<?php echo $student->course; ?>" />
    </div>
    <div class="form-group">
      <label for="text">Fee</label>
      <input type="text" class="form-control" id="fee" placeholder="Enter fee" name="fee" value="<?php echo $student->fee; ?>" />
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" /> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>   
  </form>
</div> 
</body>
</html>
