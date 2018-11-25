<?php
/*
Template Name: 推荐
*/
?>

<?php get_header(); ?>
<div id="roll" style='display:none;'><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>


<div id="content">

	<div class="main" style='width: 993px;'><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="left">
				<div class="post_date"><span class="date_m"><?php echo date('M',get_the_time('U'));?></span><span class="date_d"><?php the_time('d') ?></span><span class="date_y"><?php the_time('Y') ?></span></div>
				<div class="article"  style='width: 915px;'>
					<h2><?php the_title(); ?></h2>

					<style>
						.xmzdy li{width:200px; height:auto; border:1px #FF6600 solid; border-radius:3px; float:left; margin-right:10px; margin-bottom:10px;line-height:24px;padding:6px 8px;background-color:#FFFFFF;}
						.xmzdy li img{border: none; margin: 0px 25px;width:150px; height:60px;}
						.xmzdy li span{padding: 2px 0;line-height: 20px;font-size: 12px;}
						.xmzdy li em{width: 200px;height: 20px;font-style: normal;text-align: center;display: block;}
						.xmzdy li button{margin: 3px 0px 0px 20px;color:#ffffff;text-align: center;line-height: 25px;width: 70px;height: 25px;background: #4397D3;float: left;box-shadow: 0px 1px 2px #999;-webkit-border-radius: 2px 2px 0 0;-moz-border-radius: 2px 2px 0 0; border-radius: 2px 2px 0 0;}
						.xmzdy li button a{font-size:14px; font-weight:bold; color:#FFF;text-decoration:none;}
						.xmzdy li button a:hover{font-size:14px; font-weight:bold; color:#000; text-decoration:none;}
					</style>
					<div class="context xmzdy" style="width:100%"><?php the_content('Read more...'); ?></div>
				</div>
			</div>

			<div class="articles" style='width: 993px;'>
				<?php comments_template(); ?>
			</div>

		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>

	<?php //get_sidebar(); ?>
	<?php get_footer(); ?>
