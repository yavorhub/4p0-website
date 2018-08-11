<?php
	/*
	 *  Author: Todd Motto | @toddmotto
	 *  URL: html5blank.com | @html5blank
	 *  Custom functions, support, custom post types and more.
	 */
	
	/*------------------------------------*\
		External Modules/Files
	\*------------------------------------*/
	
	// Load any external files you have here
	
	/*------------------------------------*\
		Theme Support
	\*------------------------------------*/
	
	if (!isset($content_width))
	{
		$content_width = 900;
	}
	
	if (function_exists('add_theme_support'))
	{
		// Add Menu Support
		add_theme_support('menus');
		
		// Add Thumbnail Theme Support
		add_theme_support('post-thumbnails');
	//	add_theme_support('post-formats', array('aside','image','video'));
		add_image_size('large', 700, '', true); // Large Thumbnail
		add_image_size('medium', 250, '', true); // Medium Thumbnail
		add_image_size('small', 120, '', true); // Small Thumbnail
		add_image_size('custom-size', 350, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
		
		// Add Support for Custom Backgrounds - Uncomment below if you're going to use
		/*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
		));*/
		
		// Add Support for Custom Header - Uncomment below if you're going to use
		/*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
		));*/
		
		// Enables post and comment RSS feed links to head
		add_theme_support('automatic-feed-links');
		
		// Localisation Support
		load_theme_textdomain('html5blank', get_template_directory() . '/languages');
	}
	
	/*------------------------------------*\
		Functions
	\*------------------------------------*/
	
	// HTML5 Blank navigation
	function html5blank_nav()
	{
		wp_nav_menu(
			array(
				'theme_location'  => 'header-menu',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => 'menu-{menu slug}-container',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			)
		);
	}
	
	
	function shapeSpace_include_custom_jquery() {
		
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);
		
	}
	add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
	// Load HTML5 Blank styles
	function na35_enqueue_styles() {
		if ( is_page( 'home' ) ) {
			wp_enqueue_style( 'home-styles', get_template_directory_uri() . '/assets/css/home.css');
		}
		if ( is_page( 'about' ) ) {
			wp_enqueue_style('fp0-styles5', get_template_directory_uri() . '/assets/css/modal.css', array(), '1.0', 'all');
		}
	}
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	function my_scripts() {
		wp_enqueue_script( 'activeLinks', get_template_directory_uri() . '/assets/js/activeLinks.js', array(), '1.0.0', true );
		wp_enqueue_script( 'contactForm', get_template_directory_uri() . '/assets/js/contactForm.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'ResponsiveMenu', get_template_directory_uri() . '/assets/js/responsive-menu.js', array(), '1.0.0', true );
		$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
		if( is_page( array( 'about',) ) ){
			wp_enqueue_script( '4p0', get_template_directory_uri() . '/assets/js/4p0.js', array(), '1.0.1', true );
		}
		if( is_page(array('services'))){
			wp_enqueue_script( 'moveTheTitle', get_template_directory_uri() . '/assets/js/moveTitles.js', array(), '1.0.0', true );
			
		}
		
		wp_localize_script('contactForm', 'object_name', $translation_array);
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts' );
	function enqueue_load_fa() {
		
		wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
		
	}
	add_action( 'wp_enqueue_style', 'enqueue_load_fa' );
	
	add_action( 'wp_enqueue_scripts', 'na35_enqueue_styles' );
	
	function html5blank_styles()
	{
		wp_enqueue_style( 'fp0-styles1', get_template_directory_uri(). '/assets/css/reset.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles3', get_template_directory_uri(). '/assets/css/fonts.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles0', get_template_directory_uri(). '/assets/css/forms.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles2', get_template_directory_uri().'/assets/css/fp0style.css' , array(), '1.1', 'all' );
		wp_enqueue_style( 'fp0-styles7', get_template_directory_uri(). '/assets/css/Fp0-1440.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles8', get_template_directory_uri(). '/assets/css/Fp0-1200-1400px.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles6', get_template_directory_uri(). '/assets/css/Fp0-1022-1200px.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles12', get_template_directory_uri(). '/assets/css/Fp0-766-1022px.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles13', get_template_directory_uri(). '/assets/css/Fp0-520-320px.css' , array(), '1.0', 'all' );
		//wp_enqueue_style( 'fp0-styles13', get_template_directory_uri(). '/assets/css/Fp0-520-320px.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles9', get_template_directory_uri(). '/assets/css/articleStyle.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'fp0-styles11', get_template_directory_uri(). '/assets/css/fontawesome-all.css' , array(), '1.0', 'all' );

		
		wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
		wp_enqueue_style('html5blank'); // Enqueue it!
	}
	
	// Register HTML5 Blank Navigation
	function register_html5_menu()
	{
		register_nav_menus(array( // Using array to specify more menus if needed
			'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
			'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
			'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
		));
	}
	
	// Remove the <div> surrounding the dynamic navigation to cleanup markup
	function my_wp_nav_menu_args($args = '')
	{
		$args['container'] = false;
		return $args;
	}
	
	// Remove Injected classes, ID's and Page ID's from Navigation <li> items
	function my_css_attributes_filter($var)
	{
		return is_array($var) ? array() : '';
	}
	
	// Remove invalid rel attribute values in the categorylist
	function remove_category_rel_from_category_list($thelist)
	{
		return str_replace('rel="category tag"', 'rel="tag"', $thelist);
	}
	
	// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
	function add_slug_to_body_class($classes)
	{
		global $post;
		if (is_home()) {
			$key = array_search('blog', $classes);
			if ($key > -1) {
				unset($classes[$key]);
			}
		} elseif (is_page()) {
			$classes[] = sanitize_html_class($post->post_name);
		} elseif (is_singular()) {
			$classes[] = sanitize_html_class($post->post_name);
		}
		
		return $classes;
	}
	
	
	
	// Remove wp_head() injected Recent Comment styles
	function my_remove_recent_comments_style()
	{
		global $wp_widget_factory;
		remove_action('wp_head', array(
			$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
			'recent_comments_style'
		));
	}
	
	// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
	function html5wp_pagination()
	{
		global $wp_query;
		$big = 999999999;
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', get_pagenum_link($big)),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages
		));
	}
	
	// Custom Excerpts
	function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
	{
		return 20;
	}
	
	// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
	function html5wp_custom_post($length)
	{
		return 40;
	}
	
	// Create the Custom Excerpts callback
	function html5wp_excerpt($length_callback = '', $more_callback = '')
	{
		global $post;
		if (function_exists($length_callback)) {
			add_filter('excerpt_length', $length_callback);
		}
		if (function_exists($more_callback)) {
			add_filter('excerpt_more', $more_callback);
		}
		$output = get_the_excerpt();
		$output = apply_filters('wptexturize', $output);
		$output = apply_filters('convert_chars', $output);
		$output = '<p>' . $output . '</p>';
		echo $output;
	}
	
	// Custom View Article link to Post
	function html5_blank_view_article($more)
	{
		global $post;
		return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
	}
	
	// Remove Admin bar
	function remove_admin_bar()
	{
		return false;
	}
	
	
	
	// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
	function remove_thumbnail_dimensions( $html )
	{
		$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
		return $html;
	}
	
	// Custom Gravatar in Settings > Discussion
	function html5blankgravatar ($avatar_defaults)
	{
		$myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
		$avatar_defaults[$myavatar] = "Custom Gravatar";
		return $avatar_defaults;
	}
	
	// Threaded Comments
	function enable_threaded_comments()
	{
		if (!is_admin()) {
			if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
				wp_enqueue_script('comment-reply');
			}
		}
	}
	
	// Custom Comments Callback
	function html5blankcomments($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);
		
		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
		?>
		<!-- heads up: starting < for the html tag (li or div) in the next line: -->
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
		<div class="comment-author vcard">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
			<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
	<?php endif; ?>
		
		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
				<?php
					printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>
		
		<?php comment_text() ?>
		
		<div class="reply">
			<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	<?php }
	function fp0ThemeSetup(){
		add_theme_support("menus");
		register_nav_menu('MainNav', 'main navigation menu');
	}
	function cptt_custom_post_types() {
		register_post_type( 'game',
			array(
				'labels' => array(
					'name' => __( 'Games' ),
					'singular_name' => __( 'Game' )
				),
				'public' => true,
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'menu_icon' => 'dashicons-laptop'
			)
		);
	}
	/*------------------------------------*\
		Actions + Filters + ShortCodes
	\*------------------------------------*/
	// Add Actions
	add_action( 'init', 'cptt_custom_post_types' );
	add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
	add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
	add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
	add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
	add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
	add_action('after_setup_theme', 'fp0ThemeSetup');

	
	// Remove Filters
	remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
	
	// Shortcodes
	add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
	add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.
	
	// Shortcodes above would be nested like this -
	// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]
	
	/*------------------------------------*\
		Custom Post Types
	\*------------------------------------*/
	
	function teammember_custom_post_type(){
		$labels = array(
			'name' => 'Team Members',
			'singular_name' => 'teammembers',
			'add_new' => 'Add Team Member',
			'all_items' => 'All Team Members',
			'add_new_item' => 'Add New Team Member',
			'edit_item' => 'Edit Team Member',
			'new_item' => 'New Team Member',
			'view_item' => 'View Team Member',
			'search_item' => 'Search Team Member',
			'not_found' => "Team Member Not Found",
			'not_found_in_trash' => "Team Member not found in trash",
			'parent_item_colon' => "Parent Items"
		);
		$args = array (
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_quariable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'excerpt',
				'thumbnail',
				'revisions',
				'custom-fields',
				'post-formats',
			),
			'taxonomies' => array(
				'category', 'post_tag',
			),
			'menu_position' => 5,
			'exclude_from_search' => false,
		);
		register_post_type('teammembers', $args);
	}
	add_action('init', 'teammember_custom_post_type');
	
	
	
	/*------------------------------------*\
		ShortCode Functions
	\*------------------------------------*/
	
	// Shortcode Demo with Nested Capability
	function html5_shortcode_demo($atts, $content = null)
	{
		return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
	}
	
	// Shortcode Demo with simple <h2> tag
	function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
	{
		return '<h2>' . $content . '</h2>';
	}
	
	add_action( 'phpmailer_init', 'mailer_config', 10, 1);
	function mailer_config(PHPMailer $mailer){
		$mailer->IsSMTP();
		$mailer->Host = "mail.icon-worldwide.com"; // your SMTP server
		$mailer->Port = 587;
		$mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
		$mailer->CharSet  = "utf-8";
		$mailer->Username = 'yavor@icon-worldwide.com';
		$mailer->Password = 'Napoleon5943';
		$mailer->AuthType = 'CRAM-MD5';
		$mailer->SMTPDebug = 4;
		$mailer->SMTPAuth = true;
		$mailer->SMTPAutoTLS;
	}
	set_post_thumbnail_size( 500, 300 );
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );
?>
