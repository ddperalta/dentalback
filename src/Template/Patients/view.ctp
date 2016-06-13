<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellido Paterno') ?></th>
            <td><?= h($patient->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellido Materno') ?></th>
            <td><?= h($patient->mothersname) ?></td>
        </tr>
        <tr>
            <th><?= __('Dirección') ?></th>
            <td><?= h($patient->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Correo') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Teléfono') ?></th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Número de paciente') ?></th>
            <td><?= h($patient->patientnumber) ?></td>
        </tr>
        <tr>
            <th><?= __('Cumpleaños') ?></th>
            <td><?= h($patient->birthday) ?></td>
        </tr>
        <tr>
            <th><?= __('Activo') ?></th>
            <td><?= $patient->active ? __('Sí') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Citas') ?></h4>
        <?php if (!empty($patient->appointments)): ?>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th><?= __('Fecha de cita') ?></th>
                <th><?= __('Total') ?></th>
                <th><?= __('Confiramada') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Recomendations') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->appointment_date) ?></td>
                <td><?= '$  '.h($appointments->total) ?></td>
                <td><?= $appointments->confirmed ? __('Sí') : __('No'); ?></td>
                <td><?= h($appointments->description) ?></td>
                <td><?= h($appointments->recomendations) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
