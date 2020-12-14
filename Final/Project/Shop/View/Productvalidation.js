function validation() {
        var id = document.getElementById('id').value;
        var pn = document.getElementById('pn').value;
        var pr = document.getElementById('pr').value;
        var pd = document.getElementById('pd').value;
        var myfile = document.getElementById('myFile').value;
        
        if(id == "") {
           document.getElementById('Id').innerHTML = "Plese fill up the field";
           document.getElementById('Id').style.color = "red";
           return false;
           
        }

        if(isNaN(id)) {

           document.getElementById('Id').innerHTML = "Plese type a intiger number";
           document.getElementById('Id').style.color = "red";
           return false;
           
        }

        if(pn == "") {
          document.getElementById('Pn').innerHTML = "Plese fill up the field";
          document.getElementById('Pn').style.color = "red";
          return false; 
        }
        if(pr == "") {
          document.getElementById('Pr').innerHTML = "Plese fill up the field";
          document.getElementById('Pr').style.color = "red";
          return false; 
        }
        if(pd == "") {
          document.getElementById('Pd').innerHTML = "Plese fill up the field";
          document.getElementById('Pd').style.color = "red";
          return false; 
        }
         if(myfile == "") {
          document.getElementById('Myfile').innerHTML = "Plese choose image";
          document.getElementById('Myfile').style.color = "red";
          return false; 
        }
        return true;
        
      }
