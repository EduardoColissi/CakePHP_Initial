<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
        <tr>
            <th><?php echo $usuario->id; ?></th>
            <th><?php echo $usuario->name; ?></th>
            <th><?php echo $usuario->email; ?></th>
            <th>Ver Editar Apagar</th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>