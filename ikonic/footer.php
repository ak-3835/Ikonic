<footer class="footer-bg text-light mt-5 pt-4">
    <div class="container py-5">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-5 txt-color">
            <?php 
                if( is_active_sidebar( 'footer-1' )){
                    dynamic_sidebar( 'footer-1' );
                }
            ?>
            </div>

            <div class="col-md-1"></div>
            <!-- Column 2 -->
            <div class="col-md-2 txt-color icon-text">
                <?php 
                    if( is_active_sidebar( 'footer-2' )){
                        dynamic_sidebar( 'footer-2' );
                    }
                ?>
            </div>

            <!-- Column 3 -->
            <div class="col-md-2 txt-color icon-text">
                <?php 
                    if( is_active_sidebar( 'footer-3' )){
                        dynamic_sidebar( 'footer-3' );
                    }
                ?>
            </div>

            <!-- Column 4 -->
            <div class="col-md-2 txt-color">
                <?php 
                    if( is_active_sidebar( 'footer-4' )){
                        dynamic_sidebar( 'footer-4' );
                    }
                ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>