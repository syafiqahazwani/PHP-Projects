@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Work Dashboard
@endsection

        <!-- Page wrapper  -->
        <div class="page-wrapper">

    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Work Main Page</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('work.page') }}" class="text-muted">Work Page</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- End Bread crumb and right sidebar toggle -->

    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Start Page Content -->

        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-cyan text-center">
                                        <h1 class="font-light text-white" class="num" data-val="{{ $numberWork }}">{{ $numberWork }}</h1>
                                        <h6 class="text-white">Programming Data</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                </div>

                <div class="col-12 align-self-center">
                    <div class="customize-input float-right">
                <a href="{{ route('work.add') }}" class="btn waves-effect waves-light btn-rounded btn-secondary"><i class="fas fa-laptop"></i>&nbsp;  Add On Work</a>
                </div>
            </div>
            <br>
            <br>

                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Type of Programming</th>
                                <th>What Use For Programming</th>
                                <th class="text-center">Easy Or Hard</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($work as $key => $item)

                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $item->programming_name }}</td>
                                <td>{{ $item->use_programming }}</td>
                                <td class="text-center">@if($item->easy_hard==1)
                                    <a href="" class="badge badge-pill badge-success">Easy</a>
                                   @else
                                  <a href="" class="badge badge-pill badge-danger">Hard</a>
                                   @endif</td>
                                <td class="text-center">
                                    <a href="{{ route('work.edit',$item->id) }}" class="btn btn-warning btn-circle" data-toggle="tooltip"
                                    data-placement="bottom" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>

                        <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModal3{{$item->id}}" data-toggle="tooltip"
                            data-placement="bottom" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i></button>

        <!-- Delete Modal -->
        <form method="post" action="{{ route('work.delete', $item->id) }}" accept-charset="UTF-8" style="display:inline">
        @csrf
        @method('delete')

        <div class="modal fade" id="exampleModal3{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Work Delete</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-left">Are You Sure Want To Delete <b>{{$item->programming_name}}</b>???</h5>
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

                            @endforeach

                        </tbody>

                            </table>
                            {{ $work->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- End Container fluid  -->

            <script>
                let valueDisplays = document.querySelectorAll(".num");
                let interval = 4000;

                valueDisplays.forEach((valueDisplay) => {
                  let startValue = 0;
                  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                  let duration = Math.floor(interval / endValue);
                  let counter = setInterval(function () {
                    startValue += 1;
                    valueDisplay.textContent = startValue;
                    if (startValue == endValue) {
                      clearInterval(counter);
                    }
                  }, duration);
                });
                </script>

@endsection
