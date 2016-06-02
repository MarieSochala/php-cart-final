<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<h4 class="item header">Montant total : ??? &euro;</h4>
				<h4 classs="item header">Nombre produits : ???</h4>
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
			</div>
		</div>
		<div class="column">
			<table class="ui table compact">
				<thead>
					<tr>
						<th>Picture</th>
						<th>Name</th>
						<th>Price</th>
					</tr>
				</thead>
				<!-- une boucle ! -->
				<?php foreach($products as $product): ?>
				<tbody>
					<tr>
						<td><?=$product->name?></td>
						<td><img src="<?=$product->picture?>" width="50px" height="50px"></td>
						<td><?=$product->price?></td>
					</tr>
				</tbody>
			<?php endforeach; ?>

 			</table>
		</div>
	</div>


</div>