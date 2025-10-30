function toggleTypeVisibility() {
    otherDiv = document.getElementById('treat_type_section').style.display = 'none';
    const radio = document.getElementById('customRadio4');
    radio.checked = false;

    const selectTreatType = document.getElementById('treat_type');
    const treat_action = document.getElementById('treat_action');
    const treat_send_to_group = document.getElementById('treat_send_to_group');
    const treat_assign_to_group_members = document.getElementById('treat_assign_to_group_members');
    const treat_assign_to_department_members = document.getElementById('treat_assign_to_department_members');
    const treat_assign_to = document.getElementById('assign_to');
    const treat_assign_to_block = document.getElementById('assign_to_block');



    switch (selectTreatType.value) {
        case "treat":

        treat_action.style.display = 'block';
        treat_send_to_group.style.display = 'none';
        treat_assign_to_group_members.style.display = 'none';
        treat_assign_to_department_members.style.display = 'none';
        treat_assign_to_block.style.display = 'none';
        treat_assign_to.value = treat_assign_to.options[0].value;
            
        break;

        case "assign_only":

        treat_action.style.display = 'none';
        treat_send_to_group.style.display = 'none';
        treat_assign_to_group_members.style.display = 'none';
        treat_assign_to_department_members.style.display = 'none';
        treat_assign_to_block.style.display = 'block';
        treat_assign_to.value = ' ';
            
        break;

        case "assign_and_forward":

        treat_action.style.display = 'none';
        treat_send_to_group.style.display = 'block';
        treat_assign_to_group_members.style.display = 'none';
        treat_assign_to_department_members.style.display = 'none';
        treat_assign_to_block.style.display = 'block';
        treat_assign_to.value = ' ';
            
        break;
    
        default:
            break;
    }

  

    
}

toggleTypeVisibility();

const selectTreatType = document.getElementById('treat_type');
selectTreatType.addEventListener('change', toggleTypeVisibility);



function toggleAssignVisibility() {
    const selectAssignType = document.getElementById('assign_to');
    const treat_assign_to_group_members = document.getElementById('treat_assign_to_group_members');
    const treat_assign_to_department_members = document.getElementById('treat_assign_to_department_members');


    switch (selectAssignType.value) {

        case "group_members":
        treat_assign_to_group_members.style.display = 'block';
        treat_assign_to_department_members.style.display = 'none';
            
        break;

        case "department_members":

        treat_assign_to_group_members.style.display = 'none';
        treat_assign_to_department_members.style.display = 'block';
            
        break;
    
        default:

        treat_assign_to_group_members.style.display = 'none';
        treat_assign_to_department_members.style.display = 'none';

        break;
    }

  

    
}

toggleAssignVisibility()
const selectAssignType = document.getElementById('assign_to');
selectAssignType.addEventListener('change', toggleTypeVisibility);


function clickTreat(value){
    // Get the div to be shown/hidden
    const otherDiv = document.getElementById('treat_type_section');

   
        console.log("YOYOYO");
        if (value === 'OTHERS') {
            otherDiv.style.display = 'block'; // Show the div
        } else {
            otherDiv.style.display = 'none'; // Hide the div
        }
   
}