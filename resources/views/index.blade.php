<!DOCTYPE html>
<html>
<head>
    <title>Danh sach sinh vien</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<form class="navbar-form navbar-left" action="">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="key" placeholder="Search by name">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
{{ csrf_field() }}
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thong tin sach</h2>
            <hr>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>authorid</th>
                    <th>title</th>
                    <th>pubyear</th>
                    <th>available</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $b)
                    <tr>
                        <td>{{$b->bookid}}</td>
                        <td>{{$b->name}}</td>
                        <td>{{$b->authorid}}</td>
                        <td>{{$b->title}}</td>
                        <td>{{$b->pubyear}}</td>
                        <td>{{$b->available}}</td>

                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

    </div>
</div>
</body>
</html>
