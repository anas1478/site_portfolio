<?php
// var_dump($donnees);
// echo '<pre>';print_r($fields); echo '</pre>';
?>
<div class="text-center">
    <a href="?op=add" class="btn btn-larg btn-info"><i class="fas fa-plus"></i> Ajouter</a>
    <br>
</div> <br>

<!------------------------------ Récuperer les données ------------------------------>
<table class="table table-bordered text-center bg-light table-responsive">

    <thead><tr>
        <th>ID</th> 
        <?php foreach($fields as $colonne):?>
        
        <th>
        <?php
            echo $colonne['Field']; //a terminer !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! pour limage si colone egale a phto alors mettre une img 

        ?>    
        </th>

        <?php endforeach;?>

       
        <th>Modif</th>
        <th>Supp</th>

    </tr></thead>
   


    <!----------- Récuperer les données interieur du tableau ----------->
    <?php foreach ($donnees as $value):
    ?>
    <tr>
        <td>
       
        <?=implode('</td><td>', $value)?>
        
        </td>
        <td>
        <a href="?op=update&id=<?=$value[$id] ?>"class="text-dark"><i class="fas fa-wrench"></i></a>
        </td>
        <td>
        <a href="?op=delete&id=<?=$value[$id] ?>" class="text-dark"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    <?php endforeach;?>


</table>

