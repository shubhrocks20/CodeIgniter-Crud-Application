<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="icon" type="image/x-icon" href="https://shorturl.at/abhpN">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-2">
        <div class="text-end">
            <a href="<?php echo site_url('/'); ?>"><button class="btn btn-info">New Entery</button></a>
        </div>
        <h1 class="my-2">Database Record!</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">UserId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Manipulation</th>
                    <th scope="col">Erasing</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach($records as $record) {?>
            <tr>
            <td><?php echo $record['id']; ?></td>
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['email']; ?></td>
            <td><?php echo $record['password']; ?></td>
            <td><a href="<?php echo base_url();?>Home/edit/<?php echo $record['id'];?>" class="bg-secondary"><button class="btn btn-secondary">Edit</button></a></td>
            <td><a href="<?php echo base_url();?>Home/delete/<?php echo $record['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            
            <?php  } ?>  
        </tbody>
</table>
    </div>
    
</body>
</html>