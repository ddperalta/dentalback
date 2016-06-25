
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset class="form-group">
        <legend><?= __('Agregar Doctor') ?></legend>
        <?php
            echo $this->Form->input('name', array('required'=>true, 'label'=>'Nombre','class'=>'form-control col-md-9 col-lg-9'));
            echo $this->Form->input('lastname', array('label'=>'Apellidos','class'=>'form-control col-md-9 col-lg-9'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary'] ) ?>
    <?= $this->Form->end() ?>
</div>
