<script type="text/javascript" src="PERCH_LOGINPATH/addons/plugins/editors/redactor/redactor/redactor.min.js"></script>
<link rel="stylesheet" href="PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/edit.css" type="text/css" />
<link rel="stylesheet" href="PERCH_LOGINPATH/addons/plugins/editors/redactor/redactor/redactor.css" type="text/css" />
<script type="text/javascript" charset="utf-8">
$(function() {

	var set_up_redactor = function() {
		$('textarea.redactor:not([data-init])').each(function(i,o){
			var self = $(o);
			var uploadFields = {
					'width'	 : 	self.attr('data-width')||'',
					'height' : 	self.attr('data-height')||'',
					'crop'	 : 	self.attr('data-crop')||'',
					'quality': 	self.attr('data-quality')||'',
					'sharpen': 	self.attr('data-sharpen')||'',
					'density': 	self.attr('data-density')||'',
					'bucket' : 	self.attr('data-bucket')||'default'
				};
			self.wrap('<div class="editor-wrap" style="float:left;"></div>');
			self.redactor({
				imageUpload: 'PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/upload.php?filetype=image',
				fileUpload: 'PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/upload.php',
				uploadFileFields: uploadFields,
				uploadImageFields: uploadFields,
				buttonSource: true
			});
			self.attr('data-init', true);
		});
	};

	set_up_redactor();

	$(window).on('Perch_Init_Editors', function(){
		set_up_redactor();
	});

});
</script>
