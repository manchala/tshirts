<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <title>Shop</title>
  <meta charset="UTF-8">
</head>
<body>
    <div id="products">
      <ul>
	<?php foreach ($products as $product): ?>
	<li>
	    <?php echo form_open('shop/add'); ?>
	      <div><?php echo $product->product_name; ?></div>
	       <div><?php echo $product->price; ?></div>
	       <div>
		<img src="http://placekitten.com/200/200" class="img-polaroid"/>
	      </div>
	     <?php echo form_dropdown(
		$product->size,
		$product->values1
	
	    ); ?>
	    <?php echo form_submit('action','Add To Cart'); ?>
	    <?php echo form_close(); ?>
	</li>
	    <?php endforeach; ?>
      </ul>
    </div>

    <div id="cart">

    </div>
</body>
</html>