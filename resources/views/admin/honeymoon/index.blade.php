@extends('template')

@section('title','All Honeymoon Packages | OWM')

@section('content')

	@include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                <div class="row justify-content-end">
                	<h3 class="title-5 m-b-35 text-right">All Honeymoon Packages</h3>
                	<div class="col-md-3 m-b-10">
                		<a href="{{route('honeymoons.create')}}" class="btn btn-block btn-primary">Create New Package</a>
                	</div>
                </div>
                	<div class="row">
                	<div class="col-md-12">
                		<div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Cost</th>
                                                <th>Overview</th>
                                                <th>Date Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($honeymoons as $honeymoon)
                                            <tr>
                                                <td>{{$honeymoon->name}}</td>
                                                <td>{{$honeymoon->price}}</td>
                                                <td>{{$honeymoon->overview}}</td>
                                                <td>{!!substr($honeymoon->description, 0,56)!!}</td>
                                                <td>{{date('F j, Y',strtotime($honeymoon->created_at))}}</td>
                                                <td>
                                                <div class="table-data-feature">
                                                    <a class="item" href="{{route('honeymoons.show',$honeymoon->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </a>
                                                    <a  href="{{route('honeymoons.edit',$honeymoon->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    {{Form::open(['route'=>['honeymoons.destroy',$honeymoon->id],'method'=>'delete','id'=>'deletepost'])}}
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                	{{Form::close()}}
                                                </div>
                                            </td>
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