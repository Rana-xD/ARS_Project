<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Application Registration</h1>
            <br>Login ID <button>Menu</button><button>Logout</button><hr>

            <div class="form-group">
            <h4>Application Information</h4>
                <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Name</label>
                    <p> {{ $name }}</p>
                    <input type="hidden" name="name" value="{{ $name }}">
                    <label>Address</label>
                    <p> {{ $address }}</p>
                    <input type="hidden" name="address" value="{{ $address }}">
            <h4>Upload Identification Paper</h4>
                    <p> {{ $file->getClientOriginalName() }}</p>
                    echo <img src="uploads/{{$file->getClientOriginalName()}}" />;
                    <input style="display: none;" type="file" name="file" value="{{ $file }}">
            <h4>Upload Application Paper</h4>
                    <p> {{ $file1->getClientOriginalName() }}</p>
                    <input style="display: none;" type="file" name="file1" value="{{ $file1 }}">
            <h4>Upload Other Paper</h4>
                    <p> {{ $file2->getClientOriginalName() }}</p>
                    <input style="display: none;" type="file" name="file2" value="{{ $file2 }}">
                    <br><input type="submit" value="Register" name="confirm">
                </form>
            </div>
        </div>
    </body>
</html>
