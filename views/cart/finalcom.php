<?php $this->layout('layout', ['title' => 'Super boutique']) ?>
<div class="ui container">
	<div class="ui grid centered two columns">
		<div class="height wide column center aligned">
			<div class="ui list"><br>
				<h1>Récapitulatif de ma commande</h1>
				<h4 class="item">Montant total : <?=Cart::total()?> &euro;</h4>
				<h4 classs="item">Nombre de produits : <?=Cart::count()?> </h4>
			</div> </br>
			<h1>Veuillez remplir ce formulaire</h1> </br>
			<form method="POST" action="/cart/checkout" class="ui form" name="subs">
				<div class="two fields">
					<div class="field">
	    				<label>Prénom</label>
	    				<input type="text" name="first-name" placeholder="Prenom">
	  				</div>
	  				<div class="field">
	    				<label>Nom</label>
	    				<input type="text" name="last-name" placeholder="Nom">
	  				</div>
				</div>
	  			<div class="field">
	  				<label>Adresse</label>
	  				<input type="text" name="adress" placeholder="Adresse">
	  			</div>
	  			<div class="field">
	  				<label>Code Postal</label>
	  				<input type="text" name="cp" placeholder="Code Postal" maxlength="5">
	  			</div>
	  			<div class="field">
	  				<label>Téléphone</label>
	  				<input type="text" name="phone" placeholder="Telephone" maxlength="10">
	  			</div> </br>
	  			<button class="ui button" type="submit">Valider ma commande</button>
			</form></br>
			<div class="item">
                <a href="/cart/validate" class="ui button">Annuler ma commande</a>
            </div>
		</div>
	</div>
</div>