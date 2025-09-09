<?php
    $args = array('post_type' => 'part');
    query_posts($args);
if(have_posts()){
?>
<div class="section-members container-fluid">
    <div class="members container">
        <div class="title"><?php elang('Shahab Khodro board members','اعضای هیئت مدیره شهاب خودرو', 'Члены совета директоров Шахаб Ходро') ?></div>
        <div class="member-row">
            <?php query_posts($args) ?>
            <?php while (have_posts()) : the_post();
                $maqam = get_post_meta($post->ID, 'maqam', true);
            ?>
                <div class="box-member">
                    <div class="image">
                        <?= the_post_thumbnail('crop-280'); ?>
                    </div>
                    <div class="info">
                        <div class="name"><?= the_title() ?></div>
                        <div class="post"><?= $maqam ?></div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query() ?>
        </div>
    </div>
</div>
<?php } ?>