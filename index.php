<html>
<title> this is my page</title>
<body>
<h1> hello world</h1>
<h2> my name is Joshua</h2>
<p>This is my new web page that I am going to use to write php on.</p>
<h2> all code below this heading is generated using php </h2>
<?php
echo "<h2> numbers exorcise </h2>";
echo "<p> the following example will show the value of two numbers and then show the result when they are added together. This will show what happens when you take two varyables and add them.</p>";
$x = 5;
$y = 23;
echo "the first number which is the variable x is " .$x."<br>";
echo "The second number which is y is " .$y."<br>";
echo "the final result of the two numbers x and y added together is ";
Echo $x+$y;
Echo ".";
Echo "<h2> var_dump test</h2>";
Echo "the result of the var dump function is <br>";
$number = 7;
var_dump($number);
?>
</body>
</html>