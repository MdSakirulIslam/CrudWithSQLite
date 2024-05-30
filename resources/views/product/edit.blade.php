@extends('master')
@section('title','Edit Product Page')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">Product Edit Form</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <form action="{{route('update.product',['id'=>$list->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"value="{{$list->name}}" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Code:</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{$list->productCode}}" name="productCode">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description">{{$list->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($list->image)}}" alt="" height="70" width="100">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Product Info">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


