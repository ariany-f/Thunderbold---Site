$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    }
    return decodeURI(results[1]) || 0;
}

function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-10950657645/gwXrCNvt0IMYEO2M1-Uo',
        'event_callback': callback
    });
    return false;
  }

//contact us form
$(".contact_btn").on('click', function () {

    //simple validation at client's end
    var post_data, output;
    var proceed = "true";
    var missingfields = "false";

    if(($(this).attr('disabled') == 'disabled' ||  $(this).attr('disabled')))
    {
        proceed = "false";
    }

    //disable submit button on click
    $(".contact_btn").attr("disabled", "disabled");
    // $(".contact_btn b").text('Sending');
    $(".contact_btn i").removeClass('d-none');

    var str = $('#contact-form-data').serializeArray();

    $('#contact-form-data input.required').each(function() {
        if(!$(this).val()){
            // alert('Some fields are empty');
            proceed = "false";
            missingfields = "true";
        }
    });

    //everything looks good! proceed...
    if (proceed === "true") {

        var pathArray = window.location.pathname.split('/');
        var secondLevelLocation = pathArray[3];

        var accessURL;
        if(secondLevelLocation){
            accessURL="../vendor/contact-mailer.php";
        }else{
            accessURL="vendor/contact-mailer.php";
        }
        //data to be sent to server
        $.ajax({
            type: 'POST',
            // url: 'vendor/contact-mailer.php',
            url: accessURL,
            data: str,
            dataType: 'json',
            success: function (response) {

                if (response.type == 'error') {
                    output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">' + response.text + '</div>';
                } else {

                    output = '<div class="alert-success" style="padding:10px 15px; margin-bottom:30px;">' + response.text + ' Envie-nos mais detalhes sobre o seu projeto. <a href="/budget?name='+response.name+'&email='+response.email+'">Clique aqui</a></div>';
                    
                    //reset values in all input fields
                    $('.contact-form input').val('');
                    $('.contact-form textarea').val('');

                    gtag_report_conversion();
                    
                    const measurement_id = `G-GVBTQ1JC43`;
                    const api_secret = `koA3xqBSSmmWI83cQIu2gg`;

                    fetch(`https://www.google-analytics.com/mp/collect?measurement_id=${measurement_id}&api_secret=${api_secret}`, {
                        method: "POST",
                        body: JSON.stringify({
                            client_id: '1015734416.1663236506',
                            events: [{
                                name: 'ads_conversion_Enviar_formul_rio_de_le_1',
                                params: {
                                    'event_name': 'ads_conversion_Enviar_formul_rio_de_le_1',
                                    'page_path': 'success',
                                    'user_name': str.name,
                                    'user_email': str.email
                                },
                            }]
                        })
                    });
                    $(".contact_btn").attr("disabled", false);
                }

                if ($("#result").length) {
                    // alert("yes");
                    $("#result").hide().html(output).slideDown();
                    $(".contact_btn i").addClass('d-none');
                }else{
                    if (response.type == 'error') {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'Oops...',
                            html: '<div class="text-danger">'+ response.text +'</div>',
                        })
                        $(".contact_btn i").addClass('d-none');
                    }else{
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Sucesso!',
                            html: '<div class="text-success">'+ response.text +'. Envie-nos mais detalhes sobre o seu projeto <a href="/budget?name='+response.name+'&email='+response.email+'">Clique aqui</a></div>',
                        })
                        $(".contact_btn i").addClass('d-none');
                        $(".contact_btn").attr("disabled", false);
                    }
                }
            },
            error: function () {
                alert("Failer");
            }
        });

    }
    else
    {
        if ($("#result").length) {
            if(missingfields == "true")
            {
                output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">Please provide the missing fields.</div>';
            }
            else
            {
                output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">Houve um problema com sua requisição.</div>';
            }
            $("#result").hide().html(output).slideDown();
            $(".contact_btn i").addClass('d-none');
        }else{
            
            var messageerror = "Houve um problema com sua requisição";
            if(missingfields == "true")
            {
                messageerror = "Please provide the missing fields";
            }
            Swal.fire({
                icon: 'error',
                type: 'error',
                title: 'Oops...',
                html: '<div class="text-danger">'+messageerror+'.</div>'
            })
            $(".contact_btn i").addClass('d-none');
            $(".contact_btn").attr("disabled", false);
        }
    }
});

//modal window form
$(".modal_contact_btn").on('click', function () {

    //simple validation at client's end
    var post_data, output;
    var proceed = "true";
    var missingfields = "false"

    
    if(($(this).attr('disabled') == 'disabled' ||  $(this).attr('disabled')))
    {
        proceed = "false";
    }

    //disable submit button on click
    $(".modal_contact_btn").attr("disabled", "disabled");
    // $(".modal_contact_btn b").text('Sending');
    $(".modal_contact_btn i").removeClass('d-none');

    var str=$('#modal-contact-form-data').serializeArray();

    $('#modal-contact-form-data input.required').each(function() {
        if(!$(this).val()){
            proceed = "false";
            missingfields = "true";
        }
    });

    //everything looks good! proceed...
    if (proceed === "true") {
        var pathArray = window.location.pathname.split('/');
        var secondLevelLocation = pathArray[3];

        var accessURL;
        if(secondLevelLocation){
            accessURL="../vendor/contact-mailer.php";
        }else{
            accessURL="vendor/contact-mailer.php";
        }
        //data to be sent to server
        $.ajax({
            type : 'POST',
            // url : 'vendor/contact-mailer.php',
            url : accessURL,
            data : str,
            dataType: 'json',
            success: function(response) {
                if (response.type == 'error') {
                    output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">' + response.text + '</div>';
                } else {
                    output = '<div class="alert-success" style="padding:10px 15px; margin-bottom:30px;">' + response.text + '</div>';
                    //reset values in all input fields
                    $('.contact-form input').val('');
                    $('.contact-form textarea').val('');
                    
                    const measurement_id = `G-GVBTQ1JC43`;
                    const api_secret = `koA3xqBSSmmWI83cQIu2gg`;

                    fetch(`https://www.google-analytics.com/mp/collect?measurement_id=${measurement_id}&api_secret=${api_secret}`, {
                        method: "POST",
                        body: JSON.stringify({
                            client_id: '1015734416.1663236506',
                            events: [{
                                name: 'ads_conversion_Enviar_formul_rio_de_le_1',
                                params: {
                                    'event_name': 'page_view',
                                    'page_path': 'success',
                                    'user_name': str.name,
                                    'user_email': str.email
                                },
                            }]
                        })
                    });
                }


                if ($("#quote_result").length) {
                    $("#quote_result").hide().html(output).slideDown();
                    $(".modal_contact_btn i").addClass('d-none');
                }else{
                    if (response.type == 'error') {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'Oops...',
                            html: '<div class="text-danger">'+ response.text +'</div>',
                        })
                        $(".modal_contact_btn i").addClass('d-none');
                    }else{
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Sucesso!',
                            html: '<div class="text-success">'+ response.text +'</div>',
                        })
                        $(".modal_contact_btn i").addClass('d-none');
                    }
                }
                // $("#quote_result").hide().html(output).slideDown();
                // $(".modal_contact_btn i").addClass('d-none');
            },
            error: function () {
                alert("Failer");
            }
        });

    }
    else {
        if ($("#quote_result").length) {
            
            if(missingfields == "true")
            {
                output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">Please provide the missing fields.</div>';
            }
            else
            {
                output = '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">Houve um problema com sua requisição.</div>';
            }
            $("#quote_result").hide().html(output).slideDown();
            $(".modal_contact_btn i").addClass('d-none');
        }else{
                  
            var messageerror = "Houve um problema com sua requisição";
            if(missingfields == "true")
            {
                messageerror = "Please provide the missing fields";
            }
            
            Swal.fire({
                icon: 'error',
                type: 'error',
                title: 'Oops...',
                html: '<div class="text-danger">'+messageerror+'.</div>'
            })
            $(".modal_contact_btn i").addClass('d-none');
        }
    }
});

let functionalities = null;

function move() {
    var field = $('.content').find('input');
    var count = 0;
    var total = 0;

    $(field).each(function() {
        total++;
        if ($(this).val()) {
            count++;
        }
    });
    var percent = ((100/total)*count);
    var elem = document.getElementById('budgetPercent'); 
    var width = parseFloat(elem.style.width);
    if(isNaN(width)){
        width = 0;
    }

    $('.circle').circleProgress('value', percent/100);

    var id = setTimeout(frame, 50);
    function frame() {
        if(width <= percent)
        {
            while(width <= percent) {
                width = (width+0.1);
                elem.style.width = width + '%'; 
            }
        }
        else
        {
            while(width > percent) {
                width = (width-0.1); 
                elem.style.width = width + '%';
            }
        }
    }
  }


//budget form
$('body.budget input').bind("enterKey",function(event){
    var input = $(this);
    var section = input.closest('section').attr('id');
    var input_name = input.attr('name');
    var value = input.val();
    if(!input[0].checkValidity()) {
        input[0].reportValidity();
    }
    else {
        if(!$(this).is('input:last')){
            var fuller = $(this).closest('section').next(),
            content = $('.content');
            content.animate({
                scrollTop: content.scrollTop() + (fuller.offset().top)
            });
            var nextl =  ($('input').index(this)+1);
            $('input').eq(nextl).focus();
        }
        else
        {
            var pathArray = window.location.pathname.split('/');
            var secondLevelLocation = pathArray[3];

            var accessURL;
            if(secondLevelLocation){
                accessURL="../vendor/budget.php";
            }else{
                accessURL="vendor/budget.php";
            }
            //data to be sent to server
            var field = $('.content').find('input');
            var obj = {};

            $(field).each(function() {
                obj[$(this).attr('name')] = $(this).val();
            });

            obj['name'] = $.urlParam('name');
            obj['email'] = $.urlParam('email');

            $.ajax({
                type: 'POST',
                url: accessURL,
                data: obj,
                dataType: 'json',
                success: function (response) {
                    if (response.type == 'error') {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'Oops...',
                            html: '<div class="text-danger">'+ response.text +'</div>',
                        }).then(function() {
                            window.location.href = "/";
                        })
                    }else{
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Sucesso!',
                            html: '<div class="text-success">'+ response.text +'</div>',
                        }).then(function() {
                            window.location.href = "/";
                        })
                    }
                },
                error: function () {
                    alert("Failer");
                }
            });
        }
       
        move();
    }
});

$('body.budget input').keyup(function(event){
    move();
 });

$('body.budget input').keydown(function(event){
     if(event.keyCode == 13)
     {
        event.preventDefault();
        $(this).trigger("enterKey");
     }
 });

$(".budget_btn").on('click', function () {
   
    var section = $(this).closest('section').attr('id');
    var input = $(this).parent().parent().find('input');
    var input_name = input.attr('name');
    var value = input.val();
   
    if(!input[0].checkValidity()) {
        input[0].reportValidity();
    }
    else {
        if(!input.is('input:last')){
            var fuller = $(this).closest('section').next(),
            content = $('.content');
            content.animate({
                scrollTop: content.scrollTop() + (fuller.offset().top)
            });
            var nextl =  ($('input').index(input)+1);
            $('input').eq(nextl).focus();
        }
        else
        {
            var pathArray = window.location.pathname.split('/');
            var secondLevelLocation = pathArray[3];

            var accessURL;
            if(secondLevelLocation){
                accessURL="../vendor/budget.php";
            }else{
                accessURL="vendor/budget.php";
            }
            //data to be sent to server
            var field = $('.content').find('input');
            var obj = {};

            $(field).each(function() {
                obj[$(this).attr('name')] = $(this).val();
            });

            obj['name'] = $.urlParam('name');
            obj['email'] = $.urlParam('email');

            $.ajax({
                type: 'POST',
                url: accessURL,
                data: obj,
                dataType: 'json',
                success: function (response) {
                    if (response.type == 'error') {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'Oops...',
                            html: '<div class="text-danger">'+ response.text +'</div>',
                        }).then(function() {
                            window.location.href = "/";
                        })
                    }else{
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Sucesso!',
                            html: '<div class="text-success">'+ response.text +'</div>',
                        }).then(function() {
                            window.location.href = "/";
                        })
                    }
                },
                error: function () {
                    alert("Failer");
                }
            });
        }
        move();
    }
});


$('.circle').circleProgress({
    value: 0,
    size: 30,
    fill: {
      color: "#087df1"
    }
  }).on('circle-animation-progress', function(event, progress) {
    var value = $(this).circleProgress('value');
    if(value == 1)
    {
        $(this).find('strong').html('<i class="fas fa-check"></i>');
    }
    else
    {
        $(this).find('strong').html('');
    }
});

