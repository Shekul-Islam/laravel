<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


    <div class="text-center">
        <h2>One to One Relationship</h2>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>name</th>
                    <th>address</th>
                    <th>phone id</th>
                    <th>phone name</th>
                    <th>phone model</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $data)

                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->phone->id ?? 'N/A' }}</td>
                    <td>{{ $data->phone->name ?? 'N/A' }}</td>
                    <td>{{ $data->phone->model ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>



        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
</html>

