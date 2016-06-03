<?php

/* Template Name: Sign Up */

get_header(); ?>
</div>
<main class="container" role="main">
	<div class="row">
	<div class="col-xs-12">

	<h2><?php the_title(); ?></h2>


		<div class="row">

			<div class="col-xs-12 col-sm-6">	
			<?php the_field('column_1'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 right-column">
			<?php the_field('column_2'); ?>
			</div>

		</div>

	<div class="clearfix"><?php edit_post_link(); ?></div>
	<hr>

	<?php include_once(TEMPLATEPATH .'/templates/form-sign-up.php');  ?>
	</div><!-- span -->
</div><!--/row-->
</main>

			
	
	        
	        

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p class="modal-title" id="myModalLabel">Detailed payment breakdown</p>
			</div>
			<div class="modal-body">

				<table border="0" class="detailed-payments table table-striped">
					<thead>
					</thead>
					<tbody>
					<tr>
					<td><strong>The total cost of your courses is £560. Your payments are broken down as follows:</strong></td><td></td>
					</tr>

					<tr><td>Certificate in Event Planning </td><td>£560</td></tr><tr><td><strong>4 monthly installments.</strong></td><td></td></tr><tr><td>Certificate in Event Planning </td><td>£140</td>
					</tr>

					<tr><td>Each month you will be charged <strong>£140</strong> for Certificate in Event Planning </td><td></td></tr>
					</tbody>
					<tfoot>
					</tfoot>
				</table>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> -->
		</div>
	</div>
</div>






<?php get_footer(); ?>


