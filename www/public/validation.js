function validateRange(rangeSlider) {
    let slider = document.getElementById(rangeSlider);
    if (Number(slider.value)<1){
        setWarning ("Bitte verändere die Position des Slider");
            return false;
    
    }
    return true;
}

//----Tools----

function setWarning (text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
    warningElement.style.color = ('red');
}


// Checkbox Validierung

function validateCheckbox() {
    // Array aller Checkboxen
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let isChecked = false;

    // Überprüfen, ob mindestens eine Checkbox ausgewählt ist
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            isChecked = true;
            break;
        }
    }

    // Wenn keine Checkbox ausgewählt ist, Warnung anzeigen und das Formular nicht senden
    if (!isChecked) {
       setWarning("Bitte wählen Sie mindestens eine Aktivität aus.");
       
        return false;
    }

    // Das Formular wird nur dann gesendet, wenn mindestens eine Checkbox ausgewählt ist
    return true;
}

// radio buttons validierung

function validateRadio() {
    // Holen Sie alle Radio Buttons mit dem Namen 'check-radio'
    let radioButtons = document.getElementsByName('check-radio');
    let isChecked = false;

    // Überprüfen, ob mindestens einer ausgewählt ist
    for (let i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            isChecked = true;
            break;
        }
    }

    // Wenn keiner ausgewählt ist, geben Sie eine Warnung aus
    if (!isChecked) {
        setWarning('Bitte wählen Sie eine antwort aus');
        return false; // Verhindern Sie das Absenden des Formulars
    }

    // Hier können Sie weitere Validierungen oder Aktionen hinzufügen

    return true; // Erlauben Sie das Absenden des Formulars, wenn die Validierung erfolgreich ist
}

//input validierung

function validateInput(){
//hole aden Wert des Input-Feldes mit der ID= 'check-input'

let x = document.getElementById('check-input').value;
let errorMessageElement = document.getElementById('error-message');
//Wenn die Zahl kleiner als 1 oder gar keine Zahl kommt false!!
let text;
if (x == "" || x < 0 || x > 5) {
    errorMessageElement.innerHTML = 'Bitte geben Sie eine Zahl von 0-5 ein';
    return false;
}
 else {
    return true;
 }
 document.getElementById('input-frage').innerHTML=text;
}