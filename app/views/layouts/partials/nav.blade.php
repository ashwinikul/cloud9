<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a  class="navbar-brand" href="#">Cloud9 Computing</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php $homeNav = ""; ?>
        <?php $servicesNav = ""; ?>
        <?php $contactNav = ""; ?>

        @if($section == "home")
          <?php $homeNav = "active"; ?>

        @elseif($section == "services")
          <?php $servicesNav = "active"; ?>

        @elseif($section == "contact")
          <?php $contactNav = "active"; ?>
        @endif

        <li class="{{$homeNav}}"><a href="/">Home<span class="sr-only"></span></a></li>
        <li class="{{$servicesNav}}"><a href="/services">Services</a></li>
        <li class="{{$contactNav}}"><a href="/contact">Contact</a></li>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>