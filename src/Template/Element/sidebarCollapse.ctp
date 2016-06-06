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
				) . "Inicio", ['controller'=>'pages', 'action'=>'home'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-line-graph']),
					['class' => 'glyph stroked line-graph']
				) . "Historail", ['controller'=>'dentalDate', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-calendar']),
					['class' => 'glyph stroked calendar']
				) . "Citas", ['controller'=>'dentalDate', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-table']),
					['class' => 'glyph stroked table']
				) . "Pacientes", ['controller'=>'user', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-pencil']),
					['class' => 'glyph stroked pencil']
				) . "Alertas", ['controller'=>'dentalDate', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-app-window']),
					['class' => 'glyph stroked app-window']
				) . "Inventario", ['controller'=>'pages', 'action'=>'home'], ['escapeTitle' => false]
			);
		?>
		<li role="presentation" class="divider"></li>
		<li><?= $h->link(
				$h->tag('svg',
					$h->tag('use', null, ['xlink:href' => '#stroked-male-user']),
					['class' => 'glyph stroked male-user']
				) . " Cerrar Sesión", ['controller'=>'home', 'action'=>'index'], ['escapeTitle' => false]
			);
		?></li>
	</ul>
</div>