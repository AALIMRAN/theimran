<?php
/**
 *
 * Redesigning Default Search form
 *
 * @package Construc
 */

?>


<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" placeholder="<?php esc_attr_e( 'Search...', 'theimran' ); ?>">
	<button class="fa fa-search" type="submit">search</button>
</form>
