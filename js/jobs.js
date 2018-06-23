
function validateform(){  
var name=document.getElementById('name').value; //takes the value and stores in a variable
var email=document.getElementById('email').value;  
var experience=document.getElementById('experience').value;
	error = "";
	nameError = "";
	emailError = "";
	experienceError = "";

	/* Check if name is empty */
	if (name == "" || name == null) 
	{
		nameError = "Please enter name";
		error = nameError;
	}
	/* Check if email is empty*/
	if (email == "" || email == null)
		{ 
		    	if(nameError == "")
		    	{
		    		emailError = "Please enter Email ID";
		    		error = emailError;
		    	}else
		    	{
		    		emailError = "Please enter Email ID";
		    		error = error + "\n" + emailError;
		    	}
	}
	else
	{
			/* Email validation with regular expresssion to check if its valid email */
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
			{
				var x = "";
		    }else
		    {
		    	if(nameError == "" || nameError == null)
		    	{
		    		emailError = "please enter a valid email";
		    		error = emailError;
		    	}
		    	else
		    	{
		    		emailError = "please enter a valid email";
		    		error = error + "\n" + emailError;
		    	}
		    }
    }

	/* check if experience is empty */
	if (experience == "" || experience == null) 
	{
		if((nameError == "" || nameError == null) && (emailError == "" || emailError == null))
		{
			experienceError = "Please enter experience";
			error = experienceError;
		}else
		{
			experienceError = "Please enter experience";
			error = error + "\n" + experienceError;			
		}
	}

	// display errors to the user if any
	if(error != "")
	{
		alert(error);
	}else
	{
		alert("Congrats! We have recieved your application");
	}
	return false;
	
}