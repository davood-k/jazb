<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../datatables/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
      <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../dist/css/custom-style.css">
        <!-- Styles -->

    </head>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>جداول داده</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">جداول داده</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">لیست انتظار خادمیاران</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>فامیل</th>
                  <th>کدملی</th>
                  <th>سنوات</th>
                  <th>انضباط</th>
                  <th>کیفی</th>
                  <th>ایثارگری</th>
                  <th>تحصیلات</th>
                  <th>نخبه</th>
                  <th>امتیاز کل</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $item)
                <tr>
                  <td>
                  {{ $item->namesr }}
                  </td>
                  <td>
                  {{ $item->familysr }}
                  </td>
                  <td>
                  {{ $item->codemsr }}
                  </td>
                  <td>
                  {{ $item->sanvatsr }}
                  </td>
                  <td>
                  {{ $item->enzebatsr }}
                  </td>
                  <td>
                  {{ $item->keifisr }}
                  </td>
                  <td>
                  {{ $item->isarsr }}
                  </td>
                  <td>
                  {{ $item->tahsilsr }}
                  </td>
                  <td>
                  {{ $item->nokhbehsr }}
                  </td>
                  <td>
                  {{ $item->sanvatsr + $item->enzebatsr + $item->keifisr + $item->isarsr + $item->tahsilsr + $item->nokhbehsr }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>نام</th>
                  <th>فامیل</th>
                  <th>کدملی</th>
                  <th>سنوات</th>
                  <th>انضباط</th>
                  <th>کیفی</th>
                  <th>ایثارگری</th>
                  <th>تحصیلات</th>
                  <th>نخبه</th>
                  <th>امتیاز کل</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><a href="">داود خدادادی</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
        "language": {
            "paginate": {
                "next": "بعدی",
                "previous" : "قبلی"
            }
        },
        "info" : false,
        
    });
    $('#example2').DataTable({
        "language": {
            "paginate": {
                "next": "بعدی",
                "previous" : "قبلی"
            }
        },
      "info" : false,
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "autoWidth": false
    });
  });
</script>

    </body>
</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
      <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../dist/css/custom-style.css">
    <script type="../dist/js" src="jquery.farsiInput.js"></script>
        <!-- Styles -->

    </head>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>جداول داده</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">جداول داده</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">لیست انتظار خادمیاران</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>فامیل</th>
                  <th>کدملی</th>
                  <th>تاریخ تولد</th>
                  <th>شروع خدمت</th>
                  <th>همراه</th>
                  <th>بخش خدمتی</th>
                  <th>معاونت</th>
                  <th>امتیاز کل</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $item)
                <tr>
                  <td>
                {{ $item->namesr }}
                  </td>
                  <td>
                {{ $item->familysr }}
                  </td>
                  <td>
                {{ $item->codemsr }}
                  </td>
                  <td>
                {{ $item->tdatesr }}
                  </td>
                  <td>
                {{ $item->dateshsr }}
                  </td>
                  <td>
                {{ $item->mobilesr }}
                  </td>
                  <td>
                {{ $item->bkhademyarsr }}
                  </td>
                  <td>
                {{ $item->moavenat }}
                  </td>
                  <td>
                  {{ $item->sanvatsr + $item->enzebatsr + $item->keifisr + $item->isarsr + $item->tahsilsr + $item->nokhbehsr }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>نام</th>
                  <th>فامیل</th>
                  <th>کدملی</th>
                  <th>تاریخ تولد</th>
                  <th>شروع خدمت</th>
                  <th>همراه</th>
                  <th>بخش خدمتی</th>
                  <th>معاونت</th>
                  <th>امتیاز کل</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><a href="">داود خدادادی</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
        "language": {
            "paginate": {
                "next": "بعدی",
                "previous" : "قبلی",
            },
            
        },
        "info" : true,
        // "searching": false,
        "emptyTable": "هیچ داده‌ای در جدول وجود ندارد",
        "zeroRecords": "رکوردی با این مشخصات پیدا نشد",
    });
    $('#example2').DataTable({
        "language": {
            "paginate": {
                "next": "بعدی",
                "previous" : "قبلی"
            }
        },
      "info" : false,
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "autoWidth": false
    });
  });
  
 
</script>

    </body>
</html>
