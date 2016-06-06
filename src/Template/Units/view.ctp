<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="units view large-9 medium-8 columns content">
    <h3><?= h($unit->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($unit->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($unit->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= h($unit->latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitude') ?></th>
            <td><?= h($unit->longitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($unit->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($unit->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($unit->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($unit->appointments)): ?>
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
            <?php foreach ($unit->appointments as $appointments): ?>
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
