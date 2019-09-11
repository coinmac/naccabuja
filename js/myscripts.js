$(document).ready(function() {
    $('#datatable').DataTable();

    $('#scheduled').toggle();

    $('#schedule').click(function(){
        $('#scheduled').toggle();
    });

    $('#message').on('input keyup change click', function(){
        var nochar = $(this).val().length;
        $('.messagecounter').html("No of Characters: "+nochar);

        var divider = 160;
        if(nochar>310){ divider = 155}else if(nochar>500){divider = 150}
        var pages = eval(Math.ceil(nochar/divider));
        $('.pagecounter').html("No of Pages: "+pages);

    });

    
});

function addphoneNumber(phonenumber){
    var currepients = $("#recipient").val();
    var recipients;
    if(currepients!=""){
        recipients = currepients+","+phonenumber;
    }else{
        recipients = phonenumber;        
    }
    $('#recipient').val(recipients);
}