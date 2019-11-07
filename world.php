  function SaveAttendancePerfectData(){    	
    	document.getElementById("error").innerHTML   = '';
        document.getElementById("success").innerHTML = '';
        var hdSelectedEmpList = document.getElementById('hdSelectedEmpList');
        var chk= true;
        
        if(chk){
                document.forms[0].action = "SavePerfectAttendanceRegister";       
                document.forms[0].method = "POST";
                document.forms[0].submit();
                return true;
         }

    }