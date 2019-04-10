<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>PHP page by cameron moore</h1>
    <?php
    $txt = "bbbbyyyyeeee";
    $name = "killvr";
    $x = 5;
    $y = 10.25;
    
    echo "$txt My name is $name ";
    
    // This is a single-line comment
    
    # This is also a single-line
    
    /*
    This is a multiple-lines comment block
    that spans over multiple 
    lines
    */
    //You can also use comments to leave out parts of a code line
    $x = 5 /* + 15 */  + 5; 
    echo $x;
    
    ECHO "bbbyyyeee<br>";
    echo "bbbyyyeee<br>";
    EcHo "bbbyyyeee<br>";
    
    $color = "red";
echo "My car is " . $color . "<br>";
echo "My house is "/* . $COLOR .  "<br>" */;
echo "My boat is "/* . $coLOR .  "<br>"*/;
    
    $CART = "CART Web App";
    echo "I love $CART" ;
        
        $head = "Header Level ";
        $liopen = "<li>";
        $liclose = "</li>";
        $popen = "<p>";
        $pclose = "</p>";
        $lorem = "Lorem ipsum dolar sit amet,";
    
        echo " <h1> $head 1</h1>
$popen<strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href='#'>Donec non enim</a> in turpis pulvinar facilisis. Ut felis.$pclose
<h2>$head 2</h2>
<ol>
   $liopen $lorem consectetuer adipiscing elit.$liclose
   $liopen Aliquam tincidunt mauris eu risus. $liclose
</ol>
<blockquote>$popen $lorem consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.$pclose</blockquote>
<h3>$head 3</h3>
<ul>
   $liopen $lorem consectetuer adipiscing elit.$liclose
   $liopen Aliquam tincidunt mauris eu risus.$liclose
</ul>
<pre><code>
#header h1 a {
  display: block;
  width: 300px;
  height: 80px;
}
</code></pre>
 "
    ?>
</body>
</html>