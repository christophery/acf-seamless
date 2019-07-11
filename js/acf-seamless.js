(function(){

	document.addEventListener("DOMContentLoaded", function(){

		if( typeof acf !== 'undefined' ){
			//get field groups
			var fields = acf.get('postboxes');

			if( fields ){
				for ( i = 0; i < fields.length; i++ ) {

					//get field group id
					var id = fields[i].id;

					//get field group style (default or seamless)
					var style = fields[i].style;

					//check if field group has seamless style set
					if( style == 'seamless' ){
						//apply seamless class to field group
						document.getElementById(id).classList.add('seamless');
					}
				}
			}
		}

	});

})();