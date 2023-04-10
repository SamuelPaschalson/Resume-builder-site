(function($) {
  "use strict";
  
  $(document).ready(function() {
        
      $('.content').richText({

        // text alignment
        leftAlign: true,
        centerAlign: true,
        rightAlign: true,
        justify: true,
    
        // lists
        ol: false,
    
        // title
        heading: false,
    
        // colors
        colors: false,
    
        // dropdowns
        fileHTML: '',
        imageHTML: '',
    
        // preview
        preview: false,
    
        // placeholder
        placeholder: '',
        
        imageUpload: false,
        fileUpload: false,
    
        // media
        videoEmbed: false,
        heading: false,
    
        // fonts
        fonts: true,
        fontColor: false,
        fontSize: true,
        // link
        urls: true,
    
        // tables
        table: false,
    
        // code
        removeStyles: false,
        code: true,
        // developer settings
        useSingleQuotes: false,
        height: 0,
        heightPercentage: 0,
        adaptiveHeight: false,
        id: "",
        class: "text-text",
        useParagraph: false,
        maxlength: 0,
        callback: undefined,
        useTabForNext: false
      });
  
      
      $("#input-id").rating();

      // with plugin options
      $("#input-id").rating({min:0, max:5, step:1, size:'sm'});

  
      // Rating Initialization
      $('#rateMe1').mdbRate();


      var i = 1;
      var s = 1;
      $('#add').click(function() {
        i++;
        s++;
        $('#dynamic_field').append('<div class="form-group row"><div class="col-sm-6 mb-3 mb-sm-0'+s+'"><label class="form-control-label" for="">Percentage</label><input type="tel" name="percent[]" class="form-control form-control-user" id="percent" placeholder="e.g. 80%" value="" /></div><div class="col-sm-6'+i+'"><label class="form-control-label" for="">Skill</label><input type="text" name="name[]" class="form-control form-control-user" id="name" placeholder="e.g. Enter your Skill" value="" /></div></div>');
      });
      $('#submit').click(function() {
        e.preventDefault();
        $.ajax({
          url:"skills_id.php",
          method:"POST",
          data:$('#add_skill').serialize(),
          success:function (data) {
            alert(data);
            $('#add_skill')[0].reset();
          }
        })
      })

      // Password Show
      
      if($('.toggle-password').length > 0) {
        $(document).on('click', '.toggle-password', function() {
          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $(".pass-input");
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
      }
    
      // Password Show
      
      if($('.toggle-password1').length > 0) {
        $(document).on('click', '.toggle-password', function() {
          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $(".pass-input");
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
      }

      // with plugin options
      $("#input-id").rating({min:0, max:5, step:1, size:'sm'});
      


  });

})(jQuery);



        