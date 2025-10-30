function initializeSelect2InModal(modal) {
            var selectInput = $(modal).find('.select2-input');
          
            selectInput.select2({
              dropdownParent: modal,
            });
          }
          
         
  

    $(function(){

        $('.select2-modal').each(function () {
            initializeSelect2InModal(this);
          });


          /*
        
        $("#associated_group").select2({
            dropdownParent: $("#add-user")
        });

        $("#department").select2({
            dropdownParent: $("#add-user")
        });

        $("#from_type").select2({
            dropdownParent: $("#file-upload")
        });

     

        $("#lock_document").select2({
            dropdownParent: $("#file-upload")
        });


        $("#associated_group").select2({
            dropdownParent: $("#add-user")
        });

        $("#associated_group").select2({
            dropdownParent: $("#add-user")
        });

        $("#associated_group").select2({
            dropdownParent: $("#add-user")
        });

        */
      }); 

