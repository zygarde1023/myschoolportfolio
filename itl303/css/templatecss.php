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
  background-color: darkorange;
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
  background-color: #07943b;
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
    <div><h2>CSS Demo</h2></div>
    <div class="nv" style="border: 5px;">
        <ul>
            <li><a href="#">CSS 2D Transform</a></li>
            <li><a href="index.php?view=css&demo=trs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;translate()</a></li>
            <li><a href="index.php?view=css&demo=skw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skew()</a></li>
            <li><a href="index.php?view=css&demo=scl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scale()</a></li>
            <li><a href="index.php?view=css&demo=rtt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rotate()</a></li>
            <li><a href="index.php?view=css&demo=clogo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS LOGO</a></li>
            <li><a href="index.php?view=css&demo=2dm">CSS 2D Matrix</a></li>
            <li><a href="index.php?view=css&demo=2dt">CSS 2D Transition</a></li>
            <li><a href="index.php?view=css&demo=2da">CSS 2D Animation</a></li>
            <li><a href="index.php?view=css&demo=3dt">CSS 3D Transform</a></li>
            <li><a href="index.php?view=css&demo=3dm">CSS 3D Matrix</a></li>
            <li><a href="index.php?view=css&demo=3da">CSS 3D Animation</a></li>
            <li><a href="index.php?view=css&demo=cle">CLE 1 CSS </a></li>
        </ul>
    </div>
    <div class="con">
    <?php include ($content); ?>
    </div>
    <div><?php $content; ?></div>
</body>
</html>
