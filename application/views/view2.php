<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<nav class="container1">
  <div class="beranda">Beranda</div>
  <div>Pencarian</div>
  <div>Keluar</div>
</nav>
</body>
</html>

<style>

.container1{
    display: flex;
    border: 5px solid #ffcc5c;
    justify-content: flex-end;
    
}

.beranda{
    margin-right: auto;
}

.container1 > div {
    padding: 10px;
    text-align: center;
    font-size: 2em;
    color: #ffeead;
  }

  html, body {
    background-color: #C8FFD4;
    margin: 10px;
  }
  
  .container1 > div:nth-child(1) {
    background-color: #1D1CE5;	
  }
  
  .container1 > div:nth-child(2) {
    background-color: #CF0A0A;
  }
  
  .container1 > div:nth-child(3) {
    background-color: #FCE700;
  }
  
  
</style>