<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>PBKK BAGUS</title>
</head>
<body>
    
    <table class="table table-dark table-sm">
        <tr class="table-warning">
            <th>customer_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>phone</th>
            <th>email</th>
            <th>street</th>
            <th>city</th>
            <th>state</th>
            <th>zip_code</th>
        </tr>
        <?php foreach ($customers as $customer) { ?>
        <tr>
            <td><?php echo $customer->customer_id ?></td>
            <td><?php echo $customer->first_name ?></td>
            <td><?php echo $customer->last_name ?></td>
            <td><?php echo $customer->phone ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->street ?></td>
            <td><?php echo $customer->city ?></td>
            <td><?php echo $customer->state ?></td>
            <td><?php echo $customer->zip_code ?></td>
        </tr>
        <?php } ?>
        
    </table>
</body>
</html>