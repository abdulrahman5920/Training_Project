@extends('adminmaster')
@section('title','Categories')
    
@section('header_content')

<!-- Bootstrap -->
<link href="{{asset('Admin/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
<link href="{{asset('Admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('Admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('Admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
<!-- iCheck -->
<link href="{{asset('Admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- Datatables -->

<link href="{{asset('Admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{asset('Admin/build/css/custom.min.css')}}" rel="stylesheet">

@endsection

@section('class_name','nav-md')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage Tags</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List of Tags</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <table  id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Tag Name</th>
                    {{-- <th>Edit</th> --}}
                    <th>Delete</th>
                  </tr>
                </thead>


                <tbody>
                  @foreach($categories_list as $data)
                  
                    
                    <tr >  
                      <form action="{{route('deletingtag.toDeleteTag')}}" method="POST"> 

                    <td  value="{{ $data->id }}">{{ $data->category_name }}</td>
                    {{-- <td><button class="btn btn-default" type="button"><img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></button>
                    </td> --}}
                    <td><button name="id_to_remove" value="{{ $data->id }}"   class="btn btn-default" type="submit"><img src="{{asset('Admin/images/delete.png')}}" alt="Delete"></button>
                    </td>
                  </form>
                  </tr>
                
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  <!-- jQuery -->
  <script src="{{asset('Admin/vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
 <script src="{{asset('Admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('Admin/vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('Admin/vendors/nprogress/nprogress.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('Admin/vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('Admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{asset('Admin/build/js/custom.min.js')}}"></script>
  {{-- script to make link method --}}
  {{-- <script>
    function sendPostRequest(event) {
        event.preventDefault(); // منع الرابط من تنفيذ طلب GET بشكل افتراضي
    
        fetch("{{'/deletingtag'}}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                // يمكنك إضافة بيانات هنا إذا لزم الأمر
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // تعامل مع الاستجابة هنا
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
    </script> --}}
@endsection