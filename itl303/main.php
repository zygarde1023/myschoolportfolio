<html>
<head></head>
<style>
#logoA{
  width:148px;
  height:35px;
  background-color: #1414db;
}
#logoB{
  width:50px;
  height:50px;
  margin-left: 49px;
  background-color: #14db35;
  transform: skewX(-62.8deg);
  
  
}
#logoC{
  width:148px;
  height:35px;
  background-color: #db2114;
}
#logoR{
  width:150px;
  height:150px;
  margin-left: 600px;
  margin-top: 225px;
  transform: scale(-2,-2) rotate(0); 
	transition-property: transform;
	transition-duration: 2s;
	transition-timing-function:linear;
  transition-delay: 200ms;
}
#logoR:hover{
  transform: scale(4,4) rotate(-360deg) ;
}

</style>
<body>
    <h1>Homepage</h1>
<div id = "logoR">
<div id = "logoA"></div>
<div id = "logoB"></div>
<div id = "logoC"></div>
</div>
</body>
</html>
