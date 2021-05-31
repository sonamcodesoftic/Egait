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
  <style>
      .tableborder
      {
          border:px solid black;
      }
      th
      {
        padding:10px 30px 10px 30px;
      }
      td
      {
        padding:10px 30px 10px 30px ;
      }
      a
      {
        color:white!important;
        text-decoration:none!important;
      }
      .actions
      {
        text-align:center;
      }
  </style>  
</head>
<body>


  <div class="container">
      <table border="1">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th>gender</th>
            <th>city</th>
            <th>facility</th>
            <th colspan="2" class="actions">Actions</th>
          </tr>
          <?php $count = "1";   ?>
          @foreach($books as $user)   
            <tr>
              <td>{{$count}}</td>
              <td>{{$user->studname}}</td>
              <td>{{$user->course}}</td>
              <td>{{$user->fee}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->city}}</td>
              <td>{{$user->facility}}</td>
              <!-- <td><button class="btn btn-primary"><a href='update/{{$user->id}}'>update</a></button></td> -->
              <td><button class="btn btn-primary"><a href='update/{{$user->id}}'>update</a></button></td>
              <td><button class="btn btn-primary"><a href='delete/{{$user->id}}'>Delete</a></button></td>
            </tr>  
            <?php $count++;  ?>
          @endforeach
      </table>
  </div>
</body>
</html>