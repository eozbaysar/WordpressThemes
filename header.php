<html>
<head>
<!--Browser ın iconunu sağlar-->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/mat_ic.ico" />
<!--Sitemizin türkçe karakter uyumlu olmasını sağladık-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--Site başlığını belirlemek için kullandık.Otomatik değişceğinden "-" kullandık-->
<title><?php bloginfo('name'); ?> <?php bloginfo('description'); ?> <?php wp_title('-'); ?> </title>
<!--css dosyamızı wp e çekmesi için kullandık-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!--Eğer js kodu kullanırsak onu wp yükler.get blog info js dosyamızın bulunduğu dizini alır.-->
<script src="<?php echo get_bloginfo('template_directory');?>/js/script.js"></script>
<!--WordPress’e head etiketinin nerede olduğunu gösterir.-->
<?php wp_head(); ?>
</head>
<body>
<div id="header">
	<div id="logo">
	</div>
	<div id="menu">
		<ul>
			<!--Burada a etiketinin href kısmına eklediğimiz PHP kodu bizim anasayfamızı gösterir.-->
			<li><a href="<?= get_bloginfo("home") ?>">Anasayfa</a></li>
			<!-- title_li sayfaları li etiketleri arasında çağırır.ordey by menude nasıl sıralacağını exlude hangilerinin menude gösterilmiceğini gösterir-->
			<!--<?php wp_list_pages('title_li&orderby=ID&exclude=10,11'); ?>-->
			<li><a href="#">Matematik Konuları</a></li>
			<li><a href="#">Matematik Dersleri</a></li>
			<li><a href="#">İletişim</a></li>
		</ul>
	</div>
</div>
<div id="splash"></div>
<!--body kısmını kapatma en son kapatılacak-->