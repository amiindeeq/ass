<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Customer</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/update-customer/'.$customer->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name:</label>
                                <input type="text" id="fname" name="fname" class="form-control" value="{{ $customer->fname }}">
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name:</label>
                                <input type="text" id="lname" name="lname" class="form-control" value="{{ $customer->lname }}">
                            </div>
                            <div class="mb-3">
                                <label for="custAddress" class="form-label">Address:</label>
                                <input type="text" id="custAddress" name="custAddress" class="form-control" value="{{ $customer->custAddress }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Customer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
