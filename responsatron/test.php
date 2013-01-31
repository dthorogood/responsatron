<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<div style="height:200px; width:1100px;" ><p>this is some text</p>
</div>

<style>
    div { font-size:14px; line-height:20px; }
    </style>

<script type="text/javascript">
var myHeight = $('div').height();
var textHeight = $('p').height();
var oldSize = parseInt($('div').css('font-size'));
var multiplier = myHeight / textHeight;
var newSize = oldSize * multiplier;
var newHeight = textHeight * multiplier;
$('div').css('font-size', newSize);
$('div').css('line-height', newHeight + 'px');
</script>