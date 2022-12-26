<div class="card mt-3">
    <span class="float-right btn btn-primary" onclick="modalAddItem()" >Nuevo Item <i class="fas fa-plus"></i></span>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>   
                <th>Nombre</th>   
                <th>Referencia</th>   
                <th>Precio</th>    
                <th>Peso</th>   
                <th>Categoria</th> 
                <th>Stock</th>   
                <th>Creacion</th>    
                <th>Acciones</th>     
            </tr> 
        </thead>
        <tbody>
    <?php
        include('../back/listaDatos.php');
        while($row = mysqli_fetch_assoc($result)) {
            $id=$row["id"];
            $nombre=$row["nombre"];
            $referencia=$row["referencia"];
            $precio=$row["precio"];
            $peso=$row["peso"];
            $categoria =$row["categoria"];
            $stock=$row["stock"];
            $fecha_creacion=$row["fecha_creacion"];
    ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $nombre ?></td>
            <td><?php echo $referencia ?></td>
            <td><?php echo $precio ?></td>
            <td><?php echo $peso ?></td>
            <td><?php echo $categoria  ?></td>
            <td><?php echo $stock ?></td>
            <td><?php echo $fecha_creacion ?></td>
            <td>
                <button type="button" class="btn btn-info" onclick="SellItem('<?php echo $id ?>','<?php echo $stock ?>')" ><i class="">Comprar</i></button>
                <button type="button" class="btn btn-info" onclick="modItem('<?php echo $id ?>')" ><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" onclick="deleteItem(<?php echo $id ?>)">  <i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
</div>
<div id="respuestaModal"></div>