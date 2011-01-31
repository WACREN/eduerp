<?php
$view = new view;
$view->name = 'gpa';
$view->description = 'GPA';
$view->tag = '';
$view->view_php = '';
$view->base_table = 'node';
$view->is_cacheable = FALSE;
$view->api_version = 2;
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('relationships', array(
  'field_student_ref_gpa_uid' => array(
    'label' => 'Student',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_student_ref_gpa_uid',
    'table' => 'node_data_field_student_ref_gpa',
    'field' => 'field_student_ref_gpa_uid',
    'relationship' => 'none',
  ),
  'field_program_ref_gpa_nid' => array(
    'label' => 'Program',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_program_ref_gpa_nid',
    'table' => 'node_data_field_program_ref_gpa',
    'field' => 'field_program_ref_gpa_nid',
    'relationship' => 'none',
  ),
  'field_student_program_ref_gpa_nid' => array(
    'label' => 'student_program',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_student_program_ref_gpa_nid',
    'table' => 'node_data_field_student_program_ref_gpa',
    'field' => 'field_student_program_ref_gpa_nid',
    'relationship' => 'none',
  ),
  'content_profile_rel' => array(
    'label' => 'Content Profile',
    'required' => 0,
    'type' => 'profile',
    'id' => 'content_profile_rel',
    'table' => 'users',
    'field' => 'content_profile_rel',
    'relationship' => 'field_student_ref_gpa_uid',
  ),
));
$handler->override_option('fields', array(
  'name' => array(
    'label' => 'Mat No.',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_user' => 1,
    'overwrite_anonymous' => 0,
    'anonymous_text' => '',
    'exclude' => 0,
    'id' => 'name',
    'table' => 'users',
    'field' => 'name',
    'relationship' => 'field_student_ref_gpa_uid',
  ),
  'field_profile_last_name_value' => array(
    'label' => 'Last Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_last_name_value',
    'table' => 'node_data_field_profile_last_name',
    'field' => 'field_profile_last_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_first_name_value' => array(
    'label' => 'First Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_first_name_value',
    'table' => 'node_data_field_profile_first_name',
    'field' => 'field_profile_first_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_gpa_value' => array(
    'label' => 'GPA',
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_gpa_value',
    'table' => 'node_data_field_gpa',
    'field' => 'field_gpa_value',
    'relationship' => 'none',
  ),
  'field_cgpa_sp_value' => array(
    'label' => 'cGPA',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'strip_tags' => 0,
      'html' => 0,
    ),
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_cgpa_sp_value',
    'table' => 'node_data_field_cgpa_sp',
    'field' => 'field_cgpa_sp_value',
    'relationship' => 'field_student_program_ref_gpa_nid',
  ),
  'field_credit_load_registered_value' => array(
    'label' => 'Credit Load Registered',
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_credit_load_registered_value',
    'table' => 'node_data_field_credit_load_registered',
    'field' => 'field_credit_load_registered_value',
    'relationship' => 'none',
  ),
  'field_credit_load_completed_value' => array(
    'label' => 'Credit Load Completed',
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_credit_load_completed_value',
    'table' => 'node_data_field_credit_load_completed',
    'field' => 'field_credit_load_completed_value',
    'relationship' => 'none',
  ),
));
$handler->override_option('filters', array(
  'type' => array(
    'operator' => 'in',
    'value' => array(
      'student_gpa' => 'student_gpa',
    ),
    'group' => '0',
    'exposed' => FALSE,
    'expose' => array(
      'operator' => FALSE,
      'label' => '',
    ),
    'id' => 'type',
    'table' => 'node',
    'field' => 'type',
    'relationship' => 'none',
  ),
  'field_programme_name_value_many_to_one_1' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_programme_name_value_many_to_one_1_op',
      'identifier' => 'programme',
      'label' => 'Program',
      'optional' => 0,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_programme_name_value_many_to_one_1',
    'table' => 'node_data_field_programme_name',
    'field' => 'field_programme_name_value_many_to_one',
    'relationship' => 'field_program_ref_gpa_nid',
    'reduce_duplicates' => 0,
  ),
  'field_level_name_gpa_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_level_name_gpa_value_many_to_one_op',
      'identifier' => 'level',
      'label' => 'Level',
      'optional' => 0,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_level_name_gpa_value_many_to_one',
    'table' => 'node_data_field_level_name_gpa',
    'field' => 'field_level_name_gpa_value_many_to_one',
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
  'field_sess_name_gpa_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_sess_name_gpa_value_many_to_one_op',
      'identifier' => 'session',
      'label' => 'Session',
      'optional' => 0,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_sess_name_gpa_value_many_to_one',
    'table' => 'node_data_field_sess_name_gpa',
    'field' => 'field_sess_name_gpa_value_many_to_one',
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
  'field_semester_name_gpa_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_semester_name_gpa_value_many_to_one_op',
      'identifier' => 'semester',
      'label' => 'Semester',
      'optional' => 0,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_semester_name_gpa_value_many_to_one',
    'table' => 'node_data_field_semester_name_gpa',
    'field' => 'field_semester_name_gpa_value_many_to_one',
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
));
$handler->override_option('access', array(
  'type' => 'perm',
  'perm' => 'view grading',
));
$handler->override_option('cache', array(
  'type' => 'none',
));
$handler->override_option('footer', '<?php
require_once \'./\' . drupal_get_path(\'module\', \'eduerp\') . \'/grading/gpa_footer.inc\';
?>');
$handler->override_option('footer_format', '3');
$handler->override_option('footer_empty', 0);
$handler->override_option('items_per_page', 100);
$handler->override_option('use_pager', '1');
$handler->override_option('distinct', 1);
$handler->override_option('style_plugin', 'table');
$handler->override_option('style_options', array(
  'grouping' => '',
  'override' => 1,
  'sticky' => 1,
  'order' => 'asc',
  'columns' => array(
    'name' => 'name',
    'field_profile_last_name_value' => 'field_profile_last_name_value',
    'field_profile_first_name_value' => 'field_profile_first_name_value',
    'field_gpa_value' => 'field_gpa_value',
    'field_cgpa_sp_value' => 'field_cgpa_sp_value',
    'field_credit_load_registered_value' => 'field_credit_load_registered_value',
    'field_credit_load_completed_value' => 'field_credit_load_completed_value',
  ),
  'info' => array(
    'name' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_last_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_first_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_gpa_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_cgpa_sp_value' => array(
      'sortable' => 0,
      'separator' => '',
    ),
    'field_credit_load_registered_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_credit_load_completed_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
  ),
  'default' => 'field_profile_last_name_value',
));
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'gpa');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
