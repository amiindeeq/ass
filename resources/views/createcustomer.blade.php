
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Add Student</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('store-customer') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="">Id</label>
                                    <input type="text" name="id" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Fist Name</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Customer Address</label>
                                    <input type="text" name="custAddress" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Save Customer</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
