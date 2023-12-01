<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://shorturl.at/abhpN">
    <title>Form</title>
</head>
<body class="bg-light">
    <div class="container bg-light my-2 ">
        <div class=" text-end">
            <a href="<?php echo site_url('Home/show'); ?>"><button class="btn btn-success">View Data</button></a>
        </div>
        <h1 class="text-center my-2">Demo Form</h1>
        
        <form action="<?php echo site_url('Home/store'); ?>" method="POST">
            <div class="mb-3 row">
                <div class="col">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" placeholder="John Doe" class="form-control">
                </div>
                <div class="col">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" placeholder="JohnDoe@23gmail.com" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="name" class="form-label">Password:</label>
                    <input type="password" name="password" placeholder="......" class="form-control">
                </div>
                <div class="col">
                    <label for="repeat_password" class="form-label">Repeat Password:</label>
                    <input type="password" name="repeat_password" placeholder="....." class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
