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
            <h1><strong>Edit Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/mydatabase') }}">Home</a></li>
              <li class="breadcrumb-item active">Mydatabase Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <!-- Title -->
    <section class="content">
    <div class="col-sm-12 ">
        <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
          <div class="card-header bg-gray">
           <h5 class="text-white"><b>Edit New Information Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>
 
      
<!-- Space -->
<legend>&nbsp;</legend>


<form method="post" action="{{ route('mydatabase.update' , ['mydatabase' => $mydatabase]) }}" enctypr="multipart/form-data"> 
@csrf
@method('put') 


 <!-- Calendar -->

 <div class="form-group">
<label class="col-md-6 control-label">Calendar:</label>
   <div class="input-group">
   <div class="custom-file">
   <input type="date" name="Calendar" value="{{$mydatabase->Calendar}}"/>
 </div>
 @if($errors->has('Calendar'))
  <span class="text-danger">{{ $errors->first('Calendar') }}</span>
  @endif
 </div>
 </div>


<!-- Folder Name -->

<div class="form-group">
  <label class="col-md-12 control-label" >Folder Name:</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input type="text" name="FolderName" value="{{$mydatabase->FolderName}}" placeholder="Insert Fail Name" class="form-control">
    </div>
    @if($errors->has('FolderName'))
  <span class="text-danger">{{ $errors->first('FolderName') }}</span>
  @endif
  </div>
</div>


<!-- Folder Information -->
  
<div class="form-group">
  <label class="col-md-12 control-label">Folder Information:</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
      <textarea class="form-control" name="FolderInformation" value="{{$mydatabase->FolderInformation}}" placeholder="Insert Folder Information">{{$mydatabase->FolderInformation}}</textarea>
  </div>
  @if($errors->has('FolderInformation'))
  <span class="text-danger">{{ $errors->first('FolderInformation') }}</span>
  @endif
  </div>
</div>


<!-- Insert PDF -->

 <div class="form-group">
 <label class="col-md-6 control-label">Insert PDF:</label>
 <div class="col-md-6 inputGroupContainer">
  <input class="form-control" type="file" name="InsertPDF" value="/pdf/{{$mydatabase->InsertPDF}}" id="formFile" src="/pdf/{{$mydatabase->InsertPDF}}">
  @if($errors->has('InsertPDF'))
  <span class="text-danger">{{ $errors->first('InsertPDF') }}</span>
  @endif
</div>
</div>


<!-- Submit -->

<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary" >Done Edit<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</form>
</div>
    </div>
</div>
        </div>
      </div>
    </section>
 </div>
</div>
 

@include('layouts.footer')


