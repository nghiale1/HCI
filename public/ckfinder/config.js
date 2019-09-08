/*
 Copyright (c) 2007-2019, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or https://ckeditor.com/sales/license/ckfinder
 */

var config = {};

// Set your configuration options below.

// Examples:
// config.language = 'pl';
// config.skin = 'jquery-mobile';

CKFinder.define(config);
$config['authentication'] = function() {
    return true;
};
$config['backends'][] = array(
    'name' => 'default',
    'adapter' => 'local',
    'baseUrl' => '/HCI/uploads/',
    //  'root'         => '', // Can be used to explicitly set the CKFinder user files directory.
    'chmodFiles' => 0777,
    'chmodFolders' => 0755,
    'filesystemEncoding' => 'UTF-8',
);