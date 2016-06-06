<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Agregar Cita') ?></legend>
        <?php
            echo $this->Form->input('appointment_date', [
                                    'label' => 'Fecha de la cita', 
                                    'dateFormat' => 'DMY',
                                    'minYear' => date('Y'),
                                    'maxYear' => date('Y')+1,
                                    'interval' => 5]);
            echo $this->Form->input('patient_id', ['label'=> 'Paciente','options' => $patients, 'empty' => true]);
            echo $this->Form->input('doctor_id', ['label'=> 'Doctor','options' => $doctors, 'empty' => true]);
            echo $this->Form->input('unit_id', ['label'=> 'Unidad','options' => $units, 'empty' => true]);
            echo $this->Form->input('total', array('label'=>'Total $'));
            echo $this->Form->input('description', array('label'=>'Descripción'));
            echo $this->Form->input('recomendations', array('label'=>'Recomendaciones'));
            ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
