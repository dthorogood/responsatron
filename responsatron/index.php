<?php include('header.php'); ?>

<?php include('slideshow.php'); ?>

<h2>Welcome</h2>
<p>This is some sample text</p>

<h3>Featured Products</h3>
<ul class="listing span5 tablet_span4 clearfix ">
<?php
for($i=0; $i<5; $i++) {
    if(($i % 2) == 0) {
        $odd_even = "odd";
    }
    else {
        $odd_even = "even";
    }
    echo "<li class=\"list_item $odd_even\"><div class=\"highlight shadow\">";
    $j = rand(1,10);
    echo"<div class=\"listing_image\"><img src=\"http://lorempixel.com/175/175/city/$j\" data-1200=\"http://lorempixel.com/275/275/city/$j\" data-480=\"http://lorempixel.com/175/175/city/$j\"></div>";
   /*
    echo "<ul class=\"span4 clearfix\" >";
    for($j=0; $j<8; $j++) {
        echo "<li><img src=\"http://lorempixel.com/500/500/city/" . rand(1,10) ."\"></li>";
    }
    echo "</ul>";
    */

    echo "<div class=\"listing_details\"><h3>Product $i</h3>USD$ 9.99</div></div></li>";
}
?>
</ul>


<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
<?php include('footer.php'); ?>