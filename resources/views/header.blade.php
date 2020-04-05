<!--container-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="top">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{ url('/homepage') }}" id="website-name"><span class="glyphicon glyphicon-education"></span> WISSEN</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['username'])): ?>
        <li style="color: #3BABFD; padding: 12px;">Welcome <?php echo $_SESSION['username']; ?>!!</li>
      <?php endif; ?>
      <li class="active"><a href="{{ url('/homepage') }}"><span class="glyphicon glyphicon-home" id="span-hover"></span> Home</a></li>
      <li><a href="{{ url('/aboutus') }}"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
      <li><a href="{{ url('/contactus') }}"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
      <li><a href="{{ url('/events') }}"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
      <?php if(isset($_SESSION['username'])): ?>
        <li style="background-color: #3BABFD;"><a href="index.php?logout='1'" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <?php else: ?>
        <li><a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li style="background-color: #3BABFD;"><a href="{{ url('/auth/login') }}" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php endif; ?>
    </ul>
   </div>
  </div>
</nav>
<!--/container-->