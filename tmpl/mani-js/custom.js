



$(function() {
	
	var maSlider = {
		
		min : 0,
		max : 0,
		minRange : 0,
		maxRange : 0,
		
		startSlider : function() {
			
			if (arguments.length < 4) {
				throw new Error("ERROR : # arguments");
			}	
			
			this.min = arguments[0];
			this.max = arguments[1];
			this.minRange = arguments[2];
			this.maxRange = arguments[3];
			
			$("#priceRange").append("<div class='xx'> </div>");
			
		}
		
		
	};
	//maSlider.startSlider(0,100,20,80);
	
});

	
	
	
