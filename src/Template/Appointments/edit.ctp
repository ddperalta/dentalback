<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Edit Appointment') ?></legend>
        <?php
            echo $this->Form->input('appointment_date', ['empty' => true]);
            echo $this->Form->input('patient_id', ['options' => $patients, 'empty' => true]);
            echo $this->Form->input('doctor_id', ['options' => $doctors, 'empty' => true]);
            echo $this->Form->input('unit_id', ['options' => $units, 'empty' => true]);
            echo $this->Form->input('total');
            echo $this->Form->input('confirmed');
            echo $this->Form->input('description');
            echo $this->Form->input('recomendations');
            echo $this->Form->input('rated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
