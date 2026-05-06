<?php 
/* Template Name: Landing Marca */
get_header();
?>

<style>
    .landing-marca .ast-container {
        display: flex;
        flex-direction: column;
    }

    .landing-marca .ast-container > * {
        width: 100%;
    }

    .landing-marca h1 {
        margin: 30px 0;
    }

    .landing-marca ul.products li.product {
        position: relative;
    }

    .landing-promo-badge {
        position: absolute;
        top: 18px;
        left: 18px;
        background: #e53935;
        color: #fff;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        z-index: 20;
        box-shadow: 0 4px 10px rgba(0,0,0,.15);
    }
</style>

<main class="landing-marca woocommerce">
    
    <div class="ast-container">

        <!-- CONTENIDO DE LA PÁGINA -->
        <div class="landing-content">
            <?php the_content(); ?>
        </div>

        <!-- TÍTULO -->
        <header class="woocommerce-products-header">
            <h1 class="woocommerce-products-header__title page-title">
                Productos destacados de Marca
            </h1>
        </header>

        <!-- PRODUCTOS -->
        <div class="landing-products">
            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 8,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_tag',
                        'field'    => 'slug',
                        'terms'    => 'marca-destacada',
                    ),
                ),
            );

            $query = new WP_Query($args);
            ?>

            <?php
            function landing_marca_badge() {
                echo '<span class="landing-promo-badge">Oferta imperdible</span>';
            }
            ?>

            <?php if ($query->have_posts()) : ?>

                <?php
                add_action('woocommerce_before_shop_loop_item_title', 'landing_marca_badge', 6);
                ?>

                <?php woocommerce_product_loop_start(); ?>

                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <?php
                        global $product;
                        $product = wc_get_product(get_the_ID());

                        wc_get_template_part('content', 'product');
                        ?>

                    <?php endwhile; ?>

                <?php woocommerce_product_loop_end(); ?>

                <?php
                remove_action('woocommerce_before_shop_loop_item_title', 'landing_marca_badge', 6);
                ?>

            <?php else : ?>
                <p>No hay productos destacados disponibles.</p>
            <?php endif; ?>

            

            <?php wp_reset_postdata(); ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>