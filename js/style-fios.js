$(document).ready(function() { 
            var windowWidth = $(window).width();
            if(windowWidth >= 1250)$("#fios").addClass("col-xs-9");
				else $("#fios").removeClass("col-xs-9");
			if(windowWidth < 1250)$("#fios").addClass("col-xs-12");
				else $("#fios").removeClass("col-xs-12");
            if(windowWidth > 1830)$("#fios").addClass("col-xs-push-1");
				else $("#fios").removeClass("col-xs-push-1");
				
            $(window).resize(function(){
                var windowWidth = $(window).width(); 
                if(windowWidth >= 1250)$("#fios").addClass("col-xs-9");
					else $("#fios").removeClass("col-xs-9");
				if(windowWidth < 1250)$("#fios").addClass("col-xs-12");
					else $("#fios").removeClass("col-xs-12");
				if(windowWidth > 1830)$("#fios").addClass("col-xs-push-1");
					else $("#fios").removeClass("col-xs-push-1");
             }); 
        });