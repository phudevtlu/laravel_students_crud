<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <header style="height: 100px; display: flex; align-items: center; justify-content: space-between" class="header">
            <div class="header-logo">
                <img style="margin-right: 16px" src="https://laravel.com/img/logomark.min.svg" alt="">
                <img src="https://laravel.com/img/logotype.min.svg" alt="">
            </div>
            <div class="header-btn">
                <button type="button" class="btn btn-success">
                    <a class="text-white" href="/students/create">Create Student</a></button>
            </div>
        </header>
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td style="height: 36px; line-height: 36px" scope="row">{{ $student->id }}</td>
                        <td style="height: 36px; line-height: 36px">{{ $student->fullname }}</td>
                        <td style="height: 36px; line-height: 36px">{{ $student->address }}</td>
                        <td style="height: 36px; line-height: 36px">{{ $student->date }}</td>
                        <td style="height: 36px; line-height: 36px"><button class="btn btn-primary"><a
                                    class="text-white" href="/students/update/{{ $student->id }} ">Edit</a></button>
                        </td>
                        <td><button class="btn btn-danger "><a class="text-white"
                                    href="students/delete/{!! $student->id !!}">Delete</a></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
