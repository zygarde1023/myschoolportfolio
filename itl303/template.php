<html>
<head>
    <title>My School Work</title>
</head>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="gcss/w3.css">
<body>
    <div class="header">MY SCHOOL WORK
    </div>
    <div class="nav">
        <a href="#"><button type="button" class="btn" >Empty</button></a>
        <a href="#"><button type="button" class="btn" >Empty</button></a>
        
        <a href="index.php?view=svg"><button type="button" class="btn" >SVG</button></a>
        <a href="index.php?view=css"><button type="button" class="btn" >CSS</button></a>
        <a href="index.php"><button type="button" class="btn" >Homepage</button></a>
    </div>
    <div>
    <?php include ($content); ?>
    </div>
    <div><?php $content; ?></div>
</body>
</html>