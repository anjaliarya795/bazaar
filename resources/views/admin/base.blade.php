<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bazaar Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="alert-danger">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand"><h3>Bazaar Admin</h3></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">Product Management</a></li>
                <li class="nav-item"><a href="" class="nav-link">Insert Product</a></li>
                <li class="nav-item"><a href="" class="nav-link">Orders</a></li>
                <li class="nav-item"><a href="" class="nav-link">Addresses</a></li>
                <li class="nav-item"><a href="" class="nav-link">Coupons</a></li>
                <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="" class="nav-link">Users</a></li>
            </ul>
        </div>
    </nav>

    @section('content')
        @show

        <div class="modal fade" id ="insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" action="{{route(admin.category.insert)}}" class="d-flex">
                            @csrf
                                <input type="text" name="title" id="" class="form-control">
                                <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>