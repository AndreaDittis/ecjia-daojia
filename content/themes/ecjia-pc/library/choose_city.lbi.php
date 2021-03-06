<?php
/*
Name: PC端选择城市弹窗
Description: 这是PC端的选择城市弹窗
*/
defined('IN_ECJIA') or header("HTTP/1.0 404 Not Found");exit('404 Not Found');
?>
{nocache}
<div class="choose-city-div">
	<div class="city-content">
		<div class="header">
			<div class="title">请选择您所在的位置</div>
			<span class="close_div">X</span>
		</div>
		<div class="content">
			<div class="content-position">
				<div class="guess-position">猜你在</div>
				<div class="position">
					{if $info.location_address}
						<li class="position-li active" data-id="{$info.location_id}">{$info.location_address}</i>
					{else}
					<li class="position-li-none">猜不出来，请在下方区域中选择一个位置</li>
					{/if}
				</div>
			</div>
			<div class="content-bottom">
				<div class="title">经营区域</div>
				<div class="position-list">
					<!-- {foreach from=$info.region_list item=val} -->
					<li class="position-li {if $info.city_id eq $val.id}active{/if}" data-id="{$val.id}">{$val.name}</li>
					<!-- {/foreach} -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="choose-city-overlay"></div>
{/nocache}
