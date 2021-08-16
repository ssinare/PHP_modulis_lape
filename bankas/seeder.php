<?php

$users = [
    ['name' => 'Petras', 'email' => 'petras@petras.com', 'pass' => md5('123')],
    ['name' => 'Petras', 'email' => 'petras@petras.com', 'pass' => md5('123')],
    ['name' => 'Petras', 'email' => 'petras@petras.com', 'pass' => md5('123')]
]

$users = json_encode($users);
file_put_contents(__DIR__.'/users.json', $users);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>