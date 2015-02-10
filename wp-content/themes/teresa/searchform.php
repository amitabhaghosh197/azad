<?php
/**
 * The template for displaying search forms in cutedoctor
 *
 * @package cutedoctor
 */
?>
<div class="searchbox">
<div>
<form role="search" method="get" class="search-box" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'damiracle' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	
	<input type="submit" class="" value="<?php echo esc_attr_x( '&#xf002;', 'submit button', 'damiracle' ); ?>">
</form>
</div>
</div>