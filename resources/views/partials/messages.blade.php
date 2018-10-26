@if (Session::has('success'))  

	<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">{{ Session::get('success') }}</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>

@endif

@if (Session::has('info'))  

	<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">{{ Session::get('info') }}</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
    </div>

@endif

 <!--<div class="alert alert-danger alert-dismissible">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p><strong>Errors:</strong>
		<ul> 

		<li></li>
		</ul>
		</p>
        </div>-->