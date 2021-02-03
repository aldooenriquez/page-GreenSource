
document.addEventListener("DOMContentLoaded", function(){
    if(!Notification)
    {
        alert('Notificaciónes no soportadas para este navegador');
        
        return;
    }

    if(Notification.permission !== "granted")
    {
        Notification.requestPermission();
    }
});

if(Notification.permission !== "granted")
{
    Notification.requestPermission();
}
else
{
    var notification = new Notification("¡ALERT!",{
        icon: "",
        body: "The temperature level exceeds the limit"
    });

    notification.onclick = function()
    {
        widnow.open("https://wikipedia.com");
    }
}