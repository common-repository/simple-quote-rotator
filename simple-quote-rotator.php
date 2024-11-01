<?php
/**
* Plugin Name: Simple Quote Rotator
* Plugin URI: http://www.kulturystyka.sklep.pl/info/quote/
* Description: This is a very simple plugin to display a random quotes in your posts or widgets.
* Version: 1.0
* Author: Dan
* Author URI: http://www.kulturystyka.sklep.pl/
* Text Domain: simple-quote-rotator
* Domain Path: /languages
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/



function SimpleQuoteRotator() {

    // Loading the XML file
	$dir = plugins_url( 'quotes.xml', __FILE__ );
	$feed = file_get_contents($dir);
	$xml = simplexml_load_string($feed);
	$number = rand(2,19);	

	echo '<p><img style="padding:4px;" src="' . plugins_url( 'images/quote.png', __FILE__ ) . '" ><i>'.$xml->item[$number]->quote . '</i><img style="padding:4px;" src="' . plugins_url( 'images/quote2.png', __FILE__ ) . '" ></p>';
	echo '<p style="color:#9D9D9D;font-size: smaller;">'.$xml->item[$number]->author .'</p>';

}
add_shortcode('simple-quote-rotator', 'SimpleQuoteRotator');

?>
