<div>
    <button id="admin-toggle-btn">
        <img class="img-icon" src="{{ asset('assets/img/chat.png') }}" alt="Chat Button" />
    </button>
    <div class="chatadmin-popup" id="admin-popup" style="display: none;">
        <div class="chatadmin-header">
            <span>ChatAdmin | <a href="/" target="_blank">LMP</a></span>
            <button id="close-btn">&times;</button>
        </div>
        <div class="chatadmin-box" id="admin-box">
            @if (!empty($loadedMessages))
                @foreach ($loadedMessages as $message)
                    <div class="{{ $message->sender_id === auth()->id() ? 'user-message' : 'admin-message' }}">
                        <p>{{ $message->body }}</p>
                        <small class="message-info">{{ $message->created_at->format('g:i a') }}</small>
                    </div>
                @endforeach
            @else
                <p>No messages available</p>
            @endif
        </div>

        <div id="user-form" style="display: {{ $selectedConversationId ? 'none' : 'flex' }};">
            <select id="reason-input" wire:model.live="selectedConversationId">
                <option value="">Select an admin</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="chatadmin-input">
            <input type="text" id="user-input" wire:model="body" "
                placeholder="Type a message..." autofocus>
            <button type="button" wire:click="sendMessage" id="send-btn">Send</button>
        </div>
        <div class="copyright">
            <div>Build By LMP Network © 2024</div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const adminPopup = document.getElementById('admin-popup');
        const adminToggleBtn = document.getElementById('admin-toggle-btn');
        const closeBtn = document.getElementById('close-btn');
        const sendBtn = document.getElementById('send-btn');
        const userInput = document.getElementById('user-input');
        const userForm = document.getElementById('user-form');

        adminToggleBtn.addEventListener('click', function() {
            adminPopup.style.display = adminPopup.style.display === 'none' ? 'block' : 'none';
        });

        closeBtn.addEventListener('click', function() {
            adminPopup.style.display = 'none';
        });

        sendBtn.addEventListener('click', sendMessage);

        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && userInput.value.trim() !== '') {
                sendMessage();
            }
        });

        async function sendMessage() {
            const userInputValue = userInput.value.trim();
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

            if (userInputValue !== '') {
                appendMessage('user', userInputValue);
                userInput.value = '';
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

                        userForm.style.display = 'none';
                        userInput.style.display = 'block';
                    } else {
                        console.error("Failed to send message.");
                    }
                } catch (error) {
                    console.error("Error:", error);
                }
            }
        }

        function appendMessage(sender, message) {
            const adminBox = document.getElementById('admin-box');
            const messageElement = document.createElement('div');
            messageElement.classList.add(sender === 'user' ? 'user-message' : 'admin-message');
            messageElement.innerHTML = `<p>${message}</p>`;
            adminBox.appendChild(messageElement);
            adminBox.scrollTop = adminBox.scrollHeight;
        }
    });

    window.addEventListener('message-sent', event => {
        const adminBox = document.getElementById('admin-box');
        const message = event.detail.message;
        const messageElement = document.createElement('div');
        messageElement.classList.add(message.sender_id === {{ Auth()->User()->id }} ? 'user-message' :
            'admin-message');
        messageElement.innerHTML =
            `<p>${message.body}</p><small>${Carbon.parse(message.created_at).format('g:i a')}</small>`;
        adminBox.appendChild(messageElement);
        adminBox.scrollTop = adminBox.scrollHeight;
    });

    Echo.private('users.' + {{ Auth()->User()->id }})
        .listen('.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', (notification) => {
            if (notification.type === 'App\\Notifications\\MessageSent') {
                const message = notification.message;
                if (message && message.sender_id) {
                    const messageElement = document.createElement('div');
                    messageElement.classList.add(message.sender_id === {{ Auth()->User()->id }} ?
                        'user-message' : 'admin-message');
                    messageElement.innerHTML =
                        `<p>${message.body}</p><small>${Carbon.parse(message.created_at).format('g:i a')}</small>`;
                    const adminBox = document.getElementById('admin-box');
                    adminBox.appendChild(messageElement);
                    adminBox.scrollTop = adminBox.scrollHeight;
                }
            }
        });
</script>
