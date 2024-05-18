@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Food Dashboard
@endsection

        <!-- Page wrapper  -->
        <div class="page-wrapper">

    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Food Main Page</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('food.page') }}" class="text-muted">Food Page</a></li>
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
                                        <h1 class="font-light text-white" class="num" data-val="{{ $numberFood }}">{{ $numberFood }}</h1>
                                        <h6 class="text-white">Best Food Data</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                </div>

                <div class="col-12 align-self-center">
                    <div class="customize-input float-right">
                <a href="{{ route('food.add') }}" class="btn waves-effect waves-light btn-rounded btn-secondary"><i class="fas fa-utensils"></i>&nbsp;  Add On Food</a>
                </div>
            </div>
            <br>
            <br>

                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Food Image</th>
                                <th>Food Name</th>
                                <th>Food Which Country</th>
                                <th>Food Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($food as $key => $item)

                <tr>

                    <td class="text-center">{{ $key+1 }}</td>
                    <td class="text-center"><img src="{{ (!empty($item->food_image)) ? url('Images/Food_Page/'.$item->food_image) : url('Images/admin.png') }}"
                        height="100px;" width="100;"></td>
                    <td>{{ $item->food_name }}</td>
                    <td>{{ $item->food_which_country }}</td>
                    <td>{{ $item->food_description }}</td>
                    <td class="text-center">
                        <a href="{{ route('food.edit',$item->id) }}" class="btn btn-warning btn-circle" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Edit"><i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('food.show',$item->id) }}" class="btn btn-success btn-circle" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="View"><i class="fas fa-eye"></i>
                    </a>

                    <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#food{{$item->id}}" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i></button>

    <!-- Delete Modal -->
    <form method="post" action="{{ route('food.delete', $item->id) }}" accept-charset="UTF-8" style="display:inline">
    @csrf
    @method('delete')

    <div class="modal fade" id="food{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Food Delete</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <h5 class="text-left">Are You Sure Want To Delete <b>{{$item->food_name}}</b>???</h5>
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
                            {{ $food->links('pagination::bootstrap-5') }}
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
