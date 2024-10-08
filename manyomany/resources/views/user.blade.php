<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="text-center">
        <h2>This is Many to Many Relation</h2>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-info">
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                    </tr>

                        @foreach ($users as  $user)
                            <tr>  
                                <td>{{$user->name}}</td>
                                <td>
                                    @foreach ($user->roles as $role )
                                        {{$role->name}}

                                    @endforeach
                                </td>
                            </tr>

                        @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
