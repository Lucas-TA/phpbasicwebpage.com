<?php
    if (!isset($page_title))
    {
        $page_title = "Staff Area";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - <?php echo h($page_title); ?></title>
    <link rel="stylesheet" href="<?php echo urlFor('/assets/css/staff.css') ?>">
</head>
<body>

<header>
    <h1>GBI - Staff Area</h1>
</header>
<nav>
    <ul>
        <li><a href="<?php echo urlFor('/staff/index.php') ?>">Menu</a></li>
    </ul>
</nav>