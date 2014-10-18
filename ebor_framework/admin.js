jQuery(document).ready(function($) {

	$('.pw-gallery').each(function() {
		var instance = this;
	
		$('input[type=button].manage', instance).click(function() {
			var gallerysc = '[gallery ids="' + $('input[type=hidden]', instance).val() + '"]';
			wp.media.gallery.edit(gallerysc).on('update', function(g) {
				var id_array = [];
				$.each(g.models, function(id, img) { id_array.push(img.id); });
				$('input[type=hidden]', instance).val(id_array.join(","));
			});
		});
		$('input[type=button].ebor-gallery-remove', instance).click(function() {
			$('input[type=hidden]', instance).val('');
			alert('All Gallery Items Removed, Update Post to Save');
		});
	});
			
	$('.icon-selector').each(function(){
		var $this = $(this),
			icon = $(':selected', this).attr('data-icon');
			
		$this.prev().html(' ').html('<i class="'+ icon +'"></i>');
	});
	
	$('body').on('change', '.icon-selector', function(){
		var $this = $(this),
			icon = $(':selected', this).attr('data-icon');
			
		$this.prev().html(' ').html('<i class="'+ icon +'"></i>');
	});
	
	$( "ul.blocks" ).bind( "sortstop", function(event, ui) {
		
		//if moving column inside column, cancel it
		if(ui.item.hasClass('block-container')) {
			$parent = ui.item.parent()
			if( $parent.hasClass('block-container') || $parent.hasClass("column-blocks") ) { 
				$(this).sortable('cancel');
				return false;
			}
		}
	
	});
	
	$('li').has('a.column-close').css({
		'height' : '20px',
		'overflow' : 'hidden'
	});
	
	$('.column-close').click(function(){
		if( $(this).parents('li').height() > 20 ){
			$(this).parents('li').css({
				'height' : '20px',
				'overflow' : 'hidden'
			});
		} else {
			$(this).parents('li').css({
				'height' : 'auto',
				'overflow' : 'hidden'
			});
		}
		return false;
	});

});