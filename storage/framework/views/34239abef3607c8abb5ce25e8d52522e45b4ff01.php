<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content-wrapper">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
            <h1><strong>Users</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/nameusers')); ?>">Home</a></li>
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

            
<form method="post" action="<?php echo e(route('nameusers.store')); ?>" enctypr="multipart/form-data">
<?php echo csrf_field(); ?>

<!-- Picture -->
 <img id="imagePreview" src="" style="max-width: 200px; display: none;">

<div class="form-group">
 <label for="exampleInputFile">Your Picture</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="exampleInputFile" onchange="previewImage(event)">
</div>
 
</div>
</div>

 <script>
        function previewImage(event) {
            var imagePreview1 = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview1.style.display = 'block';
                    imagePreview1.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview1.style.display = 'none';
                imagePreview1.src = '#';
            }
        }
  </script>

 <!-- Name -->
              <div class="form-group">
                <label for="inputName">Insert Your Name:</label>
                <input type="text" name="Name" id="inputName" class="form-control">
              </div>

 <!-- Status -->
 <div class="form-group">
                <label for="inputStatus">Status:</label>
                <select id="inputStatus" name="Status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1">Active</option>
                  <option value="0">Not Active</option>
                </select>
              </div>

 <!-- Description -->
              <div class="form-group">
                <label for="inputStatus">Job Description:</label>
                <select id="inputStatus" name="Description" class="form-control custom-select">
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

                  <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nameusers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                  <tr>

                  <td></td>
                  <td width="300"><img src="/users/<?php echo e($nameusers->Image); ?>" height="150px" width="150px">            
                  <td style="padding:20px;">
                    <p><strong>Your Name:</strong> <?php echo e($nameusers->Name); ?></p>

                    <p><strong>Status As:</strong> 
                    <?php if($nameusers->Status==1): ?>
                    <a href="" class="badge rounded-pill bg-success">Active</a>
                    <?php else: ?>
                    <a href="" class="badge rounded-pill bg-danger">Not Active</a>
                    <?php endif; ?>
                    </p>
                    
                    <p><strong>Job Description:</strong> <?php echo e($nameusers->Description); ?></p>
                  </td>
                
                  <td>


<!-- Edit Button trigger modal -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-edit" aria-hidden="true"></i>
<b>EDIT USERS</b>
</button>

<!-- Edit Modal -->
<form method="post" action="<?php echo e(route('nameusers.update', ['nameusers' => $nameusers])); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?> 

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Users</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Picture -->
<img id="imagePreview" src="/users/<?php echo e($nameusers->Image); ?>" style="max-width: 200px; display: none;">

<div class="form-group">
 <label for="exampleInputFile">Your Picture</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="exampleInputFile" onchange="previewImage(event)">
</div>
 
</div>
</div>

 <script>
        function previewImage(event) {
            var imagePreview2 = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview2.style.display = 'block';
                    imagePreview2.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview2.style.display = 'none';
                imagePreview2.src = '#';
            }
        }
  </script>

<!-- Name -->
<div class="form-group">
        <label for="inputName">Insert Your Name:</label>
        <input type="text" name="Name" id="inputName" value="<?php echo e($nameusers->Name); ?>" class="form-control">
</div>

 <!-- Status -->
 <div class="form-group">
                <label for="inputStatus">Status:</label>
                <select id="inputStatus" name="Status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1" <?php echo e($nameusers->Status === '1' ? 'selected' : ''); ?> >Active</option>
                  <option value="0" <?php echo e($nameusers->Status === '0' ? 'selected' : ''); ?> >Not Active</option>
                </select>
              </div>

 <!-- Description -->
              <div class="form-group">
                <label for="inputStatus">Job Description:</label>
                <select id="inputStatus" name="Description" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="Worker" <?php echo e($nameusers->Description === 'Worker' ? 'selected' : ''); ?> >Worker</option>
                  <option value="Entertaiment" <?php echo e($nameusers->Description === 'Entertaiment' ? 'selected' : ''); ?> >Entertaiment</option>
                </select>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save</button>
      </div>
    </div>
  </div>
</div>

</form>


<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-trash" aria-hidden="true"></i>
<b>DELETE USERS</b>
</button>

<!-- Delete Modal -->
<form method="post" action="<?php echo e(route('nameusers.destroy', $nameusers->id)); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('delete'); ?>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Users</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure???
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

</form>

              </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="4">Nothing Found</td>
                </tr>

                <?php endif; ?>

                  </tbody>

                </table>
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


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Information/name_users.blade.php ENDPATH**/ ?>