<html>
<head></head>
<body>
    <form method="get">
    Name:<input type="text" id="a"  ><br>
    Number:<input type="text" id="b"  ><br>
    Cont.<input type="text" id="c"  ><br>
<input type="submit" name="btn" onsubmit="return validate()" value="check">
    </form>
    <script>
        function validate(){
            if(allchars()){
                if(allnum()){
                    if(allcont()){
                        return true
                    }
                }
            }
        }
        function allchars(){
            var x=/^[a-zA-Z]+$/;
            var a=document.getElementById('a').value;
            if(a.length>=5 && a.length<=12){
                if(a.match(x)){
                    alert('Matched');
                    return true;
                }
                else{
                    alert('Not Matched');                    
                }
            }
            else{
                alert('Input must be 5-12 char long');          
            }  
        }
        function allnum(){
            var x=/^[0-9]+$/;
            var a=document.getElementById('b').value;
            if(a.length>=5 && a.length<=12){
                if(a.match(x)){
                    alert('Matched');
                    return true;  
                }
                else{
                    alert('Not Matched');                    
                }
            }
            else{
                alert('Input must be 5-12 char long');          
            }
        }
        function allcont(){
            var x=/^[0-9]+$/;
            var a=document.getElementById('c').value;
            if(a.length==10){
                if(a.match(x)){
                    alert('Matched');
                    return true;  
                }
                else{
                    alert('Not Matched');                    
                }
            }
            else{
                alert('Input must be 10 characters long');      
            }
        }
    </script>
    </body>
</html>