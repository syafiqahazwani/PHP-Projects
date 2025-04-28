@extends('layout_page.master')
@section('admin')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> PDF INSERT</h4>
                <a href="{{ route('pdf.create') }}" class="btn btn-info btn-round">Add New Data</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>NO</th>
                      <th>PDF NAME</th>
                      <th>PDF DESCRIPTION</th>
                      <th>DISPLAY</th>
                      <th></th>
                    </thead>
                    <tbody>

                    @foreach($pdf as $key => $item)

                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->pdf_title }}</td>
                        <td>{{ $item->pdf_description }}</td>
                        <td>{{ $item->pdf_display }}</td>
                        <td class="text-center">
                        <a href="{{ route('download.pdf', ['filename' => $item->pdf_display]) }}" class="btn btn-success btn-round">Download</a>
                        <a href="{{ url('Database/'.$item->pdf_display) }}" target="_blank" class="btn btn-warning btn-round">Show Data</a>
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