<h1>Editar Usuario</h1>
<form action="<?php echo site_url('usuarios/editar/' . $usuario->id); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $usuario->email; ?>" required>
    
    <input type="submit" value="Actualizar Usuario">
</form>
