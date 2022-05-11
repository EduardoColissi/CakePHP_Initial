<div class="users view large-12 medium-12 columns content">
    <h3><?php echo $usuario->name; ?></h3>
    <table class="vertical-table">
        <tr>
            <th>ID</th>
            <td><?php echo $usuario->id; ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?php echo $usuario->name; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $usuario->email; ?></td>
        </tr>
        <tr>
            <th>Usuário</th>
            <td><?php echo $usuario->username; ?></td>
        </tr>
        <tr>
            <th>Cadastrado</th>
            <td><?php echo $usuario->created; ?></td>
        </tr>
        <tr>
            <th>Alterado</th>
            <td><?php echo $usuario->modified; ?></td>
        </tr>
    </table>
    <?php
    echo $this->Html->link(('Voltar'), ['controller' => 'users', 'action' => 'index']);
    ?>
</div>