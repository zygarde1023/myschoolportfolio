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
  background-color: seagreen;
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
  background-color: cadetblue;
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
    <div><h2>SVG Demo</h2></div>
    <div class="nv" style="border: 5px;">
        <ul>
            <li><a href="index.php?view=svg&demo=svgcom">SVG Combinations</a></li>
            <li><a href="index.php?view=svg&demo=svgtxt">SVG Text Art</a></li>
            <li><a href="index.php?view=svg&demo=svgamt">SVG Animation</a></li>
            <li><a href="index.php?view=svg&demo=svgcle">SVG CLE 2</a></li>
        </ul>
    </div>
    <div class="con">
    <?php include ($content); ?>
    </div>
    <div><?php $content; ?></div>
</body>
</html>
