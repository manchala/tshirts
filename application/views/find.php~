<table class="table table-striped">
	<thead>
		<tr>
			<th>Team Name</th>
			<th>Shirt Design</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach ($products as $product): ?>
			<td><?php echo $product->product_name; ?></td>
			<td>
				<img src="http://placekitten.com/200/200" class="img-polaroid"/>
			</td>
			<td>
				<?php echo form_hidden('id_number', $product->product_id); ?>
				<a href="<?php echo base_url(); ?>shirt/buy/<?php echo $product->product_id; ?>" class="btn" type="button" >Grab Shirt</a>
			</td>
		</tr>
			<?php endforeach; ?>
		
		
	</tbody>
</table>