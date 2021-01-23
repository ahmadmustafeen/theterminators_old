function validate() 
        {
            var name = document.getElementById('name');
            var email = document.getElementById('mail');
            var sms = document.getElementById('message');

            if (name.value.trim()==""||email.value.trim()==""||sms.value.trim()==""||){
                alert("Dont let any field empty")
                return false;
                }
            if (!/^[a-zA-Z ]*$/g.test(name.value)) 
                {
                alert ("only characters are allowed in Name");
                return false;
                } 
            else 
                {
                alert ("Now click on send button to mail at zeerak71@yahoo.com");
                return true;
                }
            }