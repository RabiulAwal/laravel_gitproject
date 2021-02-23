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
  <h2>Modify Data <span class="pull-right"><a class="btn btn-primary" href="{{ url('showData') }}">View Data </a></span></h2>

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
                  <img height="80" width="150" src="../images/{{ $alldata->image }}">
                @else
                  {{ '-' }}
                @endif
            </td>
            <td>{{ ($alldata->remember == 1) ? 'Yes':'No'  }}</td>
            <td>{{ $alldata->created_at->format('Y-m-d')  }}</td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>
  </div>
</div>

<?php //print"<pre>"; print_r($getdata);exit; ?>

<div class="container">
  <h2>Modify your store</h2>
  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('modifyvalues')}}">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" value="" required="true" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" required="true" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="image">Image Upload:</label>
      <div class="col-sm-10">
        <input required="true" name="image" multiple="true" type="file">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" value="1" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>
