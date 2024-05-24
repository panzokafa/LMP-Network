<div>
    <button id="chatbot-toggle-btn">
        <img class="img-icon" src="{{ asset('assets/img/chat.png') }}" alt="buttonpng" />
    </button>
    <div class="chatbot-popup" id="chatbot-popup">
        <div class="chat-header">
            <span>Chatbot | <a href="/" target="_blank">LMP</a></span>
            <button id="close-btn">&times;</button>
        </div>
        <div class="chat-box" id="chat-box"></div>
        <div id="user-form">
            <select id="reason-input">
                <option value="">Select a admin</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type a message...">
            <button id="send-btn">Send</button>
        </div>
        <div class="copyright">
            <div>Build By LMP Network © 2024</div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const responses = {
            "hello": "Hi there! How can I assist you today?",
            "how are you": "I'm just a bot, but I'm here to help you!",
            "need help": "How can I help you today?",
            "bye": "Goodbye! Have a great day!",
            "default": "I'm sorry, I didn't understand that. Want to connect with an expert?",
            "expert": "Great! Please wait a moment while we connect you with an expert.",
            "no": "Okay, if you change your mind just let me know!"
        };

        document.getElementById('chatbot-toggle-btn').addEventListener('click', toggleChatbot);
        document.getElementById('close-btn').addEventListener('click', toggleChatbot);
        document.getElementById('send-btn').addEventListener('click', sendMessage);
        document.getElementById('user-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function toggleChatbot() {
            const chatbotPopup = document.getElementById('chatbot-popup');
            const userForm = document.getElementById('user-form');
            chatbotPopup.style.display = chatbotPopup.style.display === 'none' ? 'block' : 'none';
            userForm.style.display = userForm.style.display === 'none' ? 'flex' : 'none';
            document.getElementById('user-input').style.display = 'none';
        }

        async function sendMessage() {
            const userInput = document.getElementById('user-input').value.trim();
            const reasonInput = document.getElementById('reason-input').value;

            // Ensure CSRF token exists before accessing its attribute
            const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
            const messageRouteMeta = document.querySelector('meta[name="message-route"]');
            if (!csrfTokenMeta || !messageRouteMeta) {
                console.error("CSRF token or message route meta tag not found.");
                return;
            }
            const csrfToken = csrfTokenMeta.getAttribute('content');
            const messageRoute = messageRouteMeta.getAttribute('content').replace(':userId', reasonInput);

            if (userInput !== '') {
                appendMessage('user', userInput);
                respondToUser(userInput.toLowerCase());
                document.getElementById('user-input').value = '';
            } else if (reasonInput) {
                console.log("Reason for contact:", reasonInput);

                try {
                    const response = await fetch(messageRoute, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            message: reasonInput
                        })
                    });

                    if (response.ok) {
                        console.log("Message sent successfully.");
                        appendMessage('user', 'hello');
                        respondToUser(reasonInput.toLowerCase());

                        document.getElementById('user-form').style.display = 'none';
                        document.getElementById('user-input').style.display = 'block';
                    } else {
                        console.error("Failed to send message.");
                    }
                } catch (error) {
                    console.error("Error:", error);
                }
            }
        }

        function respondToUser(userInput) {
            console.log(userInput)
            const response = responses[userInput] || responses["hello"];
            setTimeout(function() {
                appendMessage('bot', response);
            }, 500);
        }

        function appendMessage(sender, message) {
            const chatBox = document.getElementById('chat-box');
            const messageElement = document.createElement('div');
            messageElement.classList.add(sender === 'user' ? 'user-message' : 'bot-message');
            messageElement.innerHTML = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;

            if (sender === 'bot' && message === responses["default"]) {
                const buttonYes = document.createElement('button');
                buttonYes.textContent = '✔ Yes';
                buttonYes.onclick = function() {
                    appendMessage('bot', responses["expert"]);
                };
                const buttonNo = document.createElement('button');
                buttonNo.textContent = '✖ No';
                buttonNo.onclick = function() {
                    appendMessage('bot', responses["no"]);
                };
                const buttonContainer = document.createElement('div');
                buttonContainer.classList.add('button-container');
                buttonContainer.appendChild(buttonYes);
                buttonContainer.appendChild(buttonNo);
                chatBox.appendChild(buttonContainer);
            }
        }
    });
</script>
