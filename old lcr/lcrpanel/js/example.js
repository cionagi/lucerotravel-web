// Run the script on DOM ready:
$(function(){
	$('#graficos').visualize({type: 'bar', width: '580px' , rowFilter: '*', colFilter: '*'});
        $('.visualize').trigger('visualizeRefresh');
});