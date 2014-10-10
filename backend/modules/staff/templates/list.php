<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="ab-title"><?php _e( 'Staff Members', 'ab') ?> (<span id="ab-list-item-number"><?php echo count($collection) ?></span>)</div>
<div id="ab-staff" class="ab-left-bar ab-static-width">

  <ul id="ab-staff-list">
      <?php if ( $collection ) : ?>
      <?php foreach ($collection as $staff) : ?>
      <li class="ab-staff-member" id="ab-list-staff-<?php echo $staff->id ?>" data-staff-id="<?php echo $staff->id ?>"<?php if ( $active_staff_id == $staff->id ): ?> data-active="true"<?php endif ?>>
          <?php if ($staff->avatar_url) : ?>
        <img class="left ab-avatar" src="<?php echo $staff->avatar_url ?>" />
          <?php else : ?>
        <img class="left ab-avatar" src="<?php echo plugins_url( 'resources/images/default-avatar.png', dirname(__FILE__).'/../../../AB_Backend.php' ) ?>" />
          <?php endif ?>
        <div class="ab-text-align"><?php esc_html_e( $staff->full_name ) ?></div>
      </li>
          <?php endforeach ?>
      <?php endif ?>
  </ul>
    <?php include 'new.php' ?>



</div>

<div id="ab-edit-staff-member" class="ab-right-content ab-full-width"></div>
<div id="ab-staff-help" style="display: none">
    <p><?php _e('If this staff member requires separate login to access personal calendar, a regular WP user needs to be created for this purpose.', 'ab') ?></p>
    <p><?php _e('User with "Administrator" role will have access to calendars and settings of all staff members, user with some other role will have access only to personal calendar and settings.', 'ab') ?></p>
    <p><?php _e('If you will leave this field blank, this staff member will not be able to access personal calendar using WP backend.', 'ab') ?></p>
</div>
<div id="ab-staff-google" style="display: none">
    <p><?php _e('Synchronizes the data of the staff member bookings with the Google Calendar.', 'ab') ?></p>
</div>
