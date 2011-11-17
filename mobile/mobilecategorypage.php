<?php
$main_category_tree = new category_tree;
$row = 0;
$mobile_category_tree = $main_category_tree->zen_category_tree();
?>
<div id="cat" style="position: absolute; width: 100%; display: none; overflow: visible; min-height: 600px; z-index: 500; margin-top: 75px; background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(204, 204, 204, 1.0)), to(rgba(204, 204, 204, 0.50))); background-color: transparent;" class="ui-page ui-body-b">

	<div data-role="content" class="ui-content">	
		<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
		<?php   for ($i=0;$i<sizeof($mobile_category_tree);$i++) { ?>
			<li class="ui-li ui-li-static ui-body-c"><a href="category<?php echo htmlspecialchars(preg_replace('/^cPath=/', '', $mobile_category_tree[$i]['path'])); ?>_1.htm?cPath=<?php echo htmlspecialchars(preg_replace('/^cPath=/', '', $mobile_category_tree[$i]['path'])); ?>" class="ui-link"><?php echo($mobile_category_tree[$i]['name']); ?> </a></li>
		<?php } ?>
		</ul>
	</div><!-- /content -->	
	
</div><!-- /page -->