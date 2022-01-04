<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>ID</tr>
                <tr>Name</tr>
                <tr>Action</tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($data as $acc)
                    <td>{{$acc -> id}}</td>
                    <td>{{$acc -> name}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
    </div>
</body>
</html>