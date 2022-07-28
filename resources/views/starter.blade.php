@extends('layout')

@section('content')
<style>
    .content-wrapper{
        background-color: #dcdde1;
    }
    .card{
        background-color: #f5f6fa;
    }
</style>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">



                <div class="row">
                    {{-- <div class="col-12 col-sm-6 col-md-3"> --}}
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                              <div class="inner">



                                <h3>{{ $activeLeads }}</h3>

                                <p>Active Leads</p>
                              </div>
                              <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                              </div>

                            </div>
                          </div>
                    {{-- </div> --}}
                    <!-- /.col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3>{{ $inActiveLeads }}</h3>

                            <p>In-active Leads</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                          </div>

                        </div>
                      </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>{{ $totalLeads }}</h3>

                            <p>Total Leads</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-secondary">
                          <div class="inner">
                            <h3>0</h3>

                            <p>Total Users</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                          </div>
                        </div>
                      </div>
                    <!-- /.col -->
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->


                {{-- lead table --}}
                <div class="col-12" >
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Leads Information</h3>
                      </div>
                      <!-- ./card-header -->
                      <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>Company Name</th>
                              <th>Company Email</th>
                              <th>Company Number</th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($leads as $lead)

                                @if ($lead->status == 1)



                            <tr data-widget="expandable-table" aria-expanded="false">
                              <td>{{ $lead->id }}</td>
                              <td>{{ $lead->company_name }}</td>
                              <td>{{ $lead->company_email }}</td>
                              <td>{{ $lead->company_number }}</td>
                            </tr>


                            <tr class="expandable-body">
                              <td colspan="5">
                                <div class="container">
                                    <div class="d-flex flex-column">
                                      <div >
                                        <strong>Company Name:</strong> {{ $lead->company_name }}
                                      </div>
                                      <div >
                                        <strong>Company Email:</strong> {{ $lead->company_email }}
                                      </div>
                                      <div >
                                        <strong>Column Number:</strong> {{ $lead->company_number }}
                                      </div>
                                      <div>
                                        <strong>Additional Info:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt saepe nesciunt modi fugit perspiciatis, accusamus maxime dicta fugiat, at ullam totam est ex blanditiis nostrum, rerum quo harum error natus?

                                      </div>
                                    </div>
                                  </div>
                            </tr>
                                @endif
                            @endforeach
                          </tbody>
                        </table>
                        <div class="mt-5">
                            {{ $leads->links() }}
                        </div>


                       </div>
                     </div>
                  </div>


                {{-- /lead table --}}



            </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection
