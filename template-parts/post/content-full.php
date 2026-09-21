<?php

$content = apply_filters('the_content', get_post_field('post_content', $post->ID));
echo $content;
