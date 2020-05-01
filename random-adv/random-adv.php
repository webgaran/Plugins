<?php
/*
 * plugin name: تبلیغات تصادفی
 * Plugin URI: http://webgaran.ir/plugins
 * Author: محسن سامی
 * Author URI: http://webgaran.ir/
 * Version: 1.0.0
 * Description: لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. <a href="http://google.com"> دانلود مستقیم</a> <strong>نوشته تاکیدی</strong>
 * Lincence: GPLv2
 * Licence URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 */
/*
Copyright (C) 2015  Mohsen Samy (info@webgaran.ir)

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

add_action( 'wp_footer', 'add_custom_ads' );

function add_custom_ads() {

$advs = array(
    array(
        'image'     =>      'adv-01.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 01'
    ),
    array(
        'image'     =>      'adv-02.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 02'
    ),
    array(
        'image'     =>      'adv-03.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 03'
    ),
    array(
        'image'     =>      'adv-04.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 04'
    ),
    array(
        'image'     =>      'adv-05.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 05'
    ),
    array(
        'image'     =>      'adv-06.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 06'
    ),
    array(
        'image'     =>      'adv-07.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 07'
    ),
    array(
        'image'     =>      'adv-08.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 08'
    ),
    array(
        'image'     =>      'adv-09.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 09'
    ),
    array(
        'image'     =>      'adv-10.jpg',
        'link'      =>      'http://google.com',
        'title'     =>      'title 10'
    )
);

    $imgaeIndex = rand(0, count($advs)-1);

    $image = plugins_url('img/' . $advs[$imgaeIndex]['image'] , __FILE__ );
    $link = $advs[$imgaeIndex]['link'];
    $title = $advs[$imgaeIndex]['title'];

    echo '<a style="position:absolute;left:0;top:0;z-index: 9;" href="' . $link .'"><img src="' . $image . '"></a>';

}