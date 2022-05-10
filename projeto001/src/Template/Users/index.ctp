<div class="users index large-12 medium-12 columns content">
    <h3>
        <?php echo 'Bem-vindo ao CRUD Fazcomex!' ?>
    </h3>
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
                <th>
                    <?php
                        echo $this->Html->link(('Ver '), ['action' => 'view', $usuario->id]);
                        echo $this->Html->link((' Editar '), ['action' => 'edit', $usuario->id]);
                        echo $this->Form->postLink((' Apagar '), ['action' => 'delete', $usuario->id], ['confirm' => 'Tem certeza que quer apagar o usuário?', $usuario->id]);
                    ?>
                </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->paginator->first('<< Primeira'); ?>
            <?php echo $this->paginator->numbers(); ?>
            <?php echo $this->paginator->last('Última >> '); ?>
        </ul>
    </div>
    <?php
    echo $this->Html->link(('Adicionar Usuário'), ['action' => 'add'])
    ?>
</div>