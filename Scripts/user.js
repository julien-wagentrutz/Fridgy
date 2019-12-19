function callScript ( scriptName, args , element, etat)
{
    var xhr_object = null;
    if(window.XMLHttpRequest) xhr_object = new XMLHttpRequest();
    else if(window.ActiveXObject)
        xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
    else {
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); return; }

    xhr_object.open("POST", scriptName, true);
    xhr_object.onreadystatechange = function() {
        if(xhr_object.readyState == 4) {
            if(element != undefined)
            {
                document.querySelector(element).innerHTML = xhr_object.responseText;
                if(etat == 'stat')
                {chart()}
                else if(etat == 'button')
                {
                    buttons()

                }
            }


        }
       // return xhr_object.readyState;
    }
    xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr_object.send(args)
}


// Your web app's Firebase configuration
let firebaseConfig = {
    apiKey: "AIzaSyCMxzO2knPCoMQW-tuqxEb9OTDSkXi4ofQ",
    authDomain: "fridgy-8e67c.firebaseapp.com",
    databaseURL: "https://fridgy-8e67c.firebaseio.com",
    projectId: "fridgy-8e67c",
    storageBucket: "fridgy-8e67c.appspot.com",
    messagingSenderId: "931542015674",
    appId: "1:931542015674:web:3eb48eff1ff87069c2ec83",
    measurementId: "G-8YF6289D3X"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

let userCurrent

firebase.auth().onAuthStateChanged(function(user) {
    userCurrent = user;

    if (userCurrent)
    {
        window.localStorage.setItem('userId', userCurrent.uid );
        callScript('../Treatment/verifUser.php','userId=' + userCurrent.uid + '&userName='+ userCurrent.displayName );
        if(window.location.href == "https://julienwagentrutz.com/")
         {
             window.location.replace("https://julienwagentrutz.com/Pages/homePage.php");
         }
    }
    else
    {
        if(window.location.href != "https://julienwagentrutz.com/")
        {
            window.location.replace("https://julienwagentrutz.com/");
        }

    }

});

