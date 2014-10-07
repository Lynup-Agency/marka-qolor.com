  $(function(){
        // Trigger maximage
        $('#maximage').maximage({
          cycleOptions: {
            fx: 'fade',
            speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
            timeout: 0
          },
          onFirstImageLoaded: function(){
            $('#maximage').fadeIn('slow');
        }
        });

        //fadein el contenido de div.row ..s
        $('div.row')

      });
