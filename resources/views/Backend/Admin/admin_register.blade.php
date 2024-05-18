@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Admin Register Page
@endsection

 <!-- Page wrapper  -->
 <div class="page-wrapper">

    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Admin Register Page</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.register') }}" class="text-muted">Register Box</a></li>
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
            <h4 class="card-title">All User Data</h4>
            <div class="row">
    </div>

    <div class="table-responsive">
        <table class="table no-wrap v-middle mb-0">
            <thead>
                <tr class="border-0">
                    <th class="border-0 font-14 font-weight-medium text-muted">No.</th>
                    <th class="border-0 font-14 font-weight-medium text-muted">Team Image</th>
                    <th class="border-0 font-14 font-weight-medium text-muted">Username </th>
                    <th class="border-0 font-14 font-weight-medium text-muted">Name & Email</th>
                    <th class="border-0 font-14 font-weight-medium text-muted">Phone</th>
                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Status</th>
                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Created At</th>
                </tr>

            </thead>
            <tbody>

                @foreach($adminData as $key => $item)

                <tr>
                    <td> {{ $key+1 }} </td>
                    <td> <img src="{{ (!empty($item->photo)) ? url('Images/Admin_Profile/'.$item->photo) : url('Images/admin.png') }}" alt="user" class="rounded-circle"
                    width="70" height="70" /></td>
                    <td> {{ $item->username }} </td>
                    <td>
                        <h6 class="text-dark mb-0 font-15 font-weight-medium"> {{ $item->name }} </h6>
                        <span class="text-muted font-14"> {{ $item->email }} </span>
                    </td>
                        <td><span class="text-muted font-14">{{ $item->phone }}</span></td>
                        <td class="text-center px-2 py-4"><span class="badge badge-pill badge-success">{{ $item->status }}</span></td>
                        <td>{{ $item->created_at }}</td>
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
