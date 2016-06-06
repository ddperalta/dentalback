
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Agregar Doctor') ?></legend>
        <?php
            echo $this->Form->input('name', array('label'=>'Nombre'));
            echo $this->Form->input('lastname', array('label'=>'Apellidos'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
