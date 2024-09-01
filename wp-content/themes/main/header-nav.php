<div class="d-flex justify-content-start justify-content-md-between align-items-center flex-column flex-md-row col-12 col-md-9 col-lg-8 my-2 my-sm-3">
    <?php 
        $items =  wp_get_nav_menu_items('Header Menu');
        foreach($items as $item) { 
    ?>
        <div class="d-flex" data-item-id="<?php  echo $item->ID;  ?>">
        <a class="item-menu" href="<?php  echo $item->url;  ?>" title="<?php  echo $item->title;  ?>"><?php  echo $item->title;  ?></a>
        </div>
    <?php } ?>
</div>