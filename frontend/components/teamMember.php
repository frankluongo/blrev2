<div class="team-member">
  <h3 class="team-member__name"><?php the_field('team_members_member_name'); ?></h3>
  <div
    class="team-member__image"
    data-lazy-bg
    data-img-src="<?php echo get_field('team_members_member_image')['sizes']['xlarge']; ?>"></div>
  <div class="team-member__title">
    <strong><?php the_field('team_members_member_title'); ?></strong>
  </div>
  <div class="team-member__description">
    <?php the_field('team_members_member_description'); ?>
  </div>
  <div class="team-member__phone-number"><?php the_field('team_members_member_phone_number'); ?></div>
  <div class="team-member__email-address">
    <a
      class="link underline"
      href="mailto:<?php the_field('team_members_member_email_address'); ?>"
      rel="noopener noreferrer"
      target="_blank"
    >
      Send <?php firstName(get_field('team_members_member_name')); ?> an Email
    </a>
  </div>
</div>
