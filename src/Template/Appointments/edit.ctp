<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Agregar Cita') ?></legend>
            <div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                            <?= $this->Form->input('appointment_date',array('id'=>'datetimepicker','class'=>'form-control','type' => 'text','div' => false, 'label' => 'Fecha de la cita', 'wrapInput' => false)); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php  
            echo $this->Form->input('patient_id', ['label'=> 'Paciente','options' => $patients, 'empty' => true, 'class'=>'form-control']);
            echo $this->Form->input('doctor_id', ['label'=> 'Doctor','options' => $doctors, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('unit_id', ['label'=> 'Unidad','options' => $units, 'empty' => true, 'class'=>'form-control']);
            echo $this->Form->input('total', array('label'=>'Total $', 'class'=>'form-control'));
            echo $this->Form->input('description', array('label'=>'Descripción', 'class'=>'form-control'));
            echo $this->Form->input('recomendations', array('label'=>'Recomendaciones', 'class'=>'form-control'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class'=>'btn btn-primary form-control']) ?>
    <?= $this->Form->end() ?>
</div>