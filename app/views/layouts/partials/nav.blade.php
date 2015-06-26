<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a  class="navbar-brand" href="/">Cloud9 Computing</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php $homeNav = ""; ?>
        <?php $pricingNav = ""; ?>
        <?php $contactNav = ""; ?>
        <?php $portfolioNav = ""; ?>

        @if($section == "home")
          <?php $homeNav = "active"; ?>

        @elseif($section == "pricing")
          <?php $pricingNav = "active"; ?>

        @elseif($section == "contact")
          <?php $contactNav = "active"; ?>

          @elseif($section == "portfolio")
          <?php $portfolioNav = "active"; ?>
        @endif

        <li class="{{$homeNav}}"><a href="/">Home<span class="sr-only"></span></a></li>
        <li class="{{$pricingNav}}"><a href="/pricing">Pricing</a></li>
        <li class="{{$contactNav}}"><a href="/contact">Contact</a></li>
        <li class="{{$portfolioNav}}"><a href="/portfolio">Portfolio</a></li>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>