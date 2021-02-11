@extends('layouts.admin')

@section('title', 'Yacht List')


@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                Yachts
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admin_yacht_add')}}" type="button" class="btn bg-pink waves-effect">Add Yacht</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>

                            <div class="card">
                                <div class="header">
                                    <h2>
                                        List
                                    </h2>

                                </div>
                                <div class="body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Length Over All (LOA)</th>
                                            <th>Engine(s)</th>
                                            <th>Year Built</th>
                                            <th>Speed</th>
                                            <th>Hull</th>
                                            <th>Beam</th>
                                            <th>Sails</th>
                                            <th>Cabins</th>
                                            <th>Fuel Capacity</th>
                                            <th>Draft</th>
                                            <th>Generator Set</th>
                                            <th>CREW</th>
                                            <th>Status</th>
                                            <th>Image Gallery</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                @endif
                                            </td>
                                            <td>{{$rs->type}}</td>
                                            <td>{{$rs->lengthoverall}}</td>
                                            <td>{{$rs->engine}}</td>
                                            <td>{{$rs->yearbuilt}}</td>
                                            <td>{{$rs->speed}}</td>
                                            <td>{{$rs->hull}}</td>
                                            <td>{{$rs->beam}}</td>
                                            <td>{{$rs->sails}}</td>
                                            <td>{{$rs->cabins}}</td>
                                            <td>{{$rs->fuelcapacity}}</td>
                                            <td>{{$rs->draft}}</td>
                                            <td>{{$rs->generator}}</td>
                                            <td>{{$rs->crew}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_image_add',['yacht_id'=>$rs->id])}}"><i class="material-icons">image</i></a></td>
                                            <td><a href="{{route('admin_yacht_edit',['id'=>$rs->id])}}" ><i class="material-icons">edit</i></a></td>
                                            <td><a href="{{route('admin_yacht_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



