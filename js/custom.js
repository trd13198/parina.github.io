$(document).ready(function(){

	var stopAutohide;

	function showWindow(){
		$('#openModal').show();

		/*auto hide after 15s*/
		stopAutohide = setTimeout(hideWindow,15000);
	}
	/*showWindow()*/


	function hideWindow(){
		$('#openModal').hide();

	}

	/*hideWindow()*/


	/*now call function automatically after some time*/
	/*auto open after 1s*/
	setTimeout(showWindow,1000);

	/*close after click*/

	$("#openModal").click(function(){
		hideWindow();
		celarTimeout(stopAutohide);
	})

})