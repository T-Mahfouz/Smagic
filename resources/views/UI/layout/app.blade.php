<!DOCTYPE html>
<html dir="rtl">

@include('UI.includes.head')
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
   <div class="page-wrapper">
      @include('UI.includes.header')
      <!-- start page container -->
      <div class="page-container">
          @include('UI.includes.sidebar')
          @yield('content')
      </div>
      <!-- end page container -->
   </div>

   @include('UI.includes.scripts')
   <!-- end js include path -->
</body>

</html>
