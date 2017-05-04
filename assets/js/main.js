$(document).ready(function(){
	$("#demosMenu").change(function(){
	  window.location.href = $(this).find("option:selected").attr("id") + '.html';
	});

    (function() {
        /**
         * Video element
         * @type {HTMLElement}
         */
        var video = document.getElementById("bgvid");

        /**
         * Check if video can play, and play it
         */
        video.addEventListener( "canplay", function() {
            video.play();
        });
    })();

});


