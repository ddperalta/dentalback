<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Agregar Paciente') ?></legend>
        <?php
            echo $this->Form->input('name', array('label'=>'Nombre', 'class'=>'form-control'));
            echo $this->Form->input('lastname', array('label'=>'Apellido Paterno', 'class'=>'form-control'));
            echo $this->Form->input('mothersname', array('label'=>'Apellido Materno', 'class'=>'form-control'));
            echo $this->Form->input('address', array('label'=>'Dirección', 'class'=>'form-control'));
            echo $this->Form->input('email', array('label'=>'Correo', 'class'=>'form-control'));
            echo $this->Form->input('phone', array('label'=>'Teléfono', 'class'=>'form-control'));
            echo $this->Form->input('birthday', [
                                    'label' => 'Fecha de nacimiento',
                                    'minYear' => date('Y')-100,
                                    'maxYear' => date('Y')
                                    ]);
            echo $this->Form->input('patientnumber', array('label'=>'Número de paciente', 'class'=>'form-control'));
            echo $this->Form->input('password', array('label'=>'Password', 'class'=>'form-control', 'default'=>'quirodental'));
            echo $this->Form->input('active', array('label'=>'Activo', 'class'=>'checkbox'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
