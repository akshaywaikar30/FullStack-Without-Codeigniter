
function validateOrder()
{


var name=document.getElementById('name1').value; //takes the value and stores in a variable

var email=document.getElementById('email1').value;  

var addr=document.getElementById('cart_ta').value;

var city=document.getElementById('city').value; //takes the value and stores in a variable

var state=document.getElementById('state').value;

var zip=document.getElementById('zip').value; //takes the value and stores in a variable

var cc=document.getElementById('cc').value;  

var month=document.getElementById('month').value;

var year=document.getElementById('year').value;
	error = "";
	nameError = "";
	emailError = "";
	addrError="";
	cityError="";
	stateError="";
	zipError="";
	ccError="";
	monthError="";
	yearError="";


if (name == "" || name == null) 
	{
		nameError = "Please enter name";
		error = nameError;
	}
	/* Check if email is empty or invalid */
	if (email == "" || email == null)
		{ 
		    	if(nameError == "")
		    	{
		    		emailError = "Please enter Email ID";
		    		error = error + "\n" + emailError;

		    	}else
		    	{
		    		emailError = "Please enter Email ID!";
		    		 error = emailError;
		    	}
	}
	else
	{
			/* Email validation with regular expresssion */
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
			{
				var np = "";
		    }else
		    {
		    	if(nameError == "" || nameError == null)
		    	{
		    		emailError = "please enter a valid email";
		    		error = error + "\n" + emailError;
                    
		    	}
		    	else
		    	{
		    		emailError = "please enter a valid email";
		    		error = emailError;
		    	}
		    }
    }

    if(city == "" || city ==null)
    {
    	if ((name == "" || name == null) && (email == "" || email == null) && (addr == "" || addr == null)) 
    	{
    		cityError="Please enter city";
    		error=cityError;
    	}
    	else
    	{
    		cityError = "Please enter city";
    		error = error + "\n" + cityError;
    	}
    }

    if(state =="" || state == null)
    {
    	if((name == "" || name == null) && (email == "" || email == null) && (addr == "" || addr == null) && (city == "" || city ==null)) 
    	{	
    	stateError="Please enter state";
    	error=stateError;
    	}
    	else
    	{
    	stateError="Please enter state";
    	error=error + "\n" + stateError;
    	}
    }

    if(zip == "" || zip == null)
    {
    	if((name == "" || name == null) && (email == "" || email == null) && (addr == "" || addr == null) && (city == "" || city ==null) && 
    		(state =="" || state == null))
    	{
    		zipError="Please enter zipcode";
    		error=zipError;
    	}
    	else
    	{
    		zipError="Please enter zipcode";
    		error=error+ "\n" + zipError;
    	} 
    }

    if(cc == "" || cc == null)
    {
    	if((name == "" || name == null) && (email == "" || email == null) && (addr == "" || addr == null) && (city == "" || city ==null) && 
    		(state =="" || state == null) && (zip==""|| zip== null))
    	{
    		ccError="Please enter Credit card Number";
    		error=ccError;
    	}
    	else
    	{
    		ccError="Please enter Credit card Number";
    		error=error + "\n" + ccError;
    	}
    }

    if(month== ""|| month== null)
    {
    	if((name == "" || name == null) && (email == "" || email == null) && (addr == "" || addr == null) && (city == "" || city ==null) && 
    		(state =="" || state == null) && (zip==""|| zip== null) && (cc == "" || cc == null))
    	{
    		monthError="Please enter month";
    		error=monthError;
    	}
    	else
    	{
    		monthError="Please enter month";
    		error= error+"\n"+monthError;
    	}
    }


    

	if(error != "")
	{
		alert(error);
	}else
	{
		alert("Congrats! We have recieved your Order");
	}
	return false;





}