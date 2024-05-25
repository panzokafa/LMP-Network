<div>
    <button id="admin-toggle-btn">
        <img class="img-icon" src="{{ asset('assets/img/chat.png') }}" alt="Chat Button" />
    </button>
    <div class="chatadmin-popup" id="admin-popup">
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
        const reasonInput = document.getElementById('reason-input');

        reasonInput.addEventListener('change', function() {
            const selectedUserId = this.value;
            if (selectedUserId) {
                fetch(`/users/message/${selectedUserId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify({
                            userId: selectedUserId
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        // Handle response jika diperlukan
                        console.log('Message sent successfully!');
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const adminPopup = document.getElementById('admin-popup');
        const adminToggleBtn = document.getElementById('admin-toggle-btn');
        const closeBtn = document.getElementById('close-btn');
        const sendBtn = document.getElementById('send-btn');
        const userInput = document.getElementById('user-input');
        const userForm = document.getElementById('user-form');

        adminToggleBtn.addEventListener('click', function() {
            event.preventDefault();
            event.stopPropagation();
            adminPopup.style.display = adminPopup.style.display = 'block'
        });

        closeBtn.addEventListener('click', function() {
            event.preventDefault();
            event.stopPropagation();
            adminPopup.style.display = 'none';
        });

        sendBtn.addEventListener('click', sendMessage);

        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && userInput.value.trim() !== '') {
                console.log('jalan')
                sendMessage();
            }
        });

        async function sendMessage() {
            console.log('jalan send')

            event.preventDefault();
            event.stopPropagation();
            const userInputValue = userInput.value.trim();

            appendMessage('user', userInputValue);
            userInput.value = '';

        }

        function appendMessage(sender, message) {
            console.log('append')

            const adminBox = document.getElementById('admin-box');
            const messageElement = document.createElement('div');
            messageElement.classList.add(sender === 'user' ? 'user-message' : 'admin-message');
            messageElement.innerHTML = `<p>${message}</p>`;
            adminBox.appendChild(messageElement);
            adminBox.scrollTop = adminBox.scrollHeight;
        }

        adminPopup.style.display = 'none';

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
