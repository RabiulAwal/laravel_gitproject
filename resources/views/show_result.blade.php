<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Data <span class="pull-right"><a class="btn btn-primary" href="{{ url('hello') }}">Add Data </a></span></h2>
                                                                                      
  <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>remember</th>
        <th>created time</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php  
          $counter = 1; 
      ?>
      @if($getdata != null)         
        @foreach($getdata as $alldata)
          <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $alldata->email  }}</td>
            <td>{{ $alldata->pwd  }}</td>
            <td>
              @if(!empty($alldata->image)) 
                <img height="80" width="150" src="images/{{ $alldata->image }}">
              @else
                {{ '-' }}
              @endif
            </td>
            <td>{{ ($alldata->remember == 1) ? 'Yes':'No'  }}</td>
            <td>{{ $alldata->created_at->format('Y-m-d')  }}</td>
            <td>  
                <a class="btn btn-success btn-sm" href="{{ url('edit/'.$alldata->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('delete/'.$alldata->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
      @endif

    </tbody>

  </table>
  </div>
</div>

</body>
</html>
