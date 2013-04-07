$(function(){
	
	CKEDITOR.config.toolbar = 'Full';
	CKEDITOR.config.toolbar_Full =
	[{
		name: 'clipboard', 
		items : [ 'Cut','Copy','Paste','PasteText','-','Undo','Redo' ]
	},
	{
		name: 'basicstyles', 
		items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ]
	},
	{
		name: 'paragraph', 
		items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
		'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ]
	},
	{
		name: 'links', 
		items : [ 'Link','Unlink','Anchor' ]
	},
	{
		name: 'insert', 
		items : [ 'Image','Flash','Table','HorizontalRule','SpecialChar','PageBreak' ]
	},
	'/',
	{
		name: 'styles', 
		items : [ 'Styles','Format','Font','FontSize' ]
	},
	{
		name: 'colors', 
		items : [ 'TextColor','BGColor' ]
	},
	{
		name: 'tools', 
		items : [ 'Maximize', 'ShowBlocks','-','About' ]
	}
	];
	
	
	$( 'textarea.texteditor' ).ckeditor({
		toolbar:'Full'
	});
	$( 'textarea.mini-texteditor' ).ckeditor({
		toolbar:'Full',
		width:700
	});
});