<?php

require get_template_directory() . '/inc/theme-option/cs-framework.php';

function apbd_apbd_theme_options( $options ) {

$options      = array(); // remove old options

//for page
$options[]    = array(
  'id'        => '_apbd_global_page_options',
  'title'     => 'Page Configuration',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'page_title',
      'title' => 'Title Settings',
      'icon'  => 'fa fa-bars',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'enable_page_title',
          'type'  => 'switcher',
          'title' => 'Enable Page Title',
          'default' => true,
        ), 
        array(
          'id'    => 'center_page_title',
          'type'  => 'select',
          'title' => 'Page Title Alignment',
          'options'=> array(
              'left'  => 'Left',
              'center'=> 'Center',
              'right' => 'Right'
          ),
          'default' => 'left',
        ), 
        array(
          'id'    => 'custom_page_title',
          'type'  => 'textarea',
          'title' => 'Custom Page Title',
          'dependency' => array( 'enable_page_title', '==', true ),
          'default' => '',
        ),
        array(
          'id'    => 'enable_breadcrumb',
          'type'  => 'switcher',
          'title' => 'Enable Breadcrumb?',
          'default' => true,
        ),
      ),
    ),

    // begin: a section
    array(
      'name'  => 'page_title_background_group',
      'title' => 'Title Background',
      'icon'  => 'fa fa-image',
      'fields' => array(

        array(
          'id'      => 'page_title_background',
          'type'    => 'background',
          'title'   => 'Page title background settings',
          'default' => array(
              'image'     => '',
              'repeat'    => '',
              'position'  => '',
              'attachment'=> '',
              'size'      => '',
              'color'     => '#000',
          ),
        ),
      ),
    ),
    // end: a section


    // begin: a section
    array(
      'name'  => 'header_style_selection_group',
      'title' => 'Header Style',
      'icon'  => 'fa fa-minus',
      'fields' => array(

        array(
          'id'      => 'select_header_style',
          'type'    => 'image_select',
          'title'   => 'Select Header Style',
          'options' => array(
              '1'     => get_template_directory_uri(). '/inc/theme-option/assets/images/header-style/header-1.jpg',
              '2'     => get_template_directory_uri(). '/inc/theme-option/assets/images/header-style/header-2.jpg',
          ),
          'default' => '1'
        ),
      ),
    ),
    // end: a section

  ),
);

/********************************************
*** End Page options
********************************************/

return $options;

}
add_filter( 'cs_metabox_options', 'apbd_apbd_theme_options' );







function apbd_theme_options_settings($options){


  //reset all old options
  $options   = array();

// ------------------------------
// Theme Options Settings       -
// ------------------------------
$options[]   = array(
  'name'     => 'general',
  'title'    => 'General',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'global_options',
      'title'     => 'Global',
      'icon'      => 'fa fa-globe',

      // begin: fields
      'fields'    => array(

        // begin: a field
        array(
          'id'    => 'apbd_global_layout',
          'type'    => 'radio',
          'title'   => 'Global Layout',
          'options' => array(
            '1'   => 'Full Width',
            '2'    => 'Boxed',
          ),
          'default' => '1',
        ),
        // end: a field

        array(
          'id'    => 'apbd_grid_width',
          'type'      => 'number',
          'title'     => __( 'Grid Width', 'apbdonline' ),
          'desc'      => 'Set value in px, default is 1100px.',
          'default'   => 1100,
        ),

        array(
          'id'    => 'apbd_website_background',
          'type'      => 'background',
          'title'     => __( 'Website Background', 'apbdonline' ),
          'default'      => array(
            'image'      => '',
            'repeat'     => '',
            'position'   => '',
            'attachment' => '',
            'size'       => '',
            'color'      => '',
          ),
        ),

        array(
          'id'    => 'apbd_website_favicon',
          'type'      => 'image',
          'title'     => __( 'Favicon', 'apbdonline' ),
          'desc'      => 'Upload a browser icon. 64px X 64px is preferred.',
        ),

      ), // end: fields

    ), // end: text options


    // -----------------------------
    // begin: logo options         -
    // -----------------------------
    array(
      'name'      => 'logo_options',
      'title'     => 'Logo',
      'icon'      => 'fa fa-leaf',

      // begin: fields
      'fields'    => array(

        array(
          'id'    => 'apbd_general_logo',
          'type'      => 'image',
          'title'     => __( 'Logo', 'apbdonline' ),
          'desc'      => 'Upload a logo of your site',
        ),

        array(
          'id'    => 'apbd_sticky_logo',
          'type'      => 'image',
          'title'     => __( 'Sticky Logo', 'apbdonline' ),
          'desc'      => 'Upload a logo for sticky header of your site',
        ),

        array(
          'id'    => 'apbd_retina_logo',
          'type'      => 'image',
          'title'     => __( 'Retina Logo', 'apbdonline' ),
          'desc'      => 'Upload a logo for Retina Display of your site',
        ),

        array(
          'id'    => 'apbd_mobile_logo',
          'type'      => 'image',
          'title'     => __( 'Mobile Logo', 'apbdonline' ),
          'desc'      => 'Upload a logo for Mobile of your site',
        ),

      ),

    ),

  )
);

$options[]   = array(
  'name'     => 'headers',
  'title'    => 'Header',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    array(
      'name'      => 'header_options',
      'title'     => 'Header Style',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'apbd_header_style',
            'type'      => 'image_select',
            'title'     => __( 'Header Style', 'apbdonline' ),
            'desc'      => 'Select your desired header style',
            'options'   => array(
              '1'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-1.jpg',
              '2'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-2.jpg',
              '3'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-3.jpg',
              '4'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-4.jpg',
              '5'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-5.jpg',
              '6'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-6.jpg',
              '7'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-7.jpg',
              '8'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-8.jpg',
              '9'       => get_template_directory_uri() .'/inc/theme-option/assets/images/header-style/header-9.jpg',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'apbd_header_fullwidth',
            'type'      => 'switcher',
            'title'     => __( 'Full width header', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_header_sticky',
            'type'      => 'switcher',
            'title'     => __( 'Sticky Header', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

      ),
    ),

    array(
      'name'      => 'subheader_options',
      'title'     => 'Sub header Style',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'apbd_subheader',
            'type'      => 'switcher',
            'title'     => __( 'Sub Header', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'apbd_subheader_title',
            'type'      => 'switcher',
            'title'     => __( 'Page Title', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'apbd_subheader_bc',
            'type'      => 'switcher',
            'title'     => __( 'Breadcrumbs', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

      ),
    ),

    array(
      'name'      => 'header_extra',
      'title'     => 'Extra',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'apbd_search_icon',
            'type'      => 'switcher',
            'title'     => __( 'Enable search icon', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_woocommerce_icon',
            'type'      => 'switcher',
            'title'     => __( 'WooCommerce Icon', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_go_to_top',
            'type'      => 'switcher',
            'title'     => __( 'Go to top', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

      ),
    ),

  )
);

$options[]   = array(
  'name'     => 'menubar',
  'title'    => 'Menu & Top Bar',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    array(
      'name'      => 'navigation_bar',
      'title'     => 'Main Menu',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'apbd_menu_style',
            'type'      => 'select',
            'title'     => __( 'Select Menu Style', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Top Bar',
              '2'       => 'Background',
              '3'       => 'Round Background',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_menu_position',
            'type'      => 'select',
            'title'     => __( 'Select Menu Position', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Left',
              '2'       => 'Right',
              '3'       => 'Center',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_menu_vbar',
            'type'      => 'switcher',
            'title'     => __( 'Menu Border', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

      ),
    ),

    array(
      'name'      => 'top_bar',
      'title'     => 'Top Bar',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'apbd_top_bar_left',
            'type'      => 'switcher',
            'title'     => __( 'Top Bar Left', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_top_bar_left_phone',
            'type'      => 'text',
            'title'     => __( 'Top Bar Left Phone', 'apbdonline' ),
            'default'   => '+123 345 5678',
        ),

        array(
            'id'    => 'apbd_top_bar_left_email',
            'type'      => 'text',
            'title'     => __( 'Top Bar Left Email', 'apbdonline' ),
            'default'   => 'info@example.com',
        ),

        array(
            'id'    => 'apbd_top_bar_right',
            'type'      => 'switcher',
            'title'     => __( 'Top Bar Right', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '2',
        ),

        array(
            'id'    => 'apbd_top_bar_right_content',
            'type'      => 'select',
            'title'     => __( 'Top Bar Right Content', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Social Icon',
              '2'       => 'Secondery Menu',
              '3'       => 'Call to action button',
              '4'       => 'Custom Shortcode',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'apbd_top_bar_right_shortcode',
            'type'      => 'text',
            'title'     => __( 'Top Bar Right Shortcode', 'apbdonline' ),
            'dependency'   => array( 'apbd_top_bar_right_content', '==', '4' ),
        ),

        array(
            'id'    => 'apbd_top_bar_btn_text',
            'type'      => 'text',
            'title'     => __( 'Top Bar Right Button Text', 'apbdonline' ),
            'dependency'   => array( 'apbd_top_bar_right_content', '==', '3' ),
        ),

        array(
            'id'    => 'apbd_top_bar_btn_link',
            'type'      => 'text',
            'title'     => __( 'Top Bar Right Button Link', 'apbdonline' ),
            'dependency'   => array( 'apbd_top_bar_right_content', '==', '3' ),
        ),

      ),
    ),

  )
);


$options[]   = array(
  'name'     => 'blogpage',
  'title'    => 'Blog Page',
  'icon'     => 'fa fa-cogs',
  'sections' => array(

    array(
      'name'      => 'globalblog',
      'title'     => 'Blog Page',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'blog_page_layout',
            'type'      => 'select',
            'title'     => __( 'Select Blog Style', 'apbdonline' ),
            'options'   => array(
              '1'       => 'One column',
              '2'       => 'Two columns',
              '3'       => 'Three columns',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'blog_page_title_bar',
            'type'      => 'switcher',
            'title'     => __( 'Enable Blog Page Title Bar', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Yes',
              '2'       => 'No',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'blog_pagination',
            'type'      => 'select',
            'title'     => __( 'Select Pagination style', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Pagination',
              '2'       => 'Infinite Scrol',
              '3'       => 'No Pagination',
            ),
            'default'   => '1',
        ),

        array(
            'id'    => 'blog_meta',
            'type'      => 'checkbox',
            'title'     => __( 'Blog Meta', 'apbdonline' ),
            'help'       => __( 'Check the box below that you want to show in blog page', 'apdbonline' ),
            'options'   => array(
              '1'       => 'Author Name',
              '2'       => 'Date',
              '3'       => 'Categories',
              '4'       => 'Tags',
            ),
            'default'   => array( '1', '2', '3', '4' ),
        ),

      ),
    ),

    array(
      'name'      => 'singleblog',
      'title'     => 'Single Blog Page',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'singleblog_meta',
            'type'      => 'checkbox',
            'title'     => __( 'Single Blog Meta', 'apbdonline' ),
            'help'       => __( 'Check the box below that you want to show in single blog page', 'apdbonline' ),
            'options'   => array(
              '1'       => 'Author Name',
              '2'       => 'Date',
              '3'       => 'Categories',
              '4'       => 'Tags',
            ),
            'default'   => array( '1', '2', '3', '4' ),
        ),

        array(
            'id'    => 'singleblog_related_post',
            'type'      => 'switcher',
            'title'     => __( 'Single Blog Page Related Posts', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Enable',
              '2'       => 'Disable',
            ),
            'default'   => '1',
        ),
        
        array(
            'id'    => 'singleblog_sidebar',
            'type'      => 'switcher',
            'title'     => __( 'Single Blog Page Sidebar', 'apbdonline' ),
            'options'   => array(
              '1'       => 'Enable',
              '2'       => 'Disable',
            ),
            'default'   => '1',
        ),

      ),
    ),

  )
);


$options[]   = array(
  'name'     => 'footer',
  'title'    => 'Footer Area',
  'icon'     => 'fa fa-bed',
  'fields' => array(

    array(
        'id'    => 'footer_layout',
        'type'      => 'select',
        'title'     => __( 'Select Footer Style', 'apbdonline' ),
        'options'   => array(
          '1'       => 'Four Columns',
          '2'       => 'Three Columns',
          '3'       => 'Two Columns',
          '4'       => 'One Column',
          '5'       => 'No Widget',
        ),
        'default'   => '1',
    ),

    array(
        'id'    => 'footer_copyright',
        'type'      => 'text',
        'title'     => __( 'Footer Copyright Text', 'apbdonline' ),
        'default'   => 'Copyright &copy; 2018, APBD All rights Reserved!',
    ),

    array(
        'id'    => 'footer_top_area',
        'type'      => 'switcher',
        'title'     => __( 'Footer Top Area', 'apbdonline' ),
        'options'   => array(
          '1'       => 'Enable',
          '2'       => 'Disable',
        ),
        'default'   => '2',
    ),

    array(
        'id'    => 'footer_top_area_content',
        'type'      => 'wysiwyg',
        'title'     => __( 'Add Footer Top Content', 'apbdonline' ),
        'dependency'   => array( 'footer_top_area', '==', '1' ),
    ),

  ),
);


$options[]   = array(
  'name'     => 'socialicons',
  'title'    => 'Social Profiles',
  'icon'     => 'fa fa-facebook',
  'fields' => array(
    array(
      'id'              => 'social_porfile_box',
      'type'            => 'group',
      'title'           => 'Social Profiles',
      'desc'            => 'Add your social profiles',
      'button_title'    => 'Add New Profile',
      'accordion_title' => 'profile_name',
      'fields'          => array(

        array(
          'id'          => 'profile_name',
          'type'        => 'text',
          'title'       => 'Profile Name',
          'desc'     => 'Such as: <strong>Facebook</strong>',
        ),

        array(
          'id'          => 'profile_icon',
          'type'        => 'icon',
          'title'       => 'Add icon',
        ),

        array(
          'id'          => 'profile_link',
          'type'        => 'text',
          'title'       => 'Profile Link',
          'desc'     => 'Full link including http/https',
        ),

      )
    ),

  ),

);


$options[]   = array(
  'name'     => 'comments',
  'title'    => 'Comments',
  'icon'     => 'fa fa-comments-o',
  'fields' => array(
    array(
      'id'              => 'post_comments',
      'type'            => 'switcher',
      'title'           => 'Enable Comments',
      'options'   => array(
          '1'       => 'Enable',
          '2'       => 'Disable',
      ),
      'default'   => '1',
    ),

  ),

);


$options[]   = array(
  'name'     => 'typography',
  'title'    => 'Typography',
  'icon'     => 'fa fa-text-height',
  'sections' => array(

    array(
      'name'      => 'general_typography',
      'title'     => 'General',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'content_background',
            'type'      => 'background',
            'title'     => __( 'Content Background', 'apbdonline' ),
        ),

        array(
            'id'    => 'content_typography',
            'type'      => 'typography',
            'title'     => __( 'Content Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'content_color',
            'type'      => 'color_picker',
            'title'     => __( 'Content Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'content_link_color',
            'type'      => 'color_picker',
            'title'     => __( 'Content Link Color', 'apbdonline' ),
        ),

      ),
    ),

    array(
      'name'      => 'header_typography',
      'title'     => 'Menu',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'topbar_background',
            'type'      => 'background',
            'title'     => __( 'Topbar Background', 'apbdonline' ),
        ),

        array(
            'id'    => 'topbar_typography',
            'type'      => 'typography',
            'title'     => __( 'Topbar Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'topbar_link_color',
            'type'      => 'color_picker',
            'title'     => __( 'Topbar Link Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'topbar_link_hover_color',
            'type'      => 'color_picker',
            'title'     => __( 'Topbar Link Hover Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'menu_background',
            'type'      => 'background',
            'title'     => __( 'Menu Background', 'apbdonline' ),
        ),

        array(
            'id'    => 'menu_typography',
            'type'      => 'typography',
            'title'     => __( 'Menu Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'menu_link_color',
            'type'      => 'color_picker',
            'title'     => __( 'Menu Link Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'menu_link_hover_color',
            'type'      => 'color_picker',
            'title'     => __( 'Menu Link Hover Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'dropdown_menu_bg_color',
            'type'      => 'color_picker',
            'title'     => __( 'Dropdown Menu Background Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'dropdown_menu_link_color',
            'type'      => 'color_picker',
            'title'     => __( 'Dropdown Menu Link Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'dropdown_menu_link_hover_color',
            'type'      => 'color_picker',
            'title'     => __( 'Dropdown Menu Hover Link Color', 'apbdonline' ),
        ),

      ),
    ),

    array(
      'name'      => 'heading_typography',
      'title'     => 'Heading',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'heading_one_typography',
            'type'      => 'typography',
            'title'     => __( 'H1 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_one_color',
            'type'      => 'color_picker',
            'title'     => __( 'H1 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_two_typography',
            'type'      => 'typography',
            'title'     => __( 'H2 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_two_color',
            'type'      => 'color_picker',
            'title'     => __( 'H2 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_three_typography',
            'type'      => 'typography',
            'title'     => __( 'H3 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_three_color',
            'type'      => 'color_picker',
            'title'     => __( 'H3 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_four_typography',
            'type'      => 'typography',
            'title'     => __( 'H4 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_four_color',
            'type'      => 'color_picker',
            'title'     => __( 'H4 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_five_typography',
            'type'      => 'typography',
            'title'     => __( 'H5 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_five_color',
            'type'      => 'color_picker',
            'title'     => __( 'H5 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_six_typography',
            'type'      => 'typography',
            'title'     => __( 'H6 Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'heading_six_color',
            'type'      => 'color_picker',
            'title'     => __( 'H6 Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'blog_title_typography',
            'type'      => 'typography',
            'title'     => __( 'Blog Title Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'blog_title_color',
            'type'      => 'color_picker',
            'title'     => __( 'Blog Title Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'page_title_typography',
            'type'      => 'typography',
            'title'     => __( 'Page Title Typography', 'apbdonline' ),
        ),

        array(
            'id'    => 'page_title_color',
            'type'      => 'color_picker',
            'title'     => __( 'Page Title Color', 'apbdonline' ),
        ),

      ),
    ),

    array(
      'name'      => 'footer_typography',
      'title'     => 'Footer',
      'icon'      => 'fa fa-circle',
      'fields' => array(

        array(
            'id'    => 'footer_text_color',
            'type'      => 'color_picker',
            'title'     => __( 'Widget Text Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'footer_link_color',
            'type'      => 'color_picker',
            'title'     => __( 'Widget Link Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'footer_link_hover_color',
            'type'      => 'color_picker',
            'title'     => __( 'Widget Link Hover Color', 'apbdonline' ),
        ),

        array(
            'id'    => 'footer_widget_background',
            'type'      => 'background',
            'title'     => __( 'Widget Background', 'apbdonline' ),
        ),

        array(
            'id'    => 'footer_copyright_background',
            'type'      => 'background',
            'title'     => __( 'Copyright Background', 'apbdonline' ),
        ),

        array(
            'id'    => 'footer_widget_typography',
            'type'      => 'typography',
            'title'     => __( 'Footer Typography', 'apbdonline' ),
        ),

      ),
    ),

  )
);

$options[]    = array(
  'name'      => 'extracssfield',
  'title'     => 'Extra CSS/JS',
  'icon'      => 'fa fa-code',
  'fields'    => array(

    array(
      'id'    => 'cssextra',
      'type'  => 'css',
      'title' => 'Extra CSS',
    ),

    array(
      'id'    => 'jsextra',
      'type'  => 'css',
      'title' => 'Extra JS',
    ),
  ),
);

$options[]    = array(
  'name'      => 'backup',
  'title'     => 'Backup',
  'icon'      => 'fa fa-random',
  'fields'    => array(

    array(
      'type'  => 'backup',
      'title' => 'Backup Theme Options',
    ),
  ),
);

return $options;

}
add_filter( 'cs_framework_options', 'apbd_theme_options_settings' );