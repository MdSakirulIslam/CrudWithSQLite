@extends('master')
@section('title','Product list Page')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center text-danger">{{session('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Product Name</th>
                                    <th>Product Id</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action Mode</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lists as $list)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$list->name}}</td>
                                        <td>{{$list->productCode}}</td>
                                        <td>{{$list->description}}</td>
                                        <td>
                                            <img src="{{asset($list->image)}}" alt="" height="70" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('edit.product',['id'=>$list->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('delete.product',['id'=>$list->id])}}" class="btn btn-danger btn-sm">Delete</a>
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
    </section>
@endsection


