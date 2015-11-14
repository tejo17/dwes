<h2>Listado de Contactos</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Acciones</th>
    </tr>

<?php
    $ssql = "SELECT nombre, nombre_categoria, id_contacto FROM contacto, categorias WHERE contacto.id_categoria = categorias.id_categoria ";
    $rs = mysqli_query($conn, $ssql);
    while ($fila = mysqli_fetch_array($rs)){
        ?>
        <tr>
            <td><?=$fila["id_contacto"]?></td>
            <td><?=$fila["nombre"]?></td>
            <td><?=$fila["nombre_categoria"]?></td>
            <td class="acciones"><a href="editar.php?id=<?=$fila["id_contacto"]?>">Editar</a></td>
        </tr>
        <?php
    }
?>

</table>