<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->input('appointment_date', [
                                    'label' => 'Fecha de la cita', 
                                    'dateFormat' => 'DMY',
                                    'minYear' => date('Y'),
                                    'maxYear' => date('Y')+1,
                                    'interval' => 5]);
            echo $this->Form->input('patient_id', ['options' => $patients, 'empty' => true]);
            echo $this->Form->input('doctor_id', ['options' => $doctors, 'empty' => true]);
            echo $this->Form->input('unit_id', ['options' => $units, 'empty' => true]);
            echo $this->Form->input('total');
            echo $this->Form->input('description');
            echo $this->Form->input('recomendations');
            ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
