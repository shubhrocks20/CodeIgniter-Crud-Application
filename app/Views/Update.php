<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="https://shorturl.at/abhpN">
    <title>Update Data</title>
</head>
<body class="bg-light">
    <div class="container my-2">
        <div class=" text-end">
            <a href="<?php echo site_url('Home/show'); ?>" ><button class="btn btn-success">Back</button></a>
        </div>
        
        <h1 class="text-center my-2">Updatation Form</h1>
        
        <form action="<?php echo site_url('Home/update'); ?>" method="POST">

            <div class="row">
                <div class="col">
                    <input type="hidden" name="id"  value="<?php echo $record['id']; ?>">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" value="<?php echo $record['name']; ?>" class="form-control">
                </div>
                <div class="col">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" value="<?php echo $record['email']; ?>"   placeholder="JohnDoe@23gmail.com" class="form-control">
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <label for="name" class="form-label">Password:</label>
                    <input type="password" name="password" value="<?php echo $record['password']; ?>"  placeholder="......" class="form-control">
                </div>
                <div class="col">
                    <label for="repeat_password" class="form-label">Repeat Password:</label>
                    <input type="password" name="repeat_password" placeholder="....." class="form-control" value="<?php echo $record['repeat_password']; ?>" >
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
        </div>
    </body>
    </html>