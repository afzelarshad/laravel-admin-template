<?php

$menu = array (
  0 => 
  array (
    'name' => 'Dashboard',
    'icon' => 'fa fa-dashboard',
    'dropdown' => false,
    'route' => 'admin.dashboard',
    'dropdown_items' => 
    array (
    ),
  ),
  1 => 
  array (
    'name' => 'Users',
    'icon' => 'fa fa-users',
    'dropdown' => true,
    'route' => '',
    'dropdown_items' => 
    array (
      0 => 
      array (
        'name' => 'Add User',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.users.create',
      ),
      1 => 
      array (
        'name' => 'Manage Users',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.users.index',
      ),
      2 => 
      array (
        'name' => 'Manage User Roles',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.roles.index',
      ),
    ),
  ),
  3 => 
  array (
    'name' => 'Settings',
    'icon' => 'fa fa-gear',
    'dropdown' => true,
    'route' => '',
    'dropdown_items' => 
    array (
      0 => 
      array (
        'name' => 'General Settings',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.settings.index',
      ),
      1 => 
      array (
        'name' => 'Edit Profile',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.settings.edit_profile',
      ),
    ),
  ),
  5 => 
  array (
    'name' => 'Testreports',
    'icon' => 'fa fa-file',
    'dropdown' => true,
    'route' => '',
    'dropdown_items' => 
    array (
      0 => 
      array (
        'name' => 'Add Testreport',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.testreports.create',
      ),
      1 => 
      array (
        'name' => 'Manage Testreports',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.testreports.index',
      ),
    ),
  ),
  6 => 
  array (
    'name' => 'Doctors',
    'icon' => 'fa fa-file',
    'dropdown' => true,
    'route' => '',
    'dropdown_items' => 
    array (
      0 => 
      array (
        'name' => 'Add Doctor',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.doctors.create',
      ),
      1 => 
      array (
        'name' => 'Manage Doctors',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.doctors.index',
      ),
    ),
  ),
  7 => 
  array (
    'name' => 'Labtests',
    'icon' => 'fa fa-file',
    'dropdown' => true,
    'route' => '',
    'dropdown_items' => 
    array (
      0 => 
      array (
        'name' => 'Add Labtest',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.labtests.create',
      ),
      1 => 
      array (
        'name' => 'Manage Labtests',
        'icon' => 'fa fa-circle-o',
        'route' => 'admin.labtests.index',
      ),
    ),
  ),
);
