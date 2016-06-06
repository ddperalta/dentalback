<div class="appointments view large-9 medium-8 columns content">
    <h3><?= h($appointment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Patient') ?></th>
            <td><?= $appointment->has('patient') ? $this->Html->link($appointment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appointment->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Doctor') ?></th>
            <td><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appointment->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Unit') ?></th>
            <td><?= $appointment->has('unit') ? $this->Html->link($appointment->unit->name, ['controller' => 'Units', 'action' => 'view', $appointment->unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($appointment->total) ?></td>
        </tr>
        <tr>
            <th><?= __('Appointment Date') ?></th>
            <td><?= h($appointment->appointment_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($appointment->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($appointment->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Confirmed') ?></th>
            <td><?= $appointment->confirmed ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($appointment->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Recomendations') ?></h4>
        <?= $this->Text->autoParagraph(h($appointment->recomendations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Rated') ?></h4>
        <?= $this->Text->autoParagraph(h($appointment->rated)); ?>
    </div>
</div>
