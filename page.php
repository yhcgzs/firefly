<?php get_header(); ?>

<div class="grid">
    <div class="grid-fluid"></div>
    <div class="grid-center">
        <div class="page_main">

            <div class="content">
                <div class="crumb-box">
					<?php if ( function_exists( 'cmp_breadcrumbs' ) ) {
						cmp_breadcrumbs();
					} ?>
                </div>
                <div class="content-item">
					<?php if ( have_posts() ) : the_post();
						update_post_caches( $posts ); ?>

                        <div class="single_title">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <h6>发表于<?php the_time( 'Y年n月j日' ) ?>
                                &nbsp;&nbsp;&nbsp;分类：<?php $category = get_the_category();
								echo '<a href="' . get_category_link( $category[0]->cat_ID ) . '">' . $category[0]->cat_name . '</a>'; ?>
                                &nbsp;&nbsp;&nbsp;<?php comments_popup_link( '0 条评论', '1 条评论', '% 条评论', '', '评论已关闭' ); ?></h6>
                        </div>
                        <div class="hr"></div>

                        <div class="single_content">
							<?php the_content(); ?>


                        </div>
					<?php else : ?>
                        <div class="errorbox">
                            没有文章！
                        </div>
					<?php endif; ?>
                    <div class="reward">
                        <div class="reward-button">
                            赏
                            <span class="reward-code">
                        <span class="alipay-code">
                            <img class="alipay-img" src="<?php echo stripslashes( get_option( 'Y_zhifubao' ) ); ?>">
                            <b>支付宝打赏</b>
                        </span>
                        <span class="wechat-code">
                            <img class="wechat-img" src="<?php echo stripslashes( get_option( 'Y_weixin' ) ); ?>">
                            <b>微信打赏</b>
                        </span>
                    </span>
                        </div>
                        <p class="reward-notice">如果文章对您有帮助，欢迎移至上方按钮打赏</p></div>
                </div>

                <div class="content-item comments">
					<?php comments_template(); ?>
                </div>

            </div>

        </div>
    </div>
    <div class="grid-fluid"></div>
</div>
<?php get_footer(); ?>



