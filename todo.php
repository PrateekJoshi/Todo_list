<?php
if(isset($_GET['item'])){
	$item=strip_tags($_GET['item']);
    echo'<div class="alert alert-warning alert-dismissible" role="alert" id="item_stack">'.
  '<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="edit()">'.'</button><button type="button" class="btn btn-default btn-xs fa fa-pencil" onclick="edit()"></button>&nbsp;&nbsp;<i>'.$item.
'</i><button type="button" class="form btn btn-sm fa fa-ban col-md-2 pull-right" onclick="item_close_btn()" id="item_close_btn"></div>';
}

?>