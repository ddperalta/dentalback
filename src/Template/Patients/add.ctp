<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Add Patient') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lastname');
            echo $this->Form->input('mothersname');
            echo $this->Form->input('address');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('birthday', [
                                    'minYear' => date('Y')-100,
                                    'maxYear' => date('Y')
                                    ]);
            echo $this->Form->input('patientnumber');
            echo $this->Form->input('password');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
