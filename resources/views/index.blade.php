@extends('home')

@section('content')

	
	<!-- BEGIN CONTENT -->
	    <div class="page-content-wrapper">
	        <!-- BEGIN CONTENT BODY -->
	        <div class="page-content">
	            <!-- BEGIN PAGE HEADER-->
	            
	            <!-- BEGIN PAGE BAR -->
	            <div class="page-bar">
	                <ul class="page-breadcrumb">
	                    <li>
	                        <a href="{{url('admin/index')}}">Home</a>
	                        <i class="fa fa-circle"></i>
	                    </li>
	                   <!--  <li>
	                        <a href="#">Blank Page</a>
	                        <i class="fa fa-circle"></i>
	                    </li> -->
	                   
	                </ul>
	            </div>
	            <!-- END PAGE BAR -->
	            <!-- BEGIN PAGE TITLE-->
	            <h1 class="page-title"> Blank Page Layout
	                <small>blank page layout</small>
	            </h1>
	            <!-- END PAGE TITLE-->
	            <!-- END PAGE HEADER-->

	            @if(Session::has('SUCCESS'))
						{{Session::get('SUCCESS')}}
				@endif
				
	          
	        </div>
	        <!-- END CONTENT BODY -->
	    </div>
    <!-- END CONTENT -->
		
    	

				 
	@stop




