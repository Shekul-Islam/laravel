<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="bg-dark text-light text-center mt-2">this is a many to many relation</h1>
        <div class="row">
            <div class="col-sm-12"> 
                <table class="table table-info"> 
                    <tr> 
                        <th>Id</th>
                        <th>Name</th>
                    </tr>

                    @foreach ($users as $user)
                        <tr> 
                            <td>{{$user->name}}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    {{ $role->name}}
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>