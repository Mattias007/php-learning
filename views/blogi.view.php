<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action='/blogi'>
<input type="text" name='postitus'>
<input type="submit"value='Postita'>
</form>

<?php foreach ($blogi as $blog) :?>
        
<div>

    <div id="info<?=$blog->id ?>" style="display: block;">
        <h1><?= $blog->text; ?> </h1>
    </div>

        <form id="edditform<?=$blog->id ?>" method="POST" action="/modify" style="display:none;">
            <input type="hidden"value="<?= $blog->id;?>" name="id">
            <input type="text"value="<?= $blog->text;?>" name="textupdate">
            <input type="submit"value="M">
        </form>

    <div class="timebox">
        <h3><?= $blog->timestamp; ?>
        <h3><?php if ( $blog->modified) echo "(modified)"   ?></h3>
    </div>



    <div>
        <form method="POST" action="/delete">
            <input type="hidden"value="<?= $blog->id;?>" name="id">
            <input type="submit"value="X">
        </form>

        <input type="button" value="M" onclick="edditfunction(<?=$blog->id ?>)"></input>


    </div>


</div>

<?php endforeach; ?>

<script>
    function edditfunction(id){
       var blogi = document.getElementById('edditform' + id);
       if (blogi.style.display === "none") {
            blogi.style.display = "block";
        } 
        else {
            blogi.style.display = "none";
        }


        var blogi2 = document.getElementById('info' + id);
        if (blogi2.style.display === "none") {
            blogi2.style.display = "block";
        } 
        else {
            blogi2.style.display = "none";
        }
    }

</script>

</body>
</html>



