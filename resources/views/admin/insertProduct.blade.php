@extends('admin.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route("admin.product.insert")}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="p_title" id="" class="form-control">
                        @error('p_title')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" id="" class="form-control">
                        @error('price')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Brand</label>
                        <input type="text" name="brand" id="" class="form-control">
                        @error('brand')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Discounted Price</label>
                        <input type="text" name="discount_price" id="" class="form-control">
                        @error('discount_price')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="categor_id" id="" class="form-control">
                            <option value="">Select category</option>
                            @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                        <a href="#insert" data-bs-toggle="modal">Add new Category</a>
                        @error('category_id')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="description" id="" class="form-control">
                        @error('description')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                        @error('image')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Add Product" class="w-50 btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id ="insert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST" action="{{route(admin.category.insert)}}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="title" id="" class="form-control">
                            <input type="submit" class="btn btn-success" value="Add Category">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection