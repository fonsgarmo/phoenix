<?php

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */

?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' )) ?>" >
    <div>
        <input class="form-control" placeholder="Buscar..." type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    </div>
</form>