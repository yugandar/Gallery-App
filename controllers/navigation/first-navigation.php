<?php
$current_user = $_SESSION['user_username'];
$sql = "SELECT * FROM user WHERE user_username='$current_user'";
$result = mysqli_query($database,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
  ?>
  <!-- Navbar1 -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="fluid-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><b>Sample app!</b></a>
      </div>
      <div class="navbar-collapse collapse" id="navbar-collapse1">
        <ul class="nav navbar-nav">
          <li>
            <a href="home.php"><i class="fa fa-home"></i> Home</a>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off"  action="search-result.php">
          <div class="form-group">
            <ul class="nav navbar-nav">
              <li>
                <span class="search-panel">
                  <a class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span id="search_concept">Filter by: &nbsp;</span><i class="fa fa-arrow-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#name">Name&nbsp;</a></li>
                    <li><a href="#date">Date&nbsp;</a></li>
                    <li><a href="#Hobbies">Hobbies&nbsp;</a></li>
                  </ul>
                </span>
              </li>
            </ul>
          </div>

          <div class="form-group">
            <input  type="hidden" name="search_param form-control" id="searchbox" value="all" id="search_param">
            <input  type="search" class="search form-control" name="search-form" placeholder="Search term...">
          </div>
          <!-- <div class="form-group">
            <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div> -->
        </form>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>
            <ul class="dropdown-menu">
              <li>
                <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
              </li>
            </ul>
          </li>

        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!-- ./Navbar1 -->
  <?php
}
?>
