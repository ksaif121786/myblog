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
                            	<h4>{{ $page_title }}</h4>
                            <div class="add-product">
                                <!-- <a href="{{url('admin/category/create')}}">Add Product</a> -->
                            </div>
                            	 
                                

                                <form method="POST" action="{{  url('/admin/category/store') }}">
                                 @csrf
                            	 <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category" name="category_name">
                                                        <p>{{ $errors->first('category_name') }}</p>
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Title">
                                                    </div> -->
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Slug" name="slug">
                                                        <p>{{ $errors->first('slug') }}</p>
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Description">
                                                    </div> -->
                                                    <!-- <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div> -->
                                                   <!--  <div class="input-group mg-b-pro-edt"> <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div> -->
                                                   <!--  <select name="select" class="form-control pro-edt-select form-control-primary">
                                                        <option value="opt1">Select One Value Only</option>
                                                        <option value="opt2">2</option>
                                                        <option value="opt3">3</option>
                                                        <option value="opt4">4</option>
                                                        <option value="opt5">5</option>
                                                        <option value="opt6">6</option>
                                                    </select> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                </div>
                                            </div>
                                        </div>

                                        </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endsection