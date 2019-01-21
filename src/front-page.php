<?php get_header(); ?>
        <main>
            <section id='leistungen'>
                <h2>Leistungen</h2>
                <?php 
                $leistungen_query = new WP_Query(array('category_name' => 'leistungen', 'posts_per_page' => 3, 'order' => 'ASC'));
                if ( $leistungen_query -> have_posts() ) : while ( $leistungen_query -> have_posts() ) : $leistungen_query -> the_post(); ?>
                <article>
                    <h3><?php the_title(); ?></a></h3>
                    <?php the_post_thumbnail(); ?>
                    <p><?php edit_post_link(); ?></p>
                </article>
                <?php endwhile; endif; ?>

                <!-- <article>
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
                </article> -->
            </section>

            <section id='news'>
                <h2>News</h2>
                <?php 
                $news_query = new WP_Query(array('category_name' => 'news', 'posts_per_page' => 3));
                if ( $news_query -> have_posts() ) : while ( $news_query -> have_posts() ) : $news_query -> the_post(); ?>
                <article>
                    <h3><a href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h3>
                    <p><?php the_content('[mehr erfahren]'); edit_post_link();?></p>
                    </article>
                <?php endwhile; endif; ?>
            <!-- 

                
                
            -->
            </section>

            <section id='referenzen'>
                <h2>Referenzen</h2>
                <?php 
                $reference_query = new WP_Query(array('category_name' => 'referenzen', 'posts_per_page' => 3, 'order' => 'ASC'));
                if ( $reference_query -> have_posts() ) : while ( $reference_query -> have_posts() ) : $reference_query -> the_post(); ?>
                <article>
                    <?php the_post_thumbnail(); ?>
                    <p><cite><?php the_field('name'); ?><br><?php the_field('firma'); ?></cite></p>
                    <blockquote><p><?php the_field('zitat'); edit_post_link();?></p></blockquote>
                    </article>
                <?php endwhile; endif; ?>
                <!-- <article>
                    <img src='<?php // echo get_template_directory_uri(); ?>/<%= require("../images/dina-meyer.jpg") %>' alt='Tina Ubuntu'>
                    <p><cite>Tina Ubuntu<br>CEO headless Ltd.</cite></p>
                    <blockquote>
                        <p>Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php // echo get_template_directory_uri(); ?>/<%= require("../images/thomas-meyer.jpg") %>' alt='Tom Herzog'>
                    <p><cite>Tom Herzog<br>Cutter's Finest</cite></p>
                    <blockquote>
                        <p>Große Webkunst – keine Kunst mit Alex Mayer!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php // echo get_template_directory_uri(); ?>/<%= require("./images/vorstand.jpg") %>' alt='Vorstand Müller AG'>
                    <p><cite>Vorstand Müller AG<br>KR Ernst Anker, Dr. Florian Eisner</cite></p>
                    <blockquote>
                        <p>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</p>
                    </blockquote>
                </article> -->
                <div class='bluebox'></div>
                </section> 
        </main>
        <?php get_footer(); ?>
        <!-- <%= require('./partials/_footer.html') %> -->