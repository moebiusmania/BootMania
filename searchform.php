<!-- Maschera di ricerca -->
<form role="search" method="get" class="form-inline search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<label>Ricerca:</label>
		<input type="search" class="form-control" placeholder="cosa ti serve" name="s" title="Cosa devi cercare?" required>
		<button class="btn btn-default">
			<span class="glyphicon glyphicon-search"></span>
			Cerca
		</button>
	</div>
</form>