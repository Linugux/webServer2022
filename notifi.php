<script>
    Push.Permission.request();

    Push.create('Hi there!', {
    body: 'Welcome http://linugux.ddns.net',
    icon: 'linugux.jpg',
    timeout: 8000,               // Timeout before notification closes automatically.
    vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
    onClick: function() {
        // Callback for when the notification is clicked. 
        window.focus();
        console.log(this);
   }
    });
    
    </script>
    <script type="text/javascript">
         function notifyMe() {
            //Vamos a comprobar si el navegador es compatible con las notificaciones
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            }
            // Vamos a ver si ya se han concedido permisos de notificación
            else if (Notification.permission === "granted") {
                // Si está bien vamos a crear una notificación
                var body =  document.getElementById("reloadcowsay");
                var icon = "linugux.jpg";
                var title = "Notificación";
                var options = {
                    body: body,
                    icon: icon,
                    lang: "ES",
                    renotify: "true",
                    vibrate: [100, 100, 100],
                }
                var notification = new Notification(title,options);
                var audio = new Audio('notificacion.mp3');
                audio.play();
                notification.onclick = function () {
                    //action
                    audio.play();
                };
                setTimeout(notification.close.bind(notification), 10000);

                Push.create('Push' ,{ 
                    body: document.getElementById("reloadcowsay"),
                    icon: 'Linugux.gif',
                    timeout: 10000,
                    vibrate: [100, 100, 100]});
                    //action
                setTimeout(function() {audio.play();}, 10000);
            }
            // De lo contrario, tenemos que pedir permiso al usuario
            else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {
                    // Si el usuario acepta, vamos a crear una notificación
                    if (permission === "granted") {
                        var notification = new Notification("Gracias, Ahora podras recibir notifiaciones de nuestra página");
                    }
                });
            }
            // Por fin, si el usuario ha denegado notificaciones, y usted
            // Quiere ser respetuoso no hay necesidad de preocuparse más sobre ellos.
        }
        </script>