@extends('main')

@section('title', 'User Profile | OWM')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{URL::asset('images/contact.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			@if($customer->wedding)
			{{$customer->wedding->name}}
			@endif
		</h2>
		<label for="image">Change Picture</label>
		<input name="image" class="file-upload" type="file" accept="image/*"/>
</section>

<div class="container-fluid m-3">

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">Profile</div>
                <div class="card-body text-center mtext-104">
                 <table class="table table-sm table-striped">
                    <tbody>
                      <tr>
                        <td>
                      	<a href="#yourwedding">Your Wedding
                    	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#checklist">Checklist
                      	</a></td>
                      </tr>
                      <tr>
                      	<td>
                      	<a href="#shortlist">Shortlist
                      	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#finalized">Finalized
                    	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#reviews">Reviews
                    	</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
			</div>
			<div class="col-md-6">
				<!--Your Wedding -->
				<div id="yourwedding" class="card card-border-color">
	                <div class="card-header mtext-104 bg1 cl0">Your Wedding</div>
	                <div class="card-body">
	                	@if($customer->wedding)
	                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
	                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
	                  	@endif
	                  	@if(!$customer->wedding)
	                  		{{Form::open(['route'=>'create.wedding', 'id'=>'createwedding'])}}
	                  		<div class="form-group">
                        	{{ Form::label('name', 'Wedding Name:', ['for'=>'name','class'=>''])}}
                        	{{Form::text('name', null, ['class'=>'form-control','type'=>'text', 'id'=>'wedding-name'])}}
                    		</div>
                    		<div class="form-group">
                        	{{ Form::label('date', 'Date of Wedding', ['for'=>'date','class'=>''])}}
                        	{{Form::text('date', null, ['class'=>'form-control','type'=>'text', 'id'=>'wedding-date','placeholder'=>'Ex: 2018-04-11'])}}
                    		</div>
                    		{{Form::submit('Create Wedding', ['class' => 'submit stext-101 cl0 btn bg1 bor1 hov-btn2 p-lr-15 trans-04'])}}
                    		{{Form::close()}}
	                  	@endif
	                </div>
                </div>

                <!--Checklist-->
                <div id="checklist" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Checklist</div>
	                <div class="card-body">
	                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
	                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
	                </div>
                </div>

                <!--Shortlist -->
                <div id="shortlist" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Shortlist</div>
	                <div class="card-body">
	                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
	                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
	                </div>
                </div>

                <!--Finalized-->
                <div id="finalized" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Finalized Vendors</div>
	                <div class="card-body">
	                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
	                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
	                </div>
                </div>

                <!--Reviews-->
                <div id="reviews" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Reviews</div>
	                <div class="card-body">
	                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
	                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
	                </div>
                </div>

			</div>
			<div class="col-md-3">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">Border default</div>
                <div class="card-body">
                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
                </div>
              </div>
			</div>
		</div>
	</div>
          
</div>

@endsection

@section('script')

<script type="text/javascript">

$('#createwedding').on('submit', function(e) {
       e.preventDefault(); 
       $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    	});
       $.ajax({
           type: "POST",
           url: '/user/yourwedding/create',
           data: $(this).serialize(),
           success: function( data ) {
               alert( data );
           }
       });
   });
</script>

@endsection