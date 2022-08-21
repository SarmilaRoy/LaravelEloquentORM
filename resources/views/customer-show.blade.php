<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="" style="color: white;">WsCube Tech</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/show') }}" style="color: white;">Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <div class="container">
        <br>
        @if (Session::has('msg'))
            <div class="alert alert-success" role="alert">{{ Session::get('msg') }}
            </div>
        @endif
        <a href="{{ route('customer.create') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @elseif ($customer->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>
                            @if ($customer->status == '1')
                                <a href="">
                                    <span class="badge badge-success">Active</span>
                                </a>
                            @else
                                <a href="">
                                    <span class="badge badge-danger">Inactive</span>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('') }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></i></a>
                            {{-- <a href="{{ url('/customer/delete/') }}/{{ $customer->id }}" onclick="return confirm('are you sure to delete?')" class="btn btn-sm btn-danger"><i class="fa fa-times "></i></a> --}}
                            <a href="{{ route('customer.delete',['id' => $customer->id])}}" onclick="return confirm('are you sure to delete?')" class="btn btn-sm btn-danger"><i class="fa fa-times "></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
