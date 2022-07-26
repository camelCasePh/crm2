@extends('layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leads</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">

            {{-- <a href="#" class=" btn btn-dark ml-2 p-3 mb-3 " style="border-bottom:3px solid red;"><strong>Add New Lead</strong></a> --}}

            {{--  --}}
                <!-- Button trigger modal -->
<button type="button" class="btn btn-dark ml-2 p-3 mb-3" style="border-bottom:3px solid red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <strong>Add New Lead</strong>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Lead</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('store.leads') }}" method="POST">
            @csrf
        <div class="modal-body">


                <div class="mb-3">
                  <label class="form-label">Company Name</label>
                  <input type="text" name="companyName" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Company Email</label>
                  <input type="email" name="companyEmail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Company Number</label>
                    <input type="text" name="companyNumber" class="form-control">
                  </div>
                  <input type="hidden" name="status" value="active">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

            {{--  --}}


          <div class="col-12" >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Leads Information</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Company Name</th>
                      <th>Company Email</th>
                      <th>Company Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($leads as $lead)

                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>{{ $count++ }}</td>
                      <td>{{ $lead->company_name }}</td>
                      <td>{{ $lead->company_email }}</td>
                      <td>{{ $lead->company_number }}</td>
                      <td>

                            <form action="#" method="POST">
                                <a href="#" class="btn btn-dark ">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>

                      </td>
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
                    @endforeach
                  </tbody>
                </table>
                <div class="mt-5">
                    {{ $leads->links() }}
                </div>


               </div>
             </div>
          </div>
        <!-- /.row -->
       </div>
    </div><!-- /.container-fluid -->
 </div>
</section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection()
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

