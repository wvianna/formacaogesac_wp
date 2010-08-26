<?php
/*
Function Name: Widget Mundo Digital
Plugin URI: http://www.formacaogesac.mc.gov.br
Version: 1.0
Author: Equipe NSI-Instituto Federal Fluminense
*/

class widget_posts extends WP_Widget
{	
	function widget_posts()
	{
		$widget_args = array('classname' => 'widget_post', 'description' => __( 'Posts') );                
		parent::WP_Widget('posts', __('Posts'), $widget_args);
                
	}

	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Posts' : $instance['title']);
		$maxPages = empty($instance['maxPages']) ? 5 : $instance['maxPages'];    
                $category_name = empty($instance['category_name']) ? 'category_name' : $instance['category_name'];
                echo $before_widget;
		echo $before_title . $title . $after_title; ?>
            <ul class="mundo-digital hl">
  			<?php $recent = new WP_Query("cat=$category_name&showposts=$maxPages"); 
    				while($recent->have_posts()) : $recent->the_post();?>
                   <li>
   					 <h3><a href="<?php the_permalink(); ?>" ><?php the_title() ?></a></h3>
  					<p>
   					  <span class="date"><?php the_date('d/m/Y') ?></span>
     					 <a href="<?php the_permalink(); ?>" ><?php limit_chars(the_content(), 300); ?></a>
   					 </p>
  					</li>			
  			<?php endwhile; ?> 
			</ul>
            <a class="more" href="#">Mais notícias</a>
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
		$category_name = esc_attr($instance['category_name']);
                $categories = get_categories();
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
			<label for="<?php echo $this->get_field_id('category_name'); ?>">Categoria:</label>
                        <select id="<?php echo $this->get_field_id('category_name'); ?>" 
                                name="<?php echo $this->get_field_name('category_name'); ?>">                                
                                <?php foreach ($categories as $cat) { ?>
				<option <?php if($category_name == $cat->term_id) echo 'selected="selected"'; ?> value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
				<?php }?>			                               
                        </select>
		</p>
            	<p>
			<label for="<?php echo $this->get_field_id('maxPages'); ?>">Número máximo de posts:</label>
			<select id="<?php echo $this->get_field_id('maxPages'); ?>" 
                                name="<?php echo $this->get_field_name('maxPages'); ?>">
				<?php for($i=1; $i <= 10; $i++) : ?>
				    <option <?php if($maxPages == $i) echo 'selected="selected"'; ?> value="<?php if($i == 1) echo $i; else echo $i;?>">
                                        <?php if($i == 1) echo '1'; else echo $i; ?>          
				    </option>
	                	<?php endfor; ?>
			</select>
            	</p>
        	<?php
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("widget_posts");'));
