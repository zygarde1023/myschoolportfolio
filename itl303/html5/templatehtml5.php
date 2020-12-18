<html>
<head>
    <title>My School Work</title>
</head>
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: teal;
  float: left;
}

li a {
  display: inline-block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: royalblue;
  color: white;
}

.con{
    float: right;
    width: 80%;
}

.nv{
    width: 20%;    
}
</style>
<body>
    <div><h2>CANVAS Demo</h2></div>
    <div class="nv" style="border: 5px;">
        <ul>
            <li><a href="index.php?view=html5&demo=html5com">CANVAS Combination</a></li>
        </ul>
    </div>
    <div class="con">
    <?php include ($content); ?>
    </div>
    <div><?php $content; ?></div>
</body>
</html>
