@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Digimon Xros Wars
@endsection

<!-- [ Main Content ] -->
<section class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ Breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Digimon Xros Wars Main Page</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Character Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Breadcrumb ] -->

        <!-- [ Main Content ] -->
        <div class="row">
           
    <!-- [ Table 1 ] -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Character</h5>

                <a href="{{ route('digimonxroswars.add') }}" class="btn btn-primary ms-auto">
                <i class="fas fa-location-arrow"></i>&nbsp;&nbsp;Add Character</a>
            </div> 
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Character</th>
                                <th class="text-center">Digivise</th>
                                <th class="text-center">Team Logo</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($digimonxroswars as $key => $item)
                            <tr>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->character_img)) ? url('Images/Digimon_Xros_Wars/'.$item->character_img) : url('Images/digitama.png') }}"
                                width="150" height="250">
                                    <div>{{ $item->character_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->digivise_img)) ? url('Images/Digimon_Xros_Wars/'.$item->digivise_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->digivise_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->teamlogo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->teamlogo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->teamlogo_name }}</div>
                                </div></td>
                                <td class="text-center"> 
                                <a href="{{ route('digimonxroswars.show',$item->id) }}" class="btn btn-warning">
                                <i class="fas fa-expand"></i>&nbsp;&nbsp;Show Data</a>
                                <a href="{{ route('digimonxroswars.edit',$item->id) }}" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit Data</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#digimonxroswars{{$item->id}}">
                                <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete Data</button>

                                   <!-- Delete Modal -->
                                  <form method="post" action="{{ route('digimonxroswars.delete', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('delete')

                            <div class="modal fade" id="digimonxroswars{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Table 1 ] -->

    <div class="row">

    <!-- [ Table 2 ] -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Digimon Evolution</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Child</th>
                                <th class="text-center">Ultimate</th>
                                <th class="text-center">Xros 1</th>
                                <th class="text-center">Xros 2</th>
                                <th class="text-center">Xros 3</th>
                                <th class="text-center">Xros 4</th>
                                <th class="text-center">Xros 5</th>
                                <th class="text-center">Xros 6</th>
                                <th class="text-center">Xros 7</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        @foreach($digimonxroswars as $key => $item)
                        <tbody>
                            <tr>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->child_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->child_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->child_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->ultimate_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->ultimate_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->ultimate_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros1_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros1_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros1_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros2_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros2_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros2_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros3_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros3_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros3_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros4_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros4_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros4_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros5_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros5_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros5_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros6_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros6_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros6_evo_name }}</div>
                                </div></td>
                                <td class="text-center">
                                <div>
                                <img src="{{ (!empty($item->xros7_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$item->xros7_evo_img) : url('Images/digitama.png') }}"
                                width="150" height="150">
                                    <div>{{ $item->xros7_evo_name }}</div>
                                </div></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Table 2 ]-->

         </div>          
        </div>
        <!-- [ Main Content ] -->
    </div>
</section>
<!-- [ Main Content ] -->

@endsection