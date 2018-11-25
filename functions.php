<?php
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' )
{
	wp_redirect( admin_url( 'themes.php?page=functions.php' ) );
	exit;
}

$themename = "Firefly主题";
$shortname = "Y";

//Stylesheets Reader
$alt_stylesheet_path = TEMPLATEPATH . '/css/';
$alt_stylesheets = array();
$alt_stylesheets[] = '';

if ( is_dir($alt_stylesheet_path) ) {
	if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) {
		while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
			if(stristr($alt_stylesheet_file, ".css") !== false) {
				$alt_stylesheets[] = $alt_stylesheet_file;
			}
		}
	}
}
$options = array (
	array(  "name" => $themename." Options",
	        "type" => "title"),


//首页布局设置开始
//布告栏，公告填写

	array( "name" => "LOGO和缩略图设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "输入你的logo地址，图片大小（225px,96px）",
	          "desc" => "例如：".get_stylesheet_directory_uri(). '/img/logo.png',
	          "id" => $shortname."_logourl",
	          "type" => "text",
	          "std" => get_stylesheet_directory_uri(). '/img/logo.png'),

	array(	"name" => "输入首页文章列表默认图片地址，图片大小（135px,105px）",
	          "desc" => "例如：".get_stylesheet_directory_uri(). '/img/index_post_default_img.png',
	          "id" => $shortname."_index_post_default_img",
	          "type" => "text",
	          "std" => get_stylesheet_directory_uri(). '/img/index_post_default_img.png'),


	array(	"type" => "close"),
	array( "name" => "网站SEO设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "描述（Description）",
	          "desc" => '',
	          "id" => $shortname."_description",
	          "type" => "textarea",
	          "std" => '这是一个wordpress博客'),

	array(	"name" => "关键词（KeyWords）",
	          "desc" => '',
	          "id" => $shortname."_keywords",
	          "type" => "textarea",
	          "std" => '博客,wordpress'),



	array(	"type" => "close"),
	array( "name" => "文章最新最热图标设置",
	       "type" => "section"),
	array( "type" => "open"),




	array(  "name" => "是否显示文章最新最热图标",
	        "desc" => "默认显示",
	        "id" => $shortname."_new_hot_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),




	array(	"type" => "close"),
	array( "name" => "导航条设置",
	       "type" => "section"),
	array( "type" => "open"),




	array(  "name" => "是否显示导航条右侧菜单",
	        "desc" => "默认不显示",
	        "id" => $shortname."_header_nav_right_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"type" => "close"),
	array( "name" => "PC端首页三栏目广告（含幻灯片）设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示首页三栏显示区（轮播图显示区）",
	        "desc" => "默认显示",
	        "id" => $shortname."_index_three_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入首页三栏左栏轮播图片代码，图片大小（350px,350px），共6个轮播图片。",
	          "desc" => '请参照默认设置修改，href中填写目标链接，src中填写图片URL地址。',
	          "id" => $shortname."_index_three_left_top_code",
	          "type" => "textarea",
	          "std" => '<div class="swiper-slide"><a href="#"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>
<div class="swiper-slide"><a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>
<div class="swiper-slide"><a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>
<div class="swiper-slide"><a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>
<div class="swiper-slide"><a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>
<div class="swiper-slide"><a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/slide.png'.'"></a></div>'),

	array(	"name" => "输入首页三栏左栏轮播图片下方链接代码，共7个p标签。",
	          "desc" => '请参照默认设置修改，href中填写目标链接，a标签之中填写链接文字。',
	          "id" => $shortname."_index_three_left_bottom_code",
	          "type" => "textarea",
	          "std" => '<p class="p_ad"><a href="#" target="_blank">a、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#"target="_blank">b、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">c、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">d、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">e、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">f、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">g、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">h、请到网站主题后台修改你想展示的内容</a></p>
<p class="p_ad"><a href="#" target="_blank">i、请到网站主题后台修改你想展示的内容</a></p>'),

	array(	"name" => "输入首页三栏中栏代码，共17个p或h3标签。",
	          "desc" => '请参照默认设置修改，href中填写目标链接，a标签之中填写链接文字。',
	          "id" => $shortname."_index_three_mid_code",
	          "type" => "textarea",
	          "std" => '<h3 class="p_ad"><a href="#" style="color: red" target="_blank">请到网站主题后台修改你想展示的内容</a></h3>
<p class="p_ad"><a href="#" style="color: gray" target="_blank">这一行可以用来描述副标题文字</a></p>
<p class="p_ad"><a href="#" style="color: gray" target="_blank">这一行可以用来描述副标题文字</a></p>
<h3 class="p_ad"><a href="#" style="color: blue" target="_blank">请到网站主题后台修改你想展示的内容</a></h3>
<p class="p_ad"><a href="#" style="color: gray" target="_blank">这一行可以用来描述副标题文字</a></p>
<p class="p_ad"><a href="#" style="color: gray" target="_blank">这一行可以用来描述副标题文字</a></p>
<h3 class="p_ad"><a href="#" style="color: black" target="_blank">请到网站主题后台修改你想展示的内容</a></h3>
<p class="p_ad"><a href="#" style="color: gray" target="_blank">这一行可以用来描述副标题文字</a></p>
<p class="p_ad"><a href="#"  target="_blank" style="color: gray">这一行可以用来描述副标题文字</a></p>
<p class="p_ad"><a href="#"  target="_blank">1、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#"  target="_blank">2、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#" target="_blank" >3、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#"  target="_blank">4、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#" target="_blank" >5、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#" target="_blank" >6、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#"  target="_blank">7、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#"  target="_blank">8、这是预留的文字广告位置，是不是很爽！</a></p>
<p class="p_ad"><a href="#"  target="_blank">9、这是预留的文字广告位置，是不是很爽！</a></p>'),

	array(	"name" => "输入首页三栏右栏代码。图片大小（80px,60px）",
	          "desc" => '请参照默认设置修改，href中填写目标链接，a,small标签之中填写链接文字，src中填写图片URL地址。',
	          "id" => $shortname."_index_three_right_code",
	          "type" => "textarea",
	          "std" => '<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>
<div class="right_ad_p_box">
<div class="right_ad_p_box_left">
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/right_ad.png'.'" width="80px" height="60px"></a>
</div>
<div class="right_ad_p_box_right">
<h3><a href="#" target="_blank">2018年全新力作主题</a></h3>
<small>请到网站主题后台修改你想展示的内容</small>
</div>
</div>'),

	array(	"type" => "close"),
	array( "name" => "PC端特别推荐广告设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示首页特别推荐",
	        "desc" => "默认不显示",
	        "id" => $shortname."_index_recommend_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入首页特别推荐代码",
	          "desc" => '请参照默认设置修改，href中填写目标链接，a标签之中填写链接文字，src中填写图片URL地址。',
	          "id" => $shortname."_index_recommend_code",
	          "type" => "textarea",
	          "std" => ' <ul>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#FF0000" rel="nofollow">[广告]请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#FF00FF" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#008B8B" rel="nofollow">[广告]请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#FF0000" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#FF0000" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#800080" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#f5074b" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:#7c0eeb" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
    <li><a title="标题" href="http://www.baidu.com" target="_blank" style="color:" rel="nofollow">[广告] 请到网站主题后台修改你想展示的内容</a></li>
</ul>
'),



	array(	"type" => "close"),
	array( "name" => "PC端最热文章随机文章设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示PC端侧边栏最热文章",
	        "desc" => "默认显示",
	        "id" => $shortname."_hot_post_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(  "name" => "是否显示PC端侧边栏随机文章",
	        "desc" => "默认显示",
	        "id" => $shortname."_random_post_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"type" => "close"),
	array( "name" => "PC端广告（含对联）设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示logo右侧广告",
	        "desc" => "默认显示",
	        "id" => $shortname."_header_right_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入头部右侧广告代码，图片大小（680px,70px）",
	          "desc" => '请参照默认设置修改，href中填写目标链接，src中填写图片URL地址。',
	          "id" => $shortname."_header_right_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/header_right_ad.png'.'" width="680px" height="70px"></a>'),





	array(  "name" => "是否显示PC端文章顶部广告",
	        "desc" => "默认不显示",
	        "id" => $shortname."_pc_post_top_ad_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入PC端文章顶部广告区广告代码，图片大小（749px,70px）",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_pc_post_top_ad_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/pc_post_top_ad.png'.'" width="736px" height="70px"></a>'),



	array(  "name" => "是否显示PC端文章底部广告",
	        "desc" => "默认不显示",
	        "id" => $shortname."_pc_post_bot_ad_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入PC端文章底部广告区广告代码，图片大小（749px,70px）",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_pc_post_bot_ad_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/pc_post_bot_ad.png'.'" width="736px" height="70px"></a>'),


	array(  "name" => "是否显示PC端对联广告",
	        "desc" => "默认显示",
	        "id" => $shortname."_duilian_ad_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入PC端对联广告左广告区广告代码，图片宽度100px",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_duilian_left_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/duilian_ad.png'.'" width="100px" height="200px" ></a>'),

	array(	"name" => "输入PC端对联广告右广告区广告代码，图片宽度100px",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_duilian_right_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/duilian_ad.png'.'" width="100px" height="200px"></a>'),


	array(  "name" => "是否显示PC端侧边栏广告",
	        "desc" => "默认显示",
	        "id" => $shortname."_cebianlan_ad_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入PC端侧边栏广告代码，图片大小（250px,250px）",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_cebianlan_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/cebianlan_ad.png'.'"></a>'),

	array(  "name" => "是否显示PC端中部横幅广告",
	        "desc" => "默认显示",
	        "id" => $shortname."_pc_mid_ad_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入PC端PC端中部横幅广告代码，图片大小（1024px,60px）",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_pc_mid_ad_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/pc_mid_ad.png'.'" ></a>
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/pc_mid_ad.png'.'" ></a>
<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/pc_mid_ad.png'.'"  ></a>'),





	array(	"type" => "close"),
	array( "name" => "PC端文字广告设置",
	       "type" => "section"),
	array( "type" => "open"),
	array(  "name" => "是否显示PC端文字广告区",
	        "desc" => "默认不显示",
	        "id" => $shortname."_index_mid_ad_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入PC端文字广告区代码",
	          "desc" => '请参照默认设置修改，href中填写目标链接，font中填写文字内容。',
	          "id" => $shortname."_index_mid_ad_code",
	          "type" => "textarea",
	          "std" => '<ul class="links links-game3 links-game3-sy">
<li class="item">
<small class="tit">广告栏目</small>
<div class="con">
<a href="#" target="_blank"><font color="#ff0000">请到网站主题后台修改你想展示的内容</font></a>
<a href="#" target="_blank"><font color="#0000ff">请到网站主题后台修改你想展示的内容</font></a>
<a href="#" target="_blank"><font color="#000000">请到网站主题后台修改你想展示的内容</font></a>
<a href="#" target="_blank"><font color="#000000">请到网站主题后台修改你想展示的内容</font></a>
</div>
</li>
<li class="item">
<small class="tit">广告栏目</small>
<div class="con">
<a class="link" href="#" target="_blank"><font color="#000000">请到网站主题后台修改你想展示的内容</font></a>
<a class="link" href="#" target="_blank"><font color="#0000ff">请到网站主题后台修改你想展示的内容</font></a>
<a class="link" href="#" target="_blank"><font color="#ff0000">请到网站主题后台修改你想展示的内容</font></a>
<a href="#" target="_blank"><font color="#000000">请到网站主题后台修改你想展示的内容</font></a>
</div>
<font color="#ff4500"></font>
</li>
<li class="item_last item">
<small class="tit">广告栏目</small>
<div class="con">
<a class="link" href="#" target="_blank"><font color="#0000ff">请到网站主题后台修改你想展示的内容</font></a>
<a class="link" href="#" target="_blank"><font color="#ff0000">请到网站主题后台修改你想展示的内容</font></a>
<a href="#" target="_blank"><font color="#ff0000">请到网站主题后台修改你想展示的内容</font></a>
<a class="link" href="#" target="_blank"><font color="#000000">请到网站主题后台修改你想展示的内容</font></a>
</div>
</li>
</ul>'),

	array(	"type" => "close"),
	array( "name" => "手机版广告设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示手机版文章底部广告",
	        "desc" => "默认显示",
	        "id" => $shortname."_mobile_post_bot_ad_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入手机版文章底部广告区广告代码，图片大小（333px,70px）",
	          "desc" => '请参照默认设置修改，src中填写图片的URL地址，href中填写目标地址。',
	          "id" => $shortname."_mobile_post_bot_ad_code",
	          "type" => "textarea",
	          "std" => '<a href="#" target="_blank"><img src="'.get_stylesheet_directory_uri(). '/img/mobile_post_bot.png'.'"  width="333px" height="70px"></a>'),

	array(	"type" => "close"),
	array( "name" => "打赏设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "输入微信收款二维码URL，图片大小（200px,200px）",
	          "desc" => '',
	          "id" => $shortname."_weixin",
	          "type" => "text",
	          "std" => get_stylesheet_directory_uri(). '/img/weixin.png'),

	array(	"name" => "输入支付宝收款二维码URL，图片大小（200px,200px）",
	          "desc" => '',
	          "id" => $shortname."_zhifubao",
	          "type" => "text",
	          "std" => get_stylesheet_directory_uri(). '/img/zhifubao.png'),

	array(	"type" => "close"),
	array( "name" => "页脚链接列表设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "输入页脚链接列表代码",
	          "desc" => '请参照默认设置修改，href中填写目标链接，a标签之中填写链接文字。li标签请勿修改。',
	          "id" => $shortname."_footer_nav_code",
	          "type" => "textarea",
	          "std" => ' <li><a href="#">关于本站</a></li><li>|</li>
<li><a href="#">关于本站</a></li><li>|</li>
<li><a href="#">关于本站</a></li><li>|</li>
<li><a href="#">关于本站</a></li><li>|</li>
<li><a href="#">关于本站</a></li>'),

	array(	"type" => "close"),
	array( "name" => "网站统计代码及备案号设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示ICP备案号",
	        "desc" => "默认显示",
	        "id" => $shortname."_footer_nav_beian_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入ICP备案号",
	          "desc" => '',
	          "id" => $shortname."_footer_nav_beian",
	          "type" => "text",
	          "std" => '京ICP备88888888号 '),

	array(  "name" => "是否显示统计或者自定义脚本代码",
	        "desc" => "默认显示",
	        "id" => $shortname."_footer_nav_tongji_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"name" => "输入统计或者自定义脚本代码",
	          "desc" => '',
	          "id" => $shortname."_footer_nav_tongji",
	          "type" => "textarea",
	          "std" => ' <script></script>'),


	array(	"type" => "close"),
	array( "name" => "百度熊掌号设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否开启百度熊掌号功能",
	        "desc" => "默认不开启",
	        "id" => $shortname."_baidu_xiongzhanghao_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入百度熊掌号appid",
	          "desc" => '',
	          "id" => $shortname."_baidu_xiongzhanghao_appid",
	          "type" => "text",
	          "std" => ' your_app_id'),



	array(	"type" => "close"),
	array( "name" => "百度主动推送设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否开启百度主动推送功能",
	        "desc" => "默认不开启<br>每次发布文章后，会自动推送到百度搜索引擎，增加收录概率。",
	        "id" => $shortname."_baidu_zhudongtuisong_btn",
	        "type" => "select",
	        "std" => "Hide",
	        "options" => array( "Hide","Display")),

	array(	"name" => "输入百度主动推送接口调用地址",
	          "desc" => '获取方式：百度资源搜索平台->数据引入->链接提交->自动提交->主动推送(实时)->推送接口->接口调用地址',
	          "id" => $shortname."_baidu_zhudongtuisong_url",
	          "type" => "text",
	          "std" => ' http://data.zz.baidu.com/urls?site=your_site_url&token=your_token'),

	array(  "name" => "是否开启MIP数据提交功能",
	        "desc" => "默认开启（开启百度主动推送功能后才有用）",
	        "id" => $shortname."_baidu_zhudongtuisong_mip_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(  "name" => "是否开启AMP数据提交功能",
	        "desc" => "默认开启（开启百度主动推送功能后才有用）",
	        "id" => $shortname."_baidu_zhudongtuisong_amp_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"type" => "close"),
	array( "name" => "百度自动推送设置",
	       "type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否开启百度自动推送功能",
	        "desc" => "默认开启<br>用户访问网站页面一次就推送一次，提高SEO优化。",
	        "id" => $shortname."_baidu_zidongtuisong_btn",
	        "type" => "select",
	        "std" => "Display",
	        "options" => array( "Display","Hide")),

	array(	"type" => "close"),

);

function mytheme_add_admin() {
	global $themename, $shortname, $options;
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
			header("Location: admin.php?page=functions.php&saved=true");
			die;
		}
		else if( 'reset' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				delete_option( $value['id'] ); }
			header("Location: admin.php?page=functions.php&reset=true");
			die;
		}
	}
	add_theme_page($themename." Options", "Firefly主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("includes", $file_dir."/css/options.css", false, "1.0", "all");
	wp_enqueue_script("rm_script", $file_dir."/js/options.js", false, "1.0");
}
function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题设置已保存</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题已重新设置</strong></p></div>';
?>
<script type="text/javascript">
    var _version = '<?php $theme_data = get_theme_data(dirname(__FILE__) . '/../style.css');echo $theme_data['Version'];?>';
    jQuery(document).ready(function(){
        jQuery("span.version_number").text(tearsnowtheme_latest_version);
        jQuery("span.latest_update").text(tearsnow_latest_update);
        jQuery("span.text").text(intext);
        jQuery("a.author_add").attr("href",author_add);
        if(_version < tearsnowtheme_latest_version ){
            jQuery(".version_tips").fadeIn(1000);
        }
        else {
            jQuery(".version_tips").hide();
        };
        jQuery(".close_version_tips").click(function(){
            jQuery(this).parent().fadeOut(1000);
        });
        jQuery(".fl_cbradio_op:checked").each(function() {
            jQuery(this).parent().parent().children().eq(3).show();
        });
        jQuery(".fl_cbradio_cl:checked").each(function() {
            jQuery(this).parent().parent().children().eq(3).hide();
        });
        jQuery(".fl_cbradio_cl").click(function(){
            jQuery(this).parent().parent().children().eq(3).slideUp();
        });
        jQuery(".fl_cbradio_op").click(function(){
            jQuery(this).parent().parent().children().eq(3).slideDown();
        });
        jQuery(".theme_options_content > div:not(:first)").hide();
        jQuery(".theme_options_tab li").each(function(index){
            jQuery(this).click(
                function(){
                    jQuery(".theme_options_tab li.current").removeClass("current");
                    jQuery(this).addClass("current");
                    jQuery(".theme_options_content > div:visible").hide();
                    jQuery(".theme_options_content > div:eq(" + index + ")").show();
                })
        })
    })
</script>

<div class="wrap rm_wrap">
    <h2><?php echo $themename; ?> 设置</h2>

    <p>当前使用主题: <?php echo $themename; ?>
        | 官方网站:<a href="https://www.yhcgzs.com" target="_blank" rel="noflow"> 萤火虫工作室</a> | <a href="https://www.yhcgzs.com/themes/firefly/" target="_blank" rel="noflow">查看主题帮助文档及更新</a></p>
    <p>第一次使用主题和恢复主题默认设置后需要记得点击一次保存设置，否则无法正常使用。</p>
    <p>如何获取图片URL：将图片传到WordPress站点，在WordPress后台“媒体”-“媒体库”-“添加”，上传图片，<span style="color: red; ">然后复制上传到服务器的图片的URL。</span><br>
        提示：建议把<span style="color: red; ">图片先裁剪再上传。</span></p>
    <p>使用此主题即同意萤火虫工作室与您的网站内容无关，萤火虫工作室不对您网站的任何内容负责，萤火虫工作室只是wordpress主题提供商。</p>
    <div class="clear"></div>



    <div class="rm_opts">
        <div class="rm_opts">
            <form method="post">

				<?php foreach ($options as $value) {
				switch ( $value['type'] ) {
				case "open":
					?>
					<?php break;
				case "close":
				?>

        </div>
    </div>
<br />
<?php break;
case "title":
	?>
	<?php break;
case 'text':
	?>
    <div class="rm_input rm_text">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><br>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
        <br><small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
    </div>
	<?php
	break;
case 'textarea':
	?>
    <div class="rm_input rm_textarea">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><br>
        <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
        <br><small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
    </div>
	<?php
	break;
case 'select':
	?>
    <div class="rm_input rm_select">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><br>
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
			<?php foreach ($value['options'] as $option) { ?>
            <option value="<?php echo $option;?>" <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>>
				<?php
				if ((empty($option) || $option == '' ) && isset($value['default_option_value'])) {
					echo $value['default_option_value'];
				} else {
					echo $option;
				}?>

                </option><?php } ?>
        </select>
        <br><small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
    </div>
	<?php
	break;
case "checkbox":
	?>
    <div class="rm_input rm_checkbox">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><br>
		<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
        <br><small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
    </div>
	<?php break;
case "section":
$i++;
?>
    <div class="rm_section">
        <div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/img/settings.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" />
</span><div class="clearfix"></div></div>
        <div class="rm_options">
			<?php break;}}?>

            <p>
                <input type="hidden" name="action" value="save" />
            </p>
            </form>
            <form method="post">
                <p class="submit">
                    <input name="reset" type="submit" value="恢复默认" /> <font color=#ff0000>提示：此按钮将恢复主题初始状态，您的所有设置将消失！不可逆，请谨慎操作！</font>
                    <input type="hidden" name="action" value="reset" />
                </p>
            </form>
        </div>
        <div class="kg"></div>
    </div>
	<?php } ?>
	<?php
	add_action('admin_init', 'mytheme_add_init');
	add_action('admin_menu', 'mytheme_add_admin');
	?>

<?php



define('ALU_URL', get_stylesheet_directory_uri());

add_filter('smilies_src', 'alu_smilies_src', 1, 10);
function alu_smilies_src($img_src, $img, $siteurl) {
	$img = rtrim($img, "gif");
	return ALU_URL . '/img/' . $img . 'gif';
}
function alu_get_wpsmiliestrans() {
	global $wpsmiliestrans;
	$wpsmilies = array_unique($wpsmiliestrans);
	$output = '';
	foreach ($wpsmilies as $alt => $src_path) {
		//$emoji = str_replace(array('&#x', ';'), '', wp_encode_emoji($src_path));
		$output .= '<a class="add-smily" data-action="addSmily" data-smilies="' . $alt . '"><img class="wp-smiley" src="' . ALU_URL . '/img/' . $src_path .'" /></a>';
	}
	return $output;
}
function alu_smilies_reset() {
	global $wpsmiliestrans, $wp_smiliessearch;
// don't bother setting up smilies if they are disabled
	if ( !get_option( 'use_smilies' ) )
		return;
	$wpsmiliestrans = array(
		':mrgreen:' => 'icon_mrgreen.gif',
		':neutral:' => 'icon_neutral.gif',
		':twisted:' => 'icon_twisted.gif',
		':arrow:' => 'icon_arrow.gif',
		':shock:' => 'icon_eek.gif',
		':smile:' => 'icon_smile.gif',
		':???:' => 'icon_confused.gif',
		':cool:' => 'icon_cool.gif',
		':evil:' => 'icon_evil.gif',
		':grin:' => 'icon_biggrin.gif',
		':idea:' => 'icon_idea.gif',
		':oops:' => 'icon_redface.gif',
		':razz:' => 'icon_razz.gif',
		':roll:' => 'icon_rolleyes.gif',
		':wink:' => 'icon_wink.gif',
		':cry:' => 'icon_cry.gif',
		':eek:' => 'icon_surprised.gif',
		':lol:' => 'icon_lol.gif',
		':mad:' => 'icon_mad.gif',
		':sad:' => 'icon_sad.gif',
		'8-)' => 'icon_cool.gif',
		'8-O' => 'icon_eek.gif',
		':-(' => 'icon_sad.gif',
		':-)' => 'icon_smile.gif',
		':-?' => 'icon_confused.gif',
		':-D' => 'icon_biggrin.gif',
		':-P' => 'icon_razz.gif',
		':-o' => 'icon_surprised.gif',
		':-x' => 'icon_mad.gif',
		':-|' => 'icon_neutral.gif',
		';-)' => 'icon_wink.gif',
		// This one transformation breaks regular text with frequency.
		//     '8)' => 'icon_cool.gif',
		'8O' => 'icon_eek.gif',
		':(' => 'icon_sad.gif',
		':)' => 'icon_smile.gif',
		':?' => 'icon_confused.gif',
		':D' => 'icon_biggrin.gif',
		':P' => 'icon_razz.gif',
		':o' => 'icon_surprised.gif',
		':x' => 'icon_mad.gif',
		':|' => 'icon_neutral.gif',
		';)' => 'icon_wink.gif',
		':!:' => 'icon_exclaim.gif',
		':?:' => 'icon_question.gif',
	);
}
add_action('init','alu_smilies_reset');
add_filter( 'comment_form_defaults','alu_add_smilies_to_comment_form');
function alu_add_smilies_to_comment_form($default) {
	$commenter = wp_get_current_commenter();
	$default['comment_field'] .= '<p class="comment-form-smilies">' . alu_get_wpsmiliestrans() . '</p>';
	return $default;
}








add_filter( 'pre_option_link_manager_enabled', '__return_true' );
register_nav_menus( array(
	'header_left_menu' => '电脑头部左侧导航',
	'header_right_menu' => '电脑头部右侧导航',
    'header_mobile_menu' => '手机头部导航',
) );
if (get_option('Y_baidu_zhudongtuisong_btn') == 'Display') {
	add_action('save_post', 'save_post_notify_baidu_zz', 10, 3);
	function save_post_notify_baidu_zz($post_id, $post, $update){
		if($post->post_status != 'publish') return;

		$baidu_zz_api_url = stripslashes(get_option('Y_baidu_zhudongtuisong_url'));
		$response = wp_remote_post($baidu_zz_api_url, array(
			'headers' => array('Accept-Encoding'=>'','Content-Type'=>'text/plain'),
			'sslverify' => false,
			'method' => "POST",
			'blocking'  => true,
			'body' => get_permalink($post_id)
		));

		if (get_option('Y_baidu_zhudongtuisong_mip_btn') == 'Display') {
			$baidu_zz_api_url_mip = stripslashes( get_option( 'Y_baidu_zhudongtuisong_url' ) ) . '&type=mip';
			$response = wp_remote_post( $baidu_zz_api_url_mip, array(
				'headers'   => array( 'Accept-Encoding' => '', 'Content-Type' => 'text/plain' ),
				'sslverify' => false,
				'method' => "POST",
				'blocking'  => true,
				'body'      => get_permalink( $post_id )
			) );
		}

		if (get_option('Y_baidu_zhudongtuisong_amp_btn') == 'Display') {
			$baidu_zz_api_url_amp = stripslashes( get_option( 'Y_baidu_zhudongtuisong_url' ) ) . '&type=amp';
			$response = wp_remote_post( $baidu_zz_api_url_amp, array(
				'headers'   => array( 'Accept-Encoding' => '', 'Content-Type' => 'text/plain' ),
				'sslverify' => false,
				'method' => "POST",
				'blocking'  => true,
				'body'      => get_permalink( $post_id )
			) );
		}

	}
}


function get_comments_users_num($postid=0,$which=0) {
	$comments = get_comments('status=approve&type=comment&post_id='.$postid); //获取文章的所有评论
	if ($comments) {
		$i=0; $j=0; $commentusers=array();
		foreach ($comments as $comment) {
			++$i;
			if ($i==1) { $commentusers[] = $comment->comment_author_email; ++$j; }
			if ( !in_array($comment->comment_author_email, $commentusers) ) {
				$commentusers[] = $comment->comment_author_email;
				++$j;
			}
		}
		$output = array($j,$i);
		$which = ($which == 0) ? 0 : 1;
		return $output[$which]; //返回评论人数
	}
	return 0; //没有评论返回0
}




function baidu_excerpt($len=220){
	if ( is_single() || is_page() ){
		global $post;
		if ($post->post_excerpt) {
			$excerpt  = $post->post_excerpt;
		} else {
			if(preg_match('/<p>(.*)<\/p>/iU',trim(strip_tags($post->post_content,"<p>")),$result)){
				$post_content = $result['1'];
			} else {
				$post_content_r = explode("\n",trim(strip_tags($post->post_content)));
				$post_content = $post_content_r['0'];
			}
			$excerpt = preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}'.'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s','$1',$post_content);
		}
		return str_replace(array("\r\n", "\r", "\n"), "", $excerpt);
	}
}



function get_first_image() {
	global $post;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){ //Defines a default image
		$first_img = stripslashes(get_option('Y_index_post_default_img'));
	};
	return $first_img;
}

function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
		if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
		previous_posts_link(' 上一页 ');
		if($max_page > $range){
			if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
				if($i==$paged)echo " class='current'";echo ">$i</a>";}}
			elseif($paged >= ($max_page - ceil(($range/2)))){
				for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged)echo " class='current'";echo ">$i</a>";}}
			elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
				for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
		else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged)echo " class='current'";echo ">$i</a>";}}
		next_posts_link(' 下一页 ');
		if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
}


if( function_exists('register_sidebar') ){
    register_sidebar(array(        'name' => 'sidebar1',
                                   'before_widget' => '',
                                   'after_widget' => '',
                                   'before_title' => '<h3>',
                                   'after_title' => '</h3>'    ));
    register_sidebar(array(        'name' => 'sidebar2',
                                   'before_widget' => '',
                                   'after_widget' => '',
                                   'before_title' => '<h3>',
                                   'after_title' => '</h3>'    ));
    register_sidebar(array(        'name' => 'sidebar3',
                                   'before_widget' => '',
                                   'after_widget' => '',
                                   'before_title' => '<h3>',
                                   'after_title' => '</h3>'    ));
    register_sidebar(array(        'name' => 'sidebar4',
                                   'before_widget' => '',
                                   'after_widget' => '',
                                   'before_title' => '<h3>',
                                   'after_title' => '</h3>'    ));
	register_sidebar(array(        'name' => 'sidebar5',
	                               'before_widget' => '',
	                               'after_widget' => '',
	                               'before_title' => '<h3>',
	                               'after_title' => '</h3>'    ));
	register_sidebar(array(        'name' => 'sidebar6',
	                               'before_widget' => '',
	                               'after_widget' => '',
	                               'before_title' => '<h3>',
	                               'after_title' => '</h3>'    ));
	register_sidebar(array(        'name' => 'sidebar7',
	                               'before_widget' => '',
	                               'after_widget' => '',
	                               'before_title' => '<h3>',
	                               'after_title' => '</h3>'    ));
	register_sidebar(array(        'name' => 'sidebar8',
	                               'before_widget' => '',
	                               'after_widget' => '',
	                               'before_title' => '<h3>',
	                               'after_title' => '</h3>'    ));
}

function cmp_breadcrumbs() {
	$delimiter = '»'; // 分隔符
	$before = '<span class="current">'; // 在当前链接前插入
	$after = '</span>'; // 在当前链接后插入
	if ( !is_home() && !is_front_page() || is_paged() ) {
		echo '<div itemscope itemtype="http://schema.org/WebPage" id="crumbs">'.__( '位置:' , 'cmp' );
		global $post;
		$homeLink = home_url();
		echo ' <a itemprop="breadcrumb" href="' . $homeLink . '">' . __( '首页' , 'cmp' ) . '</a> ' . $delimiter . ' ';
		if ( is_category() ) { // 分类 存档
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0){
				$cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
				echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
			}
			echo $before . '' . single_cat_title('', false) . '' . $after;
		} elseif ( is_day() ) { // 天 存档
			echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo '<a itemprop="breadcrumb"  href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;
		} elseif ( is_month() ) { // 月 存档
			echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;
		} elseif ( is_year() ) { // 年 存档
			echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) { // 文章
			if ( get_post_type() != 'post' ) { // 自定义文章类型
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else { // 文章 post
				$cat = get_the_category(); $cat = $cat[0];
				$cat_code = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
				echo $before . get_the_title() . $after;
			}
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif ( is_attachment() ) { // 附件
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo '<a itemprop="breadcrumb" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && !$post->post_parent ) { // 页面
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && $post->post_parent ) { // 父级页面
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_search() ) { // 搜索结果
			echo $before ;
			printf( __( 'Search Results for: %s', 'cmp' ),  get_search_query() );
			echo  $after;
		} elseif ( is_tag() ) { //标签 存档
			echo $before ;
			printf( __( 'Tag Archives: %s', 'cmp' ), single_tag_title( '', false ) );
			echo  $after;
		} elseif ( is_author() ) { // 作者存档
			global $author;
			$userdata = get_userdata($author);
			echo $before ;
			printf( __( 'Author Archives: %s', 'cmp' ),  $userdata->display_name );
			echo  $after;
		} elseif ( is_404() ) { // 404 页面
			echo $before;
			_e( 'Not Found', 'cmp' );
			echo  $after;
		}
		if ( get_query_var('paged') ) { // 分页
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
				echo sprintf( __( '( Page %s )', 'cmp' ), get_query_var('paged') );
		}
		echo '</div>';
	}
}

function aurelius_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
<li class="comment" id="li-comment-<?php comment_ID(); ?>">
    <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
		</div>
	<div class="comment_content" id="comment-<?php comment_ID(); ?>">
		<div class="clearfix">
			<?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>
			<div class="comment-meta commentmetadata">
                <span>发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></span>
                <span><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
            </div>
            <?php edit_comment_link('修改'); ?>
		</div>

		<div class="comment_text">
			<?php if ($comment->comment_approved == '0') : ?>
				<em>你的评论正在审核，稍后会显示出来！</em><br />
			<?php endif; ?>
			<?php comment_text(); ?>
		</div>
	</div>
	<?php } ?>



