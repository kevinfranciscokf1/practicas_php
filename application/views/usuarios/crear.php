<h1>Agregar Usuario</h1>
<form action="<?php echo site_url('usuarios/crear'); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <input type="submit" value="Crear Usuario">
</form>
