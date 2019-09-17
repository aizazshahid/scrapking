//  Event handling on file selecting
    const file_select = document.querySelector('#save_file_list');
    
    if(file_select) {
        file_select.addEventListener('change', (event) => {
            const file_input = document.querySelector('#save_file');
            const selected = event.target.value;
            
            file_input.value = selected;
        })
    }