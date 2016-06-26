		<!--Tüm bu işlemleri yaptıktan sonra yapmamız gereken bir diğer şey ise header.php, 
		sidebar.php ve footer.php dosyalarını index.php dosyası içerisinde çağırmak. 
		Çünkü anasayfada sitenin üst kısmı, yan menü ve alt kısım yer alıyor.-->
		<?php get_header(); ?>
		<div id="page">
		<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    	<!--Yazar adı-->
		<?php the_author(); ?>
		<!--Tarih-->
		<?php the_date('F j, Y'); ?>-<?php the_time('g:i a'); ?>
		<!--Kategori-->
		<?php the_category('') ?>
		<!--Etiketler-->
		<?php the_tags('',', ',''); ?>
		<!-- Bu işlemi de yaptıktan sonra yazi-icerik içerisinde yer alan yazıları silip aşağıdaki kodu ekliyoruz. Buradaki 
		“devam et...” kısmı siz yazıyı yazarken tamamının anasayfada görünmesini
		istemediğiniz zaman kullandığınız more etiketi kullanıldığında yazının bölünen kısmında çıkacak yazıyı temsil ediyor. -->
		<?php the_content('devam et...'); ?>
		<!--Bu işlemden sonra anasayfanın alt kısmına sayfalar arasında geçiş yapmak için navigasyon kısmını ekleyeceğiz. Bu sayede örneğin anasayfanızda
		5 yazı varsa bu navigasyon aracılığıyla kullanıcılar 2. sayfaya geçip diğer yazılarınıza ulaşabilecek. Bu navigasyon için eklememiz gereken kod-->
		<?php endwhile; else: ?>
		Henuz yazi yoktur
		<?php endif; ?>
    	</div>
    <?php get_sidebar(); ?>
	<?php get_footer(); ?>
</div>