<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Students</title>
    <link rel="stylesheet" href="../app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <header style="height: 100px; display: flex; align-items: center; justify-content: space-between"
            class="header">
            <div class="header-logo">
                <img style="margin-right: 16px" src="https://laravel.com/img/logomark.min.svg" alt="">
                <img src="https://laravel.com/img/logotype.min.svg" alt="">
            </div>
            {{-- <div class="header-btn">
                <button type="button" class="btn btn-success"><a class="text-white" href="/students/create">Create
                        Student</a></button>
            </div> --}}
        </header>
        <form style="width: 500px" action="/students/update/{{ $students->id }}" method="post">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="fullname">Name:</label>
                <input type="text" class="form-control" name="fullname" value="{{ $students->fullname }}" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="address">Address:</label>
                <input type="text" class="form-control" name="address" value="{{ $students->address }}" />
            </div>


            <div class="form-check mb-4 p-0">
                <label class="mb-2" for="date">Birthday:</label>
                <input style="width: 100%; height: 40px; border: 1px solid #ced4da;" type="date" name="date"
                    value="{{ $students->date }}" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
        </form>
    </div>

</body>

</html>
