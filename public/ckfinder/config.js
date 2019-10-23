/*
 Copyright (c) 2007-2019, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or https://ckeditor.com/sales/license/ckfinder
 */

var config = {};

// Set your configuration options below.

// Examples:
// config.language = 'pl';
// config.skin = 'jquery-mobile';
$baseUrl = '/public/image/';
$enabled   = "false";
CKFinder.define(config);
$config['authentication'] = function() {
    return true;
};
function CheckAuthentication()
{
    return true;
}
