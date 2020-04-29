$(document).ready(function(){

	$('#a1').on('click',func1);
	$('#a2').on('click',func2);
	$('#a3').on('click',func3);
	$('#a4').on('click',func4);
	$('#a5').on('click',func5);
	$('#a6').on('click',func6);

});

function p(s) {

    return s < 10 ? '0' + s: s;

}

function nowtime() {
    var myDate = new Date();
    var year = myDate.getFullYear(); //获取当前年
    var month = myDate.getMonth()+1; //获取当前月
    var date = myDate.getDate();     //获取当前日
    var h = myDate.getHours();       //获取当前小时数(0-23)
    var m = myDate.getMinutes();     //获取当前分钟数(0-59)
    var s = myDate.getSeconds();
    var data = year+ '-' + p(month)+ "-"+ p(date);
    var hour = p(h)+ ':'+ p(m);
    $("#data").html(data);
    $("#hour").html(hour);
}

nowtime();

setInterval(nowtime,1000);

function func(){  
  var status = $("#h").html();
    if(status == 1){   
        window.location.href = 'control_close.php';  
    }else{
    	window.location.href = 'control_start.php'; 
    }  
    
}  
function func1(){  
  var status = $("#b1").html();
  //alert(status);
    if(status == 1){   
    	// alert('关闭操作');
        window.location.href = 'a1_close.php';  
    }else{
    	//alert('开启操作');
    	window.location.href = 'a1_start.php'; 
    }  
    
}  
function func2(){  
  var status = $("#b2").html();
    if(status == 1){   
        window.location.href = 'a2_close.php';  
    }else{
    	window.location.href = 'a2_start.php'; 
    }  
    
}  
function func3(){  
  var status = $("#b3").html();
    if(status == 1){   
        window.location.href = 'a3_close.php';  
    }else{
    	window.location.href = 'a3_start.php'; 
    }  
    
}  
function func4(){  
  var status = $("#b4").html();
    if(status == 1){   
        window.location.href = 'a4_close.php';  
    }else{
    	window.location.href = 'a4_start.php'; 
    }  
    
}  
function func5(){  
  var status = $("#b5").html();
    if(status == 1){   
        window.location.href = 'a5_close.php';  
    }else{
    	window.location.href = 'a5_start.php'; 
    }  
    
}  
function func6(){  
  var status = $("#b6").html();
    if(status == 1){   
        window.location.href = 'a6_close.php';  
    }else{
    	window.location.href = 'a6_start.php'; 
    }  
    
}  