<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
   <div class="row">
       <div class="col-6">
           <h3>Blog</h3>
               <?php foreach($data["blog"] as $blog) :?>
               <ul>
                   <li><?= $blog["penulis"]; ?></li>
                   <li><?= $blog["judul"]; ?></li>
                   <li><?= $blog["tulisan"]; ?></li>
               </ul>
           <?php endforeach; ?>
       </div>
   </div>
</div>
</body>
</html>