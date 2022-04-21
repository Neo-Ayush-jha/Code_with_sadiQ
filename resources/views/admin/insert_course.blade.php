@extends('admin/master')
@section('jha')
   <div class="content">
       <div class="container mt-2 mx-auto">
           <div class="row">
               <div class="col-6 offset-3">
                   <div class="card shadow">
                       <div class="card-body">
                           <h5 class="text-center py-0 my-0">Insert course</h5>
                           <hr>
                           <form action="{{route('course.store')}}" method="post"  enctype="multipart/form-data">
                               @csrf
                                <div class="mb-2">
                                    <label for="">title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                                    @error('title')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">category</label>
                                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{old('name')}}">
                                    @error('category')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-2 col">
                                        <label for="">price</label>
                                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
                                        @error('price')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-2 col">
                                        <label for="">discount_price</label>
                                        <input type="text" name="discount_price" class="form-control @error('discount_price') is-invalid @enderror" value="{{old('discount_price')}}">
                                        @error('discount_price')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="mb-2 col-12">
                                                <label for="">duration</label>
                                                <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" value="{{old('duration')}}">
                                                @error('duration')
                                                    <p class="text-danger small">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-12">
                                                <label for="">Image</label>
                                                <input type="file" name="image"  class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
                                                @error('image')
                                                    <p class="text-danger small">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 col-6">
                                        <label for="">description</label>
                                        
                                        <textarea name="description" rows="4" class="form-control @error('image') is-invalid @enderror" id="description" placeholder="description">{{old('description')}}</textarea>
                                        @error('description')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="mb-2">
                                    <input type="submit" name="submit" class="btn btn-success w-100">
                                </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection