<?php include('header.php'); ?>

<div class="hidden_desktop scroll_top clearfix" id="phone_atc">

    <div>

        <h1 class="title">Product Name</h1>
        <button onclick="$('#phone_atc').find('.phone_atc_data').slideToggle(); " class="btn primary">I want this!</button>

        <div>
            <h3 id="pd_price_phone">
                <span class="price sale"></span>
            </h3>

            <div>
                <span class="availability left">Item is available.</span>
                <span class="item_number right">100100</span>
            </div>
        </div>


        <div class="phone_atc_data clearfix">
            <form action="/k/shopping" method="POST" class="cart_form " id="prod_form" name="prod_main">

                <div id="product_options_container">
                    <div class="product_option_item">
                        <label>Color</label>
                        <select name="group_d7b7b937534858077f29de5f6c627e15_744768" id="group_d7b7b937534858077f29de5f6c627e15_744768" style="width: 100%"><option selected="" value="248397">White </option><option value="248399">Green </option></select></div><!-- end product option item -->
                    <div class="product_option_item">
                        <label>Size</label>
                        <select name="slave_option_id_d7b7b937534858077f29de5f6c627e15_744768" id="slave_option_id_d7b7b937534858077f29de5f6c627e15_744768" style="width: 100%"><option selected="" value="248394">Small </option><option value="248395">Medium </option></select></div><!-- end product option item -->
                    <div class="product_option_item">
                    </div><!-- end product option item -->
                </div><!-- end product options container -->
                <div class="add_to_cart_content" id="add_to_cart_details">
                    <label>Quantity</label>
                    <div class="row">
                        <div class="span1"><input type="hidden" value="" name="product_uom">
                            <input type="text" id="qty" name="quantity" value="1">
                        </div>
                        <div class="span2">
                            <button name="atc" class="btn primary">Add to Cart</button>
                        </div>
                    </div>

                </div><!-- end add to cart row -->
            </form>

        </div>
    </div>
</div>



<div class="col col_55">
    <div id="main_image">
        <a href="http://lorempixel.com/800/800/city/1" class="fancybox " rel="main_group"><img src="http://lorempixel.com/480/480/city/1" data-1200="http://lorempixel.com/800/800/city/1" data-480="http://lorempixel.com/480/480/city/1" class="shadow"></a>
    </div>
    <h3>Additional Images</h3>
    <ul class="span6 mobile_span4" id="additional_images">
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo"<li class=\"additional_image list_item\"><a href=\"http://lorempixel.com/800/800/city/$i\" class=\"fancybox\" rel=\"main_group\"><div class=\"shadow\"><img src=\"http://lorempixel.com/175/175/city/$i\" data-1200=\"http://lorempixel.com/275/275/city/$i\" data-480=\"http://lorempixel.com/175/175/city/$i\"></div></a></li>";
        }
        ?>
    </ul>
</div>

<div class="col col_45" id="product_detail">
    <div class="visible_desktop" id="desktop_atc">
        <div class="highlight shadow">
            <h2>Product Name</h2>
                <div class="highlight_content">
                <h3 id="pd_price">USD $9.99</h3>
                <span class="availability left">Item is available.</span>
                <span class="item_number right">Item # 100020</span>
                <div id="product_options_container" class="clearfix">
                    <div class="product_option_item">
                        <label>Color</label>
                        <select name="group_0dd134f74f6a717f4e6ae81a2539ea3f_669358" id="group_0dd134f74f6a717f4e6ae81a2539ea3f_669358">
                            <option value="0">Choose a Color</option>
                            <option value="248393">Black </option>
                            <option value="248400">Blue </option>
                            <option value="248397">White </option>
                        </select>
                    </div><!-- end product option item -->
                </div><!-- end product options container -->
                <form action="#" method="POST" class="cart_form " id="prod_form" name="prod_main">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="1">
                    <div class="action_button" id="add_to_cart_button">
                        <input type="submit" value="Add to Cart" id="atc" name="atc" class="btn primary">
                    </div><!-- end add to cart button -->
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="highlight shadow">
            <h2>Description</h2>
            <div class="highlight_content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
        </div>
    </div>

    <div id="shopping_security_row">
        <ul>
            <li id="return_policy">
                <a onclick="javascript:_gaq.push(['_setAccount', 'UA-10479045-2'],['_trackEvent', '30 Day Returns', 'Click', null],['st._setAccount', null],['st._trackEvent', '30 Day Returns', 'Click']);" href="/home/policies/111.0.1.1#Returns"><span class="icon">↻</span>Money Back 30 Day Returns</a>
            </li>
            <li id="shopping_security">
                <a onclick="javascript:_gaq.push(['_setAccount', 'UA-10479045-2'],['_trackEvent', 'Secure Shopping', 'Click', 'null'],['st._setAccount', 'null'],['st._trackEvent', 'Secure Shopping', 'Click']);" href="/home/security/111.0.1.1"><span class="icon">☑</span>Secure Shopping</a>
            </li>
        </ul>
    </div><!-- end shopping security row -->

</div>

<div class="full_width">
<h2 class="clearfix">You may also like</h2>
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
</div>
<?php include('footer.php'); ?>