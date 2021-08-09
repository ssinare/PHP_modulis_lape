<?php
echo '<br>';
echo '<br>5 -red. uzdavinio sprendimas ---------------<br>';
echo '<br>';
if (isset($_GET['page'])&& $_GET['page']=='go') {
    header('Location: http://localhost/lape/09/blue.php');
    die;
}
?>

<body style="background-color: red; ">
    <h1><br>
        <a style="color: ivory" href="./red.php?page=go">RED</a>
    </h1>
</body>
<?php