<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>
                                                    <!-- <div class="container">
                                                      <div class="online_users col-md-4">
                                                        <h3>Online Users</h3>
                                                            <ul class="list_onlineusers list-group">


                                                            </ul>
                                                        </div> -->
                                                          <div class="col-md-8 column">
                                                              <div class="row clearfix">
<?php
    include '_database/database.php';
    session_start();
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username != '$current_user' order by user_id desc";
    //$sql1 = "UPDATE user SET online_status='1' WHERE user_id=1489"
    $result = mysqli_query($database,$sql) or die(mysqli_error($database));
    while($rws = mysqli_fetch_array($result)){
?>
                                                                  <div class="col-md-4 column">
                                                                    <div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
                                                                        <div class="panel panel-default">
                                                                            <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                                                                                <div class="panel-body">
                                                                                    <div class="col-md-6 column">
                                                                                        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-responsive">
                                                                                    </div>
                                                                                    <div class="col-md-6 column">
                                                                                        <h4><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>

 <?php } ?>
                                                              </div>
                                                          </div>

                                                  </div>
