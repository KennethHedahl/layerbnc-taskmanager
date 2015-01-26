<?php

class Design {

    private function __construct() {
        
    }

    /**
     *
     * $setup = array(title, headline, description, keywords);
     *
     */
    public static function header($setup = array()) {

        echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>' . $setup["title"] . ' - LayerTask</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="' . Config::$sys_url . '/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="' . Config::$sys_url . '/css/bootstrap_min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="' . Config::$sys_url . '/js/html5shiv.js"></script>
      <script src="' . Config::$sys_url . '/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="' . Config::$sys_url . '/?cid=home" class="navbar-brand">LayerTask</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav"> 
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Tasks <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="Tasks">
                <li><a href="./bootstrap.min.css">Create new</a></li>
                <li><a href="./bootstrap.css">List All</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">My tasks</a></li>
                <li><a href="./bootswatch.less">Finished tasks</a></li>
              </ul>
              <li>
              <a href="' . Config::$sys_url . '/?cid=help">Help</a>
              </li>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">' . $_SESSION['nickname'] . ' <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="Tasks">
                <li><a href="' . Config::$sys_url . '/?cid=profile">My Profile</a></li>
                <li><a href="' . Config::$sys_url . '/?cid=settings">Settings</a></li>
                <li class="divider"></li>
                <li><a href="' . Config::$sys_url . '/login.php?action=logout">Logout</a></li>
              </ul>
              </li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container">
    <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-12 col-md-7 col-sm-6">
            <h1>' . $setup['name'] . '</h1>
            <p class="lead">' . $setup['description'] . '</p>
          </div>
        </div>
      </div>';
    }

    public static function footer() {
        echo '<hr><div id="source-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <pre></pre>
            </div>
          </div>
        </div></div>
             <footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="http://layerbnc.org">LayerBNC Website</a></li>
              <li><a href="https://dfine.net/">dFine.net</a></li>
            </ul>
            Copyright &copy; 2015 dFine.net - All rights reserved. This system is licensed for use by LayerBNC.org
          </div>
        </div>

      </footer>


    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="' . Config::$sys_url . '/js/bootstrap_min.js"></script>
    <script src="' . Config::$sys_url . '/js/bootswatch.js"></script>
  </body>
</html>';
    }

}
