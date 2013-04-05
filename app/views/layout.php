<!DOCTYPE html>
<html>
<head>
  <title>GradeBook</title>
  
  
    
  <script src="/assets/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
  
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="/assets/stylesheets/application.css" type="text/css" media="screen" title="no title" charset="utf-8">
  
  
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="page">
  <div id="header">
    <h1>GradeBook</h1>
  </div>
  <div id="navigation">
    <ul class="right">
      <? if(current_user()) { ?>
        <li>You are: <?= current_username ?></li>
        <li>Account Type: <?= current_usertype ?></li>
        <li><a href="/signout.php">Sign Out</a></li>
      <? } else { ?>
        <li><a href="/signin.php">Sign In</a></li>
        <li> <a href="/users/new.php">Create Account</a></li>
      <? } ?>
    </ul>
    
    <ul>
      <? if(current_user()) { ?>
        <li><a href="/">Home</a></li>
        <li><a href="/assignments.php">Assignments</a></li>
        <li><a href="/assignments.php">Submissions</a></li>
      <? } else { ?>
        &nbsp;
      <? } ?>
    </ul>
  </div>
  
  <? if (flash("error")) { ?>
    <div style="padding:10px">
      <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= flash("error") ?>
      </div>
    </div>
  <? } ?>
  

  
  <div id="content">
    <?= $content ?>
  </div>
  <div id="footer">
    
  </div>
</div>
</body>
</html>

