<?php
/**
 * Template name: prekes
 */

get_header();
$query = new WP_Query(array(
	'post_type' => 'products'
));
?>

<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">Pavadinimas</th>
				<th scope="col">Kaina</th>
				<th scope="col">Kategorija</th>
				<th scope="col">Aprašymas</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								echo '<tr>';
								echo'<td>'.get_field('pavadinimas', get_the_ID()).'</td>';
								echo'<td>'.get_field('kaina', get_the_ID()).'</td>';
								echo'<td>'.get_field('kategorija', get_the_ID()).'</td>';
								echo'<td>'.get_field('aprasymas', get_the_ID()).'</td>';
								echo '</tr>';
							}
						}
					?>
				</tr>
			</tbody>
		</table>	