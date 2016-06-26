<!--Bu koddaki oge class’ı aracılığıyla eklenecek her bileşen için varsayılan bir şablon oluşturabilir, 
ogebaslik aracılığıyla da o bileşenin başlık stillerini dilediğiniz gibi CSS dosyasınızdan belirleyebiliriz.-->
<?php
 if ( function_exists('register_sidebar') )
 register_sidebar(array(
 'before_widget' => '<div class="oge">',
 'after_widget' => '</div>',
 'before_title' => '<div class="ogebaslik">',
 'after_title' => '</div>',
 ));
 ?>