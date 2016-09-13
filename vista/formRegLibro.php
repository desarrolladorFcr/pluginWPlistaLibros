<?php
global $wp;
$actual_url = home_url(add_query_arg(array(),$wp->request));
?>

<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
   
    <label>Titulo</label>
    <input name="nomLibro" required>
    <label>Autor</label>
    <input name="nomAutor">
    <input type="hidden" name="action" value="crearLibro" required>
    <input type="hidden" name="redireccion" value="<?php echo $actual_url;?>">
    <input type="submit" value="Enviar">
</form>
