<?php if ( is_active_sidebar( 'primary' ) ) { ?>

    <aside id="newsletter" class="sidebar">
        <h3 class="widget-title">News</h3>
        
        <div id="mc_embed_signup">
            <form action="http://improvedeating.us7.list-manage1.com/subscribe/post?u=7561c4382788637203e9b973e&amp;id=d6395d2dc2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <label for="mce-EMAIL">Abonnenten sind smart und sexy:</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-Mail Adresse" required><br>
                <input type="submit" value="Anmelden" name="subscribe" id="mc-embedded-subscribe" class="button">

                <p><a href="http://us7.campaign-archive1.com/home/?u=7561c4382788637203e9b973e&id=d6395d2dc2" title="View previous campaigns">View previous campaigns.</a></p>
            </form>
        </div>
    </aside>
    
    <aside id="sidebar-primary" class="sidebar">

        <?php dynamic_sidebar( 'primary' ); ?>

    </aside><!-- #sidebar-primary .aside -->

<?php } ?>