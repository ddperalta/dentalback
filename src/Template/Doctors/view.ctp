<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($doctor->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($doctor->lastname) ?></td>
        </tr>
        
    </table>
    <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Calificaciones</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="chart" id="pie-chart" ></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="related">
        <h4><?= __('Citas Relacionadas') ?></h4>
        <?php if (!empty($doctor->appointments)): ?>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th><?= __('#') ?></th>
                <th><?= __('Fecha de cita') ?></th>
                <th><?= __('Confirmada') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Recomendations') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= h($appointments->appointment_date) ?></td>
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
    <script>
        var pieData = [
                {
                    value: 300,
                    color:"#30a5ff",
                    highlight: "#62b9fb",
                    label: "⭐️"
                },
                {
                    value: 50,
                    color: "#ffb53e",
                    highlight: "#fac878",
                    label: "😔"
                },
                {
                    value: 100,
                    color: "#1ebfae",
                    highlight: "#3cdfce",
                    label: "😐"
                },
                {
                    value: 120,
                    color: "#f9243f",
                    highlight: "#f6495f",
                    label: "😀"
                }

            ];
            $(document).on('ready', function() {
                var chart4 = document.getElementById("pie-chart").getContext("2d");
                window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
                });    
            });
    </script>
</div>
