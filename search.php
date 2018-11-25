<?php get_header(); ?>

<?php if ( copyright() != true ) { ?>
    <div class="copyright">
        <div></div>
        <div class="copyright_main show_lg_only">
            <p>该网站管理员尚未购买此主题授权，请网站管理员前往Firefly主题官网<a href="https://www.yhcgzs.com/themes/firefly/" target="_blank"
                                                     style="color: blue">萤火虫工作室</a>购买授权。</p>
        </div>
        <div></div>
    </div>
<?php } ?>
<div class="grid">
    <div class="grid-fluid"></div>
    <div class="grid-center">
        <div class="main">

            <div class="content">
                <div class="content-item">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="post_card">
                            <div class="post_card_head">
                                <div class="post_card_head_date">
                                    <div class="post_card_head_date_month"><p><?php the_time( 'n月' ) ?></p></div>
                                    <div class="post_card_head_date_day"><p><?php the_time( 'j日' ) ?></p></div>
                                </div>
                                <div class="post_card_head_title">
                                    <h2 class="post_card_head_title_top p_overflow"><a
                                                href="<?php the_permalink(); ?>"><?php echo the_title(); ?> </a></h2>
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
                                    <p><?php echo wp_trim_words( get_the_content(), 100 ); ?></p>
                                    <p style="text-align: right;line-height: 50px;"><a href="<?php the_permalink(); ?>"
                                                                                       class="post_card_content_readmore">阅读全文</a>
                                    </p>
                                </div>
                            </div>
                        </div>
					<?php endwhile; ?>
					<?php else : ?>
                        <p style="margin-top: 8px">找不到您搜索的文章。</p>
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



