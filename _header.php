<?php
echo'<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/mypolicy">myPolicy</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/mypolicy/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/mypolicy/member.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Policy Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/mypolicy/memberlist.php">Member List</a>
      </li>
    </ul>
    <form class="d-flex" role="search">
    <a class="btn btn-outline-success" href="/mypolicy/logout.php">Logout</a>
  </form>
  </div>
</div>
</nav>';
?>