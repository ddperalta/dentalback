<div class="appointments index large-9 medium-8 columns content">
    <h3><?= __('Citas') ?></h3>
    <table cellpadding="0" cellspacing="0" data-toggle="table">
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
                <td><?= h($appointment->appointment_date) ?></td>
                <td><?= $appointment->has('patient') ? $this->Html->link($appointment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appointment->patient->id]) : '' ?></td>
                <td><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appointment->doctor->id]) : '' ?></td>
                <td><?= $appointment->has('unit') ? $this->Html->link($appointment->unit->name, ['controller' => 'Units', 'action' => 'view', $appointment->unit->id]) : '' ?></td>
                <td>$<?= $this->Number->format($appointment->total) ?></td>
                <td><?= $appointment->confirmed ? h('✅') : h('❌') ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $appointment->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $appointment->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $appointment->id], ['confirm' => __('¿estás seguro de eliminar la cita # {0}?', $appointment->id)]) ?>
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
    <?= $this->Html->link(__('Agregar cita'), ['action' => 'add'], ['class'=>'btn btn-primary']) ?>
</div>
