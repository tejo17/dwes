<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"
            <?php recuperar_campo("nombre", $contacto) ?>
        >
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email"
            <?php recuperar_campo("email", $contacto) ?>
        >
    </p>
    <p>
        <label for="direccion">Dirección</label>
        <textarea name="direccion" cols="18" rows="4">
            <?php recuperar_campo_textarea("direccion", $contacto); ?>
        </textarea>
    </p>
    <p>
        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" cols="18" rows="4">
            <?php recuperar_campo_textarea("comentarios", $contacto); ?>
        </textarea>
    </p>
        <label for="id_categoria">Categoría</label>
        <select name="id_categoria">
            <option value="0">Elegir Categoría...</option>
            <?php
            //Obtenemos todas las categorías
            $ssql = "SELECT * FROM categorias";
            //Ejecutamos la sentencia
            $rs = mysqli_query($conn, $ssql);
            while($fila = mysqli_fetch_array($rs)){
                echo "<option ";
                if(isset($contacto["id_categoria"]) && $contacto["id_categoria"] == $fila["id_categoria"]){
                    echo " selected ";
                }
                echo ' value="' . $fila["id_categoria"] . '">';
                echo $fila["nombre_categoria"];
                echo '</option>';
            }
            //Liberamos espacio en memoria
            mysqli_free_result($rs);
            ?>

        </select>
    <p>
        <label>
            <input type="submit" value="Insertar">
        </label>
    </p>
</form>
