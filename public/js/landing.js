
// if (!("Notification" in window)) {
//     console.log("This browser does not support desktop notification");
// }

// // Let's check whether notification permissions have alredy been granted
// else if (Notification.permission === "granted") {
//     // If it's okay let's create a notification
//     var notification = new Notification("Hi there!");
// }

// // Otherwise, we need to ask the user for permission
// else if (Notification.permission !== 'denied' || Notification.permission === "default") {
//     Notification.requestPermission(function(permission) {
//         // If the user accepts, let's create a notification
//         if (permission === "granted") {
//             var notification = new Notification("Hi there!");
//         }
//     });
// }