@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Discounted Price</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>

                @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->p_title}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->discount_price}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->image}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-success " data-bs-toggle="dropdown" >Action</button>

                            <div class="dropdown-menu">
                                <a href="" class="dropdown-item">Edit</a>
                                <a href="" class="dropdown-item">View</a>
                                <form action="{{route("admin.product.delete",["id"=>$item->id])}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="">
                                    <button typr="submit" class="dropdown-item">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection