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
</head>

<body>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">
                            <div class="col-md-10">
                                All Customers
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('/customer') }}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
<br>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success" role="alert">{{ Session::get('msg') }}
                            </div>
                        @endif
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
                                                Active
                                            @else
                                                Inactive
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
