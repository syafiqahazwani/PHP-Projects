@extends('layout_page.master')
@section('admin')

<div class="content">
        <div class="row">
      
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add VIDEO</h5>
              </div>
              <div class="card-body">

                <form method="POST" action="{{ route('video.store') }}" class="forms-sample" enctype="multipart/form-data">
              @csrf
              
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>VIDEO TITLE</label>
                        <input type="text" class="form-control" name="video_title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>VIDEO DESCRIPTION</label>
                        <textarea class="form-control textarea" name="video_description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>CHOOSE VIDEO</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="video_display">
                      <label class="custom-file-label">Choose file</label>
                    </div>
                   </div>
                   </div>
                 </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Save VIDEO</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection