<div class="doctors index large-9 medium-8 columns content">
    <h3><?= __('Doctores') ?></h3>
        <?= $this->Html->link(__('Agregar Doctor'), ['action' => 'add'], ['class'=>'btn btn-primary']) ?>
    <table cellpadding="0" cellspacing="0" data-toggle="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name', array('label'=>'Nombre')) ?></th>
                <th><?= $this->Paginator->sort('lastname', array('label'=>'Apellidos')) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doctors as $doctor): ?>
            <tr>
                <td><?= h($doctor->name) ?></td>
                <td><?= h($doctor->lastname) ?></td>
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
