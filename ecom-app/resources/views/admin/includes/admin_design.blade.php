<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.head')
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            @include('admin.includes.header')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('admin.includes.sidebar')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            @yield('content')
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		@include('admin.includes.script')