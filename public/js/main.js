


function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    
    
    $(document).ready(function(){
        /* POSTS */
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var username;
        function set_username(x){
            username = x;
        }
        /* Get name of logged in user */
        $.ajax({
            /* the route pointing to the post function */
            url: 'userajax',
            type: 'GET',
            dataType: "json",
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                console.log(data);
                set_username(data.success);
            },
            error: function(data){
                console.log(data);
            }
        }); 

        /* Delete comments that are placed in previous rendering of page */    
        $(document).on('click','#delete-button',function (event) {
            event.preventDefault();
            $id = $(this).attr('name');

            /* Remove comment */
            $(this).parents(".comment:first").remove(); 

            /* Mark as deleted in database */
            ajaxDelete($id);
        }); 

        /* Submit comment */
        $("#ajaxSubmitComment").click(function(event){   
            event.preventDefault();
            var postId;
            function set_post_id(x){
                postId = x;
            }
            /* Format the date and time */
            $dt = new Date($.now());
            $time = $dt.getHours() + ":" + $dt.getMinutes() + ":" + $dt.getSeconds();
            $date = $dt.getFullYear() + '-' + $dt.getMonth() + '-' + $dt.getDay();

            $subject = $('#subject').val();

            displayComment();

            /* Remove the comment from display when placed in current rendering of page */
            $("#delete-button-jq").on('click', function(){
                $(this).parent('.comment').remove();

            /* Mark comment as deleted in database */
            ajaxDelete(postId);
            }); 

            

             /* Put comment in database (via server) */
            $.ajax({
                /* the route pointing to the post function */
                url: 'postajax',
                type: 'POST',
                dataType: "json",
                /* send the csrf-token and the input to the controller */
                data: {_token: CSRF_TOKEN, subject: jQuery('#subject').val()},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function(data) {
                    console.log(data);
                    set_post_id(data);
                },
                error: function(data){
                    console.log(data);
                }
            }); 

        });

        function displayComment() {
            if(!(username == null)){
                $(".comment-area").prepend(
                '<div class="comment">' +
                    '<h4>'+ username +'</h4>' +
                    ' <p class="date-time">'+ $date + ' ' + $time +'</p>' + 
                    ' <p>' + $subject + '</p>' +
                    '<button id="delete-button-jq">DELETE</button>') 
                } else {
                    alert('You must be logged in to write posts');
            }
        }

        function ajaxDelete($id) {
            /* Mark commet as deleted in database */
            
           $.ajax({
               /* the route pointing to the post function */
               url: 'posts/delete',
               type: 'POST',
               dataType: "json",
               /* send the csrf-token and the input to the controller */
               data: {_token: CSRF_TOKEN, id: $id},
               dataType: 'JSON',
               /* remind that 'data' is the response of the PostController */
               success: function(data) {
                   console.log(data);
               },
               error: function(data){
                   console.log(data);
               }
           }); 
       }

       /* REGISTER */

    $(document).on('click','#register-btn',function (event) {
        event.preventDefault();          
        $.ajax({
            /* the route pointing to the post function */
            url: 'register',
            type: 'POST',
            dataType: "json",
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, 
                name: $("#name").val(), 
                email: $("#email").val(), 
                password:$("#password").val(), 
                password_confirm:$("#password_confirm").val()},
            /* remind that 'data' is the response of the PostController */
            success: function(data) {
                console.log(data);

                if(data.errors){
                jQuery.each(data.errors, function(key, value){
                    jQuery('.alert-danger').show();
                    jQuery('.alert-danger').append('<p>'+value+'</p>');
                });
                } else {
                    location.reload(true);
                }
            },
            error: function(data){
                console.log(data);
                
              
            }
        }); 
    });

    $("#loginForm").submit(function(e){   
        e.preventDefault();
        let loginForm = $("#loginForm");
        let formData = loginForm.serialize();

        $.ajax({
            url:'login',
            type:'POST',
            data:formData,
            success:function(data){
                console.log(data);
                location.reload(true);
            },
            error: function (data) {
                alert(data);
            }
        });

   
});

$(document).on('click','#log-out-link',function (e){   
    e.preventDefault();
    let logoutForm = $("#logout-form");
    let formData = logoutForm.serialize();

    $.ajax({
        url:'logout',
        type:'POST',
        data:formData,
        success:function(data){
            console.log(data);
            location.reload(true);
        },
        error: function (data) {
            alert(data);
        }
    });


});




   

   });    





 