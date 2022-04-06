<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Document</title>
   <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/')?>"></a>
    <img src="https://assets.promediateknologi.com/crop/0x0:0x0/750x500/photo/2021/11/26/1602817608.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/')?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/User')?>">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/Koleksi')?>">Koleksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/About')?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login/logout')?>">LogOut</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>