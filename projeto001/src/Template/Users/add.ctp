<?php
echo $this->Form->create($user);
echo $this->Form->control('name');
echo $this->Form->control('email');
echo $this->Form->control('username');
echo $this->Form->control('password');
echo $this->Form->button('Cadastrar');
echo $this->Form->end();
