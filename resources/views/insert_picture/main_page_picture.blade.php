@extends('layout_page.master')
@section('admin')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> PICTURE INSERT</h4>
                <a href="{{ route('picture.create') }}" class="btn btn-info btn-round">Add New Data</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>NO</th>
                      <th>PICTURE NAME</th>
                      <th>PICTURE DESCRIPTION</th>
                      <th>DISPLAY</th>
                      <th></th>
                    </thead>
                    <tbody>

                    @foreach($picture as $key => $item)

                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->picture_title }}</td>
                        <td>{{ $item->picture_description }}</td>
                        <td><img src="{{ (!empty($item->picture_display)) ? url('Database/'.$item->picture_display) : url('Images/admin.png') }}"
                        height="100px;" width="100;"></td>
                        <td class="text-center">
                        <a href="{{ route('download.picture', ['filename' => $item->picture_display]) }}" class="btn btn-success btn-round">Download</a>
                        <a href="{{ url('Database/'.$item->picture_display) }}" target="_blank" class="btn btn-warning btn-round">Show Data</a>
                        </td>
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

@endsection