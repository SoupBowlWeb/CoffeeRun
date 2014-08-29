var btnAddToRun;
$(function()
{
    btnAddToRun = document.getElementById('btn-add-to-run');
    btnAddToRun.onclick = addToRun;

});



function addToRun(e)
{
    var name = document.getElementById('invite-name');
    var email = document.getElementById('invite-email');
    var runList = document.getElementById('run-list');

    console.log( 'Entering: ' + name.value + ' , ' + email.value );

    runList.innerHTML += '<li>' + name.value + ' - <em>' + email.value + '</em> &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" title="Delete"><span class="icon icon-cancel-circle"></span></button></li>';

    name.value = '';
    email.value = '';
}