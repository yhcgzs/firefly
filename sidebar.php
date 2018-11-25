<div class="sidebar show_lg_only">

	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar5">';
		if(!dynamic_sidebar('sidebar5')){
			echo '<style>.sidebar5{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar6">';
		if(!dynamic_sidebar('sidebar6')){
			echo '<style>.sidebar6{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar7">';
		if(!dynamic_sidebar('sidebar7')){
			echo '<style>.sidebar7{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar8">';
		if(!dynamic_sidebar('sidebar8')){
			echo '<style>.sidebar8{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php if (get_option('Y_hot_post_btn') == 'Display') { ?>
        <div class="sidebar_item">
            <h3>最热文章</h3>
            <ul>
		        <?php
		        $post_num = 8; // 设置调用条数
		        $args = array(
			        ‘post_password’ => ”,
			        ‘post_status’ => ‘publish’, // 只选公开的文章.
			        ‘post__not_in’ => array($post->ID),//排除当前文章
			        ‘caller_get_posts’ => 1, // 排除置顶文章.
			        ‘orderby’ => ‘comment_count’, // 依评论数排序.
			        ‘posts_per_page’ => $post_num
		        );
		        $query_posts = new WP_Query();
		        $query_posts->query($args);
		        while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
                    <li><a href=”<?php the_permalink(); ?>” title=”<?php the_title(); ?>”><?php the_title(); ?></a></li>
		        <?php } wp_reset_query();?>
            </ul>
        </div>
    <?php } ?>
	<?php if (get_option('Y_random_post_btn') == 'Display') { ?>
        <div class="sidebar_item">
            <h3>随机文章</h3>
            <ul>
		        <?php
		        global $post;
		        $postid = $post->ID;
		        $args = array( ‘orderby’ => ‘rand’, ‘post__not_in’ => array($post->ID), ‘showposts’ => 8);
		        $query_posts = new WP_Query();
		        $query_posts->query($args);
		        ?>
		        <?php while ($query_posts->have_posts()) : $query_posts->the_post(); ?>
                    <li><a href=”<?php the_permalink(); ?>” rel=”bookmark” title=”<?php the_title_attribute(); ?>”><?php the_title(); ?></a></li>
		        <?php endwhile; ?>
            </ul>
        </div>
	<?php } ?>
	<?php if (get_option('Y_cebianlan_ad_btn') == 'Display') { ?>
    <div class="sidebar_item" id="right_float_ad">
        <h3>热门推荐</h3>
	    <?php echo stripslashes(get_option('Y_cebianlan_code'));?>
    </div>
    <script>
        (function(){
            var oDiv=document.getElementById("right_float_ad");
            var H=0,iE6;
            var Y=oDiv;
            while(Y){H+=Y.offsetTop;Y=Y.offsetParent};
            iE6=window.ActiveXObject&&!window.XMLHttpRequest;
            if(!iE6){
                window.onscroll=function()
                {
                    var s=document.body.scrollTop||document.documentElement.scrollTop;
                    if(s>H){oDiv.className="right_float_ad";if(iE6){oDiv.style.top=(s-H)+"px";}}
                    else{oDiv.className="sidebar_item";}
                };
            }
        })()
    </script>
	<?php } ?>
</div>