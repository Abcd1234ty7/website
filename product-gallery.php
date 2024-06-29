<div id="product-grid">
	<div class="txt-heading">Choose your products</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/camera.jpg" id="<?php echo "3DcAM01"; ?>" class="product-img">
		</div>
		<div>
			<strong><?php echo "FinePix Pro2 3D Camera"; ?></strong>
		</div>
		<div class="product-price"><?php echo "R1500.00"; ?></div>
		<div class="product-description"><?php echo "High-quality 3D camera with dual lenses and full HD recording capability."; ?></div>
		<input type="button" id="add_<?php echo "3DcAM01"; ?>" value="Add to cart" class="btnAddAction" onClick="cartAction('add', '<?php echo "3DcAM01"; ?>','<?php echo "FinePix Pro2 3D Camera"; ?>','<?php echo "1500.00"; ?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/fit watch.PNG" id="<?php echo "wristWear03"; ?>" class="product-img">
		</div>
		<div>
			<strong><?php echo "Luxury fit Wrist Watch"; ?></strong>
		</div>
		<div class="product-price"><?php echo "R3000.00"; ?></div>
		<div class="product-description"><?php echo "Elegant and stylish wrist watch with a sleek design and durable build."; ?></div>
		<input type="button" id="add_<?php echo "wristWear03"; ?>" value="Add to cart" class="btnAddAction" onClick="cartAction('add', '<?php echo "wristWear03"; ?>','<?php echo "Luxury Ultra thin Wrist Watch"; ?>','<?php echo "300.00"; ?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/laptop.jpg" id="<?php echo "LPN45"; ?>" class="product-img">
		</div>
		<div>
			<strong><?php echo "XP 1155 Intel Core Laptop"; ?></strong>
		</div>
		<div class="product-price"><?php echo "8000.00"; ?></div>
		<div class="product-description"><?php echo "Powerful laptop with Intel Core processor, 8GB RAM, and 256GB SSD."; ?></div>
		<input type="button" id="add_<?php echo "LPN45"; ?>" value="Add to cart" class="btnAddAction" onClick="cartAction('add', '<?php echo "LPN45"; ?>','<?php echo "XP 1155 Intel Core Laptop"; ?>','<?php echo "800.00"; ?>')" />
	</div>
</div>