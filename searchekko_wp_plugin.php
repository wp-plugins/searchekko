<?php
/*
 * Plugin Name: SearchEkko
 * Plugin URI: http://www.searchekko.com/download_wordpress
 * Description: SearchEkko is like a "related posts" widget, but it only displays to visitors who arrive from a search engine, and it uses their individual search queries to drill down on the best possible matches.
 * Version: 1.0
 * Author: Noah Ready-Campbell
 * Author URI: http://www.anoaharc.com
 * 
 */

/* 
 * Copyright 2009  Noah Ready-Campbell  (email : noah@anoaharc.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 */

function searchekko_inject($content) {
	//widget texts
	$expWidget = '<div id="searchekko_armor" class="searchekko_expanded"><script type="text/javascript" src="http://www.searchekko.com/js/protowidget.js"></script> </div>';
	$collWidget = '<div id="searchekko_armor" class="searchekko_collapsed"><script type="text/javascript" src="http://www.searchekko.com/js/protowidget.js"></script> </div>';
	
	//only display for single pages (not home page with snippets etc)
	if (is_single()) {
		//if long enough post, insert a collapsed searchekko widget below first paragraph
		if (str_word_count($content) > 200 && substr_count($content, "<p>") >= 4) {
			//get end location of first paragraph
			$closeParIx = strpos($content, "</p>") + 4;
			$content = substr_replace($content, $collWidget, $closeParIx, 0);
		} 
		//also always append an expanded widget to the end of content
		$content = $content . $expWidget;
	}
	return $content;
}

add_filter('the_content','searchekko_inject');

?>
