<!--<style>
  .forminator-button-submit
  {
    width: 100% !important;
  }
</style>-->
<section id="contact__section" class="contact__section section__padding container">
    <div id="homepage__form">
        <h2 class="text-center"><?=stripslashes(get_option('quote_request_form_title'))?></h2>
<?=do_shortcode('[forminator_form id="626"]')?>
    </div>
</section>