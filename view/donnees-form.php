<?php
// echo '<pre>';print_r($fields); echo '</pre>';
?>

<form action="" method="post" class="col-md-6 offset-md-3 text-center" enctype="multipart/form-data">

<?php

// echo "<pre class='text-left'>";
// print_r($donnees);
// echo "</pre>";

foreach($fields as $value):
        
    if($value['Type'] == "date"){
        $type = "date";
    }
    elseif($value['Type'] == "float"){
        $type = "float";
    }
    elseif($value['Type'] == "int"){
        $type = "int";
    }
    elseif($value['Type'] === "enum"){
        $type = "enum";
    }
    else{
        $type = "varchar";
    }

    if($value['Field']== 'photo'){
        $type='file';
    }

?>

        <div class="form-group">
            <label for="<?=$value['Field'] ?>"><?=$value['Field'] ?></label>
            <?php if($value['Field'] != 'id_utilisateur') : ?>
            <input required type="<?= $type ?>" class="form-control" name="<?=$value['Field'] ?>" id="<?=$value['Field'] ?>" aria-describedby="<?=$value['Field'] ?>" placeholder="<?=$value['Field'] ?>" value="<?= ($op == 'update') ? $values[$value['Field']] : ''?>">
    <?php endif ?>
    <?php endforeach;?>
   
        
    </div>
    <input type="submit" class="col-md-12 btn btn-dark mb-2">
</form>



<?php
// echo '<pre>';print_r($fields); echo '</pre>';
?>