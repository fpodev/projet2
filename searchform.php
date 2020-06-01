<?php 
/**
 * Template for displaying search forms in Theme
 *
 * @package Travelogged
 */
 ?>
<form role="search" method="get" id="searchform" class="searchform " action="<?php echo esc_url( home_url( '/' ) ); ?>"><br>
	<div class="float-right top_search">
		<div class="input-group">
			<button id="searchsubmit" type="submit" class="btn Search_btn"><i class="fas fa-search"> </i></button>
			<input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Rechercher','travelogged' ); ?>">
		</div>
	</div>
</form>