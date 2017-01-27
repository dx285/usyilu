<script>
//结束时间
$("#jieji-date").click(function(){
    WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
    console.log("end time pick");
})


$(".endtime_songji").click(function(){
    WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
    console.log("end time pick");
})

$('#jieji-time').timepicker({ 'step': 15 });
$('#songji-time').timepicker({ 'step': 15 });


document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


//check zhuanpin
function checkInputValid(){
    $("#jieji-zhuanpin").focus(function() {
        console.log('in');
    }).blur(function() {
        console.log('out');
        var zhuanpin = document.getElementById("jieji-zhuanpin").value;
        console.log("get zhuanpin when blur: "+zhuanpin);
        if(zhuanpin=="拼车") {
            document.cookie="zhuanpin=pin";
            console.log("拼车");
        }else if(zhuanpin=="专车"){
            document.cookie="zhuanpin=zhuan";
            console.log("专车");
        }
    });
}

function checkSongjiInputValid(){
    $("#songji-zhuanpin").focus(function() {
        console.log('in');
    }).blur(function() {
        console.log('out');
        var zhuanpin = document.getElementById("songji-zhuanpin").value;
        console.log("get zhuanpin when blur: "+zhuanpin);
        if(zhuanpin=="拼车") {
            document.cookie="zhuanpin=pin";
            console.log("拼车");
        }else if(zhuanpin=="专车"){
            document.cookie="zhuanpin=zhuan";
            console.log("专车");
        }
    });
}

function checkJiejiZipcode(){
    $("#jieji-zipcode").focus(function() {

        console.log('in');

    }).blur(function() {

        console.log('out');
        var zipcodeTmp = document.getElementById("jieji-zipcode").value;
        console.log("get zipcode when blur: "+zipcodeTmp);
        if(zipcodeSet.has(zipcodeTmp)) {
            document.cookie="zipcodeValid=true";
            console.log("zipcode Valid");
        }else{
            document.cookie="zipcodeValid=false";
            console.log("zipcode Invalid");
        }
    });
}

function checkSongjiZipcode(){
    $("#songji-zipcode").focus(function() {

        console.log('in');

    }).blur(function() {

        console.log('out');
        var zipcodeTmp = document.getElementById("songji-zipcode").value;
        console.log("get zipcode when blur: "+zipcodeTmp);
        if(zipcodeSet.has(zipcodeTmp)) {
            document.cookie="zipcodeValid=true";
            console.log("zipcode Valid");
        }else{
            document.cookie="zipcodeValid=false";
            console.log("zipcode Invalid");
        }
    });
}

$(document).ready(function () {
    checkInputValid();
    checkSongjiInputValid();
    checkJiejiZipcode();
    checkSongjiZipcode();
})

</script>