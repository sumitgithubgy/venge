
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="conatiner">
    
    <div class="card m-5 p-5">
        <div class="card-header"><h1>Add Details</h1></div>
        <div class="card-body">

            <form action="adds" method="post" >
                @csrf
              
                <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form> 
        </div>
    </div>
</div>
</body>
</html>