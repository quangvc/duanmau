document.querySelector('#select-all').onclick = function(event){
    event.preventDefault();
    var checkboxes = document.getElementsByName('name');
    for (let i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true;
    }
}