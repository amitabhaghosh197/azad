<?php
//needs: $base (instance of Essential_Grid_Base), $grid (Instance of Essential_Grid::get_essential_grid_by_id() || false [creation of new])
if(!isset($base)) $base = new Essential_Grid_Base();
$eg_meta = new Essential_Grid_Meta();

// INIT POSTER IMAGE SOURCE ORDERS
if(intval($isCreate) > 0) //currently editing, so default can be empty
	$poster_source_order = $base->getVar($grid['params'], 'poster-source-order', '');
else
	$poster_source_order = $base->getVar($grid['params'], 'poster-source-order', array('featured-image'));

$poster_source_list = $base->get_poster_source_order();


// INIT LIGHTBOX SOURCE ORDERS
if(intval($isCreate) > 0) //currently editing, so default can be empty
	$lb_source_order = $base->getVar($grid['params'], 'lb-source-order', '');
else
	$lb_source_order = $base->getVar($grid['params'], 'lb-source-order', array('featured-image'));

$lb_source_list = $base->get_lb_source_order();


// INIT AJAX SOURCE ORDERS
if(intval($isCreate) > 0) //currently editing, so default can be empty
	$aj_source_order = $base->getVar($grid['params'], 'aj-source-order', '');
else
	$aj_source_order = $base->getVar($grid['params'], 'aj-source-order', array('post-content'));

$aj_source_list = $base->get_aj_source_order();
	
$all_metas = $eg_meta->get_all_meta();
?>
	<!-- SETTINGS -->
	<form id="eg-form-create-settings">
		<!--
		GRID SETTINGS
		-->
		<div id="esg-settings-grid-settings" class="esg-settings-container">
			<div class="">

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Layout', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="navigation-container" class="eg-tooltip-wrap" title="<?php _e('Choose layout type of the grid', EG_TEXTDOMAIN); ?>"><?php _e("Layout", EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="layout-sizing" class="firstinput eg-tooltip-wrap" title="<?php _e('Grid always stays within the wrapping container', EG_TEXTDOMAIN); ?>" value="boxed"<?php checked($base->getVar($grid['params'], 'layout-sizing', 'boxed'), 'boxed'); ?>><span style="margin-right:25px"><?php _e("Boxed", EG_TEXTDOMAIN); ?></span>
							<input type="radio" name="layout-sizing" value="fullwidth" class=" firstinput eg-tooltip-wrap" title="<?php _e('Force Fullwidth. Grid will fill complete width of the window', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'layout-sizing', 'boxed'), 'fullwidth'); ?>><?php _e("Fullwidth", EG_TEXTDOMAIN); ?>
							<input type="radio" name="layout-sizing" value="fullscreen" class="eg-tooltip-wrap" title="<?php _e('Fullscreen Layout. !! Hides not needed options !! Grid Width = Window Width, Grid Height = Window Height - Offset Containers.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'layout-sizing', 'boxed'), 'fullscreen'); ?>><?php _e("Fullscreen", EG_TEXTDOMAIN); ?>
						</p>
						<p id="eg-fullscreen-container-wrap" style="display: none;">
							<label for="fullscreen-offset-container"><?php _e('Offset Container', EG_TEXTDOMAIN); ?></label>
							<input class="firstinput" type="text" name="fullscreen-offset-container" value="<?php echo $base->getVar($grid['params'], 'fullscreen-offset-container', ''); ?>" />
						</p>
						<p id="eg-even-masonry-wrap">
							<label for="layout" class="eg-tooltip-wrap" title="<?php _e('Select Grid Layout', EG_TEXTDOMAIN); ?>"><?php _e('Grid Layout', EG_TEXTDOMAIN); ?></label>
							<span id="eg-grid-layout-wrapper">
								<input type="radio" name="layout" value="even" class="firstinput eg-tooltip-wrap" title="<?php _e('Even - Each item has same height. Width and height are item ratio dependent', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'layout', 'even'), 'even'); ?>> <?php _e('Even', EG_TEXTDOMAIN); ?>
								<input type="radio" name="layout" value="masonry" class="eg-tooltip-wrap" title="<?php _e('Individual item height depends on media height and content height', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'layout', 'even'), 'masonry'); ?>> <?php _e('Masonry', EG_TEXTDOMAIN); ?>
								<input type="radio" name="layout" value="cobbles" class="eg-tooltip-wrap" title="<?php _e('Even Grid with Width / Height Multiplications', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'layout', 'even'), 'cobbles'); ?>> <?php _e('Cobbles', EG_TEXTDOMAIN); ?>								
							</span>
						</p>
						<p id="eg-content-push-wrap">
							<label for="columns" class="eg-tooltip-wrap" title="<?php _e('Content Push', EG_TEXTDOMAIN); ?>"><?php _e('Content Push', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="content-push" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Content will push the website down on Even Grids with content in the Masonry Content area for the last row', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'content-push', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="content-push" value="off" class="eg-tooltip-wrap" title="<?php _e('Content will overflow elements on Even Grids with content in the Masonry Content area for the last row', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'content-push', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<p id="eg-items-ratio-wrap">
							<label for="x-ratio" class="eg-tooltip-wrap" title="<?php _e('Item width/height ratio (if Even Gallery Layout is selected)', EG_TEXTDOMAIN); ?>"><?php _e('Items Ratio X:Y', EG_TEXTDOMAIN); ?></label>
							<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Width ratio of item', EG_TEXTDOMAIN); ?>" type="text" name="x-ratio" value="<?php echo $base->getVar($grid['params'], 'x-ratio', '4', 'i'); ?>" />&nbsp;:&nbsp;<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Height ratio of item', EG_TEXTDOMAIN); ?>" type="text" name="y-ratio" value="<?php echo $base->getVar($grid['params'], 'y-ratio', '3', 'i'); ?>" />
						</p>
						<p>
							<label for="rtl" class="eg-tooltip-wrap" title="<?php _e('Right To Left option. This will change the direction of the Grid Items from right to left instead of left to right', EG_TEXTDOMAIN); ?>"><?php _e('RTL', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="rtl" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Grid Items will be sorted and ordered from right to left', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'rtl', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="rtl" value="off" class="eg-tooltip-wrap" title="<?php _e('Grid Items will be sorted and ordered from left to right', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'rtl', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Columns', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<table style="position:relative">
							<tr id="eg-col-0">
								<td class="eg-tooltip-wrap" title="<?php _e('Display normal settings or get advanced', EG_TEXTDOMAIN); ?>"><label for="columns"><?php _e('Setting Mode', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input type="radio" name="columns-advanced" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Advanced columns, custom media queries and custom columns (in rows pattern)', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'columns-advanced', 'off'), 'on'); ?>> <?php _e('Advanced', EG_TEXTDOMAIN); ?>
									<input type="radio" name="columns-advanced" value="off" class="eg-tooltip-wrap" title="<?php _e('Simple columns. Each row with same column, default media query levels.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'columns-advanced', 'off'), 'off'); ?>> <?php _e('Simple', EG_TEXTDOMAIN); ?>
								</td>
								<?php
								$ca_steps = 0;
								if(!empty($columns_advanced[0])){
									foreach($columns_advanced[0] as $col)
										if(!empty($col)) $ca_steps = count($columns_advanced) + 1;
								}
								?>
								<td class="columns-adv-first" style="text-align: center;position:relative;">
									<?php _e('Rows:', EG_TEXTDOMAIN); ?><br><?php
									if($ca_steps > 0) {
										echo 1; echo ',';
										echo 1 + 1 * $ca_steps; echo ',';
										echo 1 + 2 * $ca_steps;
									}else{
										?>
										<div style="position: absolute;top: 11px;white-space: nowrap;left: 100%;">
											<a class="button-primary revblue" href="javascript:void(0);" id="eg-add-column-advanced">+</a>
										</div>
										<?php
									}
									?>
								</td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows columns-adv-head" style="text-align: center;position:relative;">
											<?php _e('Rows:', EG_TEXTDOMAIN); ?><br><?php
											$at = $adv_key + 2;
											echo $at; echo ',';
											echo $at + 1 * $ca_steps; echo ',';
											echo $at + 2 * $ca_steps;
											if($ca_steps == $adv_key + 1){
												?>
												<div style="position: absolute;top: 11px;white-space: nowrap;left: 100%;">
													<a class="button-primary revblue" href="javascript:void(0);" id="eg-add-column-advanced">+</a>
													<a class="button-primary revblue" href="javascript:void(0);" id="eg-remove-column-advanced">-</a>
												</div>
												<?php
											}
											?>
										</td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-1">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for large desktop screens', EG_TEXTDOMAIN); ?>"><label><?php _e('Desktop Large', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for large desktop screens', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[0]; ?>">
									<span id="slider-columns-1" data-num="1" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on large desktop screens', EG_TEXTDOMAIN); ?>" type="text" id="columns-1" name="columns[]" value="<?php echo $columns[0]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on large desktop screens', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[0]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-2">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for medium sized desktop screens', EG_TEXTDOMAIN); ?>"><label><?php _e('Desktop Medium', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for medium sized desktop screens', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[1]; ?>">
									<span id="slider-columns-2" data-num="2" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on medium sized desktops', EG_TEXTDOMAIN); ?>" type="text" id="columns-2" name="columns[]" value="<?php echo $columns[1]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on medium sized desktops', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[1]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-3">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for small sized desktops', EG_TEXTDOMAIN); ?>"><label><?php _e('Desktop Small', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for small sized desktop screens', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[2]; ?>">
									<span id="slider-columns-3" data-num="3" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on small sized desktop screens', EG_TEXTDOMAIN); ?>" type="text" id="columns-3" name="columns[]" value="<?php echo $columns[2]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Amount of items in the rows shown above on small sized desktop screens', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[2]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-4">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for tablets in landscape view', EG_TEXTDOMAIN); ?>"><label><?php _e('Tablet Landscape', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for tablets in landscape view', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[3]; ?>">
									<span id="slider-columns-4" data-num="4" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on tablets in landscape view', EG_TEXTDOMAIN); ?>" type="text" id="columns-4" name="columns[]" value="<?php echo $columns[3]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Amount of items in the rows shown above on tablet in landscape view', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[3]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-5">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for tablets in portrait view', EG_TEXTDOMAIN); ?>"><label><?php _e('Tablet', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for tablets in portrait view', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[4]; ?>">
									<span id="slider-columns-5" data-num="5" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on tablets', EG_TEXTDOMAIN); ?>" type="text" id="columns-5" name="columns[]" value="<?php echo $columns[4]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in the rows shown above on tablets', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[4]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-6">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for mobiles in landscape view', EG_TEXTDOMAIN); ?>"><label><?php _e('Mobile Landscape', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for mobiles in landscape view', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text" name="columns-width[]" value="<?php echo $columns_width[5]; ?>">
									<span id="slider-columns-6" data-num="6" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in the rows for mobiles in landscape view', EG_TEXTDOMAIN); ?>" type="text" id="columns-6" name="columns[]" value="<?php echo $columns[5]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows"><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in the rows shown above for mobiles in landscape view', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[5]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
							<tr id="eg-col-7">
								<td class="eg-tooltip-wrap" title="<?php _e('Items per Row (+ Min. Window Width (advanced)) for mobiles in portrait view', EG_TEXTDOMAIN); ?>"><label><?php _e('Mobile', EG_TEXTDOMAIN); ?></label></td>
								<td>
									<input class="input-settings-small columns-width firstinput eg-tooltip-wrap" title="<?php _e('Min. browser width for mobiles in portrait view', EG_TEXTDOMAIN); ?>" style="margin-right:15px" type="text"  name="columns-width[]" value="<?php echo $columns_width[6]; ?>">
									<span id="slider-columns-7" data-num="7" class="slider-settings"></span>
								</td>
								<td><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in rows on mobiles', EG_TEXTDOMAIN); ?>" type="text" id="columns-7" name="columns[]" value="<?php echo $columns[6]; ?>" /></td>
								<?php
								if(!empty($columns_advanced)){
									foreach($columns_advanced as $adv_key => $adv){
										if(empty($adv)) continue;
										?>
										<td class="columns-adv-<?php echo $adv_key; ?> columns-adv-rows" ><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Number of items in the rows shown above on mobiles', EG_TEXTDOMAIN); ?>" type="text" name="columns-advanced-rows-<?php echo $adv_key; ?>[]" value="<?php echo $adv[6]; ?>" /></td>
										<?php
									}
								}
								?>
							</tr>
						</table>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Pagination', EG_TEXTDOMAIN); ?></span></h3>
					</div>

					<div class="eg-cs-tbc">
						<p id="eg-pagination-wrap">
							<label for="rows-unlimited"><?php _e('Pagination', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="rows-unlimited" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Pagination deactivated. Load More Option is available.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'rows-unlimited', 'off'), 'on'); ?>> <?php _e('Disable (Load More Available)', EG_TEXTDOMAIN); ?>
							<input type="radio" name="rows-unlimited" value="off" class="eg-tooltip-wrap" title="<?php _e('Pagination Activated. Load More Option is disabled. Dont Forget to add The Navigation Module "Pagination" to your Grid !', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'rows-unlimited', 'off'), 'off'); ?>> <?php _e('Enable', EG_TEXTDOMAIN); ?>
						</p>
						<p class="rows-num-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'on') ? ' style="display: none;"' : ''; ?>>
							<label for="rows"><?php _e('Max Visible Rows', EG_TEXTDOMAIN); ?></label>
							<span id="slider-rows" class="slider-settings"></span>
							<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Amount of Rows shown (max) when Pagination Activated.', EG_TEXTDOMAIN); ?>" type="text" name="rows" value="<?php echo $base->getVar($grid['params'], 'rows', '3', 'i'); ?>" />
						</p>
					</div>
				</div>

				<div class="divider1"></div>
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Smart Loading', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p class="load-more-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'off') ? ' style="display: none;"' : ''; ?>>
							<label for="load-more"><?php _e('Load More', EG_TEXTDOMAIN); ?></label>
							<select name="load-more" class="eg-tooltip-wrap" title="<?php _e('Choose the Load More type', EG_TEXTDOMAIN); ?>">
								<option value="none"<?php selected($base->getVar($grid['params'], 'load-more', 'none'), 'none'); ?>><?php _e('None', EG_TEXTDOMAIN); ?></option>
								<option value="button"<?php selected($base->getVar($grid['params'], 'load-more', 'none'), 'button'); ?>><?php _e('More Button', EG_TEXTDOMAIN); ?></option>
								<option value="scroll"<?php selected($base->getVar($grid['params'], 'load-more', 'none'), 'scroll'); ?>><?php _e('Infinitive Scroll', EG_TEXTDOMAIN); ?></option>
							</select>
						</p>
						<p class="load-more-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'off') ? ' style="display: none;"' : ''; ?>>
							<label  class="eg-tooltip-wrap" title="<?php _e('Set the Load More text here', EG_TEXTDOMAIN); ?>" for="load-more-text" ><?php _e('Load More Text', EG_TEXTDOMAIN); ?></label>
							<input class="eg-tooltip-wrap" title="<?php _e('Set the Load More text here', EG_TEXTDOMAIN); ?>" type="text" name="load-more-text" value="<?php echo $base->getVar($grid['params'], 'load-more-text', __('Load More', EG_TEXTDOMAIN)); ?>" />
						</p>
						<p class="load-more-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'off') ? ' style="display: none;"' : ''; ?>>
							<label for="lazy-loading"><?php _e('Item No. Remaining', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="load-more-show-number" value="on" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'load-more-show-number', 'on'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="load-more-show-number" value="off" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'load-more-show-number', 'on'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<p class="load-more-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'off') ? ' style="display: none;"' : ''; ?>>
							<label  class="eg-tooltip-wrap" title="<?php _e('Display how many items at start?', EG_TEXTDOMAIN); ?>" for="load-more-start" ><?php _e('Item No. at Start', EG_TEXTDOMAIN); ?></label>
							<span id="slider-load-more-start" class="slider-settings"></span>
							<input class="input-settings-small  eg-tooltip-wrap" title="<?php _e('Display how many items at start?', EG_TEXTDOMAIN); ?>" type="text" name="load-more-start" value="<?php echo $base->getVar($grid['params'], 'load-more-start', '3', 'i'); ?>" />
						</p>
						<p class="load-more-wrap"<?php echo ($base->getVar($grid['params'], 'rows-unlimited', 'off') == 'off') ? ' style="display: none;"' : ''; ?>>
							<label class="eg-tooltip-wrap" title="<?php _e('Display how many items after loading?', EG_TEXTDOMAIN); ?>" for="load-more-amount"><?php _e('Item No. Added', EG_TEXTDOMAIN); ?></label>
							<span id="slider-load-more-amount" class="slider-settings"></span>
							<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Display how many items after loading?', EG_TEXTDOMAIN); ?>" type="text" name="load-more-amount" value="<?php echo $base->getVar($grid['params'], 'load-more-amount', '3', 'i'); ?>" />
						</p>
						<p>
							<label for="lazy-loading"><?php _e('Lazy Load', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="lazy-loading" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Enable Lazy Load of Items', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lazy-loading', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="lazy-loading" value="off" class="eg-tooltip-wrap" title="<?php _e('Disable Lazy Loading (All Item except the - Load more items -  on first page will be preloaded once)', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lazy-loading', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<p class="lazy-load-wrap">
							<label for="lazy-loading" class="eg-tooltip-wrap" title="<?php _e('Background color of media during the lazy loading progress', EG_TEXTDOMAIN); ?>"><?php _e('Lazy Load Color', EG_TEXTDOMAIN); ?></label>
							<input name="lazy-load-color" type="text" id="lazy-load-color" class="eg-tooltip-wrap" title="<?php _e('Background color of Media during the Lazy Load progress', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'lazy-load-color', '#FFFFFF'); ?>" data-default-color="#ffffff">
						</p>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Spacings', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="spacings"><?php _e('Item Spacing', EG_TEXTDOMAIN); ?></label>
							<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Spaces between items vertical and horizontal', EG_TEXTDOMAIN); ?>" type="text" name="spacings" value="<?php echo $base->getVar($grid['params'], 'spacings', '0', 'i'); ?>" /> px
						</p>
					</div>
				</div>
				
				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Paddings', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="min-width:620px">
						<p>
							<?php
							$grid_padding = $base->getVar($grid['params'], 'grid-padding', '0');
							if(!is_array($grid_padding)) $grid_padding = array('0', '0', '0', '0');
							?>
							<label for="grid-padding"><?php _e('Whole Grid Padding', EG_TEXTDOMAIN); ?></label>
							<span><?php _e('Top:', EG_TEXTDOMAIN); ?></span><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Top of the Grid', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="grid-padding[]" value="<?php echo @$grid_padding[0]; ?>" />
							<span><?php _e('Right:', EG_TEXTDOMAIN); ?></span><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Right of the Grid', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="grid-padding[]" value="<?php echo @$grid_padding[1]; ?>" />
							<span><?php _e('Bottom:', EG_TEXTDOMAIN); ?></span><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Bottom of the Grid', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="grid-padding[]" value="<?php echo @$grid_padding[2]; ?>" />
							<span><?php _e('Left:', EG_TEXTDOMAIN); ?></span><input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Left of the Grid', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="grid-padding[]" value="<?php echo @$grid_padding[3]; ?>" />
						</p>
					</div>
				</div>

			</div>
		</div>

		<!--
		SKIN SETTINGS
		-->
		<div id="esg-settings-skins-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Background', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="main-background-color"><?php _e('Main Background Color', EG_TEXTDOMAIN); ?></label>
							<input name="main-background-color" type="text" id="main-background-color" class="eg-tooltip-wrap" title="<?php _e('Background Color of the Grid. Type: transparent in case no Background Color Needed', EG_TEXTDOMAIN); ?>"value="<?php echo $base->getVar($grid['params'], 'main-background-color', 'transparent'); ?>" data-default-color="transparent">
						</p>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Navigation', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="navigation-skin"><?php _e('Choose Skin', EG_TEXTDOMAIN); ?></label>
							<select id="navigation-skin-select" name="navigation-skin" style="margin-right:10px" class="eg-tooltip-wrap" title="<?php _e('Select the skin/color of the Navigation', EG_TEXTDOMAIN); ?>">
								<?php
								foreach($navigation_skins as $skin){
									?>
									<option value="<?php echo $skin['handle']; ?>"<?php selected($nav_skin_choosen, $skin['handle']); ?>><?php echo $skin['name']; ?></option>
									<?php
								}
								?>
							</select>
							<a id="eg-edit-navigation-skin" class="button-primary revblue eg-tooltip-wrap" title="<?php _e('Edit the selected Navigation Skin Style', EG_TEXTDOMAIN); ?>" href="javascript:void(0);"><?php _e('Edit Skin', EG_TEXTDOMAIN); ?></a>
							<a id="eg-create-navigation-skin" class="button-primary revpurple eg-tooltip-wrap" title="<?php _e('Create a new Navigation Skin Style', EG_TEXTDOMAIN); ?>"href="javascript:void(0);"><?php _e('Create Skin', EG_TEXTDOMAIN); ?></a>
							<a id="eg-delete-navigation-skin" class="button-primary revred eg-tooltip-wrap" title="<?php _e('Delete the selected Navigation Skin', EG_TEXTDOMAIN); ?>"href="javascript:void(0);"><?php _e('Delete Skin', EG_TEXTDOMAIN); ?></a>
						</p>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Item Skins', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc eg-photoshop-bg">
						<div id="eg-selected-skins-wrapper">
							<div id="eg-selected-skins-default">
								<?php
								$skins_c = new Essential_Grid_Item_Skin();
								$navigation_c = new Essential_Grid_Navigation();
								$grid_c = new Essential_Grid();
								
								$grid_skin_sel['id'] = 'even';
								$grid_skin_sel['name'] = __('Skin Selector', EG_TEXTDOMAIN);
								$grid_skin_sel['handle'] = 'skin-selector';
								$grid_skin_sel['postparams'] = array();
								$grid_skin_sel['layers'] = array();
								$grid_skin_sel['params'] = array('navigation-skin' => ''); //leave empty, we use no skin
								
								$skins_html = '';
								$skins_css = '';
								$filters = array();

								$skins = $skins_c->get_essential_item_skins();
								
								$demo_img = array();
								for($i=1; $i<=18; $i++){
									$demo_img[] = 'demoimage1.jpg';
								}
								
								if(!empty($skins) && is_array($skins)){
									$src = array();
									
									$do_only_first = false;
									
									if($entry_skin_choosen == '0') $do_only_first = true; //only add the selected on the first element if we create a new grid, so we select the firs skin
									
									foreach($skins as $skin){
										if(empty($src)) $src = $demo_img;
										
										$item_skin = new Essential_Grid_Item_Skin();
										$item_skin->init_by_data($skin);
										
										//set filters
										$item_skin->set_skin_choose_filter();
										
										//set demo image
										$img_key = array_rand($src);
										$item_skin->set_image($src[$img_key]);
										unset($src[$img_key]);
										
										$item_filter = $item_skin->get_filter_array();
										
										$filters = array_merge($item_filter, $filters);
										
										ob_start();
										if($do_only_first){
											$item_skin->output_item_skin('skinchoose', '-1'); //-1 = will do select
											$do_only_first = false;
										}else{
											$item_skin->output_item_skin('skinchoose', $entry_skin_choosen);
										}
										
										$skins_html.= ob_get_contents();
										ob_clean();
										ob_end_clean();
										
										ob_start();
										$item_skin->generate_element_css('skinchoose');
										$skins_css.= ob_get_contents();
										ob_clean();
										ob_end_clean();
									}
								}
								
								$grid_c->init_by_data($grid_skin_sel);
								
								echo '<div id="esg-grid-'.$handle.'-1-wrapper">';
								
								$grid_c->output_wrapper_pre();
								
								$filters = array_map("unserialize", array_unique(array_map("serialize", $filters))); //filter to unique elements
								
								$navigation_c->set_filter($filters);
								$navigation_c->set_style('padding', '10px 0 0 0');
								
								echo '<div style="text-align: center;">';
								$navigation_c->output_filter('skinchoose');
								$navigation_c->output_pagination();
								echo '</div>';
								
								$grid_c->output_grid_pre();

								//output elements
								echo $skins_html;

								$grid_c->output_grid_post();
								
								$grid_c->output_wrapper_post();
								
								echo '</div>';
								
								echo $skins_css;
							?>
							</div>
							<script type="text/javascript">
								jQuery('#esg-grid-even-1').tpessential({
									layout:"masonry",
									forceFullWidth:"off",
									row:3,
									space:20,
									responsiveEntries: [
														{ width:1400,amount:3},
														{ width:1170,amount:3},
														{ width:1024,amount:3},
														{ width:960,amount:3},
														{ width:778,amount:2},
														{ width:640,amount:2},
														{ width:480,amount:2}
														],
									pageAnimation:"scale",
									animSpeed:800,
									animDelay:"on",
									delayBasic:0.4,
									aspectratio:"4:3",
									rowItemMultiplier : "",
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--
		ANIMATION SETTINGS
		-->
		<div id="esg-settings-animations-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Grid Animations', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="grid-animation"><?php _e('Start and Filter Animations', EG_TEXTDOMAIN); ?></label>
							<select id="grid-animation-select" name="grid-animation" class="eg-tooltip-wrap" title="<?php _e('Select the Animations for the  Filter, Page Change and Start Effects', EG_TEXTDOMAIN); ?>">
								<?php
								foreach($grid_animations as $handle => $name){
									?>
									<option value="<?php echo $handle; ?>"<?php selected($grid_animation_choosen, $handle); ?>><?php echo $name; ?></option>
									<?php
								}
								?>
							</select>
						</p>
						<p>
							<label for="grid-animation-speed"><?php _e('Animation Speed', EG_TEXTDOMAIN); ?></label>
							<span id="slider-grid-animation-speed" class="slider-settings eg-tooltip-wrap" title="<?php _e('Animation Speed (per item)', EG_TEXTDOMAIN); ?>"></span>
							<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Animation Speed (per item)', EG_TEXTDOMAIN); ?>" type="text" name="grid-animation-speed" value="<?php echo $base->getVar($grid['params'], 'grid-animation-speed', '1000', 'i'); ?>" /> ms
						</p>
						<p>
							<label for="grid-animation-delay"><?php _e('Animation Delay', EG_TEXTDOMAIN); ?></label>
							<span id="slider-grid-animation-delay" class="slider-settings eg-tooltip-wrap" title="<?php _e('Delay between the item animations. If many items visible on the same page, decrease this value.', EG_TEXTDOMAIN); ?>"></span>
							<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Delay between the item animations. If many items visible on the same page, decrease this value.', EG_TEXTDOMAIN); ?>" type="text" name="grid-animation-delay" value="<?php echo $base->getVar($grid['params'], 'grid-animation-delay', '1', 'i'); ?>" readonly="true" />
						</p>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Hover Animations', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="hover-animation-delay"><?php _e('Hover Animation Delay', EG_TEXTDOMAIN); ?></label>
							<span id="slider-hover-animation-delay" class="slider-settings eg-tooltip-wrap" title="<?php _e('Delay before the Hover effect starts on an item', EG_TEXTDOMAIN); ?>"></span>
							<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Delay before the Hover effect starts on an item', EG_TEXTDOMAIN); ?>" type="text" name="hover-animation-delay" value="<?php echo $base->getVar($grid['params'], 'hover-animation-delay', '1', 'i'); ?>" readonly="true" />
						</p>
					</div>
				</div>
			</div>
		</div>

		<!--
		NAVIGATION SETTINGS
		-->
		<div id="esg-settings-filterandco-settings" class="esg-settings-container">
			<div class="">
				<?php
				/*
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Navigation Settings', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="min-width:710px">
						<p>
							<label for="navigation-container"><?php _e("Type", EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="nagivation-type" <?php checked($base->getVar($grid['params'], 'nagivation-type', 'internal'), 'internal'); ?> class="firstinput eg-tooltip-wrap" title="<?php _e('Decide in Grid Settings how the navigation will look like', EG_TEXTDOMAIN); ?>" value="internal"><?php _e('Internal', EG_TEXTDOMAIN); ?>
							<input type="radio" name="nagivation-type" <?php checked($base->getVar($grid['params'], 'nagivation-type', 'internal'), 'external'); ?> class="eg-tooltip-wrap" title="<?php _e('User the API to generate your navigation to your likings', EG_TEXTDOMAIN); ?>" value="external"><?php _e('External', EG_TEXTDOMAIN); ?>
							<input type="radio" name="nagivation-type" <?php checked($base->getVar($grid['params'], 'nagivation-type', 'internal'), 'widget'); ?> class="eg-tooltip-wrap" title="<?php _e('Create/Choose a widget area for the navigation', EG_TEXTDOMAIN); ?>" value="widget"><?php _e('Widget Area', EG_TEXTDOMAIN); ?>
						</p>
					</div>
					<div class="clear"></div>
				</div>
				*/ ?>

				<div id="es-ng-layout-wrapper">
					<div class="eg-creative-settings">
						<div class="eg-cs-tbc-left">
							<h3 class="box-closed"><span><?php _e('Navigation Positions', EG_TEXTDOMAIN); ?></span></h3>
						</div>
						<div class="eg-cs-tbc" style="min-width:710px">
							<?php
							$layout = $base->getVar($grid['params'], 'navigation-layout', array());
							$navig_special_class = $base->getVar($grid['params'], 'navigation-special-class', array());
							$navig_special_skin = $base->getVar($grid['params'], 'navigation-special-skin', array());
							?>
							<script type="text/javascript">
								var eg_nav_special_class = <?php echo json_encode($navig_special_class); ?>;
								var eg_nav_special_skin = <?php echo json_encode($navig_special_skin); ?>;
							</script>
							<div>
								<div class="eg-navigation-cons-outter">
									<div class="eg-navigation-cons-title"><?php _e('Available Modules:', EG_TEXTDOMAIN); ?></div>
									<div class="eg-navigation-cons-wrapper eg-tooltip-wrap eg-navigation-default-wrap" title="<?php _e('Drag and Drop Navigation Modules into the Available Drop Zones', EG_TEXTDOMAIN); ?>">
										<div data-navtype="left" class="eg-navigation-cons-left eg-navigation-cons"<?php echo (isset($layout['left']) && $layout['left'] !== '') ? ' data-putin="'.current(array_keys($layout['left'])).'" data-sort="'.$layout['left'][current(array_keys($layout['left']))].'"' : ''; ?>><i class="eg-icon-left-open"></i></div>
										<div data-navtype="right" class="eg-navigation-cons-right eg-navigation-cons"<?php echo (isset($layout['right']) && $layout['right'] !== '') ? ' data-putin="'.current(array_keys($layout['right'])).'" data-sort="'.$layout['right'][current(array_keys($layout['right']))].'"' : ''; ?>><i class="eg-icon-right-open"></i></div>
										<div data-navtype="pagination" class="eg-navigation-cons-pagination eg-navigation-cons"<?php echo (isset($layout['pagination']) && $layout['pagination'] !== '') ? ' data-putin="'.current(array_keys($layout['pagination'])).'" data-sort="'.$layout['pagination'][current(array_keys($layout['pagination']))].'"' : ''; ?>><i class="eg-icon-doc-inv"></i><?php _e("Pagination", EG_TEXTDOMAIN); ?></div>
										<div data-navtype="filter" class="eg-navigation-cons-filter eg-navigation-cons"<?php echo (isset($layout['filter']) && $layout['filter'] !== '') ? ' data-putin="'.current(array_keys($layout['filter'])).'" data-sort="'.$layout['filter'][current(array_keys($layout['filter']))].'"' : ''; ?>><i class="eg-icon-megaphone"></i><?php _e("Filter 1", EG_TEXTDOMAIN); ?></div>
										<?php
										if(Essential_Grid_Woocommerce::is_woo_exists()){
											?>
											<div data-navtype="cart" class="eg-navigation-cons-cart eg-navigation-cons"<?php echo (isset($layout['cart']) && $layout['cart'] !== '') ? ' data-putin="'.current(array_keys($layout['cart'])).'" data-sort="'.$layout['cart'][current(array_keys($layout['cart']))].'"' : ''; ?>><i class="eg-icon-basket"></i><?php _e("Cart", EG_TEXTDOMAIN); ?></div>
											<?php
										}
										
										//add extra filters
										if(!empty($layout)){
											foreach($layout as $key => $val){
												if(strpos($key, 'filter-') !== false){
													$nr = str_replace('filter-', '', $key);
													?>
													<div data-navtype="filter-<?php echo $nr; ?>" class="eg-navigation-cons-filter-<?php echo $nr; ?> eg-nav-cons-filter eg-navigation-cons"<?php echo ' data-putin="'.current(array_keys($layout[$key])).'" data-sort="'.$layout[$key][current(array_keys($layout[$key]))].'"'; ?>><i class="eg-icon-megaphone"></i><?php _e("Filter", EG_TEXTDOMAIN); echo ' '.$nr; ?></div>
													<?php
												}
											}
										}
										?>
										<div data-navtype="sort" class="eg-navigation-cons-sort eg-navigation-cons"<?php echo (isset($layout['sorting']) && $layout['sorting'] !== '') ? ' data-putin="'.current(array_keys($layout['sorting'])).'" data-sort="'.$layout['sorting'][current(array_keys($layout['sorting']))].'"' : ''; ?>><i class="eg-icon-sort-name-up"></i><?php _e("Sort", EG_TEXTDOMAIN); ?></div>
										
										<div class="eg-stay-last-element" style="clear:both"></div>
									</div>
								</div>

								<div id="eg-navigations-drag-wrap" style="float:left;">
									<div class="eg-navigation-cons-title"><?php _e('Controls inside Grid:', EG_TEXTDOMAIN); ?></div>
									<div id="eg-navigations-sort-top-1" class="eg-navigation-drop-wrapper eg-tooltip-wrap" title="<?php _e('Move the Navigation Modules to define the Order of Buttons', EG_TEXTDOMAIN); ?>"><?php _e('DROPZONE - TOP - 1', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
									<div id="eg-navigations-sort-top-2" class="eg-navigation-drop-wrapper eg-tooltip-wrap" title="<?php _e('Move the Navigation Modules to define the Order of Buttons', EG_TEXTDOMAIN); ?>"><?php _e('DROPZONE - TOP - 2', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
									<div id="eg-navigations-items-bg" >
										<div class="eg-navconstrctor-pi1"></div>
										<div class="eg-navconstrctor-pi2"></div>
										<div class="eg-navconstrctor-pi3"></div>
										<div class="eg-navconstrctor-pi4"></div>
										<div class="eg-navconstrctor-pi5"></div>
										<div class="eg-navconstrctor-pi6"></div>
										<div id="eg-navigations-sort-left" class="eg-navigation-drop-wrapper"><?php _e('DROPZONE <br> LEFT', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
										<div id="eg-navigations-sort-right" class="eg-navigation-drop-wrapper"><?php _e('DROPZONE <br> RIGHT', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
									</div>
									<div id="eg-navigations-sort-bottom-1" class="eg-navigation-drop-wrapper eg-tooltip-wrap" title="<?php _e('Move the Navigation Modules to define the Order of Buttons', EG_TEXTDOMAIN); ?>"><?php _e('DROPZONE - BOTTOM - 1', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
									<div id="eg-navigations-sort-bottom-2" class="eg-navigation-drop-wrapper eg-tooltip-wrap" title="<?php _e('Move the Navigation Modules to define the Order of Buttons', EG_TEXTDOMAIN); ?>"><?php _e('DROPZONE - BOTTOM - 2', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div></div>
								</div>
								<div id="eg-external-drag-wrap">
									<div class="eg-navigation-cons-title"><?php _e('Controls anywhere on Page (through ShortCode):', EG_TEXTDOMAIN); ?></div>
									<div id="eg-navigation-external-description">
											<div style="width:132px" class="eg-ext-nav-desc"><?php _e('Button', EG_TEXTDOMAIN); ?></div>
											<div style="width:164px" class="eg-ext-nav-desc"><?php _e('ShortCode', EG_TEXTDOMAIN); ?></div>										
											<div style="width:164px" class="eg-ext-nav-desc"><?php _e('Additional Class', EG_TEXTDOMAIN); ?></div>																				
											<div style="width:164px"class="eg-ext-nav-desc"><?php _e('Skin', EG_TEXTDOMAIN); ?></div>																														
										</div>
									<div id="eg-navigations-sort-external" class="eg-navigation-drop-wrapper" style="width: 600px; height:316px;">
										
										<?php _e('DROPZONE - EXTERNAL', EG_TEXTDOMAIN); ?><div class="eg-navigation-drop-inner"></div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<div style="width:100%;height:25px;clear:both"></div>
						</div>
					</div>

					<div class="divider1"></div>

					<div class="eg-creative-settings">
						<div class="eg-cs-tbc-left">
							<h3 class="box-closed"><span><?php _e('Grid Internal Controls Layout', EG_TEXTDOMAIN); ?></span></h3>
						</div>
						<div class="eg-cs-tbc">

							<!--  DROPZONE 1 ALIGN -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Top 1", EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="top-1-align" value="left" class="firstinput eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the left', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-1-align', 'center'), 'left'); ?>><?php _e("Left", EG_TEXTDOMAIN); ?>
								<input type="radio" name="top-1-align" value="center" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to Center', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-1-align', 'center'), 'center'); ?>><?php _e("Center", EG_TEXTDOMAIN); ?>
								<input type="radio" name="top-1-align" value="right" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the Right', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-1-align', 'center'), 'right'); ?>><span style="margin-right:25px"><?php _e("Right", EG_TEXTDOMAIN); ?></span>
								<span><?php _e('Margin Bottom', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space under the Zone', EG_TEXTDOMAIN); ?>" type="text" name="top-1-margin-bottom" value="<?php echo $base->getVar($grid['params'], 'top-1-margin-bottom', '0', 'i'); ?>"> px

							</p>
							<!--  DROPZONE 2 ALIGN -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Top 2", EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="top-2-align" value="left" class="firstinput  eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the left', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-2-align', 'center'), 'left'); ?>><?php _e("Left", EG_TEXTDOMAIN); ?>
								<input type="radio" name="top-2-align" value="center" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to Center', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-2-align', 'center'), 'center'); ?>><?php _e("Center", EG_TEXTDOMAIN); ?>
								<input type="radio" name="top-2-align" value="right" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the Right', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'top-2-align', 'center'), 'right'); ?>><span style="margin-right:25px"><?php _e("Right", EG_TEXTDOMAIN); ?></span>
								<span><?php _e('Margin Bottom', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space under the Zone', EG_TEXTDOMAIN); ?>" type="text" name="top-2-margin-bottom" value="<?php echo $base->getVar($grid['params'], 'top-2-margin-bottom', '0', 'i'); ?>"> px
							</p>
							<!--  DROPZONE 3 ALIGN -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Bottom 1", EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="bottom-1-align" value="left" class="firstinput eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the left', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'bottom-1-align', 'center'), 'left'); ?>><?php _e("Left", EG_TEXTDOMAIN); ?>
								<input type="radio" name="bottom-1-align" value="center" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to Center', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'bottom-1-align', 'center'), 'center'); ?>><?php _e("Center", EG_TEXTDOMAIN); ?>
								<input type="radio" name="bottom-1-align" value="right" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the Right', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'bottom-1-align', 'center'), 'right'); ?>><span style="margin-right:25px"><?php _e("Right", EG_TEXTDOMAIN); ?></span>
								<span><?php _e('Margin Top', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space above the Zone', EG_TEXTDOMAIN); ?>" type="text" name="bottom-1-margin-top" value="<?php echo $base->getVar($grid['params'], 'bottom-1-margin-top', '0', 'i'); ?>"> px
							</p>

							<!--  DROPZONE 4 ALIGN -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Bottom 2", EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="bottom-2-align" value="left" class="firstinput eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the left', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'bottom-2-align', 'center'), 'left'); ?>><?php _e("Left", EG_TEXTDOMAIN); ?>
								<input type="radio" name="bottom-2-align" value="center" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to Center', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'bottom-2-align', 'center'), 'center'); ?>><?php _e("Center", EG_TEXTDOMAIN); ?>
								<input type="radio" name="bottom-2-align" value="right" class="eg-tooltip-wrap" title="<?php _e('All Buttons in this Zone Align to the Right', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'bottom-2-align', 'center'), 'right'); ?>><span style="margin-right:25px"><?php _e("Right", EG_TEXTDOMAIN); ?></span>
								<span><?php _e('Margin Top', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space above the Zone', EG_TEXTDOMAIN); ?>" type="text" name="bottom-2-margin-top" value="<?php echo $base->getVar($grid['params'], 'bottom-2-margin-top', '0', 'i'); ?>"> px
							</p>

							<!--  DROPZONE LEFT  -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Left", EG_TEXTDOMAIN); ?></label>
								<span><?php _e('Margin Left', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space Horizontal the Zone (negative / positive values)', EG_TEXTDOMAIN); ?>" type="text" name="left-margin-left" value="<?php echo $base->getVar($grid['params'], 'left-margin-left', '0', 'i'); ?>"> px
							</p>

							<!--  DROPZONE RIGHT -->
							<p>
								<label for="navigation-container"><?php _e("Dropzone Right", EG_TEXTDOMAIN); ?></label>
								<span><?php _e('Margin Right', EG_TEXTDOMAIN); ?></span>
								<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Space Horizontal the Zone (negative / positive values)', EG_TEXTDOMAIN); ?>" type="text" name="right-margin-right" value="<?php echo $base->getVar($grid['params'], 'right-margin-right', '0', 'i'); ?>"> px
							</p>

						</div>
					</div>
					<div class="divider1"></div>
				</div>
				
				<!--div id="es-ng-external-wrapper">
					<div class="eg-creative-settings">
						<div class="eg-cs-tbc-left">
							<h3 class="box-closed"><span><?php _e('Navigation API', EG_TEXTDOMAIN); ?></span></h3>
						</div>
						<div class="eg-cs-tbc" style="min-width:710px">
							<pre>
							
							</pre>
						</div>
					</div>
				</div>
				<div id="es-ng-widget-wrapper">
					<div class="eg-creative-settings">
						<div class="eg-cs-tbc-left">
							<h3 class="box-closed"><span><?php _e('Widget Settings', EG_TEXTDOMAIN); ?></span></h3>
						</div>
						<div class="eg-cs-tbc" style="min-width:710px">
							<p><?php _e('Please add the Essential Grid Navigation Widgets in the Widget Area you want to use.', EG_TEXTDOMAIN); ?></p>
							
							<?php
							//for later usage
							//$wa->get_all_registered_sidebars();
							?>
						</div>
					</div>
				</div---->
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Module Spaces', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<!--  MODULE SPACINGS -->
						<p>
							<label for="navigation-container"><?php _e("Module Spacing", EG_TEXTDOMAIN); ?></label>
							<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Spaces horizontal between the Navigation Modules', EG_TEXTDOMAIN); ?>" type="text" name="module-spacings" value="<?php echo $base->getVar($grid['params'], 'module-spacings', '5', 'i'); ?>"> px
						</p>
					</div>
				</div>

				<div class="divider1"></div>
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Pagination Settings', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="filter-arrows"><?php _e('Scroll To Top', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="pagination-scroll" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Scroll to top if pagination is clicked', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'pagination-scroll', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="pagination-scroll" value="off" class="eg-tooltip-wrap" title="<?php _e('Do nothing if pagination is clicked', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'pagination-scroll', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<p>
							<label for="filter-arrows"><?php _e('Scroll To Offset', EG_TEXTDOMAIN); ?></label>
							<input class="input-settings-small firstinput eg-tooltip-wrap" title="<?php _e('Define an offset for the scrolling position', EG_TEXTDOMAIN); ?>" type="text" name="pagination-scroll-offset" value="<?php echo $base->getVar($grid['params'], 'pagination-scroll-offset', '0', 'i'); ?>"> px
						</p>
					</div>
				</div>
				
				<div class="divider1"></div>
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Filter Groups', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="padding-bottom: 10px;">
						<p>
							<label for="filter-arrows"><?php _e('Filter Type', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="filter-arrows" value="single" class="firstinput eg-tooltip-wrap" title="<?php _e('Filter is based on 1 Selected Filter in same time.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'filter-arrows', 'single'), 'single'); ?>> <?php _e('Single', EG_TEXTDOMAIN); ?>
							<input type="radio" name="filter-arrows" value="multi" class="eg-tooltip-wrap" title="<?php _e('Filter is based on 1 or more Filters in same time.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'filter-arrows', 'single'), 'multi'); ?>> <?php _e('Multiple', EG_TEXTDOMAIN); ?>
						</p>
						<p class="eg-filter-logic" style="display: none;">
							<label for="filter-logic"><?php _e('Filter Logic', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="filter-logic" value="and" class="firstinput eg-tooltip-wrap" title="<?php _e('Shows all elements that meet ONE OR MORE of the selected filters', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'filter-logic', 'or'), 'and'); ?>> <?php _e('AND', EG_TEXTDOMAIN); ?>
							<input type="radio" name="filter-logic" value="or" class="eg-tooltip-wrap" title="<?php _e('Shows all elements that meet ALL of the selected filters', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'filter-logic', 'or'), 'or'); ?>> <?php _e('OR', EG_TEXTDOMAIN); ?>
						</p>
						<!--<div style="float: left; width: 170px;">
							<p><?php _e('Filter All Text', EG_TEXTDOMAIN); ?></p>
							<p><?php _e('Layout Option', EG_TEXTDOMAIN); ?></p>
							<p class="filter-only-if-dropdown"><?php _e('Dropdown Start Text', EG_TEXTDOMAIN); ?></p>
							<div class="filter-only-for-post" style="margin-bottom: 15px;">
								<p><?php _e('Use Filter Buttons', EG_TEXTDOMAIN); ?></p>
							</div>
						</div>-->
						<div class="eg-original-filter-options-holder">

							<div class="eg-original-filter-options-wrap eg-filter-options-wrap">
								<div class="eg-filter-header-block"><i class="eg-icon-megaphone"></i><?php _e('Filter -', EG_TEXTDOMAIN); ?> <span class="filter-header-id">1</span></div>							
								<p class="eg-filter-label"><?php _e('Filter "All" Text', EG_TEXTDOMAIN); ?></p>
								<p class="eg-filter-option-field">
									<input type="text" name="filter-all-text" data-origname="filter-all-text-#NR" class="eg-tooltip-wrap" title="<?php _e('Visible Title on All Filter Button.', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'filter-all-text', __('Filter - All', EG_TEXTDOMAIN)); ?>" class="firstinput">
									<span class="eg-remove-filter-tab" style="display: none;"><i class="eg-icon-cancel"></i></span>
								</p>
								<p class="eg-filter-label"><?php _e('Layout Option', EG_TEXTDOMAIN); ?></p>
								<p class="eg-filter-option-field">
									<?php
									$filter_listing = $base->getVar($grid['params'], 'filter-listing', 'list');
									?>
									<select class="firstinput" name="filter-listing" data-origname="filter-listing-#NR">
										<option value="list" <?php checked($filter_listing, 'list'); ?>><?php _e('In Line', EG_TEXTDOMAIN); ?></option>
										<option value="dropdown" <?php selected($filter_listing, 'dropdown'); ?>><?php _e('Dropdown', EG_TEXTDOMAIN); ?></option>
									</select>
								</p>
								<p class="eg-filter-label"><?php _e('Dropdown Start Text', EG_TEXTDOMAIN); ?></p>
								<p class="filter-only-if-dropdown eg-filter-option-field">
									<?php
									$filter_dropdown_text = $base->getVar($grid['params'], 'filter-dropdown-text', __('Filter Categories', EG_TEXTDOMAIN));
									?>
									<input class="firstinput" type="text" data-origname="filter-dropdown-text-#NR" name="filter-dropdown-text" title="<?php _e('Default Text on the Filter Dropdown List.', EG_TEXTDOMAIN); ?>" value="<?php echo $filter_dropdown_text; ?>" />
								</p>
								<p class="eg-filter-label"><?php _e('Available Filters in Group', EG_TEXTDOMAIN); ?></p>
								<div class="filter-only-for-post">
									<?php
									$filter_selected = $base->getVar($grid['params'], 'filter-selected', '');
									$filter_startup = false;
									?>
									<div class="eg-media-source-order-wrap eg-filter-selected-order-wrap">
										<?php
										if(!empty($filter_selected)){
										
											if(!isset($grid['params']['filter-selected'])){ //we are either a new Grid or old Grid that had not this option (since 1.1.0)
											
												if($grid !== false){ //set the values
													$use_cat = @$categories;
												}else{
													$use_cat = @$postTypesWithCats['post'];
												}
												
												if(!empty($use_cat)){
													foreach($use_cat as $handle => $cat){
														if(strpos($handle, 'option_disabled_') !== false) continue;
														?>
														<div class="eg-media-source-order revblue button-primary">
															<span style="float:left"><?php echo $cat; ?></span>														
															<input class="eg-get-val eg-filter-input eg-filter-selected" type="checkbox" name="filter-selected[]" data-origname="filter-selected-#NR[]" checked="checked" value="<?php echo $handle; ?>" />
															<div style="clear:both"></div>
														</div>
														<?php
													}
												}
												$filter_startup = false;
												
											}else{
												foreach($filter_selected as $fs){
													?>
													<div class="eg-media-source-order revblue button-primary">
														<span style="float:left"><?php echo $fs; ?></span>														
														<input class="eg-get-val eg-filter-input eg-filter-selected" type="checkbox" name="filter-selected[]" data-origname="filter-selected-#NR[]" checked="checked" value="<?php echo $fs; ?>" />
														<div style="clear:both"></div>
													</div>
													<?php
												}
												$filter_startup = true;
											}
											
										}else{
											$filter_startup = false;
										}
										?>
									</div>
								</div>
							</div>
							<?php
							
							$filter_counter = 1;
							//check if we have more than one filter area
							if(isset($grid['params']) && !empty($grid['params'])){
								foreach($grid['params'] as $key => $params){
									if(strpos($key, 'filter-selected-') !== false){
										$n = str_replace('filter-selected-', '', $key);
										eg_filter_tab_function($n, $grid['params']);
										if($filter_counter < $n) $filter_counter = $n;
									}
								}
								//if($filter_counter > 1) $filter_counter++;
							}

							function eg_filter_tab_function($id, $params){
								global $grid;
								global $categories;
								global $postTypesWithCats;
								
								$base = new Essential_Grid_Base();
								?>
								<div class="eg-filter-options-wrap" style="display:inline-block">
									<div class="eg-filter-header-block"><i class="eg-icon-megaphone"></i><?php _e('Filter -', EG_TEXTDOMAIN); ?> <span class="filter-header-id"><?php echo $id;?></span></div>
									<p class="eg-filter-label"><?php _e('Filter "All" Text', EG_TEXTDOMAIN); ?></p>
									<p class="eg-filter-option-field">
										<input type="text" name="filter-all-text-<?php echo $id; ?>" data-origname="filter-all-text-#NR" class="eg-tooltip-wrap" title="<?php _e('Visible Title on All Filter Button.', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($params, 'filter-all-text-'.$id, __('Filter - All', EG_TEXTDOMAIN)); ?>" class="firstinput">
										<span class="eg-remove-filter-tab" style="display: none;"><i class="eg-icon-cancel"></i></span>
									</p>
									<p class="eg-filter-label"><?php _e('Layout Option', EG_TEXTDOMAIN); ?></p>
									<p class="eg-filter-option-field">
										<?php
										$filter_listing = $base->getVar($params, 'filter-listing-'.$id, 'list');
										?>
										<select class="firstinput" name="filter-listing-<?php echo $id; ?>" data-origname="filter-listing-#NR">
											<option value="list" <?php checked($filter_listing, 'list'); ?>><?php _e('In Line', EG_TEXTDOMAIN); ?></option>
											<option value="dropdown" <?php selected($filter_listing, 'dropdown'); ?>><?php _e('Dropdown', EG_TEXTDOMAIN); ?></option>
										</select>
									</p>
									<p class="eg-filter-label"><?php _e('Dropdown Start Text', EG_TEXTDOMAIN); ?></p>
									<p class="filter-only-if-dropdown eg-filter-option-field">
										<?php
										$filter_dropdown_text = $base->getVar($params, 'filter-dropdown-text-'.$id, __('Filter Categories', EG_TEXTDOMAIN));
										?>
										<input class="firstinput" type="text" data-origname="filter-dropdown-text-#NR" name="filter-dropdown-text-<?php echo $id; ?>" title="<?php _e('Default Text on the Filter Dropdown List.', EG_TEXTDOMAIN); ?>" value="<?php echo $filter_dropdown_text; ?>" />
									</p>
									<p class="eg-filter-label"><?php _e('Available Filters in Group', EG_TEXTDOMAIN); ?></p>
									<div class="filter-only-for-post">
										<?php
										$filter_selected = $base->getVar($params, 'filter-selected-'.$id, '');
										?>
										<div class="eg-media-source-order-wrap eg-filter-selected-order-wrap-<?php echo $id; ?>">
											<?php
											if(!empty($filter_selected)){
											
												if(!isset($params['filter-selected-'.$id])){ //we are either a new Grid or old Grid that had not this option (since 1.1.0)
												
													if($grid !== false){ //set the values
														$use_cat = @$categories;
													}else{
														$use_cat = @$postTypesWithCats['post'];
													}
													
													if(!empty($use_cat)){
														foreach($use_cat as $handle => $cat){
															if(strpos($handle, 'option_disabled_') !== false) continue;
															?>
															<div class="eg-media-source-order revblue button-primary">
																<span style="float:left"><?php echo $cat; ?></span>														
																<input class="eg-get-val eg-filter-input eg-filter-selected-<?php echo $id; ?>" type="checkbox" name="filter-selected-<?php echo $id; ?>[]" data-origname="filter-selected-#NR[]" checked="checked" value="<?php echo $handle; ?>" />
																<div style="clear:both"></div>
															</div>
															<?php
														}
													}
													
												}else{
													foreach($filter_selected as $fs){
														?>
														<div class="eg-media-source-order revblue button-primary">
															<span style="float:left"><?php echo $fs; ?></span>														
															<input class="eg-get-val eg-filter-input eg-filter-selected-<?php echo $id; ?>" type="checkbox" name="filter-selected-<?php echo $id; ?>[]" data-origname="filter-selected-#NR[]" checked="checked" value="<?php echo $fs; ?>" />
															<div style="clear:both"></div>
														</div>
														<?php
													}
												}
												
											}
											?>
										</div>
									</div>
								</div>
								<?php
							}
							
							?>
						</div>
						<div class="eg-add-filter-box"><i class="eg-icon-plus"></i></div>
						<script type="text/javascript">
							var filter_startup = <?php echo ($filter_startup) ? 'true' : 'false'; ?>;
							var eg_meta_handles = {};
							<?php
							$f_meta = $eg_meta->get_all_meta(false);
							
							if(!empty($f_meta) && is_array($f_meta)){
								foreach($f_meta as $fmeta){
									if($fmeta['type'] == 'multi-select'){
										?>eg_meta_handles['meta-<?php echo $fmeta['handle']; ?>'] = '<?php echo $fmeta['name']; ?>';
							<?php
									}
								}
							}
							
							?>
							
							var eg_filter_counter = <?php echo $filter_counter; ?>;
						</script>
						<div style="clear: both;"></div>
					</div>
				</div>

				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Sorting', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label for="sort-by-text"><?php _e('Sort By Text', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="sort-by-text" class="eg-tooltip-wrap" title="<?php _e('Visible Sort By text on the sort dropdown.', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'sort-by-text', __('Sort By ', EG_TEXTDOMAIN)); ?>" class="firstinput">
						</p>
						<p>
							<label for="sorting-order-by"><?php _e('Available Sortings', EG_TEXTDOMAIN); ?></label>
							<?php $order_by = explode(',', $base->getVar($grid['params'], 'sorting-order-by', 'date')); ?>
							<select name="sorting-order-by" multiple="true" size="9" class="eg-tooltip-wrap" title="<?php _e('Select Sorting Definitions (multiple available)', EG_TEXTDOMAIN); ?>">
								<?php
								if(Essential_Grid_Woocommerce::is_woo_exists()){
									$wc_sorts = Essential_Grid_Woocommerce::get_arr_sort_by();
									if(!empty($wc_sorts)){
										foreach($wc_sorts as $wc_handle => $wc_name){
											?>
											<option value="<?php echo $wc_handle; ?>"<?php selected(in_array($wc_handle, $order_by), true); ?><?php if(strpos($wc_handle, 'opt_disabled_') !== false) echo ' disabled="disabled"'; ?>><?php echo $wc_name; ?></option>
											<?php
										}
									}
								}
								?>
								<option value="date"<?php selected(in_array('date', $order_by), true); ?>><?php _e('Date', EG_TEXTDOMAIN); ?></option>
								<option value="title"<?php selected(in_array('title', $order_by), true); ?>><?php _e('Title', EG_TEXTDOMAIN); ?></option>
								<option value="excerpt"<?php selected(in_array('excerpt', $order_by), true); ?>><?php _e('Excerpt', EG_TEXTDOMAIN); ?></option>
								<option value="id"<?php selected(in_array('id', $order_by), true); ?>><?php _e('ID', EG_TEXTDOMAIN); ?></option>
								<option value="slug"<?php selected(in_array('slug', $order_by), true); ?>><?php _e('Slug', EG_TEXTDOMAIN); ?></option>
								<option value="author"<?php selected(in_array('author', $order_by), true); ?>><?php _e('Author', EG_TEXTDOMAIN); ?></option>
								<option value="last-modified"<?php selected(in_array('last-modified', $order_by), true); ?>><?php _e('Last modified', EG_TEXTDOMAIN); ?></option>
								<option value="number-of-comments"<?php selected(in_array('number-of-comments', $order_by), true); ?>><?php _e('Number of comments', EG_TEXTDOMAIN); ?></option>
								<?php
								if(!empty($all_metas)){
									?>
									<option value="opt_disabled_99" disabled="disabled"><?php _e('---- Custom Metas ----', EG_TEXTDOMAIN); ?></option>
									<?php
									foreach($all_metas as $c_meta){
										$type = ($c_meta['m_type'] == 'link') ? 'egl-' : 'eg-';
										?>
										<option value="<?php echo $type.$c_meta['handle']; ?>"<?php selected(in_array($type.$c_meta['handle'], $order_by), true); ?>><?php echo $c_meta['name'];
										echo ($c_meta['m_type'] == 'link') ? ' (' .__('Link', EG_TEXTDOMAIN).')' : ''; ?></option>
										<?php
									}
								}
								?>
							</select>
						</p>
						<p>
							<label for="sorting-order-by-start"><?php _e('Start Sorting By', EG_TEXTDOMAIN); ?></label>
							<?php $order_by_start = $base->getVar($grid['params'], 'sorting-order-by-start', 'none'); ?>
							<select name="sorting-order-by-start" class="eg-tooltip-wrap" title="<?php _e('Sorting at Loading', EG_TEXTDOMAIN); ?>">
								<option value="none"<?php selected('none' == $order_by_start, true); ?>><?php _e('None', EG_TEXTDOMAIN); ?></option>
								<?php
								if(Essential_Grid_Woocommerce::is_woo_exists()){
									$wc_sorts = Essential_Grid_Woocommerce::get_arr_sort_by();
									if(!empty($wc_sorts)){
										foreach($wc_sorts as $wc_handle => $wc_name){
											?>
											<option value="<?php echo $wc_handle; ?>"<?php selected(in_array($wc_handle, $order_by), true); ?><?php if(strpos($wc_handle, 'opt_disabled_') !== false) echo ' disabled="disabled"'; ?>><?php echo $wc_name; ?></option>
											<?php
										}
									}
								}
								?>
								<option value="date"<?php selected('date' == $order_by_start, true); ?>><?php _e('Date', EG_TEXTDOMAIN); ?></option>
								<option value="title"<?php selected('title' == $order_by_start, true); ?>><?php _e('Title', EG_TEXTDOMAIN); ?></option>
								<option value="ID"<?php selected('ID' == $order_by_start, true); ?>><?php _e('ID', EG_TEXTDOMAIN); ?></option>
								<option value="name"<?php selected('name' == $order_by_start, true); ?>><?php _e('Slug', EG_TEXTDOMAIN); ?></option>
								<option value="author"<?php selected('author' == $order_by_start, true); ?>><?php _e('Author', EG_TEXTDOMAIN); ?></option>
								<option value="modified"<?php selected('modified' == $order_by_start, true); ?>><?php _e('Last modified', EG_TEXTDOMAIN); ?></option>
								<option value="comment_count"<?php selected('comment_count' == $order_by_start, true); ?>><?php _e('Number of comments', EG_TEXTDOMAIN); ?></option>
								<option value="rand"<?php selected('rand' == $order_by_start, true); ?>><?php _e('Random', EG_TEXTDOMAIN); ?></option>
								<!--option value="meta_num_"<?php selected('meta_num_' == $order_by_start, true); ?>><?php _e('Meta Numeric', EG_TEXTDOMAIN); ?></option>
								<option value="meta_"<?php selected('meta_' == $order_by_start, true); ?>><?php _e('Meta String', EG_TEXTDOMAIN); ?></option-->
								<?php
								if(!empty($all_metas)){
									?>
									<option value="opt_disabled_99" disabled="disabled"><?php _e('---- Custom Metas ----', EG_TEXTDOMAIN); ?></option>
									<?php
									foreach($all_metas as $c_meta){
										$type = ($c_meta['m_type'] == 'link') ? 'egl-' : 'eg-';
										?>
										<option value="<?php echo $type.$c_meta['handle']; ?>"<?php selected($type.$c_meta['handle'] == $order_by_start, true); ?>><?php echo $c_meta['name'];
										echo ($c_meta['m_type'] == 'link') ? ' (' .__('Link', EG_TEXTDOMAIN).')' : ''; ?></option>
										<?php
									}
								}
								?>
							</select>
						</p>
						<p class="eg-sorting-order-meta-wrap" style="display: none;">
							<label for="sorting-order-by-start-meta"><?php _e('Start Sorting By Meta', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="sorting-order-by-start-meta" class="eg-tooltip-wrap" title="<?php _e('Set meta handle here that will be used as start sorting', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'sorting-order-by-start-meta', ''); ?>" class="firstinput"> <a class="button-secondary sort-meta-selector" href="javascript:void(0);"><i class="eg-icon-down-open"></i></a>
						</p>
						<p>
							<label for="sorting-order-type"><?php _e('Sorting Order', EG_TEXTDOMAIN); ?></label>
							<?php $order_by_type = $base->getVar($grid['params'], 'sorting-order-type', 'ASC'); ?>
							<select name="sorting-order-type" class="eg-tooltip-wrap" title="<?php _e('Sorting Order at Loading', EG_TEXTDOMAIN); ?>">
								<option value="DESC"<?php selected('DESC' == $order_by_type, true); ?>><?php _e('Descending', EG_TEXTDOMAIN); ?></option>
								<option value="ASC"<?php selected('ASC' == $order_by_type, true); ?>><?php _e('Ascending', EG_TEXTDOMAIN); ?></option>
							</select>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		
		<!--
		VIDEO SETTINGS
		-->
		<div id="esg-settings-video-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Poster Orders', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="padding-top:15px">
						<div  style="float:left">
							<label class="eg-tooltip-wrap" title="<?php _e('Set the default order of Poster Image Source', EG_TEXTDOMAIN); ?>"><?php _e('Set Source Order', EG_TEXTDOMAIN); ?></label>
						</div>
						<div style="float:left">
							<div class="eg-media-source-order-wrap">
								<?php
								if(!empty($poster_source_order)){
									foreach($poster_source_order as $poster_handle){
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $poster_source_list[$poster_handle]['type']; ?>"></i>
											<span style="float:left"><?php echo $poster_source_list[$poster_handle]['name']; ?></span>														
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="poster-source-order[]" checked="checked" value="<?php echo $poster_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
										unset($poster_source_list[$poster_handle]);
									}
								}
								
								if(!empty($poster_source_list)){
									foreach($poster_source_list as $poster_handle => $poster_set){
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $poster_set['type']; ?>"></i>
											<span style="float:left"><?php echo $poster_set['name']; ?></span>
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="poster-source-order[]" value="<?php echo $poster_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
									}
								}
								?>
							</div>
								
							<p >
							<?php _e('First Ordered Poster Source will be loaded as default. If source not exist, next available Poster source in order will be taken', EG_TEXTDOMAIN); ?>
							</p>							
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>
		</div>

		<!--
		LIGHTBOX SETTINGS
		-->
		<div id="esg-settings-lightbox-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Shown Media Orders', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="padding-top:15px">
						<div  style="float:left">
							<label class="eg-tooltip-wrap" title="<?php _e('Set the default order of Shown Content Source', EG_TEXTDOMAIN); ?>"><?php _e('Set Source Order', EG_TEXTDOMAIN); ?></label>
						</div>
						<div style="float:left">
							<div class="eg-media-source-order-wrap">
								<?php
								if(!empty($lb_source_order)){
									foreach($lb_source_order as $lb_handle){
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $lb_source_list[$lb_handle]['type']; ?>"></i>
											<span style="float:left"><?php echo $lb_source_list[$lb_handle]['name']; ?></span>														
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="lb-source-order[]" checked="checked" value="<?php echo $lb_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
										unset($lb_source_list[$lb_handle]);
									}
								}
								
								if(!empty($lb_source_list)){
									foreach($lb_source_list as $lb_handle => $lb_set){
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $lb_set['type']; ?>"></i>
											<span style="float:left"><?php echo $lb_set['name']; ?></span>
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="lb-source-order[]" value="<?php echo $lb_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
									}
								}
								?>
							</div>
								
							<p>
							<?php _e('First Ordered Poster Source will be loaded as default. If source not exist, next available Poster source in order will be taken', EG_TEXTDOMAIN); ?>
							</p>							
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>
			
			<div class="divider1"></div>

			<div class="eg-creative-settings">
				<div class="eg-cs-tbc-left">
					<h3 class="box-closed"><span><?php _e('Lightbox Gallery', EG_TEXTDOMAIN); ?></span></h3>
				</div>
				<div class="eg-cs-tbc">
					<p>
							<label for="sorting-order-by-start"><?php _e('Gallery Mode', EG_TEXTDOMAIN); ?></label>
							<select name="lightbox-mode" class="eg-tooltip-wrap" title="<?php _e('Choose the Lightbox Mode', EG_TEXTDOMAIN); ?>">
								<option value="single"<?php selected($base->getVar($grid['params'], 'lightbox-mode', 'single'), 'single'); ?>><?php _e('Single Mode', EG_TEXTDOMAIN); ?></option>
								<option value="all"<?php selected($base->getVar($grid['params'], 'lightbox-mode', 'single'), 'all'); ?>><?php _e('All Items', EG_TEXTDOMAIN); ?></option>
								<option value="filterall"<?php selected($base->getVar($grid['params'], 'lightbox-mode', 'single'), 'filterall'); ?>><?php _e('Filter based all Pages', EG_TEXTDOMAIN); ?></option>								
								<option value="filterpage"<?php selected($base->getVar($grid['params'], 'lightbox-mode', 'single'), 'filterpage'); ?>><?php _e('Filter based current Page', EG_TEXTDOMAIN); ?></option>																
							</select>
						</p>
				</div>
			</div>
			<div class="divider1"></div>

			<div class="eg-creative-settings">
				<div class="eg-cs-tbc-left">
					<h3 class="box-closed"><span><?php _e('Lightbox Layout', EG_TEXTDOMAIN); ?></span></h3>
				</div>
				
				<div class="eg-cs-tbc">
					<p>
						<label for=""><?php _e('Title Type', EG_TEXTDOMAIN); ?></label>
						<select name="lightbox-type" class="eg-tooltip-wrap" title="<?php _e('Title Type', EG_TEXTDOMAIN); ?>">
							<option value="null"<?php selected($base->getVar($grid['params'], 'lightbox-type', 'null'), 'null'); ?>><?php _e('No Title', EG_TEXTDOMAIN); ?></option>
							<option value="inside"<?php selected($base->getVar($grid['params'], 'lightbox-type', 'null'), 'inside'); ?>><?php _e('Inside', EG_TEXTDOMAIN); ?></option>
							<option value="outside"<?php selected($base->getVar($grid['params'], 'lightbox-type', 'null'), 'outside'); ?>><?php _e('Outside', EG_TEXTDOMAIN); ?></option>																
							<option value="over"<?php selected($base->getVar($grid['params'], 'lightbox-type', 'null'), 'over'); ?>><?php _e('Over', EG_TEXTDOMAIN); ?></option>																								
						</select>
					</p>
					<p id="eg-lb-title-position">
						<label for=""><?php _e('Title Position', EG_TEXTDOMAIN); ?></label>
						<select name="lightbox-position" class="eg-tooltip-wrap" title="<?php _e('Title Position', EG_TEXTDOMAIN); ?>">
							<option value="bottom"<?php selected($base->getVar($grid['params'], 'lightbox-position', 'bottom'), 'bottom'); ?>><?php _e('Bottom', EG_TEXTDOMAIN); ?></option>
							<option value="top"<?php selected($base->getVar($grid['params'], 'lightbox-position', 'bottom'), 'top'); ?>><?php _e('Top', EG_TEXTDOMAIN); ?></option>
						</select>
					</p>
					
					<p id="eg-lb-twitter">
						<label><?php _e('Twitter', EG_TEXTDOMAIN); ?></label>
						<input type="radio" name="lightbox-twitter" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Show Twitter on Lightbox.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lightbox-twitter', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
						<input type="radio" name="lightbox-twitter" value="off" class="eg-tooltip-wrap" title="<?php _e('Hide Twitter on Lightbox.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lightbox-twitter', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
					</p>
					<p id="eg-lb-facebook">
						<label ><?php _e('Facebook', EG_TEXTDOMAIN); ?></label>
						<input type="radio" name="lightbox-facebook" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Show Facebook Likes on Lightbox.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lightbox-facebook', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
						<input type="radio" name="lightbox-facebook" value="off" class="eg-tooltip-wrap" title="<?php _e('Hide Facebook Likes on Lightbox.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lightbox-facebook', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
					</p>
				</div>
			</div>
			<div class="divider1"></div>

			<div class="eg-creative-settings">
				<div class="eg-cs-tbc-left">
					<h3 class="box-closed"><span><?php _e('Lightbox Spacing', EG_TEXTDOMAIN); ?></span></h3>
				</div>
				
				<div class="eg-cs-tbc">
					<p>
						<?php
						$lbox_inpadding = $base->getVar($grid['params'], 'lbox-inpadding', '0');
						if(!is_array($lbox_inpadding)) $lbox_inpadding = array('0', '0', '0', '0');
						?>
						<label for="lbox-inpadding"><?php _e('Title Wrap Padding', EG_TEXTDOMAIN); ?></label>
						<input class="input-settings-small eg-tooltip-wrap firstinput" title="<?php _e('Padding Top of the Title Wrap', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-inpadding[]" value="<?php echo @$lbox_inpadding[0]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Right of the Title Wrap', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-inpadding[]" value="<?php echo @$lbox_inpadding[1]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Bottom of the Title Wrap', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-inpadding[]" value="<?php echo @$lbox_inpadding[2]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Left of the Title Wrap', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-inpadding[]" value="<?php echo @$lbox_inpadding[3]; ?>" />
					</p>
					<p>
						<?php
						$lbox_padding = $base->getVar($grid['params'], 'lbox-padding', '0');
						if(!is_array($lbox_padding)) $lbox_padding = array('0', '0', '0', '0');
						?>
						<label for="lbox-padding"><?php _e('Media Padding', EG_TEXTDOMAIN); ?></label>
						<input class="input-settings-small eg-tooltip-wrap firstinput" title="<?php _e('Padding Top of the LightBox', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-padding[]" value="<?php echo @$lbox_padding[0]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Right of the LightBox', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-padding[]" value="<?php echo @$lbox_padding[1]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Bottom of the LightBox', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-padding[]" value="<?php echo @$lbox_padding[2]; ?>" />
						<input class="input-settings-small eg-tooltip-wrap" title="<?php _e('Padding Left of the LightBox', EG_TEXTDOMAIN); ?>" type="text" style="margin-right:10px" name="lbox-padding[]" value="<?php echo @$lbox_padding[3]; ?>" />
					</p>					
				</div>
			</div>
			
			<div class="divider1"></div>

			<div class="eg-creative-settings">
				<div class="eg-cs-tbc-left">
					<h3 class="box-closed"><span><?php _e('Effects', EG_TEXTDOMAIN); ?></span></h3>
				</div>
				
				<div class="eg-cs-tbc">
					<p>
						<label for=""><?php _e('Open / Close Animation', EG_TEXTDOMAIN); ?></label>
						<select name="lightbox-effect-open-close" class="eg-tooltip-wrap" title="<?php _e('Animation Type', EG_TEXTDOMAIN); ?>">
							<option value="none"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close', 'fade'), 'none'); ?>><?php _e('No Animation', EG_TEXTDOMAIN); ?></option>
							<option value="fade"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close', 'fade'), 'fade'); ?>><?php _e('Fade', EG_TEXTDOMAIN); ?></option>
							<option value="elastic"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close', 'fade'), 'elastic'); ?>><?php _e('Slide', EG_TEXTDOMAIN); ?></option>																
						</select>
						<select name="lightbox-effect-open-close-speed" class="eg-tooltip-wrap" title="<?php _e('Animation Speed', EG_TEXTDOMAIN); ?>">
							<option value="slow"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close-speed', 'normal'), 'slow'); ?>><?php _e('Slow', EG_TEXTDOMAIN); ?></option>
							<option value="normal"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close-speed', 'normal'), 'normal'); ?>><?php _e('Normal', EG_TEXTDOMAIN); ?></option>
							<option value="fast"<?php selected($base->getVar($grid['params'], 'lightbox-effect-open-close-speed', 'normal'), 'fast'); ?>><?php _e('Fast', EG_TEXTDOMAIN); ?></option>																
						</select>
						
					</p>
					
					<p>
						<label for=""><?php _e('Next / Prev Animation', EG_TEXTDOMAIN); ?></label>
						<select name="lightbox-effect-next-prev" class="eg-tooltip-wrap" title="<?php _e('Animation Type', EG_TEXTDOMAIN); ?>">
							<option value="none"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev', 'fade'), 'none'); ?>><?php _e('No Animation', EG_TEXTDOMAIN); ?></option>
							<option value="fade"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev', 'fade'), 'fade'); ?>><?php _e('Fade', EG_TEXTDOMAIN); ?></option>
							<option value="elastic"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev', 'fade'), 'elastic'); ?>><?php _e('Slide', EG_TEXTDOMAIN); ?></option>																
						</select>
						<select name="lightbox-effect-next-prev-speed" class="eg-tooltip-wrap" title="<?php _e('Animation Speed', EG_TEXTDOMAIN); ?>">
							<option value="slow"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev-speed', 'normal'), 'slow'); ?>><?php _e('Slow', EG_TEXTDOMAIN); ?></option>
							<option value="normal"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev-speed', 'normal'), 'normal'); ?>><?php _e('Normal', EG_TEXTDOMAIN); ?></option>
							<option value="fast"<?php selected($base->getVar($grid['params'], 'lightbox-effect-next-prev-speed', 'normal'), 'fast'); ?>><?php _e('Fast', EG_TEXTDOMAIN); ?></option>																
						</select>
						
					</p>
				</div>
			</div>
			
			<div class="divider1"></div>
			
			<div class="eg-creative-settings">
				<div class="eg-cs-tbc-left">
					<h3 class="box-closed"><span><?php _e('Navigation', EG_TEXTDOMAIN); ?></span></h3>
				</div>
				
				<div class="eg-cs-tbc">
					<p>
						<label><?php _e('Navigation Arrows', EG_TEXTDOMAIN); ?></label>
						<input type="radio" name="lightbox-arrows" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Show Navigation Arrows.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lightbox-arrows', 'on'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
						<input type="radio" name="lightbox-arrows" value="off" class="eg-tooltip-wrap" title="<?php _e('Show Navigation Arrows.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lightbox-arrows', 'on'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
					</p>
					<p>
						<label><?php _e('Mini Thumbnails', EG_TEXTDOMAIN); ?></label>
						<input type="radio" name="lightbox-thumbs" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Show Thumbnails.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lightbox-thumbs', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
						<input type="radio" name="lightbox-thumbs" value="off"  class="eg-tooltip-wrap" title="<?php _e('Show Thumbnails.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lightbox-thumbs', 'off'), 'off'); ?>> <span style="margin-right:15px;"><?php _e('Off', EG_TEXTDOMAIN); ?></span>
						<span><?php _e('Width:', EG_TEXTDOMAIN); ?>
						<input type="text" name="lbox-thumb-w" style="width:50px; margin-right:15px;" value="<?php echo $base->getVar($grid['params'], 'lbox-thumb-w', '50'); ?>">
						<span><?php _e('Height:', EG_TEXTDOMAIN); ?>	
						<input type="text" name="lbox-thumb-h" style="width:50px" value="<?php echo $base->getVar($grid['params'], 'lbox-thumb-h', '50'); ?>">					
					</p>
				<!--	<p>
						<label><?php _e('Bullets', EG_TEXTDOMAIN); ?></label>
						<input type="radio" name="lightbox-bullets" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Show Bullets.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'lightbox-bullets', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
						<input type="radio" name="lightbox-bullets" value="off" class="eg-tooltip-wrap" title="<?php _e('Show Bullets', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'lightbox-bullets', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
					</p>-->
				</div>
			</div>
		</div>
		
		<!--
		AJAX SETTINGS
		-->
		<div id="esg-settings-ajax-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Shown Ajax Orders', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc" style="padding-top:15px">
						<div  style="float:left">
							<label class="eg-tooltip-wrap" title="<?php _e('Set the default order of Shown Content at ajax loading', EG_TEXTDOMAIN); ?>"><?php _e('Set Source Order', EG_TEXTDOMAIN); ?></label>
						</div>
						<div style="float:left">
							<div class="eg-media-source-order-wrap">
								<?php
								if(!empty($aj_source_order)){
									foreach($aj_source_order as $aj_handle){
										if(!isset($aj_source_list[$aj_handle])) continue;
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $aj_source_list[$aj_handle]['type']; ?>"></i>
											<span style="float:left"><?php echo $aj_source_list[$aj_handle]['name']; ?></span>														
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="aj-source-order[]" checked="checked" value="<?php echo $aj_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
										unset($aj_source_list[$aj_handle]);
									}
								}
								
								if(!empty($aj_source_list)){
									foreach($aj_source_list as $aj_handle => $aj_set){
										?>
										<div class="eg-media-source-order revblue button-primary">
											<i style="float:left; margin-right:10px;" class="eg-icon-<?php echo $aj_set['type']; ?>"></i>
											<span style="float:left"><?php echo $aj_set['name']; ?></span>
											<input style="float:right;margin: 5px 4px 0 0;" class="eg-get-val" type="checkbox" name="aj-source-order[]" value="<?php echo $aj_handle; ?>" />
											<div style="clear:both"></div>
										</div>
										<?php
									}
								}
								?>
							</div>
								
							<p>
							<?php _e('First Ordered Source will be loaded as default. If source not exist, next available source in order will be taken', EG_TEXTDOMAIN); ?>
							</p>							
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
			
				<div class="divider1"></div>
												
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Ajax Container', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define ID of the container (without #)', EG_TEXTDOMAIN); ?>"><?php _e('Container ID', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="ajax-container-id" class="eg-tooltip-wrap" title="<?php _e('Insert a valid CSS ID here', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'ajax-container-id', 'ess-grid-ajax-container-'); ?>" class="firstinput">
						</p>

						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define the position of the ajax content container', EG_TEXTDOMAIN); ?>"><?php _e('Container Position', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="ajax-container-position" value="top" class="firstinput eg-tooltip-wrap" title="<?php _e('Visible above the Grid', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'ajax-container-position', 'top'), 'top'); ?>> <?php _e('Top', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-container-position" value="bottom" class="eg-tooltip-wrap" title="<?php _e('Visible under the Grid', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'ajax-container-position', 'top'), 'bottom'); ?>> <?php _e('Bottom', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-container-position" value="shortcode" class="eg-tooltip-wrap" title="<?php _e('Insert somewhere as ShortCode', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'ajax-container-position', 'top'), 'shortcode'); ?>> <?php _e('As ShortCode', EG_TEXTDOMAIN); ?>
						</p>
						<p id="eg-ajax-shortcode-wrapper">
							<label class="eg-tooltip-wrap" title="<?php _e('Use this ShortCode somewhere on the page to insert the ajax content container', EG_TEXTDOMAIN); ?>"><?php _e('Container ShortCode', EG_TEXTDOMAIN); ?></label>
							<input type="text" readonly="readonly" value="" class="eg-tooltip-wrap" name="ajax-container-shortcode" style="width: 400px;">
						</p>
						
						<!--p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define if the content should be sliding', EG_TEXTDOMAIN); ?>"><?php _e('Content Sliding', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="ajax-content-sliding" value="on" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-content-sliding', 'on'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-content-sliding" value="off" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-content-sliding', 'on'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p-->
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define if browser should scroll to content after it is loaded via ajax', EG_TEXTDOMAIN); ?>"><?php _e('Scroll on load', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="ajax-scroll-onload" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Scroll to content.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'ajax-scroll-onload', 'on'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-scroll-onload" value="off" class="eg-tooltip-wrap" title="<?php _e('Do not scroll to content.', EG_TEXTDOMAIN); ?>"<?php checked($base->getVar($grid['params'], 'ajax-scroll-onload', 'on'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define offset of scrolling in px (-500 - 500)', EG_TEXTDOMAIN); ?>"><?php _e('Scroll Offset', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="ajax-scrollto-offset" class="eg-tooltip-wrap" title="<?php _e('-500 - 500', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'ajax-scrollto-offset', '0'); ?>" class="firstinput">
						</p>
						
					</div>
				</div>
				
				<div class="divider1"></div>			
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Ajax Navigation', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define the content container should have a close button', EG_TEXTDOMAIN); ?>"><?php _e('Show Close Button', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="ajax-close-button" value="on" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-close-button', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-close-button" value="off" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-close-button', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						<div class="eg-close-button-settings-wrap">
							<p class="eg-button-text-wrap">
								<label class="eg-tooltip-wrap" title="<?php _e('Define the button text here', EG_TEXTDOMAIN); ?>"><?php _e('Close Button Text', EG_TEXTDOMAIN); ?></label>
								<input type="text" name="ajax-button-text" class="firstinput eg-tooltip-wrap" value="<?php echo $base->getVar($grid['params'], 'ajax-button-text', __('Close', EG_TEXTDOMAIN)); ?>">
							</p>
						</div>
						
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define the content container should have navigation buttons', EG_TEXTDOMAIN); ?>"><?php _e('Show Navigation Button', EG_TEXTDOMAIN); ?></label>
							<input type="radio" name="ajax-nav-button" value="on" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-nav-button', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
							<input type="radio" name="ajax-nav-button" value="off" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-nav-button', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
						</p>
						
						<div class="eg-close-nav-button-settings-wrap">
							<p>
								<label class="eg-tooltip-wrap" title="<?php _e('Define the Skin of the buttons', EG_TEXTDOMAIN); ?>"><?php _e('Button Skin', EG_TEXTDOMAIN); ?></label>
								<select name="ajax-button-skin" class="eg-tooltip-wrap" title="<?php _e('Define the Skin of the buttons', EG_TEXTDOMAIN); ?>">
									<option value="light"<?php selected($base->getVar($grid['params'], 'ajax-button-skin', 'light'), 'light'); ?>><?php _e('Light', EG_TEXTDOMAIN); ?></option>
									<option value="dark"<?php selected($base->getVar($grid['params'], 'ajax-button-skin', 'light'), 'dark'); ?>><?php _e('Dark', EG_TEXTDOMAIN); ?></option>
								</select>
							</p>
							<p>
								<label class="eg-tooltip-wrap" title="<?php _e('Switch between button or text', EG_TEXTDOMAIN); ?>"><?php _e('Button Type', EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="ajax-button-type" value="type1" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-type', 'type1'), 'type1'); ?>> <?php _e('Type 1', EG_TEXTDOMAIN); ?>
								<input type="radio" name="ajax-button-type" value="type2" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-type', 'type1'), 'type2'); ?>> <?php _e('Type 2', EG_TEXTDOMAIN); ?>
							</p>
							<p>
								<label class="eg-tooltip-wrap" title="<?php _e('Define if the button should be visible inside of the ajax container or outside of it', EG_TEXTDOMAIN); ?>"><?php _e('Button Container Pos.', EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="ajax-button-inner" value="true" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-inner', 'false'), 'true'); ?>> <?php _e('Inner', EG_TEXTDOMAIN); ?>
								<input type="radio" name="ajax-button-inner" value="false" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-inner', 'false'), 'false'); ?>> <?php _e('Outer', EG_TEXTDOMAIN); ?>
							</p>
							<p>
								<label class="eg-tooltip-wrap" title="<?php _e('Define the horizontal positioning of the buttons', EG_TEXTDOMAIN); ?>"><?php _e('Horizontal Pos.', EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="ajax-button-h-pos" value="l" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-h-pos', 'r'), 'l'); ?>> <?php _e('Left', EG_TEXTDOMAIN); ?>
								<input type="radio" name="ajax-button-h-pos" value="c" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-h-pos', 'r'), 'c'); ?>> <?php _e('Center', EG_TEXTDOMAIN); ?>
								<input type="radio" name="ajax-button-h-pos" value="r" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-h-pos', 'r'), 'r'); ?>> <?php _e('Right', EG_TEXTDOMAIN); ?>
							</p>
							<p>
								<label class="eg-tooltip-wrap" title="<?php _e('Define the vertical positioning of the buttons', EG_TEXTDOMAIN); ?>"><?php _e('Vertical Pos.', EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="ajax-button-v-pos" value="t" class="firstinput eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-v-pos', 't'), 't'); ?>> <?php _e('Top', EG_TEXTDOMAIN); ?>
								<input type="radio" name="ajax-button-v-pos" value="b" class="eg-tooltip-wrap" <?php checked($base->getVar($grid['params'], 'ajax-button-v-pos', 't'), 'b'); ?>> <?php _e('Bottom', EG_TEXTDOMAIN); ?>
							</p>
						</div>
					</div>
				</div>
				
				<div class="divider1"></div>
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Prepend Content', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<div style="margin: 15px 0;">
							<div style="padding-left: 0px;">
								<?php
								$settings = array('textarea_name' => 'ajax-container-pre');
								wp_editor($base->getVar($grid['params'], 'ajax-container-pre', ''), 'ajax-container-pre', $settings);
								?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="divider1"></div>			
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Append Content', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<div style="margin: 15px 0;">
							<div style="padding-left: 0px;">
								<?php
								$settings = array('textarea_name' => 'ajax-container-post');
								wp_editor($base->getVar($grid['params'], 'ajax-container-post', ''), 'ajax-container-post', $settings);
								?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="divider1"></div>			
				
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Custom CSS', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<div style="margin: 15px 0;" class="eg-codemirror-border">							
							<div style="padding-left: 0px;">
								<textarea name="ajax-container-css" id="eg-ajax-custom-css"><?php echo stripslashes($base->getVar($grid['params'], 'ajax-container-css', '')); ?></textarea>
							</div>
						</div>

					</div>
				</div>
				
				<div class="divider1"></div>
												
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Advanced', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define a JavaScript callback here. This will be called every time when Content is loaded ! You can also define arguments by using callbackname(arg1, arg2, ...., esg99)', EG_TEXTDOMAIN); ?>"><?php _e('JavaScript Callback', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="ajax-callback" class="eg-tooltip-wrap" title="<?php _e('Insert JavaScript callback here', EG_TEXTDOMAIN); ?>" value="<?php echo stripslashes($base->getVar($grid['params'], 'ajax-callback', '')); ?>" class="firstinput">
						</p>
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Append Essential Grid argument to the callback to the end', EG_TEXTDOMAIN); ?>"><?php _e('Append Argument', EG_TEXTDOMAIN); ?></label>
							<input type="checkbox" name="ajax-callback-arg" class="eg-tooltip-wrap" title="<?php _e('Append return argument from Essential Grid with object containing posttype, postsource and ajaxcontainterid', EG_TEXTDOMAIN); ?>" value="on" <?php checked($base->getVar($grid['params'], 'ajax-callback-arg', 'on'), 'on'); ?>>
						</p>
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define a CSS URL to load when First time Ajax Container has beed created. ', EG_TEXTDOMAIN); ?>"><?php _e('Extend CSS URL', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="ajax-css-url" class="eg-tooltip-wrap" title="<?php _e('Insert CSS URL here', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'ajax-css-url', ''); ?>" class="firstinput">
						</p>
						<p>
							<label class="eg-tooltip-wrap" title="<?php _e('Define a JavaScript File URL to load which is run 1 time at first Ajax Content loading', EG_TEXTDOMAIN); ?>"><?php _e('Extend JavaScript URL', EG_TEXTDOMAIN); ?></label>
							<input type="text" name="ajax-js-url" class="eg-tooltip-wrap" title="<?php _e('Insert JavaScript URL here', EG_TEXTDOMAIN); ?>" value="<?php echo $base->getVar($grid['params'], 'ajax-js-url', ''); ?>" class="firstinput">
						</p>
						<div style="clear:both"></div>
					</div>
				</div>
			
				<div class="divider1"></div>
				
				
				
				
				
			</div>
		</div>
		

		<!--
		SPINNER SETTINGS
		-->
		<div id="esg-settings-spinner-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3 class="box-closed"><span><?php _e('Spinner Settings', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<div style="width:100%;height:15px"></div>
							<div id="use_spinner_row">
								<p>
									<label for="cart-arrows"><?php _e('Choose Spinner', EG_TEXTDOMAIN); ?></label>
									<?php
									$use_spinner = $base->getVar($grid['params'], 'use-spinner', '0');
									?>
									<select id="use_spinner" name="use-spinner" class="eg-tooltip-wrap" title="<?php _e('Choose Loading Spinner', EG_TEXTDOMAIN); ?>">
										<option value="-1"<?php selected($use_spinner, '-1'); ?>><?php _e('off', EG_TEXTDOMAIN); ?></option>
										<option value="0"<?php selected($use_spinner, '0'); ?>>0</option>
										<option value="1"<?php selected($use_spinner, '1'); ?>>1</option>
										<option value="2"<?php selected($use_spinner, '2'); ?>>2</option>
										<option value="3"<?php selected($use_spinner, '3'); ?>>3</option>
										<option value="4"<?php selected($use_spinner, '4'); ?>>4</option>
										<option value="5"<?php selected($use_spinner, '5'); ?>>5</option>
									</select>
								</p>
							</div>
							<div id="spinner_color_row">
								<p>
									<label for="cart-arrows"><?php _e('Choose Spinner Color', EG_TEXTDOMAIN); ?></label>
									<input type="text" class="inputColorPicker eg-tooltip-wrap" title="<?php _e('Sorting at Loading', EG_TEXTDOMAIN); ?>" id="spinner_color" name="spinner-color" value="<?php echo $base->getVar($grid['params'], 'spinner-color', '#FFFFFF'); ?>" />
								</p>
							</div>
							<p>
								<label for="filter-arrows" ><?php _e('Hide Markups before Load', EG_TEXTDOMAIN); ?></label>
								<input type="radio" name="hide-markup-before-load" value="on" class="firstinput eg-tooltip-wrap" title="<?php _e('Hide all content before items are loaded.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'hide-markup-before-load', 'off'), 'on'); ?>> <?php _e('On', EG_TEXTDOMAIN); ?>
								<input type="radio" name="hide-markup-before-load" value="off" class="eg-tooltip-wrap" title="<?php _e('Show all content before items are loaded.', EG_TEXTDOMAIN); ?>" <?php checked($base->getVar($grid['params'], 'hide-markup-before-load', 'off'), 'off'); ?>> <?php _e('Off', EG_TEXTDOMAIN); ?>
							</p>
						<div style="width:100%;height:15px"></div>
					</div>
				</div>
			</div>
		</div>
		
		<!--
		API / CUSTOM JAVASCRIPT SETTINGS
		-->
		<div id="esg-settings-api-settings" class="esg-settings-container">
			<div class="">
				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Custom', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc eg-codemirror-border">
						<div style="margin: 15px 0;">
							<label for="main-background-color"><?php _e('Custom JavaScript', EG_TEXTDOMAIN); ?></label>
							<div style="padding-left: 170px;">
								<!--jQuery(document).ready(function() {<br>-->
								<textarea name="custom-javascript" id="eg-api-custom-javascript"><?php echo stripslashes($base->getVar($grid['params'], 'custom-javascript', '')); ?></textarea>
								<!--<br>});-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('API', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<?php
							if($grid !== false){
								?>
								<label for="api-methods"><?php _e('API Methods', EG_TEXTDOMAIN); ?></label>
								<div style="padding-left: 170px;">
									<div><label><?php _e('Redraw Grid:', EG_TEXTDOMAIN); ?></label><input class="eg-api-inputs" type="text" name="do-not-save" value="essapi_<?php echo $grid['id']; ?>.esredraw();" readonly="true" /></div>
									<div style="clear: both;"></div>
									<div><label><?php _e('Quick Redraw Grid:', EG_TEXTDOMAIN); ?></label><input class="eg-api-inputs" type="text" name="do-not-save" value="essapi_<?php echo $grid['id']; ?>.esquickdraw();" readonly="true" /></div>
								</div>
								<?php
							}else{
								?>
								<p>
								<?php _e('API Methods will be available after this Grid is saved for the first time.', EG_TEXTDOMAIN); ?>
								</p>
								<?php
							}
							?>
						</p>
					</div>
				</div>	
				
				<div class="divider1"></div>

				<div class="eg-creative-settings">
					<div class="eg-cs-tbc-left">
						<h3><span><?php _e('Code Examples', EG_TEXTDOMAIN); ?></span></h3>
					</div>
					<div class="eg-cs-tbc">
						<p>
							<label><?php _e('Visual Composer Tab fix:', EG_TEXTDOMAIN); ?></label>
							<div style="margin-left: 170px;">
<pre><code>jQuery('body').on('click', '.wpb_tabs_nav a', function() {
	setTimeout(function(){
		jQuery(window).trigger('resize');
	}, 500); //change 500 to your needs
});</code></pre>
							</div>
						</p>
					</div>
				</div>

				<div class="divider1"></div>
			</div>
		</div>
	</form>

	<?php
	Essential_Grid_Dialogs::pages_select_dialog();
	Essential_Grid_Dialogs::navigation_skin_css_edit_dialog();
	?>