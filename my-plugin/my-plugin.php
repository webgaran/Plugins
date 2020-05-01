<?php
/*
 * plugin name: افزونه من
 * Plugin URI: http://deneshjooyar.com/my-plugin
 * Author: حامد مودی
 * Author URI: http://example.ir/profile
 * Version: 1.0.0
 * Description: لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. <a href="http://google.com"> دانلود مستقیم</a> <strong>نوشته تاکیدی</strong>
 * Lincence: GPLv2
 * Licence URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 */
/*
Copyright (C) 2015  hamed moodi (info@example.com)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

defined('ABSPATH') || exit;

define('MY_PLUGIN_DIR', plugin_dir_path( __FILE__ ));

register_activation_hook( __FILE__, function(){
   
   add_option('my_plugin_author_name', 'hamedMoodi');
   add_option('my_plugin_author_email', 'info@example.com');
   
});

register_deactivation_hook( __FILE__, function(){
   
   delete_option('my_plugin_author_name');
   
});


define('MY_PLUGIN_DIR', plugin_dir_path( __FILE__ ));

register_activation_hook( __FILE__, function(){
    date_default_timezone_set('Asia/Tehran');
    $file = fopen(MY_PLUGIN_DIR . 'statistics.txt', 'a');
    fwrite($file, date('Y-m-d H:i:s') . ' plugin activated...!' . PHP_EOL );
    fclose($file);
});

register_deactivation_hook( __FILE__, function(){
    date_default_timezone_set('Asia/Tehran');
    $file = fopen(MY_PLUGIN_DIR . 'statistics.txt', 'a');
    fwrite($file, date('Y-m-d H:i:s') . ' plugin deactivated...!' . PHP_EOL );
    fclose($file);
});

add_action('wp_head', 'absoluteAdminMenu', 9999);
function absoluteAdminMenu(){
echo <<<CSS
<style type="text/css">
  #wpadminbar {
	direction: rtl;
	color: #ccc;
	font: normal 13px/32px "Open Sans", sans-serif;
	height: 32px;
	position: absolute;
	top: 0;
	right: 0;
	width: 100%;
	min-width: 600px;/* match the min-width of the body in wp-admin.css */
	z-index: 99999;
	background: #23282d;
   }
</style>
CSS;
}

// add_action('wp_head', 'showActions', 99999);
// function showActions(){
//    global $wp_filter;
//    print_r($wp_filter[current_action()]);
// }

add_action('wp_head', 'hm_testRemove',1);
function hm_testRemove(){
   remove_action('wp_head', 'wp_generator');
}

// add_action('wp_head', 'hm_testRemove',1);
// function hm_testRemove(){
//    remove_all_actions('wp_head');
// }