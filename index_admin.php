
 <!-- tampilkan data user dari db -->
      
<?php
include "koneksi.php";
session_start();
$id_user=$_SESSION["id_user"];


if (!isset($_SESSION["username"])) {
  echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];


?>

<!DOCTYPE html>
<html lang="en">

 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 <title>Desa Purwasari / Admin</title>
<link rel="shortcut icon" type="image/x-icon" href="img/kabupaten_karawang.png">

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
   

     <div class="bg-light border-right" id="sidebar-wrapper">
     
      <div class="sidebar-heading"><?php echo $username; ?></div> 
      <div class="list-group list-group-flush">

        <a href="siaga_covid.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-viruses"></i> Siaga Covid-19</a>
         <a href="buku_induk_penduduk.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Buku Adm Penduduk</a>
         <a href="buku_administrasi_desa.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-book"></i> Buku Administrasi Desa</a>
        <a href="berita_admin.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-tachometer-alt"></i> Berita</a>
        <a href="data_penduduk.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Data Penduduk</a>
        <a href="pengajuan_surat.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-envelope"></i> Pengajuan Surat</a>
        <a href="about_admin.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-address-card"></i> Tentang Desa</a>
        <a href="manajemen_akun.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-tasks"></i> Manajemen Akun</a>
        <a href="galeri.php" class="list-group-item list-group-item-action bg-light"><i class="far fa-images"></i> Galeri</a>
         <a href="background.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-cogs"></i> Ganti Background</a>
        <a href="pelayanan.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-concierge-bell"></i> Pelayanan</a>
        <a href="staf.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-horse-head"></i> Staf</a>
         <a href="keuangan_import_data.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-money-bill-wave"></i> Keuangan</a>
        <a href="data_sertifikat_tanah.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-certificate"></i> Sertifikat Tanah</a>
        <a href="sekretariat.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-horse-head"></i> Sekretariat</a>
      </div>    
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- halaman isi data diri admin -->
    
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Hide Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index_admin.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pengaturan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php" onClick="javascript: return confirm('Apakah anda yakin untuk log out?');">Log Out</a>
                <a class="dropdown-item" href="lihat_akun_admin.php">Lihat Akun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Lainnya..</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- ini untuk mengatur jarak header dengan body -->
      <div class="card-body">
      <h1 class="card-title"></h1>
    </div>
        <!-- /.batas Menu Bar Atas -->

                 <!-- untuk menampilkan banyak row pada tb -->
        <?php 
        include 'koneksi.php';
        $data_surat = mysqli_query($koneksi, "SELECT * FROM tb_surat");
        $jumlah_surat = mysqli_num_rows($data_surat);
        ?>
    <section class="content">
      <div class="card-body">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlah_surat ?></h3>

                <p>Pengajuan Surat</p>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pengajuan_surat.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
             <!-- untuk menampilkan banyak row pada tb -->
        <?php 
        include 'koneksi.php';
        $data_user = mysqli_query($koneksi, "SELECT * FROM tb_user");
        $jumlah_user = mysqli_num_rows($data_user);
        ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $jumlah_user ?><sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Akun Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="manajemen_akun.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         <!-- untuk menampilkan banyak row pada tb -->
        <!-- untuk menampilkan banyak row pada tb -->
        <?php 
        include 'koneksi.php';
        $data_penduduk = mysqli_query($koneksi, "SELECT * FROM tb_penduduk");
        $jumlah_penduduk = mysqli_num_rows($data_penduduk);
        ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <!-- / dihitung jumlah row pada tb regis -->
               
                <h3><?php echo $jumlah_penduduk; ?></h3>
                <p>Jumlah Penduduk</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="data_penduduk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
           <!-- untuk menampilkan banyak row pada tb -->
        <!-- untuk menampilkan banyak row pada tb -->
        <?php 
        include 'koneksi.php';
        $data_covid = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE wajib_pantau = 'YA'");
        $jumlah_covid = mysqli_num_rows($data_covid);
        ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $jumlah_covid; ?></h3>

                <p>Jumlah Pantauan Covid-19</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="pemantauan_covid.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
        

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title m-0">Hallo <?php echo $username; ?> Selamat Datang!!</h1>
              </div>
              <div class="card-body">
              <div class="card-header">
         <?php 
  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");

  while ($row = $result->fetch_assoc()) { 
          echo"<b>Nama          : " .$row['nama']."<br>";
          echo"NIK              : " .$row['nik']."<br>";
          echo"Alamat           : " .$row['alamat']."<br>";
          echo"Tanggal Lahir    : " .$row['tgl_lahir']."<br>";
          echo"Tempat Lahir     : " .$row['tempat_lahir']."<br>";

       }?>
         
      </div>
     </div>
    </div>
  </div>

  <!-- batas akhir-->





      

          <!-- Main content -->

           

        <!-- /.row -->
        
            <!-- /.card -->

            <!-- Content Header (Page header) -->
       <!-- Content Wrapper. Contains page content -->
       <!-- matiin card mb -->
  <!-- <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->
<!-- /.container-fluid -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /#wrapper -->

 <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.min.js"></script>
<script src="plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="plugins/fullcalendar-interaction/main.min.js"></script>
<script src="plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
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
    var Draggable = FullCalendarInteraction.Draggable;

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
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : true,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
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


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
