ListImageup={genePic:function(e,t,a,i){var s=a?a:"images",n=s+"title",l='<li class="img-li">';l+='<img class="fl" src="'+e+'" width="100" height="100">',l+='<p class="p1"><input type="text" class="img-name" name="'+n+'[]" value="'+a+'" style="width:90px" />',l+='<input type="hidden" class="img-path" name="'+s+'[]" value="'+e+'"/></p>',l+='<p class="p2"><span class="btn-ste" onclick="ListImageup.setHead(this,\''+e+"','"+t+"')\">设为封面</span>",l+='<span class="btn-closed" onclick="ListImageup.delImg(this,\''+e+"','"+t+"')\"></span></p>",l+="</li>";var p=$(l);$(t).append(p),i&&p.find(".btn-ste").trigger("click")},delImg:function(e,t,a){var i=window.location.href,s=new Array;s=i.split(".com");var n=i.split("?id=");n=n[1],s=s[1].split("/");var l=s[2],p=$(a).parent(),c=p.find(".headimg");if(c){var d=c.val();d==t&&c.val("")}$.ajax({type:"post",url:SITEURL+"uploader/delpicture",dataType:"html",data:{picturepath:t,tablename:l,destid:n},success:function(t){"ok"==t&&$(e).parents(".img-li").remove()}})},setHead:function(e,t,a){$(a+" li .btn-ste").removeAttr("style"),$(a+" li .btn-ste").text("设为封面"),$(e).css("background","green"),$(e).css("display","block"),$(e).text("已设为封面");var i=$(a).parent(),s=i.find("input.headimg");s.length>0?s.val(t):i.append("<input type='hidden' class='headimg' value='"+t+"'/>")}};