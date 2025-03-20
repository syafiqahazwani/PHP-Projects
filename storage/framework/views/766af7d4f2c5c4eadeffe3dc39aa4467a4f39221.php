
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE-master')); ?>/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE-master')); ?>/plugins/fullcalendar/main.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE-master')); ?>/dist/css/adminlte.min.css">

  <div class="content-wrapper">
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
            <h1><strong>Calendar Event</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/layouts.latestnews')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Events -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card card-primary card-outline"">
                <div class="card-header">
                  <h4 class="card-title"><b>Events</b></h4>
                </div>
                <div class="card-body">
                
                  <div id="external-events">
                  <div class="external-event bg-gray">My Database</div>
                  <div class="external-event bg-info">Anime Database</div>
                    <div class="external-event bg-success">Japanese Database</div>
                    <div class="external-event bg-warning">Korea Database</div>
                    <div class="external-event bg-danger">English Database</div>          
                  </div>
                </div>
              </div>
    
            </div>
          </div>
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">

                <!-- Calendar -->
                <div id="calendar"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>
</div>
</div>
</div>
  
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/dist/js/adminlte.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/fullcalendar/main.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/dist/js/demo.js"></script>

<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        
      },
      themeSystem: 'bootstrap',
      
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Laravel_Asterisk\resources\views/Information/calendar.blade.php ENDPATH**/ ?>