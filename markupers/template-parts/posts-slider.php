<?php
/*
Template Name: Posts Slider
*/
?>

<div class="blog__slider swiper">
    <?php
    global $post;
    $original_post = $post;

    $posts = get_posts(array(
        'category_name' => 'news',
        'posts_per_page' => 6,
    ));
    ?>

    <ul class="blog__slider-wrapper swiper-wrapper">
        <?php if ($posts): ?>
            <?php foreach ($posts as $post): ?>
                <?php
                $post_id = $post->ID;
                $post_categories = get_the_category($post_id);
                $post_category = '';

                foreach ($post_categories as $index => $category) {
                    if ($category->name === "news") {
                        if (isset($post_categories[$index + 1])) {
                            $post_category = $post_categories[$index + 1]->name;
                        }
                    } else {
                        if (empty($post_category)) {
                            $post_category = $category->name;
                        }
                    }
                }
                ?>

                <li class="blog__item swiper-slide">
                    <article>
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <header>
                                <span><?php echo $post_category; ?></span>
                                <div>
                                    <span>
                                        <?php echo get_the_date('d.m.y', $post_id); ?>
                                    </span>
                                    <span><?php echo get_field('reading_time', $post_id); ?></span>
                                </div>
                            </header>

                            <h3>
                                <?php echo get_the_title($post_id); ?>
                            </h3>

                            <span class="link">Go to the news</span>
                        </a>
                    </article>
                </li>

            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <button class="blog__slider-button blog__slider-button--prev" type="button"></button>
    <button class="blog__slider-button blog__slider-button--next" type="button"></button>
</div>

<?php
$post = $original_post;
setup_postdata($post);
?>
