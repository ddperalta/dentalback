<div class="appointments form large-9 medium-8 columns content">
	<h1>Quirodental</h1>
	<h2>Bienvenidos</h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Cita</th>
                <th>Desc</th>
                <th>Paciente</th>
                <th>Doctor</th>
                <th>Unidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todayAppointments as $appointment): ?>
            <tr>
            	<td>
                <?= $appointment->appointments['id'] ?>
            	</td>
            	<td>
                <?= $appointment->appointments['appointment_date'] ?>
            	</td>
            	<td>
                <?= $appointment->appointments['description'] ?>
            	</td>
            	<td>
                <?= $appointment->patients['name'] ?>
            	</td>
            	<td>
                <?= $appointment->doctors['name'] ?>
            	</td>
            	<td>
                <?= $appointment->units['name'] ?>
            	</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<a href="#" onclick="tableToPDF()">Imprimir orden del día</a>
</div>
<script type="text/javascript">
function tableToPDF() {
    var pdf = new jsPDF('p', 'pt', 'letter');

    pdf.cellInitialize();
    pdf.setFontSize(10);
    pdf.text(20,20, 'Orden del día - Quirodental')
    $.each( $('.table.table-hover tr'), function (i, row){
        $.each( $(row).find("td, th"), function(j, cell){
            var txt = $(cell).text().trim() || " ";
            switch(j){
            	case 0:
            		width = 40;
            		break;
            	case 5:
            		width = 70;
            		break;
            	case 2:
            		width = 120;
            		break;
            	default:
            		width = 100;

            }
            pdf.cell(10, 50, width, 30, txt, i);
            var width; //make 4th column smaller
        });
    });

    pdf.save('orden_del_dia.pdf');
}
</script>