<?php 
    global $product, $woocommerce; 
?>

</div>
</div>
</div>
</div>
</div>

<style>
    #main{
        display: none;
    }
</style>

 <div class="m-auto">
        <div class="md:flex">
            <div class="bg-gray-100 w-1/2">                
                <?php // do_action( 'woocommerce_product_thumbnails' ); ?>
                <div>
                    <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
                </div>
                <!-- <img src="https://www-tillmanstranquils-com.exactdn.com/wp-content/uploads/2020/02/750am-600x600.png?lossy=1&ssl=1" class="" /> -->
            </div>
            <div class="w-1/2 p-10 space-y-10">   
                <div class="yotpo bottomLine" data-yotpo-product-id="<?php echo $product->id; ?>"></div>                                        

                <?php // woocommerce_template_single_meta(); ?>
                <?php // woocommerce_template_single_sharing(); ?>
                <?php // woocommerce_template_single_rating(); ?>
                  
                <h1 class="text-3xl"> <?php woocommerce_template_single_title(); ?> </h1>
                <p class="text-sm text-gray-500"> 
                    <?php echo $product->get_data()['short_description']; ?>
                <pre>
                    <?php // var_dump($product); ?>
                    <?php // comments_template(); ?>
                </pre>
                
                <?php
                    // do_action( 'woocommerce_single_product_summary' );
                    woocommerce_template_single_price();

                 //   woocommerce_template_single_meta();
                  /**
                   * Hook: woocommerce_single_product_summary.
                   *
                   * @hooked woocommerce_template_single_title - 5
                   * @hooked woocommerce_template_single_rating - 10
                   * @hooked woocommerce_template_single_price - 10
                   * @hooked woocommerce_template_single_excerpt - 20
                   * @hooked woocommerce_template_single_add_to_cart - 30
                   * @hooked woocommerce_template_single_meta - 40
                   * @hooked woocommerce_template_single_sharing - 50
                   */
                    woocommerce_template_single_add_to_cart();
                ?>
                <?php do_action( 'woocommerce_after_single_product' ); ?>
                <?php do_action( 'woocommerce_before_single_product' ); ?>

                <?php // die( $product->get_data()['short_description']); ?>

                <!-- Packing in just over 83mg of CBD per serving, Royal CBD’s 2500mg full spectrum CBD oil has been designed for people looking for potent relief – without using half the bottle.
                <br/>
                <br/>
                <b>Note:</b> This is our highest potency product with extra strength & effectiveness – resulting in an earthy, botanical taste. Flavoring would make it difficult to reach this level of potency in a 30mL bottle. </p> -->

                <!-- <div class="border rounded">
                      <div class="p-2 py-3 space-x-3">
                          <input type="radio" />
                          <span>
                              <span class="line-through">$299</span>
                              <span class="text-xl">$249</span>
                          </span>
                          <span>One-time Purchase</span>
                      </div>
                      <div class="p-2 py-3 flex items-top space-x-4 bg-gray-100">
                          <span class="space-x-4">
                              <input type="radio" />
                              <span>
                                  <span class="line-through">$299</span>
                                  <span class="text-xl">$249</span>
                              </span>
                          </span>
                          <p>
                              <span>Get Monthly and Save 15% </span>
                              <br/>
                              <span class="text-xs text-gray-400">Delivered every month. Cancel Anytime.</span>                            
                          </p>
                      </div>                  
                </div> -->

                <!-- <div class="space-y-1">
                    <button class="bg-[#40a251] w-full text-white p-4">
                        Sign up Now
                    </button>
                    <p class="text-sm text-gray-400">Purchase this product now and earn 390 Crowns!</p>
                </div> -->

            </div> <!-- header right part -->
        </div>

        <div class="bg-gray-50 p-10">
            <div class="container m-auto grid grid-cols-6 items-center ">
                <?php                                     
                if( have_rows('feature_icons') ):
                  // Loop through rows.
                  while( have_rows('feature_icons') ) : the_row();
                      // Load sub field value.
                      $icon = get_sub_field('icon');
                      // Do something...
                  ?>                    
                    <img src="<?php echo $icon['url']; ?>" style="height: 100px;" border="0" alt="<?php echo $icon['alt']; ?>" />                  
                <?php  
                  endwhile; // End loop.
                endif;
                ?>
            </div>
        </div>

        <?php $image_with_text = get_field('image_with_text'); ?>

        <?php if($image_with_text['image']) : ?>
        <div class="py-20" style="background-color: #F3EFEB;"             
            background-size: cover;
            background-position: top right;
        ">
            <div class="container m-auto text-black space-y-10">
                <div class="md:flex space-x-10 items-center">
                    
                    <div class="md:w-1/2">
                        <img class="max-w-full" src="<?php echo $image_with_text['image']['url'] ?>" border="0" />
                    </div>
                    
                    <div class="space-y-10 md:w-1/2">
                        <div class="max-w-[400px] text-xl"> 
                            <?php echo $image_with_text['text']; ?>
                        </div>                     
                    </div>

                </div>                
            </div>
        </div>
        <?php endif; ?>

        <?php $details = get_field('details'); ?>
        <?php if($details['heading']) : ?>
           <?php /*      
        <div class="flex">
            <div class="bg-gray-100 w-1/2 py-20 ">
                <div class="w-8/12 m-auto space-y-10">
                    <h3 class="text-4xl">                        
                        <?php echo $details['heading'];?>
                    </h3>                
                    <div class="grid md:grid-flow-col grid-cols-2 grid-rows-2 text-gray-500 gap-4 space-y-5">
                        <div class="border-b space-y-2">
                            <span class="text-sm">Size</span>
                            <p class="text-xl"><?php echo $details['size']; ?></p>
                        </div>
                        <div class="border-b space-y-2">
                            <span class="text-sm">Amount of CBD</span>
                            <p class="text-xl"><?php echo $details['amount_of_cbd']; ?></p>
                        </div>
                        <div class="border-b space-y-2">
                            <span class="text-sm">Total CBD</span>
                            <p class="text-xl"><?php echo $details['totalcbd']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-5 w-1/2 items-center flex">
                
                <div class="w-8/12 m-auto">
                    <div class="flex justify-left items-center">
                        <div class="flex items-center mt-2 mb-4">
                        <svg class="mx-1 w-4 h-4 fill-current text-[#40a251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-[#40a251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-[#40a251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-[#40a251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-[#40a251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>  <!-- stars -->                  
                    </div>
                    <div class="space-y-5">
                        <p class="text-2xl">
                            <?php echo $details['review']['text']; ?>
                        </p>
                            <p><?php echo $details['review']['name']; ?> <br/>
                            <span class="uppercase text-gray-500 text-sm">Verfied Buyer</span>
                        </p>
                    </div>   
                </div>

            </div>

        </div>
            */ ?>

        <?php endif; ?>


        <!-- <div class="space-y-8 py-20 m-auto border-b">
            <div class="container m-auto">

                <h3 class="text-4xl">Stack and Save 10%</h3>
                <p>These products are commonly purchased and used together</p>

            <div class="flex">
                <div class="flex w-1/2 items-center">
                    <img width="150" height="150" src="https://www-tillmanstranquils-com.exactdn.com/wp-content/uploads/2020/02/750am-600x600.png?lossy=1&ssl=1" />
                    <span> + </span>
                    <img width="150" height="150" src="https://www-tillmanstranquils-com.exactdn.com/wp-content/uploads/2020/02/750am-600x600.png?lossy=1&ssl=1" />
                    <span> + </span>
                    <img width="150" height="150" src="https://www-tillmanstranquils-com.exactdn.com/wp-content/uploads/2020/02/750am-600x600.png?lossy=1&ssl=1" />                    
                </div>
                <div class="w-1/2"> 
                    <div class="space-y-3">
                        <p class="flex items-center space-x-2">
                            <input type="checkbox" />
                            <label> This Item: Full Spectrum CBD Oil 2500mg — 
                                <span class="line-through">$289</span>
                                <span class="text-[#40a251] text-xl">$299</span>
                            </label>
                        </p>  
                        <p class="flex items-center space-x-2">
                            <input type="checkbox" />
                            <label> This Item: Full Spectrum CBD Oil 2500mg — 
                                <span class="line-through">$289</span>
                                <span class="text-[#40a251] text-xl">$299</span>
                            </label>
                        </p>  
                        <p class="flex items-center space-x-2">
                            <input type="checkbox" />
                            <label> This Item: Full Spectrum CBD Oil 2500mg — 
                                <span class="line-through">$289</span>
                                <span class="text-[#40a251] text-xl">$299</span>
                            </label>
                        </p> 
                        <p class="py-2">
                            Total: <span class="line-through">$289</span> $229
                        </p>

                        <div class="space-y-1">
                            <button class="bg-[#40a251] w-full text-white p-4 max-w-[500px]">
                               Add all to Cart
                            </button>
                        </div>

                    </div>          
                </div>
            </div>
            </div>
        </div> extra items -->

        <div class="space-y-8 py-20 m-auto border-b">
            <div class="container m-auto">
                <h3 class="text-4xl text-center">See Why Customers Love Royal CBD</h3>
            <script type="text/javascript">
              (function e(){var e=document.createElement("script");e.type="text/javascript",e.defer=true,e.src="//staticw2.yotpo.com/iGXsoyDGnbsOvFxfJUuK8LmSZGHkyoWwSW9XN7G4/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
            </script>

            <div id="tab-yotpo_widget">
              <div class='yotpo yotpo-main-widget'
                data-product-id='<?php echo $product->id; ?>'
                data-name='CBD Gummies With Melatonin - 750mg - Sleep Formula' 
                data-url='https://www.tillmanstranquils.com/product/cbd-gummies-750mg-melatonin/' 
                data-image-url='https://www-tillmanstranquils-com.exactdn.com/wp-content/uploads/2020/02/750pm.png' 
                data-description='' 
                data-lang='en'
                data-price='35'
                data-currency='USD'>Loading...</div>				
          </div>

          </div>  <!-- container -->

        </div>

        <div class="space-y-8 py-20 border-b">
            <div class="container m-auto space-y-10">
                <?php woocommerce_upsell_display(); ?>                         
            </div>
        </div><!-- related products -->

        <div class="space-y-8 py-20 container m-auto border-b max-w-[800px]">
            <h4 class="text-2xl">Product Details</h4>            
              <?php echo $product->get_data()['description']; ?>
        </div>
         
        <?php $footer_banner = get_field('footer_banner'); ?>

        <?php if($footer_banner['image']) : ?>
        <div class="py-20" style="background-color: #F3EFEB;"             
            background-size: cover;
            background-position: top right;
        ">
            <div class="container m-auto text-black space-y-10">
                <div class="md:flex space-x-10 items-center">
                    
                    <div class="md:w-1/2 ">
                        <img class="max-w-full" src="<?php echo $footer_banner['image']['url'] ?>" border="0" />
                    </div>
                    
                    <div class="space-y-10 md:w-1/2">
                        <div class="max-w-[400px] text-xl"> 
                            <?php echo $footer_banner['text']; ?>
                        </div>
                        <div class="space-y-1">
                            <a href="<?php get_permalink( wc_get_page_id( 'shop' ) ); ?>"
                                class="bg-[#40a251] px-20 text-white p-2 max-w-[500px] border-0 inline-block">
                            Shop All 
                            </a>
                        </div>
                    </div>

                </div>                
            </div>
        </div>
        <?php endif; ?>

    </div>

    <?php // do_action( 'woocommerce_after_single_product_summary' ); ?>

    <?php // do_action( 'woocommerce_after_single_product' );

    // woocommerce_upsell_display(); 

    // woocommerce_cross_sell_display();

// do_action( 'woocommerce_after_main_content' ); 
?>

    <?php // do_action( 'woocommerce_product_after_tabs' ); ?>
    <?php // do_action( 'woocommerce_after_single_product' ); ?>