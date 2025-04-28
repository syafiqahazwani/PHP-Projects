@extends('layout_page.master')
@section('admin')

<div class="content">
        <div class="row">
      
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add PDF</h5>
              </div>
              <div class="card-body">

              <form method="POST" action="{{ route('pdf.store') }}" class="forms-sample" enctype="multipart/form-data">
              @csrf

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>PDF TITLE</label>
                        <input type="text" class="form-control" name="pdf_title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>PDF DESCRIPTION</label>
                        <textarea class="form-control textarea" name="pdf_description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>CHOOSE PDF</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="pdf_display">
                      <label class="custom-file-label">Choose file</label>
                    </div>
                   </div>
                   </div>
                 </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Save PDF</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection