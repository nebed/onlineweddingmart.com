@extends('template')

@section('title','Edit Honeymoon Package | OWM')

@section('stylesheet')
    {!! Html::style('vendor/select2/select2.min.css') !!}
    {!! Html::script('vendor/tinymce/tinymce.min.js')!!}
    <script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: ".ckeditor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('description')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('description')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
  tinymce.init(editor_config);</script>
@endsection

@section('content')

    @include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        </div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Create</strong>
                                            <small> Honeymoon Package</small>
                                        </div>
                                        <div class="card-body card-block">
                                            {!! Form::model(['route' => 'honeymoons.store', 'files'=>true]) !!}
                                            <div class="form-group">
                                            {{Form::label('name','Package Name:',['class'=>'form-control-label','for'=>'name'])}}
                                            {{Form::text('name',null,array('class'=>'form-control','required' => 'yes'))}}
                                            </div>

                                            <div class="form-group">
                                              {{ Form::label('featured_image','Upload Featured Image (1200x600):',['class'=>'form-control-label','for'=>'image']) }}
                                              {{ Form::file('featured_image') }}
                                            </div>
                                            <div class="form-group">
                                            {{Form::label('price','Cost:',['class'=>'form-control-label','for'=>'price'])}}
                                            {{Form::number('price',null,array('class'=>'form-control','required' => 'yes'))}}
                                            </div>
                                            <div class="form-group">
                                            {{Form::label('duration','Duration:',['class'=>'form-control-label','for'=>'duration'])}}
                                            {{Form::text('duration',null,array('class'=>'form-control','required' => 'yes'))}}
                                            </div>
                                            <div class="form-group">
                                            {{Form::label('overview','Overview:',['class'=>'form-control-label','for'=>'overview'])}}
                                            {{Form::textarea('overview',null,array('class'=>'form-control','required' => 'yes'))}}
                                            </div>
                                            <div class="form-group">
                                            {{Form::label('description','Package Description:')}}
                                            {{Form::textarea('description',null,array('class'=>'ckeditor form-control'))}}
                                            </div>
                                            <div class="form-group">
                                            {{Form::label('terms','Terms & Conditions:')}}
                                            {{Form::textarea('terms',null,array('class'=>'form-control'))}}
                                            </div>
                                            <div class="form-group">
                                            {{Form::submit('Create Package',array('class'=>'btn btn-info btn-lg btn-block','style'=>'margin-top:20px;'))}}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>

                            </div>
                        </div>
                </div>
            </section>

            @include('partials.adminfooter')
            
        </div>

    </div>
@endsection