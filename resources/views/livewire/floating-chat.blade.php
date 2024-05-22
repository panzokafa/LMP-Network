<div>
    <button id="chatbot-toggle-btn"><img src="{{ asset('images/chatbot.png') }}" alt="buttonpng" /></button>
    <div class="chatbot-popup" id="chatbot-popup" style="display: block;">
        <div class="chat-header">
            <span>Chatbot | <a href="https://www.thecodinghubs.com/" target="_blank">The Coding Hubs</a></span>
            <button id="close-btn">&times;</button>
        </div>
        <div class="chat-box" id="chat-box"></div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type a message...">
            <button id="send-btn">Send</button>
        </div>
        <div class="copyright">
            <a href="https://www.thecodinghubs.com/" target="_blank">Build By Coding Hubs © 2024</a>
        </div>
    </div>
</div>

<script>
    document.getElementById('chatbot-toggle-btn').addEventListener('click', function() {

        console.log('ni button chatbox');
    });
</script>
