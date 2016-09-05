<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<li>
		<?php $h = &$this->Html; ?>
		<?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-dashboard-dial']),
					['class' => 'glyph stroked dashboard-dial']
				) . "Inicio", ['controller'=>'appointments', 'action'=>'home'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-calendar']),
					['class' => 'glyph stroked calendar']
				) . "Citas", ['controller'=>'appointments', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-table']),
					['class' => 'glyph stroked table']
				) . "Pacientes", ['controller'=>'patients', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li role="presentation" class="divider"></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-male-user']),
					['class' => 'glyph stroked male-user']
				) . " Cerrar Sesión", ['controller'=>'users', 'action'=>'logout'], ['escapeTitle' => false]
			);
		?></li>
	</ul>
</div>