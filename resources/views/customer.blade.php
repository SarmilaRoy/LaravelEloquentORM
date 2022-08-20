<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .required label::after {
            content: "*";
            color: red;
        }
    </style>
</head>

<body class="bg-dark">
<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="" style="color: white;">WsCube Tech</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customer') }}" style="color: white;">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
        <form action="{{ url('/customer') }}" method="POST">
            @csrf
            <div class="container mt-4 card p-3 bg-white">
                <h3 class="text-center text-primary">Customer Registration</h3>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Name:</label>
                        <input type="text" name="name" id="" class="form-control" />
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-md-6 required">
                        <label for="">Email:</label>
                        <input type="text" name="email" id="" class="form-control" />
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Password:</label>
                        <input type="password" name="password" id="" class="form-control" />
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Confirm Password:</label>
                        <input type="password" name="confirm_password" id="" class="form-control" />
                        <span class="text-danger">
                            @error('confirm_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Country:</label>
                        <input type="text" name="country" id="" class="form-control" />
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">State:</label>
                        <input type="text" name="state" id="" class="form-control" />
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Address:</label>
                        <input type="text" name="address" id="" class="form-control" />
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Gender:</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="M" checked>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="F">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="O">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Date of birth:</label>
                        <input type="date" name="dob" id="" class="form-control" />
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <button class="btn btn-primary">Submit</button>

           
    </div>
    </form>
    

</body>

</html>
