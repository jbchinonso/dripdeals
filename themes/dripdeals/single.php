<?php
get_header();

while(have_posts()){
    the_post();
}

//the_content();
the_title();

echo "walaaaaaaa";



 get_footer();