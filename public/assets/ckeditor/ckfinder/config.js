/*
 Copyright (c) 2007-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or http://cksource.com/ckfinder/license
 */
CKEDITOR.editorConfig = function(config ) {
    config.filebrowserBrowseUrl = 'ckeditor/ckfinder/ckfinder.html',
    config.filebrowserImageBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?type=Images',
    config.filebrowserFlashBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?type=Flash',
    config.filebrowserUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    config.filebrowserFlashUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
}
var config = {};

// Set your configuration options below.

// Examples:
// config.language = 'pl';
// config.skin = 'jquery-mobile';

CKFinder.define( config );
