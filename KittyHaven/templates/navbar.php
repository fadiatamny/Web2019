<?php
function baseNav()
{
  echo '<nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1 sticky sticky-top">  
  <a href="../index.html" id="blacklogo"></a>
  ';
}
function printNav($userPic)
{
  baseNav();
  if ($userPic != '') {
    echo '  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="' . $userPic . '" class="rounded-circle z-depth-0 profile-pic" style="height:50px;"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="../index.html">Log out</a>
        </div>
      </li>
    </ul>
  </div>';
  }
  echo '</nav>';
}
