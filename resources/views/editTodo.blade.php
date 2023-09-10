<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>  
</head>
<body>
    <div class="container p-5 my-5 bg-dark text-black rounded-5">
            <form action="{{ url('edit') }}" method="post">
                @csrf
                @method('POST')
                <div class="form-floating mb-3 mt-3 ">
                    <input type="text" class="form-control" value="{{ $TodoDetails->id }}" id="id" placeholder="" name="id" readonly>
                    <label for="pwd">Id</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" value="{{ $TodoDetails->name }}" id="todo" placeholder="Enter New Todo" name="todo" required>
                    <label for="email">todo</label>
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
    </div>
</body>
</html>