  document.onreadystatechange = function () {
        if (document.readyState == "complete") {
        //loadCreate();
        }
     }
    function daftar(){
        var formData = $('#formdaftar').serialize();
        
        $.post('daftar/',formData, function(data) {
            //console.log(data);
            
            if (data === 'sukses') {
                loadList();
            } else {
                loadCreate();
            }
        });
    }
    function loadCreate(){
        $.ajax({
            url: "create/",
            cache: false
        })
        .done(function( html ) {
            $("#createbutton").attr("onclick","");
            $("#ws").attr("onclick","loadList()");
            $("#createbutton").attr("style","color:red;");
            $("#ws").attr("style","color:black  ;");
            $( "#mainload" ).empty();           
            $( "#mainload" ).append( html );           
        });
    }
    function loadList(){
        $.ajax({
            url: "complete/",
            cache: false
        })
        .done(function( html ) {
            $("#ws").attr("onclick","#");
            $("#createbutton").attr("onclick","loadCreate()");
            $("#ws").attr("style","color:red;");
            $("#createbutton").attr("style","color:black;");
            $( "#mainload" ).empty();           
            $( "#mainload" ).append( html );           
        });
    }