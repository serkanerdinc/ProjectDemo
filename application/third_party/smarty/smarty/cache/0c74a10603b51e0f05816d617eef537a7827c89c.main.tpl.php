<?php
/*%%SmartyHeaderCode:406857cd86167b9c59_61508559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c74a10603b51e0f05816d617eef537a7827c89c' => 
    array (
      0 => 'C:/wamp/www/newsiparislerim/application//views/templates/siparislerim/main.tpl',
      1 => 1473062464,
      2 => 'file',
    ),
    '1dd23249d222dbbcaa18cf9ecdcc95038fd91af0' => 
    array (
      0 => 'C:/wamp/www/newsiparislerim/application//views/templates/siparislerim/template.tpl',
      1 => 1473086812,
      2 => 'file',
    ),
    '8e2d6933bb53c1b531bc44222b0f79b9ac720f2c' => 
    array (
      0 => '8e2d6933bb53c1b531bc44222b0f79b9ac720f2c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '406857cd86167b9c59_61508559',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57cd86168e2aa8_93198540',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57cd86168e2aa8_93198540')) {
function content_57cd86168e2aa8_93198540 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Burası Title HOME</title>
<meta name="description" content="">
<meta name="keywords" content="siparişlerim, kapıcılık hizmeti, evden sipariş, adrese teslim, online bakkal, concierge, izmir eve servis, tıkla gelsin, yemek siparişi, kuru temizleme, ofis temizliği, şarküteri, noter, vize, online manav">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="icon" href="/theme/siparislerim/img/siparislerim-icon.png">

<link type="text/css" rel="stylesheet" href="/theme/siparislerim/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="/theme/siparislerim/css/bootstrap-datetime.css">
<link type="text/css" rel="stylesheet" href="/theme/siparislerim/css/main2.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="/theme/siparislerim/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="/theme/siparislerim/css/owl.carousel.css">
<script type="text/javascript" src="/theme/siparislerim/js/jquery.js"></script>
<script type="text/javascript" src="/theme/siparislerim/js/owl.carousel.js"></script>
<script type="text/javascript" src="/theme/siparislerim/js/moment.js"></script>
<script type="text/javascript" src="/theme/siparislerim/js/bootstrap.js"></script>
<script type="text/javascript" src="/theme/siparislerim/js/locale/tr.js"></script>
<audio id="pop" src="/theme/siparislerim/sound/pop.mp3" style="display:none" autostart="false"></audio>

</head>



<body>
	<div class="mobile-menu" id="fixed">
      	<div class="user"> <img src="/theme/siparislerim/img/erdem.jpg" class="clipmask user-before"/>
	        <ul>
	          	<li class="user-name">Erdem Zengin</li>
	          	<li class="user-address">Demirköprü Mahallesi</li>
	        </ul>
			<div class="close-mobile-menu"></div>
      	</div>
      	<div class="mobile-settings">
	        <ul>
		        <a href=""><li><i class="fa fa-user" aria-hidden="true"></i> Profil</li></a>
		        <a href=""><li><i class="fa fa-shopping-cart" aria-hidden="true"></i> Sepetim</li></a>
		        <a href=""><li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Bildirimler</li></a>
		        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
		        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
		        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
		        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
		        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
		        <a href="#"><li><i class="fa fa-file-text-o" aria-hidden="true"></i> İşlem Dökümü</li></a>
		        <li class="topmenu"><i class="fa fa-wrench" aria-hidden="true"></i> Ayarlar
		        	<ul class="submenu">
		       			<a href=""><li><i class="fa fa-sliders" aria-hidden="true"></i> Hesap Ayarları</li></a>
		        		<a href=""><li><i class="fa fa-map-marker" aria-hidden="true"></i> Adres Bilgileri</li></a>
		                <a href=""><li><i class="fa fa-exclamation" aria-hidden="true"></i> Bildirimler</li></a>
		        	</ul>
	          	</li>
		        <a href="#"><li><i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap</li></a>
	        </ul>
        </div>
    </div>
	<div id="nav-cont">
	  	<nav>
		    <div class="m-menu"></div>
		    <a href=""><div class="logo"></div></a>
		    <div class="search">
		      	<div>
			    	<input type="search" placeholder="Arama yapın..." class="search-bar">
			        <button type="button" class="search-button"></button>
			        <button type="button" onclick="window.history.back()" class="back-button"></button>
		      	</div>
		    </div>
		    <div class="sepet"></div>
		    <div class="desktop-menu">
		      	<div class="user"> <img src="/theme/siparislerim/img/erdem.jpg" class="clipmask user-before"/>
			        <ul>
			          	<li class="user-name">Erdem Zengin</li>
			          	<li class="user-address">Demirköprü Mahallesi</li>
			        </ul>
					<div class="close-mobile-menu"></div>
		      	</div>
		    	<div class="settings">
			        <ul>
				    	<a href=""><li><i class="fa fa-user" aria-hidden="true"></i> Profil</li></a>
				        <a href=""><li><i class="fa fa-shopping-cart" aria-hidden="true"></i> Sepetim</li></a>
				        <a href=""><li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Bildirimler</li></a>
				        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
				        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
				        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
				        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
				        <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i> Favoriler</li></a>
				        <a href="#"><li><i class="fa fa-file-text-o" aria-hidden="true"></i> İşlem Dökümü</li></a>
				        <li class="topmenu"><i class="fa fa-wrench" aria-hidden="true"></i> Ayarlar
				        	<ul class="submenu">
				       			<a href=""><li><i class="fa fa-sliders" aria-hidden="true"></i> Hesap Ayarları</li></a>
				        		<a href=""><li><i class="fa fa-map-marker" aria-hidden="true"></i> Adres Bilgileri</li></a>
				                <a href=""><li><i class="fa fa-exclamation" aria-hidden="true"></i> Bildirimler</li></a>
				        	</ul>
				          </li>
				        <a href="#"><li><i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap</li></a>
			        </ul>
		        </div>
		    </div>
	  	</nav>
	</div>
	
	<div class="body-cont">
		<div id="slider">
			<div id="owl-demo" class="owl-carousel">

				<div class="item">
					<img src="/theme/siparislerim/img/kampanya-3.jpg" alt="Kampanya 1">
				</div>
				<div class="item">
					<img src="/theme/siparislerim/img/kampanya-4.jpg" alt="Kampanya 1">
				</div>
				<div class="item">
					<img src="/theme/siparislerim/img/kampanya-5.png" alt="Kampanya 1">
				</div>
				<div class="item">
					<img src="/theme/siparislerim/img/kampanya-6.jpg" alt="Kampanya 1">
				</div>

			</div>
		</div>
		<div id="categories">
							<a href="/izmir/category-yemek">
					<div class="category-box">
						<div class="category-image yemek"></div>
						<h2>Yemek</h2>
					</div>
				</a>
							<a href="/izmir/category-unlu-mamuller">
					<div class="category-box">
						<div class="category-image unlu-mamuller"></div>
						<h2>Unlu Mamüller</h2>
					</div>
				</a>
							<a href="/izmir/category-damacana-su">
					<div class="category-box">
						<div class="category-image damacana-su"></div>
						<h2>Damacana Su</h2>
					</div>
				</a>
							<a href="/izmir/category-sarkuteri">
					<div class="category-box">
						<div class="category-image sarkuteri"></div>
						<h2>Şarküteri</h2>
					</div>
				</a>
							<a href="/izmir/category-manav">
					<div class="category-box">
						<div class="category-image manav"></div>
						<h2>Manav</h2>
					</div>
				</a>
							<a href="/izmir/category-kasap">
					<div class="category-box">
						<div class="category-image kasap"></div>
						<h2>Kasap</h2>
					</div>
				</a>
							<a href="/izmir/category-kopek-oteli">
					<div class="category-box">
						<div class="category-image kopek-oteli"></div>
						<h2>Köpek Oteli</h2>
					</div>
				</a>
							<a href="/izmir/category-petshop">
					<div class="category-box">
						<div class="category-image petshop"></div>
						<h2>Pet Shop</h2>
					</div>
				</a>
							<a href="/izmir/category-dekorasyon">
					<div class="category-box">
						<div class="category-image dekorasyon"></div>
						<h2>Dekorasyon</h2>
					</div>
				</a>
							<a href="/izmir/category-temizlik-gerecleri">
					<div class="category-box">
						<div class="category-image temizlik-gerecleri"></div>
						<h2>Temizlik Gereçleri</h2>
					</div>
				</a>
							<a href="/izmir/category-temel-gida">
					<div class="category-box">
						<div class="category-image temel-gida"></div>
						<h2>Temel Gıda</h2>
					</div>
				</a>
							<a href="/izmir/category-kisisel-bakim">
					<div class="category-box">
						<div class="category-image kisisel-bakim"></div>
						<h2>Kişisel Bakım</h2>
					</div>
				</a>
							<a href="/izmir/category-cicek">
					<div class="category-box">
						<div class="category-image cicek"></div>
						<h2>Çiçek Siparişi</h2>
					</div>
				</a>
							<a href="/izmir/category-temizlik-hizmeti">
					<div class="category-box">
						<div class="category-image temizlik-hizmeti"></div>
						<h2>Temizlik Hizmeti</h2>
					</div>
				</a>
							<a href="/izmir/category-kuru-temizleme">
					<div class="category-box">
						<div class="category-image kuru-temizleme"></div>
						<h2>Kuru Temizleme</h2>
					</div>
				</a>
							<a href="/izmir/category-arac-kiralama">
					<div class="category-box">
						<div class="category-image arac-kiralama"></div>
						<h2>Araç Kiralama</h2>
					</div>
				</a>
							<a href="/izmir/category-kurye-hizmeti">
					<div class="category-box">
						<div class="category-image kurye-hizmeti"></div>
						<h2>Kurye Hizmeti</h2>
					</div>
				</a>
							<a href="/izmir/category-concierge">
					<div class="category-box">
						<div class="category-image concierge"></div>
						<h2>Concierge</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+hamburger">
					<div class="category-box">
						<div class="category-image yemek+hamburger"></div>
						<h2>HAMBURGER</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+pizza">
					<div class="category-box">
						<div class="category-image yemek+pizza"></div>
						<h2>PİZZA</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+makarna">
					<div class="category-box">
						<div class="category-image yemek+makarna"></div>
						<h2>MAKARNA</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+ev-yemegi">
					<div class="category-box">
						<div class="category-image yemek+ev-yemegi"></div>
						<h2>EV YEMEĞİ</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+sushi">
					<div class="category-box">
						<div class="category-image yemek+sushi"></div>
						<h2>SUSHI</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+cig-kofte">
					<div class="category-box">
						<div class="category-image yemek+cig-kofte"></div>
						<h2>ÇİĞ KÖFTE</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+lahmacun">
					<div class="category-box">
						<div class="category-image yemek+lahmacun"></div>
						<h2>LAHMACUN</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+pide">
					<div class="category-box">
						<div class="category-image yemek+pide"></div>
						<h2>PİDE</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+kofte">
					<div class="category-box">
						<div class="category-image yemek+kofte"></div>
						<h2>KÖFTE</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+corba">
					<div class="category-box">
						<div class="category-image yemek+corba"></div>
						<h2>ÇORBA</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+ekmek-arasi">
					<div class="category-box">
						<div class="category-image yemek+ekmek-arasi"></div>
						<h2>EKMEK ARASI</h2>
					</div>
				</a>
							<a href="/izmir/category-yemek+kebap">
					<div class="category-box">
						<div class="category-image yemek+kebap"></div>
						<h2>KEBAP</h2>
					</div>
				</a>
						
		</div>
	</div>

	<div id="footer-cont">
		<footer>
			<ul class="footer-menu">
				<li>
					<h2>Kurumsal</h2>
					<ul>
						<li>Hakkımızda</li>
						<li>İnsan Kaynakları</li>
						<li>İletişim</li>
					</ul>
				</li>
				<li>
					<h2>Gizlilik ve Kullanım</h2>
					<ul>
						<li>Kullanım Koşulları</li>
						<li>Üyelik Sözleşmesi</li>
						<li>Gizlilik Politikası</li>
					</ul>
				</li>
				<li>
					<h2>Bizi Takip Edin</h2>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Linkedin</li>
					</ul>
				</li>
			</ul>

			<div class="footer-links">
			<ul>
				<li class="call-center">
					<p>Müşteri Hizmetleri</p>
					<span>
						<a href="tel:+908502054414">0850 205 44 14</a>
					</span>
				</li>
				<li class="stores">
					<a href="#" class="google-store"></a>
					<a href="#" class="apple-store"></a>
				</li>
			</ul>
		</div>
		</footer>
	</div>
	<!-- DEVELOPMENT -->
	<div id="sepet-popup">
		<div id="sepet-inner-cont">
		    <div id="sepet-left">
				<div id="sepet-popup-img">
					<img src="/theme/siparislerim/img/kat11.png" />
				</div>
				<div id="sepet-popup-price" >
					19,50 &#8378;
				</div>
				<div id="sepet-popup-count">
					<input type="number" value="1" />
				</div>
				<div id="sepet-popup-buttons">
					<button class="add-basket sepete-ekle">SEPETE EKLE</button>
					<a href="index.php?page=cart"><button class="buy-now">HEMEN AL</button></a>
				</div>
		    </div>
		    
		    
		    
		    <div id="sepet-right">
			    <div id="sepet-header">
				    <h2>Double Quarter Pounder Menu</h2>
				    <h3>Quarter Pounder Hamburger, Büyük Patates,	Büyük İçecek, 2 Adet Sos</h3>
			    </div>
			    <div id="sepet-form">
			    
				    <label>Menü Seçimi</label>
				    <select class="sepet-select">
					    <option selected disabled>Seçiniz</option>
					    <option>Orta</option>
					    <option>Büyük</option>
					    <option>Süper</option>
				    </select>
				    
				    <label>İçecek Seçimi</label>
				    <select class="sepet-select">
					    <option selected disabled>Seçiniz</option>
					    <option>Are you kola?</option>
					    <option>e vat ar yu?</option>
				    </select>
				    
				    <label>Ücretsiz Sos Seçimi</label>
				    <select class="sepet-select">
					    <option selected disabled>Seçiniz</option>
					    <option>Ketçap</option>
					    <option>Mayonez</option>
				    </select>
				    
				    <label>Ücretsiz Sos Seçimi</label>
				    <select class="sepet-select">
					    <option selected disabled>Seçiniz</option>
					    <option>Extra</option>
					    <option>Sos</option>
				    </select>
				    
				    <label>Promosyon Seçimi</label>
				    <select class="sepet-select">
					    <option selected disabled>Seçiniz</option>
					    <option>Soğan Halkası</option>
					    <option>Halkalı Soğan</option>
				    </select>
				    
				    <input for="extra-peynir" class="extra-check" type="checkbox" >
				    <label id="extra-peynir" class="extra-secim-label">Extra Peynir 0,75 &#8378;</label>
			    </div>
		    
		    </div>
	    
	    	<div id="sepet-close-button">X</div>
	    </div>
	</div>
<script type="text/javascript" src="/theme/siparislerim/js/siparislerim.js"></script>
</body>
</html><?php }
}
?>