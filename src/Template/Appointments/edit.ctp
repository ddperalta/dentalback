<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset style="padding:15px">
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
            <div class="row">
            <?= $this->Form->input('patient_id', ['required'=>true, 'label'=> 'Paciente','options' => $patients, 'empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="row">
            <?= $this->Form->input('doctor_id', ['label'=> 'Doctor','options' => $doctors, 'empty' => true,'class'=>'form-control col-md-9 col-lg-9']); ?>
            <?= $this->Html->link(__('Agregar Doctor'), ['controller'=>'doctors','action' => 'add'], ['class'=>'btn btn-primary']); ?>
            </div>
            <div class="row">
            <?= $this->Form->input('unit_id', ['label'=> 'Unidad','options' => $units, 'empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="row">
            <?= $this->Form->input('descriptionId', array('empty'=>true, 'label'=>'Descripción', 'class'=>'form-control', 'options' => $pricesList)); ?>
            <?= $this->Form->input('description', array('type'=>'hidden')); ?>
            </div>
            <div class="row">
            <?= $this->Form->input('total', array('label'=>'Total $', 'class'=>'form-control', 'id' => 'total')); ?>
            <a href='#' id='discount' class='btn btn-primary'>Agregar Descuento</a>
            </div>
            <div class="row">
            <?= $this->Form->input('recomendations', array('label'=>'Recomendaciones', 'class'=>'form-control')); ?>
            </div>
          </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class'=>'btn btn-primary form-control']) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    var prices = <?= json_encode($prices); ?>; 
    $('#descriptionid').change(function() {
        var sel = $('#descriptionid').val(); 
        $('#total').val(prices[sel-1].quirodental);
        $('#description').val(prices[sel-1].title);
    });
    $('#discount').on('click', function (e) {
        var sel = $('#descriptionid').val(); 
        $('#total').val(prices[sel-1].convenio)
    })
</script>
