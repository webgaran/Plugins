<?php
/*
 * plugin name: جملات تصادفی
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

add_action( 'wp_footer', 'show_random_messages' );

function show_random_messages() {
    $messages = array(
        'و جن و انس را نيافريدم جز براى آنكه مرا بپرستند (ذاریات 56)',
        'خدا مقرر كرده است كه حتما من و فرستادگانم چيره خواهيم گرديد آرى خدا نيرومند شكست‏ناپذير است (مجادله 21)',
        'اگر اين قرآن را بر كوهى فرومى‏فرستاديم يقينا آن [كوه] را از بيم خدا فروتن [و] از هم ‏پاشيده مى‏ديدى و اين مثلها را براى مردم مى‏زنيم باشد كه آنان بينديشند (حشر 21)',
        'بى‏همسران خود و غلامان و كنيزان درستكارتان را همسر دهيد اگر تنگدستند خداوند آنان را از فضل خويش بى‏نياز خواهد كرد و خدا گشايشگر داناست (نور 32)',
        'آن روز كه [ما] به دوزخ مى‏گوييم آيا پر شدى و مى‏گويد آيا باز هم هست (ق 30)',
        'درباره شراب و قمار از تو مى‏پرسند بگو در آن دوگناهى بزرك و سودهايى براى مردم است و[لى] گناهشان از سودشان بزرگتر است و از تو مى‏پرسند چه چيزى انفاق كنند بگو مازاد [بر نيازمندى خود] را اين گونه خداوند آيات [خود را] براى شما روشن مى‏گرداند باشد كه بينديشيد (بقره 219)',
        'اى كسانى كه ايمان آورده‏ايد از بسيارى از گمانها بپرهيزيد كه پاره‏اى از گمانها گناه است و جاسوسى مكنيد و بعضى از شما غيبت بعضى نكند آيا كسى از شما دوست دارد كه گوشت برادر مرده‏اش را بخورد از آن كراهت داريد [پس] از خدا بترسيد كه خدا توبه‏پذير مهربان است (حجرات 12)',
        'بگو اى بندگان من كه بر خويشتن زياده‏روى روا داشته‏ايد از رحمت‏خدا نوميد مشويد در حقيقت‏خدا همه گناهان را مى‏آمرزد كه او خود آمرزنده مهربان است (زمر 53)',
        'پس هر كه هموزن ذره‏اى نيكى كند [نتيجه] آن را خواهد ديد و هر كه هموزن ذره‏اى بدى كند [نتيجه] آن را خواهد ديد(7و8 زلزال)',
        'پس [بدان كه] با دشوارى آسانى است آرى با دشوارى آسانى است (5و6 انشراح)'
    );
    $messageIndex = rand( 0, (count($messages) - 1 ));

    $messages = $messages[$messageIndex];
    $nl = PHP_EOL;

    echo '<p class="show_random_messages" style="position:fixed;top:0;padding:5px;background:#ff8000;color:#fff;z-index:99;width: 100%;text-align: center;">' . $messages . '</p>';
    // <script type="text/javascript">
    // jQuery(document).ready(function($){
    //     $(window).scroll(function(){
    //         if( $(this) ).scrollTop() > 50 ) {
    //             $('p.show_random_messages').fadeOut(2000);
    //         }
    //     });
    // });
    // </script>
}