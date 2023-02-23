$(document).ready(() => {
    var storage = window.localStorage;
    var getAuthToken = storage.getItem('access_code');
    
    var accessInput = $("access_code").val();
    if(!storage){
        window.alert("Sorry your browser unsupported~!");
    }
    if(!getAuthToken){
        return window.location.replace("./?action=authenication_required&__retry=true");
    }
    if(!accessInput){
window.alert("Input cannot be empty!");
    } else if(accessInput === ""){
        window.alert("Please enter the secret code!");
    } else if(accessInput === accessToken){
        storage.setItem('access_code', 'token_')
    }
});
