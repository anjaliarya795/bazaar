@extends('admin.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#insert">Add</button>
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
            </div>
            
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>action</th>
                </tr>

                @foreach ($categories as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->title}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-success " data-bs-toggle="dropdown" >Actiion</button>

                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Edit</a>
                                    <a href="" class="dropdown-item">View</a>
                                    <a href="" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection