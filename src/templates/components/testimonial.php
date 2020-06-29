<div class="testimonial text-align-center">
  <div class="testimonial__video">
    <iframe data-src=<?php pullSrc(get_field('testiominials_testimonial_video')); ?> data-lazy-iframe data-testimonial-iframe></iframe>
  </div>
  <div class="testimonial__author"><?php the_field('testimonials_testimonial_author') ?></div>
  <div class="testimonial__description"><?php the_field('testiominials_testimonial_description'); ?></div>
</div>
