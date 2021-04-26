@extends('admin::layouts.master')
 @section('content')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('admin::partials.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html">
                            <img class="main-logo" src="img/logo/logo.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
          @include('admin::partials.menu')
          @include('admin::partials.mobile-sidebar')
        </div>
        
      
       
       
      
     
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div>
                            	<h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{url('admin/category/create')}}">Add Category</a>
                            </div>
                            	 <table class="table table-bordered table-category">
							        <thead>
							            <tr>
							                <th>No</th>
							                <th>Category</th>
							                <th>Slug</th>
							                <th>Created at</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        </tbody>
							    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection