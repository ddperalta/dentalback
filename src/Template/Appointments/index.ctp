<div class="appointments index large-9 medium-8 columns content">
    <h3><?= __('Citas') ?></h3>
    <?= $this->Html->link(__('Agregar cita'), ['action' => 'add'], ['class'=>'btn btn-primary']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', array('label'=>'#')) ?></th>
                <th><?= $this->Paginator->sort('appointment_date', array('label'=>'Cinta')) ?></th>
                <th><?= $this->Paginator->sort('patient_id', array('label'=>'Paciente')) ?></th>
                <th><?= $this->Paginator->sort('doctor_id', array('label'=>'Doctor')) ?></th>
                <th><?= $this->Paginator->sort('unit_id', array('label'=>'Unidad')) ?></th>
                <th><?= $this->Paginator->sort('total', array('label'=>'Total')) ?></th>
                <th><?= $this->Paginator->sort('confirmed', array('label'=>'Confirmada')) ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?= $this->Number->format($appointment->id) ?></td>
                <td><?= h($appointment->appointment_date->format('d/M/y')) ?></td>
                <td><?= $appointment->has('patient') ? $this->Html->link($appointment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appointment->patient->id]) : '' ?></td>
                <td><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appointment->doctor->id]) : '' ?></td>
                <td><?= $appointment->has('unit') ? $this->Html->link($appointment->unit->name, ['controller' => 'Units', 'action' => 'view', $appointment->unit->id]) : '' ?></td>
                <td>$<?= $this->Number->format($appointment->total) ?></td>
                <td class="text-center">
                <?php 
                    if($appointment->confirmed) {
                        echo $this->Form->postLink(__('✅'), ['action' => 'unconfirmDate', $appointment->id, 'page' => $page]); 
                    } else {
                        echo $this->Form->postLink(__('⛔'), ['action' => 'confirmDate', $appointment->id, 'page' => $page]); 
                    }

                ?></td>
                <td class="actions text-center">
                    <?= $this->Html->link(__('🔎'), ['action' => 'view', $appointment->id]) ?>
                    <?= $this->Html->link(__('✏️'), ['action' => 'edit', $appointment->id]) ?>
                    <?= $this->Form->postLink(__('❌'), ['action' => 'delete', $appointment->id], ['confirm' => __('¿estás seguro de eliminar la cita # {0}?', $appointment->id)]) ?>
                    <span class="addtocalendar" data-calendars="Google Calendar">
                        <a class="atcb-link">📅</a>
                        <var class="atc_event">
                            <var class="atc_date_start"><?= date("Y-m-d H:i:s",strtotime($appointment->appointment_date));?></var>
                            <var class="atc_date_end"><?= date("Y-m-d H:i:s",strtotime($appointment->appointment_date.' + 30 min'));?></var>
                            <var class="atc_timezone">America/Mexico_City</var>
                            <var class="atc_title"><?= $appointment->patient->fullName;?></var>
                            <var class="atc_location"><?= $appointment->unit->name;?></var>
                        </var>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
