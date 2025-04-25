@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Dashboard
@endsection

<!-- [ Main Content ]  -->
<section class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ Breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Breadcrumb ] -->

        <!-- [ Main Content ] -->
        <div class="row">
           
            <!-- [ Table ]  -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                 <h5 class="mb-0">Digimon Compilation</h5>

            <a href="{{ route('overall.add') }}" class="btn btn-primary ms-auto">
                <i class="fas fa-location-arrow"></i>&nbsp;&nbsp;Add Digimon List</a>
                 </div>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Digimon Logo</th>
                                        <th class="text-center">Digimon Name</th>
                                        <th class="text-center">Result</th>
                                    </tr>
                                </thead>

                            <tbody>
                                    @foreach($overall as $key => $item)
                                <tr>
                                    <td class="text-center"><img src="{{ (!empty($item->digimon_logo)) ? url('Images/Logo/'.$item->digimon_logo) : url('Images/digitama.png') }}"
                                        height="100px;" width="200;"></td>
                                    <td class="text-center">{{ $item->digimon_name }}</td>
                                    <td class="text-center"> 
                                    <a href="{{ route('overall.show',$item->id) }}" class="btn btn-warning">
                                        <i class="fas fa-expand"></i>&nbsp;&nbsp;View Result</a>
                                    <a href="{{ route('overall.edit',$item->id) }}" class="btn btn-success">
                                        <i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit Result</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logo{{$item->id}}">
                                        <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete Result</button>

                                   <!-- Delete Modal -->
                                  <form method="post" action="{{ route('overall.delete', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('delete')

                            <div class="modal fade" id="logo{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel"><b>Delete Data</b></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span></button>
                                    </div>
                                   <div class="modal-body">
                                 <h5 class="text-left">Are You Sure Want To Delete</h5>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Table ] -->
           
        </div>
        <!-- [ Main Content ] -->

    </div>
</section>
<!-- [ Main Content ] -->

@endsection
