<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
   
<div class="container">

    <button onclick="totalclick(-1)">-</button>
    <span id="totalclicks">0</span>
    <button onclick="totalclick(1)">+</button>
     <br>
    <button>Add</button>
</div>
<script>
    function totalclick(click) {
     const totalclicks = document.getElementById('totalclicks');
     const sumvalue = parseInt(totalclicks.innerText) + click;
     totalclicks.innerText = sumvalue;

     if(sumvalue < 0){
        totalclicks.innerText = 0;
     }
    } 
    
</script>
</body>
</html>