<div>
    <button id="admin-toggle-btn">
        <img class="img-icon" src="{{ asset('assets/img/comments.png') }}" alt="Chat Button" />
    </button>
    <div class="chatadmin-popup" id="admin-popup">
        <div class="chatadmin-header">
            <div class="flex flex-row items-center text-sm gap-1">
                <img class="w-20 h-12 object-cover" src="{{ asset('assets/img/lmp_logo_white.png') }}" alt="Chat Button" />
                <span>Fill the following form to start the chat</span>
            </div>
            <button id="close-btn">&times;</button>
        </div>

        @if ($showUserForm)
            <div class="chatadmin-box" id="admin-box">
                @if ($loadedMessages)
                    @foreach ($loadedMessages as $message)
                        <div class="{{ $message->email_sender === $emailAdmin ? 'admin-message' : 'user-message' }}">
                            <p>{{ $message->body }}</p>
                            <small class="message-info">{{ $message->created_at->format('g:i a') }}</small>
                        </div>
                    @endforeach
                @else
                    <p>No messages loaded.</p>
                @endif
            </div>
        @else
            <div class="chatadmin-box" id="admin-box" wire:poll.visible="loadMessages">
                @if ($loadedMessages)
                    @foreach ($loadedMessages as $message)
                        <div class="{{ $message->email_sender === $emailAdmin ? 'admin-message' : 'user-message' }}">
                            <p>{{ $message->body }}</p>
                            <small class="message-info">{{ $message->created_at->format('g:i a') }}</small>
                        </div>
                    @endforeach
                @else
                    <p>No messages loaded.</p>
                @endif
            </div>
        @endif

        @if ($showUserForm)
            <form method="POST" action="{{ route('users.message') }}" class="user-form">
                @csrf
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor HP:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="company">Company</label>
                <input type="text" id="company" name="company" required>

                <label for="email_receiver">Pilih Admin:</label>
                <select id="email_receiver" name="email_receiver" required>
                    <option value="">Pilih admin</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                <button type="submit" id="send-btn-request">Send Request</button>
            </form>
        @else
            <div class="chatadmin-input" id="inputbox-user">
                <input type="text" id="user-input" wire:model.live="body" wire:keydown.enter="sendMessage"
                    placeholder="Type a message..." autofocus>
                <button type="button" wire:click="sendMessage" id="send-btn">Send</button>
            </div>
        @endif

        <div class="copyright">
            <div>© 2023 by Technology Team LMP Networks.</div>
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


        adminPopup.style.display = 'none';

        adminToggleBtn.addEventListener('click', function() {
            event.preventDefault();
            event.stopPropagation();
            adminPopup.style.display = 'block'
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

        window.addEventListener('clearLocalStorage', function() {
            localStorage.removeItem('chatFormData');
            userForm.style.display = 'flex';
        });



    });
</script>
