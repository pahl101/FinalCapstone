var counter = 1;
var limit = 10;

function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " roles");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<br><br>"+"Role " + (counter + 1) + " <br><input type='text' name='myInputs[]'>"
          +"Description: "+"<textarea name='roledescriptionInputs[]' id='roledescription' cols='25' rows='3'></textarea><br><br>"
          +"Role Side: "+"<br><input type='file' name='roleInputs[] accept='application/pdf'><br>"
          +"Gender: "+"<select id='gender' name='genderInputs[]'>"
          +"<option selected disabled>Choose Role Gender:</option>"
          +"<option value='male'>Male</option>"
          +"<option value='female'>Female</option>"
          +"<option value='ambiguous'>Ambiguous</option>"
          +"<option value='irrelevant'>Irrelevant</option></select><br><br>"
         +"Age Range: "+"<select id='age' name='ageInputs[]'>"
          +"<option selected disabled>Choose Role Age Range:</option>"
          +"<option value='age_13to15'>13 to 15</option>"
          +"<option value='age_16to20'>16 to 20</option>"
          +"<option value='age_21to25'>21 to 25</option>"
          +"<option value='age_26to30'>26 to 30</option></select><br><br>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.removeChild(element);
}

