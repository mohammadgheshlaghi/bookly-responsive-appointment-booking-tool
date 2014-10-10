<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<!-- ab-booking-info-third-preview -->
<div class="ab-booking-form" style="overflow: hidden">
<!-- Progress Tracker-->
<?php $step = 3; include '_progress_tracker.php'; ?>

  <div style="margin-bottom: 15px!important;" class="ab-row-fluid">
    <span data-inputclass="input-xxlarge" data-notes = "<?php _e( '<b>[[STAFF_NAME]]</b> - name of staff,  <b>[[SERVICE_NAME]]</b> - name of service,', 'ab' );?> <br> <?php _e( '<b>[[SERVICE_TIME]]</b> - time of service,  <b>[[SERVICE_DATE]]</b> - date of service', 'ab' );?> <br> <?php _e( '<b>[[SERVICE_PRICE]]</b> - price of service.', 'ab' ); ?>" data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_info_third_step' ) ) ?>" data-link-class="ab-text-info-third" class="ab-text-info-third-preview ab-row-fluid ab_editable" id="ab-text-info-third" data-type="textarea" data-pk="1"><?php echo esc_html( get_option( 'ab_appearance_text_info_third_step' ) ) ?></span>
  </div>
  <form class="ab-your-details-form ab-row-fluid">
    <div class="ab-details-list ab-left">
      <label data-default="<?php echo get_option( 'ab_appearance_text_label_name' ); ?>" data-link-class="text_name_label" class="ab-formLabel text_name_label ab_editable" id="ab-text-label-name" data-type="text" data-pk="1"><?php echo esc_html(get_option( 'ab_appearance_text_label_name' )) ?></label>
      <div class="ab-details-wrap">
        <input class="ab-full-name" type="text" value="" maxlength="60">
      </div>
      <div class="ab-full-name-error ab-bold"></div>
    </div>
    <div class="ab-details-list ab-left">
      <label data-default="<?php echo get_option( 'ab_appearance_text_label_phone' ); ?>" data-link-class="text_phone_label" class="ab-formLabel text_phone_label ab_editable" id="ab-text-label-phone" data-type="text" data-pk="1"><?php echo esc_html(get_option( 'ab_appearance_text_label_phone' )) ?></label>
      <div class="ab-details-wrap">
        <input class="ab-user-phone" maxlength="30" type="text" value="">
      </div>
      <div class="ab-user-phone-error ab-bold"></div>
    </div>
    <div class="ab-details-list ab-left">
      <label data-default="<?php echo get_option( 'ab_appearance_text_label_email' ); ?>" data-link-class="text_email_label" class="ab-formLabel text_email_label ab_editable" id="ab-text-label-email" data-type="text" data-pk="1"><?php echo esc_html(get_option( 'ab_appearance_text_label_email' )) ?></label>
      <div class="ab-details-wrap" style="margin-right: 0">
        <input class="ab-user-email" maxlength="40" type="text" value="">
      </div>
      <div class="ab-user-email-error ab-bold"></div>
    </div>
      <div class="ab-clear"></div>
      <div class="ab-details-list ab-textarea">
          <label data-default="<?php echo get_option( 'ab_appearance_text_label_notes' ); ?>" data-link-class="text_notes_label" class="ab-formLabel text_notes_label ab_editable" id="ab-text-label-notes" data-type="text" data-pk="1"><?php echo esc_html(get_option( 'ab_appearance_text_label_notes' )) ?></label>
          <div style="margin: 5px 2px 0 0">
              <textarea rows="6" class="ab-user-notes"></textarea>
          </div>
      </div>
  </form>
  <div class="ab-row-fluid last-row ab-nav-steps ab-clear">
      <button class="ab-left ab-to-second-step ladda-button orange zoom-in" style="margin-right: 10px;">
          <span><?php _e( 'Back', 'ab' ) ?></span>
      </button>
      <button class="ab-right ab-to-fourth-step ladda-button orange zoom-in">
          <span><?php _e( 'Next', 'ab' ) ?></span>
      </button>
  </div>
</div>
