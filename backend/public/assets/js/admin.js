 $(document).ready(function () {
    $(".menu-dropdown:not(.submenu-active)").hover(function () {
      $(this).toggleClass("submenu-hover");
    });
    // var table = $('#list').DataTable( {} );
    $('#brand_associate').multiselect({
      columns:5,
      placeholder: 'Select Brand Associate',
      search: true,
      selectAll: false
  });
    $('#projectsassigned_userid').multiselect({
      columns:2,
      placeholder: 'Select Account Manager',
      search: true,
      selectAll: false
  });

  $(document).on('change', '.child_services [name="services_sold[]"]', function() {
    var checkbox = $(this), // Selected or current checkbox
        value = checkbox.val(); // Value of checkbox

    if (checkbox.is(':checked'))
    {
        console.log('checked');
        $(this).closest('li').find('.comments').html(`<textarea name="comments[]"></textarea>`);
    }else
    {
        console.log('not checked');
        $(this).closest('li').find('.comments').html(``);
    }
});

$('#nav-tab').scrollTabs();



/*  function updateTextArea() {     
  var allVals = [];
  $('.child_services li input:checked').each(function(i) {
      if ($(this).is(":checked")){
        $(this).parent().parent().find('.woClass').remove().addClass('comments');
        $(this).parent().parent().find('.comments').html(`<textarea name="comments[]"></textarea>`).removeClass('comments').addClass('woClass');
        // $(this)$(this).data('target')
      }
        
      
    // $(this).parent(".comments").add(`<h1>Hello</h1>`);
    
  });
  
   
  }
  $(function() {
     $('.child_services input').on('change',updateTextArea);
     updateTextArea();
});  */

/* $('.child_services li input[type=checkbox]:checked').change(function(){
  alert($(this).val());
  alert($(this).data('target'));
  $('div[data-id='+$(this).data('target')+']').toggle();
}) */
 /*  $(".child_services").change(function(e){
    $(':checkbox:checked').each(function(i){
      alert($(this).val());
      if ($(this).find('.form-check-input').is(":checked")){
        $(this).find('.form-check-input:checked').parent().addClass('is-checked');
        if($( ".child_category" ).hasClass('is-checked')){
          $('.child_category.is-checked').find('.comments').html('Hello World');
        }
      }else{
        $(this).find('.child_category').removeClass('is-checked');
        $(this).find('.child_category').find('.comments').remove();
      }
    }); */
    /* if ($(this).find('.form-check-input').is(":checked")){
       //console.log($(this).find('.form-check-input:checked').val());
       

       $(this).find('.form-check-input:checked').parent().addClass('is-checked');
        if($( ".child_category" ).hasClass('is-checked')){
          $('.child_category.is-checked').find('.comments').html('Hello World');
        }
    }else{
      $(this).find('.child_category').removeClass('is-checked');
        $(this).find('.child_category').find('.comments').remove();
    } 
});*/




  });