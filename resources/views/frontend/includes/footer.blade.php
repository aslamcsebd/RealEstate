
<!-- jQuery -->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/dataTables.min.js') }}"></script>
   
{{-- script --}}
{{-- Navbar Fixed --}}
<script type="text/javascript">
   // if ($(window).width() > 992) {
      $(window).scroll(function(){
         if ($(this).scrollTop() > 0) { //default: 40
         $('#navbar_top').addClass("fixed-top");
         // add padding top to show content behind navbar
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
         }else{
            $('#navbar_top').removeClass("fixed-top");
            // remove padding top from body
            $('body').css('padding-top', '0');
         }   
      });
   // } // end
</script>

{{-- Bootstrap alert --}}
<script type="text/javascript">
   window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
      });
   }, 5000);
</script>

{{-- Datatable --}}
<script type="text/javascript">
   $(document).ready( function () {
      $('.table').DataTable();
   } );
   // $('.table').dataTable( {
   //    "pageLength": 3
   // } );
</script>

<script type="text/javascript">
   $('.table').DataTable({
      "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
   });
</script>

<script>
   $(document).ready(function(){

      $(document).on('click','.js-menu_toggle.closed',function(e){
         e.preventDefault(); $('.list_load, .list_item').stop();
         $(this).removeClass('closed').addClass('opened');
         $('.side_menu').css({ 'left':'0px' });
         var count = $('.list_item').length;
         $('.list_load').slideDown( (count*.6)*100 );
         
         $('.list_item').each(function(i){
            var thisLI = $(this);
            timeOut = 100*i;
            setTimeout(function(){
               thisLI.css({
                  'opacity':'1',
                  'margin-left':'0'
               });
            },100*i);
         });
      });

      $(document).on('click','.js-menu_toggle.opened',function(e){
         e.preventDefault(); $('.list_load, .list_item').stop();
         $(this).removeClass('opened').addClass('closed');

         $('.side_menu').css({ 'left':'-250px' });

         var count = $('.list_item').length;
         $('.list_item').css({
            'opacity':'0',
            'margin-left':'-20px'
         });
         $('.list_load').slideUp(300);
      });    
   });
</script>

{{-- Botman --}}
<script src="{{ asset('frontend/js/widget.js') }}"></script>
<script>
   var botmanWidget = {
        aboutText: 'Write Something',
        introMessage: "✋ Hi! I'm form Real Programmer"
    };
</script>

