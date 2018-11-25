<!DOCTYPE html>
<html <?php
language_attributes(); ?> class="no-js" mip>
<head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo stripslashes(get_option('Y_description')); ?>">
    <meta name="keywords" content="<?php echo stripslashes(get_option('Y_keywords')); ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css" />


    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
	<?php wp_head(); ?>
	<?php if (get_option('Y_baidu_xiongzhanghao_btn') == 'Display') { ?>
        <script src="//msite.baidu.com/sdk/c.js?appid=<?php echo stripslashes(get_option('Y_baidu_xiongzhanghao_appid'));?>"></script>
	<?php if(is_single()){?>
    <link rel="canonical" href="<?php echo get_permalink($post->ID);?>"/>

	<?php } ?>

    <?php } ?>


</head>
<?php if (get_option('Y_baidu_xiongzhanghao_btn') == 'Display') { ?>
    <script>cambrian.render('head')</script>
	<?php
	if(is_single()){
		echo '<script type="application/ld+json">{
	"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
	"@id": "'.get_the_permalink().'",
 	"appid": '.stripslashes(get_option('Y_baidu_xiongzhanghao_appid')).',
	"title": "'.get_the_title().'",
	"images": ["'.get_first_image().'"],
	"description": "'.baidu_excerpt().'",
	"pubDate": "'.get_the_time('Y-m-d\TH:i:s').'"
}</script>
';}
	?>
<?php } ?>
<body>
<header>
    <div class="grid">
        <div class="grid-fluid" style=" background: white!important;"></div>
        <div class="grid-center">
            <div class="header show_lg_only" id="top">

                <div class="logo">
                    <a href="<?php echo site_url('/','relative'); ?>"><img src="<?php echo stripslashes(get_option('Y_logourl')); ?>" width="225px" height="96px";></a>
                </div>
                <div class="header_right_ad ">
			        <?php if (get_option('Y_header_right_btn') == 'Display') { ?>
				        <?php echo stripslashes(get_option('Y_header_right_code'));?>
			        <?php } ?>
                </div>

            </div>
        </div>
        <div class="grid-fluid"  style=" background: white!important;"></div>
    </div>

    <div class="lg_nav_main">
        <div class="lg_nav_fluid"></div>
        <div class="lg_nav_center">
            <nav class="lg_nav show_lg_only" style="background: #474747" id="lg_nav">
                <div class="lg_nav_left lg_nav_2" >
                    <ul >
                        <li>
                            <a href="<?php echo site_url('/','relative'); ?>" class="<?php if (is_home() || is_front_page()) { ?>home<?php } ?> ">首页</a>
                        </li>
				        <?php  wp_nav_menu(array( 'menu' => 'header_left_menu', 'depth' => 1)); ?>
                    </ul>
                </div>
                <div class="lg_nav_right lg_nav_3">
                    <ul >
				        <?php if (get_option('Y_header_nav_right_btn') == 'Display') { ?>
					        <?php  wp_nav_menu(array( 'menu' => 'header_right_menu', 'depth' => 1)); ?>
				        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="lg_nav_fluid"></div>
    </div>

    <nav class="sm_nav show_sm_only"   id="sm_nav" style="background: #E74C3C">
        <div class="sm_nav_left" id="sm_nav_left">
            <h2>
                <a style="color: white;text-decoration:none;" href="<?php echo site_url('/','relative'); ?>"> <?php echo get_bloginfo('name'); ?></a>
            </h2>
        </div>
        <div class="sm_nav_right">
            <div class="sm_nav_right_dropdown">
                <div class="sm_nav_right_dropdown_btn">导航</div>
                <div class="sm_nav_right_dropdown_content" style="background: #E74C3C; ">
	                <?php  wp_nav_menu(array( 'menu' => 'header_mobile_menu', 'depth' => 1)); ?>
                </div>
            </div>
        </div>
    </nav>
</header>
