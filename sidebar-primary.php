<?php if ( is_active_sidebar( 'primary' ) ) { ?>
    
    <aside id="sidebar-primary" class="sidebar">
        <div class="container">
            <?php dynamic_sidebar( 'primary' ); ?>
        </div>
    </aside><!-- #sidebar-primary .aside -->

<?php } ?>