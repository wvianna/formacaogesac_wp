<?php
/*
Function Name: Widget Atividades
Plugin URI: http://xemele.cultura.gov.br/
Version: 0.1
Author: Marcos Maia Lopes
Author URI: http://xemele.cultura.gov.br/
*/

class widget_activity extends WP_Widget
{	
	function widget_activity()
	{
		$widget_args = array('classname' => 'widget_activity', 'description' => __( 'Fluxo de atividades em todo site') );
		parent::WP_Widget('activity', __('Fluxo de atividades'), $widget_args);
	}

	function widget($args, $instance)
	{
	    extract($args);
	    $title = apply_filters('widget_title', empty($instance['title']) ? 'Fluxo de atividades' : $instance['title']);
	?>
	    <?php echo $before_widget;
	          echo $before_title . $title . $after_title; ?>

		<?php do_action( 'bp_before_directory_activity_content' ) ?>

		<?php do_action( 'template_notices' ) ?>

	    <div class="activity">
	        <?php do_action( 'bp_before_activity_loop' ) ?>

			<?php if ( bp_has_activities( '&per_page=5&scope=' ) ) : ?>

				<?php if ( empty( $_POST['page'] ) ) : ?>
					<!-- <ul id="activity-stream" class="activity-list item-list"> -->
                                        <ul class="rede-social hl">
				<?php endif; ?>

				<?php while ( bp_activities() ) : bp_the_activity(); ?>

					<?php do_action( 'bp_before_activity_entry' ) ?>

					<li class="<?php bp_activity_css_class() ?>" id="activity-<?php bp_activity_id() ?>">
							<?php 
								$diretorio='../wp/wp-content/uploads/avatars/'.bp_get_activity_user_id();
								$ponteiro=opendir($diretorio);
								while ($nome_itens=readdir($ponteiro)):
									if (preg_match('/bpfull/i', $nome_itens)):
										$img=$nome_itens;
									endif;
								endwhile;	
								$imagem='../wp/wp-content/uploads/avatars/'.bp_get_activity_user_id().'/'.$img;
							?>
							<?php if(file_exists($imagem)): ?>
								<a class="alignleft" href="<?php bp_activity_user_link() ?>">
									<img width="50" height="50" class="<?php echo 'avatar user-'.bp_get_activity_user_id().'-avatar'?>" alt="Avatar" src= "<?php echo $imagem; ?>">
								</a>
							<?php else:?>
								<a class="alignleft" href="<?php bp_activity_user_link() ?>">
									<?php bp_activity_avatar( 'type=full&width=50&height=50' ) ?>
								</a>

							<?php endif;?>
							

						<div class="activity-content">

							<div class="activity-header">
                                                              <h3>
								<?php bp_activity_action() ?>
                                                              </h3>
							</div>

							<?php if ( bp_activity_has_content() ) : ?>
								<div class="activity-inner">
									<?php limit_chars(bp_get_activity_content_body(), 300); ?>
								</div>
							<?php endif; ?>

							<?php do_action( 'bp_activity_entry_content' ) ?>

			                         </div>

			                </li>

					<?php do_action( 'bp_after_activity_entry' ) ?>

				<?php endwhile; ?>
				

				<?php if ( empty( $_POST['page'] ) ) : ?>
					</ul>
				<?php endif; ?>
			      <!--  <a  class="more" href="<?php echo get_bloginfo('url').'/'.BP_ACTIVITY_SLUG; ?>">Leia Mais &raquo;</a> -->
                              <a  class="more" href="http://gesac.ifce.edu.br/wp/activity">Leia Mais &raquo;</a>



			<?php else : ?>
				<div id="message" class="info">
					<p><?php _e( 'Sorry, there was no activity found. Please try a different filter.', 'buddypress' ) ?></p>
				</div>
			<?php endif; ?>

			<?php do_action( 'bp_after_activity_loop' ) ?>

			
	    </div>
	    <?php echo $after_widget;
	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		if( $instance != $new_instance )
		{
			$instance = $new_instance;
		}
		
		return $instance;
	}

	function form($instance)
	{
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>">Título:</label></p>
            <p><input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" /></p>
        <?php
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("widget_activity");'));
