<?php get_header(); ?>
        <main>
            <section id='leistungen'>
                <h2>Leistungen</h2>
                <article>
                    <h3>Design</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("./images/design.svg") %>' alt='Malutensilien'>
                </article>
                <article>
                    <h3>Strategie</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("./images/strategy.svg") %>' alt='Zielscheibe'>
                </article>
                <article>
                    <h3>Consulting</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("./images/consulting.svg") %>' alt='Consulting'>
                </article>
            </section>

            <section id='news'>
                <h2>News</h2>

                <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'content', get_post_format() );
                endwhile; endif; 
                ?>
            <!-- 

                
                
            -->
            </section>

            <section id='referenzen'>
                <h2>Referenzen</h2>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("../images/dina-meyer.jpg") %>' alt='Tina Ubuntu'>
                    <p><cite>Tina Ubuntu<br>CEO headless Ltd.</cite></p>
                    <blockquote>
                        <p>Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("../images/thomas-meyer.jpg") %>' alt='Tom Herzog'>
                    <p><cite>Tom Herzog<br>Cutter's Finest</cite></p>
                    <blockquote>
                        <p>Große Webkunst – keine Kunst mit Alex Mayer!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/<%= require("./images/vorstand.jpg") %>' alt='Vorstand Müller AG'>
                    <p><cite>Vorstand Müller AG<br>KR Ernst Anker, Dr. Florian Eisner</cite></p>
                    <blockquote>
                        <p>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</p>
                    </blockquote>
                </article>
                <div class='bluebox'></div>
                </section>
        </main>
        <?php get_footer(); ?>
        <!-- <%= require('./partials/_footer.html') %> -->

