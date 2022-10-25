        function show_notification(){
            const notification= new Notification(' hey ',{
                body:"<count> members are present in the gym"

            });
        }
         Notification.requestPermission();
        // access permissions and checking
        if  (Notification.permission==="granted"){
            show_notification();
            setInterval(show_notification(),7)
        }
        else if(Notification.permission!=="denied"){
            Notification.requestPermission().then(permission=>{
                if(permission==="granted"){
                    show_notification();
                    setInterval(show_notification(),7)
                }
            });


        }