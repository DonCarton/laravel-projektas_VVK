import './bootstrap';

$(function (){
    $(document).on('click','#logout-btn', function (e){
        e.preventDefault();
        $('#logout-form').trigger('submit');
    })
});
