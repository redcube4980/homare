<?php
/* The template for displaying the footer */
?>
	<footer>
		<section class="sns">
			<h2>Follow US</h2>
			<ul class="sns-list">
				<li class="sns-item">
					<a href="//www.facebook.com/%E3%81%BB%E3%81%BE%E3%82%8C%E9%85%92%E9%80%A0-%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE-1165802586866601/">
						<span class="sns-facebook"><span class="fa-layers"><i class="fa fa-square"></i><i class="fab fa-facebook"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="//twitter.com/HomareSyuzo">
						<span class="sns-twitter"><span class="fa-layers"><i class="fab fa-twitter" data-fa-transform="shrink-4"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="//www.instagram.com/homare_sake_brewery/">
						<span class="sns-instagram"><span class="fa-layers"><i class="fab fa-instagram" data-fa-transform="shrink-4"></i></span></span>
					</a>
				</li>
				<!--
				<li class="sns-item">
					<a href="">
						<span class="sns-google-plus"><span class="fa-layers"><i class="fa fa-square"></i><i class="fab fa-google-plus-g" data-fa-transform="shrink-8 left-3"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="">
						<span class="sns-line"><span class="fa-layers"><i class="fa fa-square" data-fa-transform="shrink-1"></i><i class="fab fa-line"></i></span></span>
					</a>
				</li>
				-->
			</ul>
		</section>
		<div class="site-title">
			<div class="site-logo">
				<a href="/">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg" class="site-logo-2" alt="会津ほまれ">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo.svg" class="site-logo-1" alt="Homare Sake Brewery Co.,Ltd.">
				</a>
			</div>
			<div class="site-description">会津ほまれ&ensp;福島県喜多方市の酒蔵。</div>
		</div>
<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu',
		'container' => 'nav',
		'container_class' => 'global-menu',
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
		<div class="footer-contact">
			<span class="footer-contact-tel1">
				<i class="fas fa-phone"></i><!--<span class="header-contact-gold">&#9742;</span>--><span x-ms-format-detection="none">0241-22-5151</span>
				<span class="footer-contact-small">(平日 9:00～16:30)</span><br>
				<a class="contact" href="<?php echo esc_url( home_url( 'contact' ) ); ?>"><i class="fas fa-envelope"></i>お問い合わせ</a> 
			</span>
		</div>
		<p class="footer-attention">◆お酒は20歳から。未成年者への酒類の販売は固くお断りしています。</p>
		<div class="footer-menu">
<?php
	wp_nav_menu( array(
		'menu_class' => 'global-submenu',
		'theme_location' => 'global-submenu',
		'container' => 'nav',
		'container_class' => 'global-submenu',
		'items_wrap' => '<ul>%3$s</ul>'
	));
?>
<!--
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/guide">ご利用ガイド</a></li>
				<li><a href="<?php bloginfo('url'); ?>/guide">お支払い方法・送料について</a></li>
				<li><a href="<?php bloginfo('url'); ?>/privacypolicy">プライバシー・ポリシー</a></li>
				<li><a href="#">サイトポリシー</a></li>
				<li><a href="<?php bloginfo('url'); ?>/commerciallaw">特定商取引に関する表記</a></li>
			</ul>
-->
		</div>
		<p class="copyright">Copyright &copy; 2012-<?php echo(date('Y', time())); ?> Homare Sake Brewery Co.,Ltd. All rights reserved.</p>
	</footer>

</div>
<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/rcproductslider.css">
<script language="javascript">
//node.jsを使わない前提で$をjQueryに再指定
var $ = jQuery.noConflict();
</script>
<script type=”text/javascript” src=”http://connect.facebook.net/en_US/all.js”></script>
<script language="JavaScript">
FB.init({
    appId: '216284168439069',
    status: true,
    cookie: true,
    xfbml: true
});
window.fbAsyncInit = function() {
  FB.Canvas.setSize();
}
function sizeChangeCallback() {
  FB.Canvas.setSize();
}
</script>
<script src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/ScrollTrigger.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/swiper.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/smooth-scroll.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/script.js"></script>
<script src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/fontawesome-all.min.js"></script>
<?php if(is_page(array('contact','confirm','thanks'))):?>
<script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script>
$(function() {
 $('#zip-search').click(function() {
  AjaxZip3.zip2addr('zip[data][0]', 'zip[data][1]', 'pref', 'addr01');
 });
});
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
