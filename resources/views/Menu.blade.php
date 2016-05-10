@include('SessionHandling')
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style>
          .custom-container{
            width: 900px;
            padding: 0 15px;
            margin: 0 auto;
          }
          .custom-sm-radius{
            border-radius: 5px;
          }
          .top-menu{
            padding: 15px 0px 0px;
            border-bottom: 1px solid #d4d4d4;
          }
          .menu-btn-wrapper{
            width: 380px;
            margin: 0 auto;
            padding: 80px 0px 30px;
          }
          .menu-btn-wrapper a{
            margin-bottom: 20px;
          }
          .custom-md-radius{
            border-radius: 8px;
          }
        </style>
    </head>
    <body>
        <div class="custom-container">
            <div class="top-menu">
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-6">
                      <p style="margin-top:10px;">ID ({{$name}})</p>
                  </div>
                  <div class="col-xs-6">
                      <p class="text-right"><a href="/Logout" class="btn btn-sm btn-danger custom-sm-radius">Logout</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="menu-btn-wrapper">
              <a class="btn btn-default btn-block btn-lg custom-md-radius" href="Registration">Register Application Information </a>
              <a class="btn btn-default btn-block btn-lg custom-md-radius" href="#">Search Application</a>
              <a class="btn btn-default btn-block btn-lg custom-md-radius" href="#">Contact </a>
            </div>
          </div>
        </div>
    </body>
</html>
