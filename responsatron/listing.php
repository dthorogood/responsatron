<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div id="page_content">
<h1>Testing</h1>
<ul class="listing span5 tablet_span4 clearfix ">
<?php
for($i=0; $i<12; $i++) {
    if(($i % 2) == 0) {
        $odd_even = "odd";
    }
    else {
        $odd_even = "even";
    }
    echo "<li class=\"list_item $odd_even\"><h2>Product $i</h2>";
    $j = rand(1,10);
    echo"<div class=\"listing_image\"><img src=\"http://lorempixel.com/175/175/city/$j\" data-1200=\"http://lorempixel.com/275/275/city/$j\" data-480=\"http://lorempixel.com/175/175/city/$j\"></div>";
   /*
    echo "<ul class=\"span4 clearfix\" >";
    for($j=0; $j<8; $j++) {
        echo "<li><img src=\"http://lorempixel.com/500/500/city/" . rand(1,10) ."\"></li>";
    }
    echo "</ul>";
    */

    echo "<div class=\"listing_details\">USD$ 9.99</div></li>";
}
?>
</ul>
<h2>More testing</h2>
<p>Here is some standard paragraph text.</p>
</div>
<?php include('footer.php'); ?>
