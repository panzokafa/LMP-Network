<div>
    <button id="admin-toggle-btn">
        <img class="img-icon" src="{{ asset('assets/img/comments.png') }}" alt="Chat Button" />
    </button>
    <div class="chatadmin-popup" id="admin-popup">
        <div class="chatadmin-header">
            <span>ChatAdmin | <a href="/" target="_blank">LMP</a></span>
            <button id="close-btn">&times;</button>
        </div>


        <div class="chatadmin-box" id="admin-box">
            @forelse ($loadedMessages as $message)
                <div class="{{ $message->sender_id === auth()->id() ? 'user-message' : 'admin-message' }}">
                    <p>{{ $message->body }}</p>
                    <small class="message-info">{{ $message->created_at->format('g:i a') }}</small>
                </div>
            @empty
                <p>No messages available</p>
            @endforelse

        </div>


        @if ($showUserForm)
            <div id="user-form" style="display: {{ $showUserForm ? 'flex' : 'none' }}; flex-direction: column;">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor HP:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="reason-input">Pilih Admin:</label>
                <select id="reason-input" name="reason" required>
                    <option value="">Select an admin</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                <button type="button" id="submit-form">SUBMIT</button>
            </div>
        @else
        @endif
        <div class="chatadmin-input">
            <input type="text" id="user-input" wire:model.live="body" wire:keydown.enter="sendMessage"
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
        let userData = localStorage.getItem('chatFormData');

        if (userData) {
            console.log("User data found in local storage:", userData); // Log untuk memastikan data ditemukan
            let parsedData = JSON.parse(userData);
            Livewire.emit('userDataLoaded', parsedData);
        } else {
            console.log("No user data found in local storage."); // Log jika data tidak ditemukan
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const reasonInput = document.getElementById('reason-input');
        const submitFormBtn = document.getElementById('submit-form');
        const userForm = document.getElementById('user-form');

        submitFormBtn.addEventListener('click', function() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const selectedUserId = reasonInput.value;

            if (name && email && phone && selectedUserId) {
                // Save form data to local storage
                localStorage.setItem('chatFormData', JSON.stringify({
                    name,
                    email,
                    phone
                }));

                // Send data to server
                fetch(`/users/message/${selectedUserId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify({
                            name,
                            email,
                            phone,
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(errorData => {
                                throw new Error(errorData.error);
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Handle successful response
                        console.log('Success:', data);
                        // Hide the form
                        userForm.style.display = 'none';
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
            } else {
                alert('Please fill out all fields.');
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
                sendMessage();
            }
        });

        async function sendMessage() {

            event.preventDefault();
            event.stopPropagation();
            const userInputValue = userInput.value.trim();

            appendMessage('user', userInputValue);
            userInput.value = '';

        }

        function appendMessage(sender, message) {
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
        messageElement.classList.add(message.sender_id === {{ '1' }} ? 'user-message' :
            'admin-message');
        messageElement.innerHTML =
            `<p>${message.body}</p><small>${Carbon.parse(message.created_at).format('g:i a')}</small>`;
        adminBox.appendChild(messageElement);
        adminBox.scrollTop = adminBox.scrollHeight;
    });

    Echo.private('users.' + {{ '1' }})
        .listen('.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', (notification) => {
            if (notification.type === 'App\\Notifications\\MessageSent') {
                const message = notification.message;
                if (message && message.sender_id) {
                    const messageElement = document.createElement('div');
                    messageElement.classList.add(message.sender_id === {{ '1' }} ?
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
