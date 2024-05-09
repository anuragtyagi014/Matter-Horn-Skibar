<?php
// Template Name: Event
get_header();

?>
<?php $type = 'events';
$args = array(
  'post_type' => $type,
  'post_status' => 'publish',
  'order' => 'asc',
  'posts_per_page' => -1,
);
$my_query = new WP_Query($args);
?>
<link href='../lib/main.css' rel='stylesheet' />
<script src='../lib/main.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '<?= date('Y-m-d'); ?>',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: [
        <?php while ($my_query->have_posts()) : $my_query->the_post(); {
            $id = get_the_ID();
        ?> {
              title: '<?php the_title(); ?>',
              start: '<?php the_field('start_date_time', $id); ?>',
              constraint: '<?php the_field('constarints', $id); ?>',
              <?php if (get_field('end_date_time')) { ?>
                end: '<?php the_field('end_date_time'); ?>'
              <?php } ?>
            },
        <?php }
        endwhile;
        wp_reset_query(); ?>
        // }, {
        //   title: 'Meeting',
        //   start: '2020-09-13T11:00:00',
        //   constraint: 'availableForMeeting', // defined below
        //   color: '#257e4a'
        // }, {
        //   title: 'Conference',
        //   start: '2020-09-18',
        //   end: '2020-09-20'
        // }, {
        //   title: 'Party',
        //   start: '2020-09-29T20:00:00'
        // },

        // areas where "Meeting" must be dropped
        // {
        //   groupId: 'availableForMeeting',
        //   start: '2020-09-11T10:00:00',
        //   end: '2020-09-11T16:00:00',
        //   display: 'background'
        // }, {
        //   groupId: 'availableForMeeting',
        //   start: '2020-09-13T10:00:00',
        //   end: '2020-09-13T16:00:00',
        //   display: 'background'
        // },

        // red areas where no events can be dropped
        // {
        //   start: '2020-09-24',
        //   end: '2020-09-28',
        //   overlap: false,
        //   display: 'background',
        //   color: '#ff9f89'
        // }, {
        //   start: '2020-09-06',
        //   end: '2020-09-08',
        //   overlap: false,
        //   display: 'background',
        //   color: '#ff9f89'
        // }
      ]
    });
    calendar.render();
  });
</script>

 <section class="bg-sec event">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <h1><?php  the_field('breadcrumbs_title');?></h1>
      <!-- <ul>
          <li><a href="<?php // echo home_url();?>">Home /</a></li>
          <li><a><?php // the_field('breadcrumbs_title');?></a></li>
      </ul> -->
      </div>
    </div>
  </div>
</section>

<section class="calendar-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id='calendar'></div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>