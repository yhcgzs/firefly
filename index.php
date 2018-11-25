<?php get_header(); ?>

<div class="grid">
    <div class="grid-fluid"></div>
    <div class="grid-center">


		<?php if ( get_option( 'Y_index_three_btn' ) == 'Display' ) { ?>
            <div class="index_ad show_lg_only ">

                <div class="left_ad">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

							<?php echo stripslashes( get_option( 'Y_index_three_left_top_code' ) ); ?>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->

                    </div>
                    <div class="left_ad_p">
						<?php echo stripslashes( get_option( 'Y_index_three_left_bottom_code' ) ); ?>
                    </div>
                </div>
                <div class="mid_ad">
                    <div class="mid_ad_p">
						<?php echo stripslashes( get_option( 'Y_index_three_mid_code' ) ); ?>
                    </div>
                </div>
                <div class="right_ad">
					<?php echo stripslashes( get_option( 'Y_index_three_right_code' ) ); ?>
                </div>

            </div>
		<?php } ?>
		<?php if ( get_option( 'Y_index_mid_ad_btn' ) == 'Display' ) { ?>
            <div class="reserve_ad">

                <div class="reserve_ad_main show_lg_only">
					<?php echo stripslashes( get_option( 'Y_index_mid_ad_code' ) ); ?>
                </div>

            </div>
		<?php } ?>
		<?php if ( get_option( 'Y_pc_mid_ad_btn' ) == 'Display' ) { ?>
            <div class="pc_mid_ad">

                <div class="pc_mid_ad_main show_lg_only">
					<?php echo stripslashes( get_option( 'Y_pc_mid_ad_code' ) ); ?>
                </div>

            </div>
		<?php } ?>
        <div class="main">

            <div class="content">
                <div class="content-item">
					<?php if ( get_option( 'Y_index_recommend_btn' ) == 'Display' ) { ?>
                        <div class="headline show_lg_only">
                            <h3><a style="font-weight:700;" href="#">特别推荐</a></h3>
                        </div>
                        <div class="headline_content show_lg_only">
							<?php echo stripslashes( get_option( 'Y_index_recommend_code' ) ); ?>
                        </div>
                        <div class="hr show_lg_only"></div>
					<?php } ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="post_card">
                            <div class="post_card_head">
                                <div class="post_card_head_date">
                                    <div class="post_card_head_date_month"><p><?php the_time( 'n月' ) ?></p></div>
                                    <div class="post_card_head_date_day"><p><?php the_time( 'j日' ) ?></p></div>
                                </div>
                                <div class="post_card_head_title">
                                    <h2 class="post_card_head_title_top p_overflow"><a
                                                href="<?php the_permalink(); ?>"><?php echo the_title(); ?> </a><?php if ( get_option( 'Y_new_hot_btn' ) == 'Display' ) { ?><?php
											$zero1   = strtotime( date( "Y/m/d" ) ); //当前时间
											$zero2   = strtotime( get_the_time( "Y/m/d" ) );  //过年时间
											$riqicha = ceil( ( $zero1 - $zero2 ) / 86400 );
											if ( $riqicha <= 1 ) { ?><img
                                                src="<?php bloginfo( 'template_directory' ); ?>/img/new.gif"><?php } ?><?php if ( get_comments_users_num( $post->ID ) > 10 ) { ?>
                                                <img
                                                src="<?php bloginfo( 'template_directory' ); ?>/img/hot.jpg"><?php } ?><?php } ?>
                                    </h2>
                                    <h6 class="post_card_head_title_bottom">作者 : <?php the_author_nickname(); ?> | 分类 :
                                        <a href="<?php $category = get_the_category();
										echo get_category_link( $category[0]->cat_ID ); ?>"><?php $category = get_the_category();
											echo $category[0]->cat_name; ?></a>
                                        | <?php comments_popup_link( '0 条评论', '1 条评论', '% 条评论', '', '评论已关闭' ); ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="post_card_content">
                                <div class="post_card_content_img">
                                    <a href="<?php the_permalink(); ?>">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail( array(
												135,
												105
											), array( 'alt' => trim( strip_tags( $post->post_title ) ) ) );
										} else { ?><img src="<?php echo get_first_image(); ?>"
                                                        alt="<?php the_title(); ?>"/><?php } ?>
                                    </a>
                                </div>
                                <div class="post_card_content_p">
                                    <p><?php echo wp_trim_words( get_the_content(), 80 ); ?></p>
                                    <p class="post_card_content_p_p"><a href="<?php the_permalink(); ?>"
                                                                        class="post_card_content_readmore">阅读全文</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="small_post_card show_sm_only">

                            <div>
                                <div class="small_post_card_title">
                                    <p style="font-size: 14px;font-weight: 700;"><a
                                                href="<?php the_permalink(); ?>"><?php echo the_title(); ?> </a></p>
                                </div>
                                <div class="small_post_card_time">
                                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/clock.png" width="10px"
                                         height="10px">
                                    <small><?php the_time( 'Y年n月j日' ) ?></small>
                                </div>
                            </div>
                            <div>
                                <a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail( array(
											135,
											105
										), array( 'alt' => trim( strip_tags( $post->post_title ) ) ) );
									} else { ?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>"
                                                    width="80px" height="45px"/><?php } ?>
                                </a>
                            </div>
                        </div>
					<?php endwhile; ?>
					<?php else : ?>
                        <p style="margin-top: 8px">未添加文章。</p>
					<?php endif; ?>

                    <div class="pagination">
                        <div class="page_navi"><?php par_pagenavi( 9 ); ?></div>
                    </div>
                </div>
            </div>
			<?php get_sidebar() ?>

        </div>
    </div>
    <div class="grid-fluid"></div>
</div>
<?php get_footer(); ?>



