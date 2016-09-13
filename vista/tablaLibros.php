<table>
    <caption>
        LIBROS EXISTENTES
    </caption>
    <tr>
        <th>
            TITULO
        </th>
        <th>
            AUTOR
        </th>
    </tr>
    <?php foreach ($objetoLibros as $objeto):?>
    <tr>
        <td>
            <?php echo $objeto->nom_titulo;?>
        </td>
        <td>
            <?php echo $objeto->nom_autor;?>
        </td>
    </tr>
    <?php endforeach;?> 
</table>

