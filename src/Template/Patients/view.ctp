<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($patient->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Mothersname') ?></th>
            <td><?= h($patient->mothersname) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($patient->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($patient->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Patientnumber') ?></th>
            <td><?= $this->Number->format($patient->patientnumber) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($patient->birthday) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($patient->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($patient->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $patient->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($patient->appointments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Appointment Date') ?></th>
                <th><?= __('Patient Id') ?></th>
                <th><?= __('Doctor Id') ?></th>
                <th><?= __('Unit Id') ?></th>
                <th><?= __('Total') ?></th>
                <th><?= __('Confirmed') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Recomendations') ?></th>
                <th><?= __('Rated') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= h($appointments->appointment_date) ?></td>
                <td><?= h($appointments->patient_id) ?></td>
                <td><?= h($appointments->doctor_id) ?></td>
                <td><?= h($appointments->unit_id) ?></td>
                <td><?= h($appointments->total) ?></td>
                <td><?= h($appointments->confirmed) ?></td>
                <td><?= h($appointments->description) ?></td>
                <td><?= h($appointments->recomendations) ?></td>
                <td><?= h($appointments->rated) ?></td>
                <td><?= h($appointments->modified) ?></td>
                <td><?= h($appointments->created) ?></td>
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
