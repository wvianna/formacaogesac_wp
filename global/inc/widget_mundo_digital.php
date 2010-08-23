<?php
/*
Function Name: Widget Mundo Digital
Plugin URI: http://www.formacaogesac.mc.gov.br
Version: 1.0
Author: Equipe NSI-Instituto Federal Fluminense
*/

class widget_mundo_digital extends WP_Widget
{	
	function widget_mundo_digital()
	{
		$widget_args = array('classname' => 'widget_mundo_digital', 'description' => __( 'Mundo Digital') );                
		parent::WP_Widget('mundodigital', __('Mundo Digital'), $widget_args);
                
	}

	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Mundo Digital' : $instance['title']);
		$maxPages = empty($instance['maxPages']) ? 5 : $instance['maxPages'];                
		echo $before_widget;
		echo $before_title . $title . $after_title;
                ?>
                <div id="mundo_digital">
  			<?php $recent = new WP_Query("cat=3&showposts=5"); 
    				while($recent->have_posts()) : $recent->the_post();?>
                                        <ul> <?php the_title(); ?> </ul>
  			<?php endwhile; ?> 
		</div>
                <?php
	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		if( $instance != $new_instance )
			$instance = $new_instance;
		
		return $instance;
	}

	function form($instance)
	{
	    	$title = esc_attr( $instance['title'] );
	    	$maxPages = esc_attr( $instance['maxPages'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Título:</label>
			<input type="text" 
                               id="<?php echo $this->get_field_id('title'); ?>" 
                               name="<?php echo $this->get_field_name('title'); ?>" 
                               maxlength="26" value="<?php echo $title; ?>" 
                               class="widefat" 
                        />
		</p>
                <p>
			<label for="<?php echo $this->get_field_id('cat'); ?>">Categoria:</label>
			<input type="text" 
                               id="<?php echo $this->get_field_id('cat'); ?>" 
                               name="<?php echo $this->get_field_name('cat'); ?>" 
                               maxlength="26" value="<?php echo $cat; ?>" 
                               class="widefat" 
                        />
		</p>
            	<p>
			<label for="<?php echo $this->get_field_id('maxPages'); ?>">Número máximo de posts:</label>
			<select id="<?php echo $this->get_field_id('maxPages'); ?>" 
                                name="<?php echo $this->get_field_name('maxPages'); ?>">
				<?php for($i=0; $i <= 10; $i++) : ?>
				<option <?php if($maxPages == $i) echo 'selected="selected"'; ?> 
                                        value="<?php if($i == 0) echo '1'; else echo $i; ?>">
                                        <?php if($i == 0) echo '1'; else echo $i; ?>
				</option>
	                	<?php endfor; ?>
			</select>
            	</p>
        	<?php
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("widget_mundo_digital");'));
