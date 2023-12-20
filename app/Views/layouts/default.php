<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?=$this->include('includes/head')?>

</head>
<body>
<?=$this->include('includes/header')?>

<?=$this->renderSection('content')?>

<?=$this->include('includes/footer')?>
</body>
</html>