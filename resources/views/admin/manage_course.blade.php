@extends('admin/master')
@section('jha')
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <p class="fs-2">Manage  item</p>
                <hr>
            </div>
            <div class="col-3">
                <div class="btn-group">
                   <a href="{{route('course.create')}}" class="btn btn-success">Insert Course</a>
                </div>
            </div>
        </div>
                <table class="table table-hoverd table-bordered mt-3">
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th> category</th>
                        <th> price</th>
                        <th> duration</th>
                        <th> description</th>
                        <th> image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($courses as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category}}</td>
                        <td><del>{{$item->price}}</del> {{$item->discount_price}}</td>
                        <td>{{$item->duration}}</td>
                        <td>{{$item->description}}</td>
                        <td><img src="{{asset("image/".$item->image)}}" style="height:50px"  alt=""></td>
                        <td>
                            <form action="{{route('course.destroy',$item)}}" method="post">
                                @method('put')
                                @csrf
                                <input type="submit" value="X" class="btn btn-danger">
                            </form>
                                {{-- <a href="{{route('course.destroy',["course"=>$item->id])}}" class="btn btn-danger btn-sm p-0"><i class="bi bi-trash"></i></a> --}}
                                <a href="{{route('course.edit',$item)}}" class="btn btn-success border border-1 btm-sm p-0"><i class="bi bi-pen"></i></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
    </div>
@endsection