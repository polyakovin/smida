$(document).ready(function(){
$("#libr").hide(0);$("#lib").click(function(){$("#libr").toggle();});
$("#smida").hide(0);$("#smid").click(function(){$("#smida").toggle();});
$("#link").hide(0);$("#links").click(function(){$("#link").toggle();});
$("#problems").hide(0);$("#problem").click(function(){$("#problems").toggle();});
$("#subfiles_1").hide(0);$("#folder_1").click(function(){$("#subfiles_1").toggle();});
$("#subfiles_2").hide(0);$("#folder_2").click(function(){$("#subfiles_2").toggle();});
$("#subfiles_3").hide(0);$("#folder_3").click(function(){$("#subfiles_3").toggle();});
$("#subfiles_4").hide(0);$("#folder_4").click(function(){$("#subfiles_4").toggle();});

$("div[id^='subcat_']").hide(0);
$("#ruli").hide(0);
$("#enli").hide(0);
//Аааа! Не получаются циклы!
$("#cat_0").click(function(){$("#subcat_0").toggle();});
$("#cat_1").click(function(){$("#subcat_1").toggle();});
$("#cat_2").click(function(){$("#subcat_2").toggle();});
$("#cat_3").click(function(){$("#subcat_3").toggle();});
$("#cat_4").click(function(){$("#subcat_4").toggle();});
$("#cat_5").click(function(){$("#subcat_5").toggle();});
$("#cat_6").click(function(){$("#subcat_6").toggle();});

$("#rulit").click(function(){$("#ruli").toggle();});
$("#enlit").click(function(){$("#enli").toggle();});

var b=document.URL;
var reg=/[a-z0-9-=\?\._]*$/i;
$('a[href="'+b.match(reg)+'"]').addClass("current_page");
if($("#smida .current_page").length){$("#smida").show(0);$(".menu #smid").addClass("current_page");}
if($("#libr #ruli .current_page").length){$("#libr").show(0);$("#ruli").show(0);$(".menu #lib").addClass("current_page");}
if($("#libr #enli .current_page").length){$("#libr").show(0);$("#enli").show(0);$(".menu #lib").addClass("current_page");}
if($("#libr .current_page").length){$("#libr").show(0);$(".menu #lib").addClass("current_page");}
if($("#link .current_page").length){$("#link").show(0);$(".menu #links").addClass("current_page");}
if($("#problems .current_page").length){$("#problems").show(0);$(".menu #problem").addClass("current_page");}
if($("#link #subcat_0 .current_page").length){$("#link").show(0);$("#subcat_0").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_1 .current_page").length){$("#link").show(0);$("#subcat_1").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_2 .current_page").length){$("#link").show(0);$("#subcat_2").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_3 .current_page").length){$("#link").show(0);$("#subcat_3").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_4 .current_page").length){$("#link").show(0);$("#subcat_4").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_5 .current_page").length){$("#link").show(0);$("#subcat_5").show(0);$(".menu #links").addClass("current_page");}
if($("#link #subcat_6 .current_page").length){$("#link").show(0);$("#subcat_6").show(0);$(".menu #links").addClass("current_page");}

//$("#newnews").hide(0);$("#addnews").click(function(){$("#newnews").slideDown(1000);$("#addnews").slideUp(1000);});
$("#newpass").hide(0);$("#changepass").click(function(){$("#newpass").slideDown(1000);$("#changepass").slideUp(1000);});
$('.delete').live("click",function(){var xfile=$(this).parent().text();if(confirm("Do you really want to delete \""+xfile.substring(34,xfile.length-29)+"\"?")){location.replace($(this).attr('hyref'));}});//Подтверждение удаления файла
$('#deletenews').live("click",function(){if(confirm("Do you really want to delete this news?")){location.replace($(this).attr('hyref'));}});
$('#deletebook').live("click",function(){if(confirm("Do you really want to delete this book?")){location.replace($(this).attr('hyref'));}});
$('#deleteuser').live("click",function(){if(confirm("Do you really want to delete this user?")){location.replace($(this).attr('hyref'));}});
setTimeout('$("#warning").slideUp(500);',5000);

//Проверка заполненности формы
$('form').submit
(
	function()
	{
		var i=0;
		var filled=true;
		$(this).find("label .mbf").each(function()
		{
			if($(this).val()=="")
			{
				//alert('Ошибка! Заполнены не все обязательные поля.');
				$(this).addClass("nfilled");
				if(i==0)
				{
					$(this).parent().attr("name","unfilled");
					i=1;
				}
				//location="#top";
				filled=false;
			}
		});
		
		if(filled==false)
		{
			$("#iffilled").click();
			return false;
		}
	}
);

//Возвращение в нормальное состояние при добавлении информации
$('.mbf').change(function()
{
	$(this).removeClass("nfilled");
	$(this).parent().removeAttr("name");
});

$.localScroll({duration: 750,hash: false});//Плавный переход к якорю

//Переход на ту же страницу при смене языка на сайте
var a=document.URL;
var reg=/[a-z0-9-=\?\&\._]*$/i;
$("#er").attr("href","../"+a.match(reg));

}); //Конец ready