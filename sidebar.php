	<div id="sidebar">
	<h2>Matematik Hakkında En Son Yazılar</h2>
	<ul>
	<!--Matematik hakkındaki son yazılan yazıları gösterir.showposts kaç adet haber çekeceğini gösterir.&cat=8-->
	<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=4'); ?>
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?> 
	</ul>
	<!--Sidebar’da yer alacak diğer kısımları bileşenler aracılığıyla ekleyeceğimiz için sidebar.
	Php‘yi bileşenleri destekleyecek hale getiriyoruz. Bunun için de aşağıdaki kodu ekliyoruz:-->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php endif; ?>
</div>