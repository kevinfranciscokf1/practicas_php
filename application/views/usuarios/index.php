<h1>Lista de Usuarios</h1>
<a href="<?php echo site_url('usuarios/crear'); ?>">Agregar Usuario</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario->id; ?></td>
        <td><?php echo $usuario->nombre; ?></td>
        <td><?php echo $usuario->email; ?></td>
        <td>
            <a href="<?php echo site_url('usuarios/editar/' . $usuario->id); ?>">Editar</a>
            <a href="<?php echo site_url('usuarios/eliminar/' . $usuario->id); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
