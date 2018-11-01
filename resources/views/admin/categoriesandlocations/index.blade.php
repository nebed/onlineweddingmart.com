@extends('template')

@section('title','Categories & Locations | OWM')

@section('content')

	@include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                    @include('partials.messages')
                <div class="row justify-content-end">
                    <h3 class="title-5 m-b-35 text-center">Categories And Locations</h3>
                    <div class="row">

                    </div>
                </div>
                	<div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            {{Form::open(['route'=>'categories.store','method'=>'post'])}}
                            {{Form::text('name',null,['placeholder'=>'Category Name','class'=>'form-control'])}}
                            {{Form::text('slug',null,['placeholder'=>'Category URL, no spaces','class'=>'form-control'])}}
                            {{Form::submit('Create Category',['class'=>'btn btn-primary'])}}
                            {{Form::close()}}
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            {{Form::open(['route'=>'locations.store','method'=>'post'])}}
                            {{Form::text('name',null,['placeholder'=>'Location Name','class'=>'form-control'])}}
                            {{Form::text('slug',null,['placeholder'=>'Loaction URL, no spaces','class'=>'form-control'])}}
                            {{Form::submit('Create Location',['class'=>'btn btn-primary'])}}
                            {{Form::close()}}
                            </div>
                            </div>
                	<div class="col-md-12">
                        <h3 class="title-5 m-b-35 text-left">All Categories</h3>
                		<div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>No of Registered Vendors</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->slug}}</td>
                                                <td>{{$category->vendors->count()}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35 text-left">All Locations</h3>
                        <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>No of Registered Vendors</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($locations as $location)
                                            <tr>
                                                <td>{{$location->name}}</td>
                                                <td>{{$location->slug}}</td>
                                                <td>{{$location->vendors->count()}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>
                </div>
            </section>

            @include('partials.adminfooter')

        </div>

    </div>
@endsection