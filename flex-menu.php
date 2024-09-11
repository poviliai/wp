<?php 
if(empty($args)){
    $args = array(
        'menu' => '',
        'item_class'=>'item-menu',
        'position_mo' => 'start'
    );
}
    if(!empty($args)){
        switch($args['position_mo']){
            case 'start' :
                $mo = 'me-auto'; 
                break;
            case 'end' :
                $mo = 'ms-auto'; 
                break;
            case 'center' :
                $mo = '';
                break;
            default : 
                $mo =    'me-auto';      
        }
       
?>
   <div class="d-flex justify-content-start align-items-center flex-column flex-lg-row">
        <div class="d-flex justify-content-<?php echo $args['position_mo']; ?> justify-content-md-between align-items-center flex-column flex-sm-row w-100 mt-3 mt-lg-0 ms-auto top-menu">

<?php
        $menu_items = wp_get_nav_menu_items( $args['menu'] );
        if($menu_items){
            $this_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );
            foreach ($menu_items as $itemObj){
                if(property_exists($itemObj, 'url') && property_exists($itemObj, 'title') && property_exists($itemObj, 'ID')){
                    if(!empty((int)$this_item->ID) && ((int)$this_item->ID === (int) $itemObj->ID)){
                        $class= $args['item_class'] ." current";
                    }else{
                        $class=$args['item_class'];
                    }
                    echo '<div class="d-flex '. $mo .' me-sm-0 pb-3"  data-item-id="'. $itemObj->ID .'"><a class="'. $class .'"  href="'. str_replace('https:/partnerafrica-ethiopia.hosting2.tn-rechenzentrum1.de','',$itemObj->url) .'" title="'. $itemObj->title.'">'. $itemObj->title .'</a></div>';
                }
            }
        }
?>
      </div>
   </div>        
<?php         
    }
?>