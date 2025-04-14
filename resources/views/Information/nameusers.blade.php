@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')


<div class="content-wrapper">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
            <h1><strong>Users</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/nameusers') }}">Home</a></li>
              <li class="breadcrumb-item active">Name Users</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <!-- Start Add On Users -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><b>Add On Users</b></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

            
<form method="post" action="{{ route('nameusers.store') }}" enctypr="multipart/form-data">
@csrf

<!-- Picture -->
 <img id="imagePreview" src="" style="max-width: 200px; display: none;">

<div class="form-group">
 <label for="exampleInputFile">Your Picture</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="Image" onchange="previewImage(event)">
</div>
 
</div>
</div>

 <script>
        function previewImage(event) {
            var imagePreview = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        }
  </script>

 <!-- Name -->
              <div class="form-group">
                <label for="inputName">Insert Your Name:</label>
                <input type="text" name="Name" id="Name" class="form-control">
              </div>

 <!-- Status -->
 <div class="form-group">
                <label for="inputStatus">Status:</label>
                <select id="inputStatus" name="Status" id="Status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1">Active</option>
                  <option value="0">Not Active</option>
                </select>
              </div>

 <!-- Description -->
              <div class="form-group">
                <label for="inputStatus">Job Description:</label>
                <select id="inputStatus" name="Description" id="Description" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Worker</option>
                  <option>Entertaiment</option>
                </select>
              </div>
              
 <!-- Submit -->
              <div class="row">
               <div class="col-12">
          <input type="submit" value="Submit Users" class="btn btn-info float-right">
        </div>
      </div>
      </form>
            </div>
          </div>
          <div class="card">
            <div class="card-tools">
            </div>
          </div>
        </div>
<!-- End Add On Users -->


<!-- Users Authentication -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><b>Users Authentication</b></h3>
            </div>
       
            <div class="card-body p-0">
              <div class="mailbox-controls">
     
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                  <div class="btn-group">   
                  </div>
                </div>
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">

          <thead>
          <tr>
          <th width="1%"></th>
          <th width="5%"></th>
          <th width="10%"></th>
          <th width="10%"></th>
          </tr>
          </thead>
                  <tbody>

                  @forelse ($data as $nameusers)

                  <tr>

                  <td></td>
                  <td width="300"><img src="/users/{{ $nameusers->Image }}" height="150px" width="150px">            
                  <td style="padding:20px;">
                    <p><strong>Your Name:</strong> {{ $nameusers->Name }}</p>

                    <p><strong>Status As:</strong> 
                    @if($nameusers->Status==1)
                    <a href="" class="badge rounded-pill bg-success">Active</a>
                    @else
                    <a href="" class="badge rounded-pill bg-danger">Not Active</a>
                    @endif
                    </p>
                    
                    <p><strong>Job Description:</strong> {{ $nameusers->Description }}</p>
                  </td>
                
                  <td>

<!-- Edit Button trigger modal -->
<a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal1-{{ $nameusers->id }}"><i class="fas fa-edit" aria-hidden="true"></i>
<b>EDIT USERS</b></a>


<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal3{{$nameusers->id}}"><i class="fas fa-trash" aria-hidden="true"></i>
<b>DELETE USERS</b>
</button>


@foreach ($data as $nameusersedit)
<!-- Delete Modal -->
<form method="post" action="{{ route('nameusers.destroy', $nameusers->id) }}" accept-charset="UTF-8" style="display:inline">
@csrf
@method('delete')

<div class="modal fade" id="exampleModal3{{$nameusers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Users</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure Want To Delete <b>{{$nameusers->Name}}</b>???
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

</form>
@endforeach


              </td>
                </tr>

                @empty

                <tr>
                    <td colspan="4">Nothing Found</td>
                </tr>

                @endforelse

                  </tbody>

                </table>


 @foreach ($data as $nameusersedit)
<!-- Edit Modal -->

<div class="modal fade" id="exampleModal1-{{ $nameusersedit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Users</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" action="{{ route('nameusers.update', $nameusersedit->id) }}" accept-charset="UTF-8" style="display:inline">
@csrf
@method('put') 

<!-- Picture -->
<img id="imagePreview" src="/users/{{ $nameusersedit->Image }}" style="max-width: 200px; display: none;">

<div class="form-group">
 <label for="exampleInputFile">Your Picture</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="Image" onchange="previewImage(event)">
</div>
 
</div>
</div>

 <script>
        function previewImage(event) {
            var imagePreview = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) { 
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        }
  </script>

<!-- Name -->
<div class="form-group">
        <label for="inputName">Insert Your Name:</label>
        <input type="text" name="Name" id="Name" value="{{$nameusersedit->Name}}" class="form-control">
</div>

 <!-- Status -->
 <div class="form-group">
                <label for="inputStatus">Status:</label>
                <select id="inputStatus" name="Status" id="Status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1" {{$nameusersedit->Status === '1' ? 'selected' : ''}} >Active</option>
                  <option value="0" {{$nameusersedit->Status === '0' ? 'selected' : ''}} >Not Active</option>
                </select>
              </div>

 <!-- Description -->
              <div class="form-group">
                <label for="inputStatus">Job Description:</label>
                <select id="inputStatus" name="Description" id="Description" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="Worker" {{$nameusersedit->Description === 'Worker' ? 'selected' : ''}} >Worker</option>
                  <option value="Entertaiment" {{$nameusersedit->Description === 'Entertaiment' ? 'selected' : ''}} >Entertaiment</option>
                </select>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Updated Save</button>
      </div>
    </div>
  </div>
</div>

</form>

@endforeach

              </div>
            </div>
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                </div>
              
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#deletenameusers').click(function(){
      var id = $(this).attr('rel');
      var deletefunction = $(this).attr('rel1');
  swal({
  title: "Are you sure?",
  text: "Your will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  windows.location.href="/delete/"+deletefunction+"/"+id;
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});



    });
  });
</script>

@include('layouts.footer')