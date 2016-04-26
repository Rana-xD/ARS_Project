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
          .form-wrapper{
            width: 620px;
            padding: 55px 100px;
            margin: 10px auto 0px;
            border: 1px solid #c4d4cd;
          }
          .form-wrapper .no-radius{
            border-radius: 0px;
          }
          .form-wrapper .sm-radius{
            border-radius: 5px;
          }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row" style="padding-top:150px;">
              <div class="form-wrapper">
                <div class="col-xs-12">
                  @if ($flag == 1)
                  <p class="text-danger text-center">Wrong username and password!</p>
                  @endif
                </div>
                <form class="form-horizontal" role="form" action="/Login" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <!-- <label class="control-label col-xs-2" for="id">ID</label> -->
                        <div class="col-xs-12">
                          <input placeholder="ID" class="form-control no-radius" id="id" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="control-label col-xs-2" for="password">Password</label> -->
                        <div class="col-xs-12">
                          <input placeholder="Password" class="form-control no-radius" id="password" type="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">

                      <div class="col-xs-12 text-center" style="margin-bottom:15px;">
                        <input class="btn btn-primary form-control sm-radius" style="width: 50%;text-align:center;margin:0 auto;" type="submit" value="Submit">
                      </div>

                      <div class="col-xs-12 text-center">
                        <a href="#" style="text-decoration:underline; color:#252525;">Forgot Password?</a>
                      </div>
                    </div>
                  </form>
              </div>
              <div class="col-xs-12">

              </div>
            </div>
        </div>
    </body>
</html>
