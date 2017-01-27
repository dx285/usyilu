
var randomNum = 0;
var isJiejiZipcodeOutRange = false;
var isSongjiZipcodeOutRange = false;
var ajaxAirport = "JFK";
//var tmpDate = new Date();
var ajaxDate = new Date();
var ajaxTime = 9;
//console.log("new date: "+ajaxDate);
var ajaxFlightNumSuggestionArr = [];
var ajaxTimeRange = [];


//结束时间
$("#jieji-date").click(function(){
    console.log("choose date");
    $("#jieji-date").datepicker({
        onSelect: function(dateText, inst) {
            var date = $(this).val();
            //var time = $('#time').val();
            console.log('on select triggered'+date);
            //$("#start").val(date + time.toString(' HH:mm').toString());
        }
    });
    //WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',startDate:'%y-%M-%d'});
})


$(".endtime_songji").click(function(){
    //WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
})


 document.getElementById("defaultOpen").click();



$(function(){
    for(i=0;i<24;i++){
        ajaxTimeRange.push(i);
    }

    $("#jieji-date").datepicker({
        minDate: 'today',
        onSelect: function(dateText, inst) {
            var date = $(this).val();
            console.log('on select triggered'+date);
            ajaxDate = dateFormattor(date);
            console.log("after format: "+ajaxDate);
        }
    });
    $("#jieji-date").datepicker("setDate", new Date());


    ajaxDate = dateFormattor($("#jieji-date").val());
    console.log("ajaxDate: "+ajaxDate);


    $("#songji-date").datepicker({
        minDate: 'today',
        //defaultDate: +7
    });
    $("#songji-date").datepicker("setDate", new Date());


    function dateFormattor(date) {
        var tmp = date.split('/');
        var validDateFormat = tmp[2]+'/'+tmp[0]+'/'+tmp[1];
        return validDateFormat;
    }

    // $('#jieji-time').timepicker({ 'step': 15 });
    // $('#songji-time').timepicker({ 'step': 15 });


    //租车首页焦点图
    // $('.st-car-slideBox').slide({
    //     mainCell:'.bd ul',
    //     effect:"fold",
    //     interTime: 5000,
    //     delayTime: 500,
    //     autoPlay:true,
    //     switchLoad:"original-src"
    // })

    //租车下拉选择
    $('.cs-text').click(function(){
        $('.cs-select-box').hide();
        var selectBox =$(this).parent().find('.cs-select-box');
        if(selectBox.css("display")=="none"){
            $(this).removeClass('up-ico').addClass('down-ico')
            $(this).next().slideDown("fast");
        }else{
            $(this).next().slideUp("fast");
            $(this).removeClass('down-ico').addClass('up-ico');
            selectBox.hide();
        }
    });

    $(".cs-select-box span").click(function(){
        $(this).parent().prev().removeClass('down-ico').addClass('up-ico')
        var txt = $(this).text();
        //console.log("txt: "+txt);
        //console.log("prev: "+$(this).prev().prop('id'));
        //var id = $(this).closest("div").prop("id");


        $(this).parent().prev().val(txt);

        //console.log("prev: "+$(this).parent().prev().val());
        var tmpId = $(this).parent().prev().attr('id');
        console.log("tmpID: "+tmpId);
        if(tmpId=='jieji-airport' || tmpId=='songji-airport'){
            var tmp = $(this).parent().prev().val();
            ajaxAirport = airportsShortNameHashMap[tmp];
            console.log("short: "+ajaxAirport);
        }
        var value = $(this).attr("data-id");
        $(this).parent().prev().attr('data-id',value);
        $(this).parent().hide();

    });

    $(document).mouseup(function(e){
        var _con = $('.cs-select-box');   // 设置目标区域
        if(!_con.is(e.target) && _con.has(e.target).length === 0){ // Mark 1
            $('.cs-select-box').hide();
        }
    });

    $("#jieji-flightNum").blur(function(){
        //console.log("This input field has lost its focus.");
        var val = $(this).val();
        val = val.replace(/\s+/g, '');
        $(this).val(val);
    });

})


$('#jieji-time').timepicker({ 'step': 15 });
$('#songji-time').timepicker({ 'step': 15 });



   function openCity(evt, cityName) {

       if(cityName=='songji'){
           //console.log("songji visible!");
           document.getElementById('songjiForm').style.visibility='visible';

       }
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




function isValidateJieji(form)
{

    //console.log("isvalidJieji: "+validJieji(".jieji-searchattr"));
    if(validJieji(".jieji-searchattr-submit")){
            getUrl(form, "#jiejiForm");
            return true;

    }else{
        //console.log("false no continue");
        return false;
    }
}

function isValidateSongji(form)
{
    if(validSongji(".songji-searchattr-submit")){
        getUrlSongji(form, "#songjiForm");
        return true;
    }else{
        //console.log("false no continue");
        return false;
    }
}


function getUrl(form, formType){
    console.log("getUrl");
    var carkind = $(".carkind").attr('data-id');
    var attrid = '';
    var attrArr = [];


    $('.jieji-searchattr').each(function (i, obj) {
        //console.log("搜索class: "+$(obj).attr('class'));
        //console.log("attr: "+$(obj).attr('id')=='randomNum');
        //if ($(obj).attr('class') !='randomNum' && $(obj).attr('data-id') != undefined){
        //console.log("$(obj).attr('data-id') != undefined: "+($(obj).attr('data-id') != undefined));
        if ($(obj).attr('data-id') != undefined){
            attrArr.push($(obj).attr('data-id'));
        }
        //console.log("attr: "+$(obj).attr('data-id'));
    })

    attrid = attrArr.join('_', attrArr);
    //console.log("attrArr after: " + attrid);
    if(!carkind){
        //console.log("carkind has no value");
        carkind = 0;
    }

    var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
    // var url = SITEURL + 'cars/all' + '-' + attrid;
    if(isJiejiZipcodeOutRange){
        //console.log("不在范围内");
        url = url+'/'+randomNum;
        //console.log("url: "+url);
    }else{
        //console.log("在范围内");
    }
    $(formType).attr('action', url);
}

function getUrlSongji(form, formType){
    //console.log("getUrl");
    var carkind = $(".carkind").attr('data-id');
    var attrid = '';
    var attrArr = [];


    $('.songji-searchattr').each(function (i, obj) {
        //console.log("搜索class: "+$(obj).attr('class'));
        //console.log("attr: "+$(obj).attr('id')=='randomNum');
        //if ($(obj).attr('class') !='randomNum' && $(obj).attr('data-id') != undefined){
        //console.log("$(obj).attr('data-id') != undefined: "+($(obj).attr('data-id') != undefined));
        if ($(obj).attr('data-id') != undefined){
            attrArr.push($(obj).attr('data-id'));
        }
        //console.log("attr: "+$(obj).attr('data-id'));
    })

    attrid = attrArr.join('_', attrArr);
    //console.log("attrArr after: " + attrid);
    if(!carkind){
        //console.log("carkind has no value");
        carkind = 0;
    }

    var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
    // var url = SITEURL + 'cars/all' + '-' + attrid;
    if(isSongjiZipcodeOutRange){
        url = url+'/'+randomNum;
    }
    $(formType).attr('action', url);
}

//$.notify.defaults({autoHideDelay:2500});


function validJieji(className){

    // Data validation
    //var isValid=true;
    var isFlightNumValid = true, isAirportValid = true, isAddrValid = true, isZipcodeValid = true;
    var isDateValid = true, isTimeValid = true, isZhuanpinValid = true;
    var isAirportMatch = true;

    $(className).each(function(index, element) {
        //$(element).css("border","0px solid white");
        //console.log("elemet: "+element);
        var val=$(element).val();
        var id = $(element).attr('id');

        var flightNumRegex = /^([^\W_]{1,2}[a-z]?)?(\d{1,4})[a-z]?$/i;
        var zipcodeRegex = /^\d{5}$/;
        var dateRegex = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
        var timeRegex = /^(0?[1-9]|1[012])(:[0-5]\d)[APap][mM]$/;

        //console.log("this.idName: "+$(element).attr('id'));

        //console.log("val: " + val + ", type: "+typeof val);
        val=$.trim(val);

        // if(id=='jieji-addr'){
        //     console.log("接机地址:~~~~~ "+val);
        // }

        //console.log("after trim val: " + val  + ", 专车: "+(val!=='专车') +", !val: "+!val);
        if(id=='jieji-flightNum' && !flightNumRegex.test(val)) {

            //console.log('false element');
            isFlightNumValid = false;
            $(element).notify("格式不正确,正确格式应为CA981, UA2323", "info");

        }else if(id=='jieji-airport'){

            //console.log('jieji-airport: '+val);
            //console.log("airport match: "+ typeof airportsHashMap[val]);

            if(airportsHashMap[val]==undefined){
                //console.log('false element');
                isAirportValid = false;
                $(element).notify("请选择下拉菜单内机场", "info");
            }else{
                $(element).attr('data-id',airportsHashMap[val]);
            }
            //console.log("机场before: "+$(element).attr('name'));
            //$(element).attr('name', val);
            //console.log("机场 data-id after: "+$(element).attr('data-id'));

        }else if(id=='jieji-addr'){

            //console.log('false element');
            if(!val) {
                isAddrValid = false;
                $(element).notify("接机地址不能为空", "info");
            }

            var fistChar = val.charAt(0);
            if('0'<= fistChar && fistChar <='9'){
                //console.log("valid input");
            }else{
                isAddrValid = false;
                $(element).notify("接机地必须有门牌号", "info");
            }

        }else if(id=='jieji-zipcode' ){

            var tmpZip = $(this).val();
        //console.log("tmpZip: "+tmpZip);
            if (zipcodeHashMap[val]==undefined){
            //console.log("no zip match");
                $('#jieji-zipcode-bool').val('false');
                $('#jieji-zipcode').attr('data-id', '0');

                randomNum = Math.floor((Math.random() * 300) + 1);
                isJiejiZipcodeOutRange = true;

                //$('#jieji-zipcode').notify("所在邮编不在服务范围内", "info");
            } else{
                $('#jieji-zipcode-bool').val('true');
                $('#jieji-zipcode').attr('data-id', zipcodeHashMap[tmpZip]);
            }

            if(!zipcodeRegex.test(val)){
                isZipcodeValid = false;
                $(element).notify("地址邮编格式应为5位数字,如11204", "info");
            }
        }else if(id=='jieji-date' && !dateRegex.test(val)){
            isDateValid = false;
            $(element).notify("日期格式不正确,应为2017-01-20", "info");

        }else if(id=='jieji-time' && !timeRegex.test(val)){
            isTimeValid = false;
            $(element).notify("时间格式不正确,应为12:20pm", "info");

        }else if(id=='jieji-zhuanpin' && val!='专车' && val!='拼车'){
            if(val=='专车'){
                $('#jieji-zhuanpin').attr('data-id', '14');
            }else{
                $('#jieji-zhuanpin').attr('data-id', '15');
            }
            isZhuanpinValid = false;
            $(element).notify("请选择专车或拼车", "info");
        }
    });
    return isFlightNumValid&&isAirportValid&&isAddrValid&&isZipcodeValid&&isDateValid&&isTimeValid&&isZhuanpinValid;
}

function validSongji(className){

    // Data validation
    //var isValid=true;
    var isFlightNumValid = true, isAirportValid = true, isAddrValid = true, isZipcodeValid = true;
    var isDateValid = true, isTimeValid = true, isZhuanpinValid = true;
    $(className).each(function(index, element) {
        //$(element).css("border","0px solid white");
        //console.log("elemet: "+element);
        var val=$(element).val();
        var id = $(element).attr('id');

        var flightNumRegex = /^([^\W_]{2}[a-z]?)?(\d{3,4})[a-z]?$/i;
        var zipcodeRegex = /^\d{5}$/;
        // var dateRegex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/ ;
        var dateRegex = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
        var timeRegex = /^(0?[1-9]|1[012])(:[0-5]\d)[APap][mM]$/;

        //console.log("this.idName: "+$(element).attr('id'));

        //console.log("val: " + val + ", type: "+typeof val);
        val=$.trim(val);
        //console.log("after trim val: " + val  + ", 专车: "+(val!=='专车') +", !val: "+!val);
        if(id=='songji-flightNum' && !flightNumRegex.test(val)) {
            console.log('false element');
            isFlightNumValid = false;
            //$(element).css("border","1px solid red");
            //$(element).attr('placeholder','此部分不能为空');
            $(element).notify("格式不正确,正确格式应为CA981, UA2323", "info");

        }else if(id=='songji-airport'){

            if(!val) {
                //console.log('false element');
                isAirportValid = false;
                $(element).notify("机场不能为空", "info");
            }
            // else if(!songjiAirportBool){
            //     console.log('false element');
            //     isAirportValid = false;
            //     $(element).notify("请选择下拉菜单内机场", "info");
            // }

        }else if(id=='songji-addr'){
            if(!val) {
                isAddrValid = false;
                $(element).notify("接机地址不能为空", "info");
            }

            var fistChar = val.charAt(0);
            if('0'<= fistChar && fistChar <='9'){
                //console.log("valid input");
            }else{
                isAddrValid = false;
                $(element).notify("接机地必须有门牌号", "info");
            }

        }else if(id=='songji-zipcode'){

            var tmpZip = $(this).val();
            if (zipcodeHashMap[val]==undefined){
                //console.log("no zip match");
                $('#songji-zipcode-bool').val('false');
                $('#songji-zipcode').attr('data-id', '0');


                randomNum = Math.floor((Math.random() * 300) + 1);
                isSongjiZipcodeOutRange = true;
                //$('#jieji-zipcode').notify("所在邮编不在服务范围内", "info");
            } else{
                $('#songji-zipcode-bool').val('true');
                $('#songji-zipcode').attr('data-id', zipcodeHashMap[tmpZip]);
            }
            if(!zipcodeRegex.test(val)) {
                isZipcodeValid = false;
                $(element).notify("地址邮编格式应为5位数字,如11204", "info");
            }

        }else if(id=='songji-date' && !dateRegex.test(val)){
            isDateValid = false;
            $(element).notify("日期格式不正确,应为2017-01-20", "info");

        }else if(id=='songji-time' && !timeRegex.test(val)){
            isTimeValid = false;
            $(element).notify("时间格式不正确,应为12:20pm", "info");

        }else if(id=='songji-zhuanpin' && val!='专车' && val!='拼车'){
            if(val=='专车'){
                $('#songji-zhuanpin').attr('data-id', '14');
            }else{
                $('#songji-zhuanpin').attr('data-id', '15');
            }

            isZhuanpinValid = false;
            $(element).notify("请选择专车或拼车", "info");
        }
    });
    return isFlightNumValid&&isAirportValid&&isAddrValid&&isZipcodeValid&&isDateValid&&isTimeValid&&isZhuanpinValid;
}


$(document).ready(function () {

    //bing auto completion
    $('#jieji-addr').focus(function () {
        //console.log("in");
        //callBingAutoComp("#jieji");
    });


    $('#songji-addr').focus(function () {
        //console.log("in");
        callBingAutoComp("#songji");
    });

    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", "https://dev.virtualearth.net/REST/v1/Locations?key=Asd2ABR1CMtui6QoxA3y1cSQHjzCErgFCBa7VGsLoO9gCEcj5TEf-4iW5HgbJNsu&q=yy", true);
    // xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
    // xhr.onload = function () {
    //     console.log("xhr: "+xhr.responseText);
    // };
    // xhr.send();



    //address auto suggestions BING
    function callBingAutoComp(inputId){
        var tmpId = inputId+"-addr";

        $(tmpId).autocomplete({
            source: function (request, response) {

                $.ajax({
                    //async: true,
                    url: "https://dev.virtualearth.net/REST/v1/Locations",

                    dataType: "jsonp",
                    beforeSend: function (request) {
                        request.setRequestHeader("Access-Control-Allow-Origin", "*");

                    },
                    //headers: { 'Access-Control-Allow-Origin': '*' },
                    //headers: { 'Accept': 'text/html' },

                    data: {
                        key: "Asd2ABR1CMtui6QoxA3y1cSQHjzCErgFCBa7VGsLoO9gCEcj5TEf-4iW5HgbJNsu",
                        q: request.term
                    },
                    jsonp: "jsonp",
                    success: function (data) {
                        //console.log("get ajax data: "+JSON.stringify(data, null, 2));
                        var result = data.resourceSets[0];

                        if (result) {
                            if (result.estimatedTotal > 0) {
                                response($.map(result.resources, function (item) {
                                    return {
                                        data: item,
                                        label: item.name + ' (' + item.address.countryRegion + ')',
                                        value: item.name
                                    }
                                }));
                            }
                        }
                    }
                });
            },
            minLength: 1,
            change: function (event, ui) {
                if (!ui.item)
                    $(tmpId).val('');
            },
            select: function (event, ui) {
                displaySelectedItem(ui.item.data, inputId);
            }
        });
    }
    
    
    
    



    //var ajaxTime = "8";
    var dateRegex = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    $('#jieji-flightNum').focus(function () {
        //console.log("in");
        //FlightNumSuggestion("#jieji-flightNum");
        if(!airportsShortNameHashMap[$('#jieji-airport').val()]){
            //console.log("no airport match");
            $('#jieji-airport').notify("请选择下拉菜单内机场", "info");
        } else if(!dateRegex.test($('#jieji-date').val())){
            $('#jieji-date').notify("请选择下拉菜单内时间", "info");
        } 
        else{

            //$.each(ajaxTimeRange, function (index, value) {

                $.ajax({
                    url: "https://api.flightstats.com/flex/schedules/rest/v1/jsonp/to/" + ajaxAirport + "/arriving/" + ajaxDate + "/" + 9,
                    //url: 'https://api.flightstats.com/flex/schedules/rest/v1/jsonp/flight/AA/100/departing/2017/1/29?appId=ded03de7&appKey=5e0e707ed30dddda78c3bb6d9a46950b',
                    dataType: "jsonp",
                    jsonpCallback: 'callback',
                    beforeSend: function (request) {
                        request.setRequestHeader("Access-Control-Allow-Origin", "*");
                    },

                    data: {
                        appId: "ded03de7",
                        appKey: "5e0e707ed30dddda78c3bb6d9a46950b",
                    },
                    jsonp: "jsonp",
                    success: function (data) {
                        //console.log('index: ' + index);
                        getAirflightNums(data);
                        //var tmpAirflightNumList = data["scheduledFlights"][0]["flightNumber"];
                        //console.log("get ajax data: "+tmpAirflightNumList);
                        //console.log("get jsonp data");
                        $("#jieji-flightNum").autocomplete({
                            source: ajaxFlightNumSuggestionArr
                        });

                        // var scheduledFlights = data["scheduledFlights"];
                        // for (sf of scheduledFlights) {
                        //     var carrierFsCode = sf["carrierFsCode"];
                        //     var flightNumber = sf["flightNumber"];
                        //     console.log("sf: " + carrierFsCode + flightNumber);
                        //     ajaxFlightNumSuggestionArr.push(carrierFsCode + flightNumber);
                        // }
                    }
                });

            //});
        }
    });

    function getAirflightNums(data) {
        //console.log("get list: "+JSON.stringify(data, null, 2));
        var scheduledFlights = data["scheduledFlights"];
        for(sf of scheduledFlights){
            var carrierFsCode = sf["carrierFsCode"];
            var flightNumber = sf["flightNumber"];
            console.log("sf: "+carrierFsCode+flightNumber);
            ajaxFlightNumSuggestionArr.push(carrierFsCode+flightNumber);
        }
        
    }


    function FlightNumSuggestion(inputId){
        var tmpId = inputId;
        var tmpDate = "";
        var tmpTime = "";

        $(tmpId).autocomplete({
            source: function (request, response) {
                $.ajax({
                    //async: true,
                    // url: "https://api.flightstats.com/flex/schedules/rest/v1/json/from/JFK/departing/2017/1/29/9",
                    //url: "https://api.flightstats.com/flex/schedules/rest/v1/json/from/JFK/departing/2017/1/29/10?appId=ded03de7&appKey=5e0e707ed30dddda78c3bb6d9a46950b",
                    dataType: "jsonp",
                    //crossDomain: true,
                    beforeSend: function (request) {
                        request.setRequestHeader("Access-Control-Allow-Origin", "*");

                    },
                    // data: {
                    //     appId: "ded03de7",
                    //     appKey: "5e0e707ed30dddda78c3bb6d9a46950b",
                    //     //q: request.term
                    // },
                    jsonp: "jsonp",
                    success: function (data) {
                        //console.log("get ajax data: "+JSON.stringify(data, null, 2));
                        // var result = data.resourceSets[0];
                        //
                        // if (result) {
                        //     if (result.estimatedTotal > 0) {
                        //         response($.map(result.resources, function (item) {
                        //             return {
                        //                 data: item,
                        //                 label: item.name + ' (' + item.address.countryRegion + ')',
                        //                 value: item.name
                        //             }
                        //         }));
                        //     }
                        // }
                    }
                });
            },
            minLength: 1,
            change: function (event, ui) {
                if (!ui.item)
                    $(tmpId).val('');
            },
            select: function (event, ui) {
                //displaySelectedItem(ui.item.data, inputId);
            }
        });
    }



});


function displaySelectedItem(item, inputId) {
    //console.log("item: "+JSON.stringify(item, null, 2));
    var getZipcode = item['address']['postalCode'];
    var tmpId = inputId+"-zipcode";
    //console.log("tmpId: "+tmpId);
    $(tmpId).empty().val(getZipcode);
}



// $(window).bind('beforeunload',function(){
//
//     //save info somewhere
//
//     return 'are you sure you want to leave?';
//
// });
