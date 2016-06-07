<div class="patients index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <?= $this->Html->link(__('Agregar Paciente'), ['action' => 'add'], ['class'=>'btn btn-primary']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-sripted table-bordered table-hover table-condensed">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('patientnumber', array('label'=>'#')) ?></th>
                <th><?= $this->Paginator->sort('full_name', array('label'=>'Nombre')) ?></th>
                <th><?= $this->Paginator->sort('address', array('label'=>'Dirección')) ?></th>
                <th><?= $this->Paginator->sort('email', array('label'=>'Correo')) ?></th>
                <th><?= $this->Paginator->sort('phone', array('label'=>'Teléfono')) ?></th>
                <th><?= $this->Paginator->sort('birthday', array('label'=>'Cumpleaños')) ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= $this->Number->format($patient->patientnumber) ?></td>
                <td><?= h($patient->fullName) ?></td>
                <td><?= h($patient->address) ?></td>
                <td><?= h($patient->email) ?></td>
                <td><?= h($patient->phone) ?></td>
                <td><?= h($patient->birthday) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $patient->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $patient->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
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
