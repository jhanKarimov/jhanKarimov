<script type="text/javascript" >
// Create a variable to store the previous 
var prevUnreadCount = 0;

function checkForNewMessages() {
    $.ajax({
        url: 'https://soz6.com/api/unread.php',
        method: 'GET',
        success: function(data) {
            if (data.unread > prevUnreadCount) {
                // If the count of unread messages 
                var audio = new Audio('https://soz6.com/foto/bildir.mp3');
                audio.play();
            }
            // Update the previous count of unread messages
            prevUnreadCount = data.unread;
        }
    });
}

// Poll every 5 seconds
setInterval(checkForNewMessages, 5000);
</script>
