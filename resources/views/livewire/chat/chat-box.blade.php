<div x-data="{
    height: 0,
    conversationElement: document.getElementById('conversation'),
    markAsRead: null
}" x-init="height = conversationElement.scrollHeight;
$nextTick(() => conversationElement.scrollTop = height);


Echo.private('users.{{ $emailUser }}')
    .notification((notification) => {
        if (notification['type'] == 'App\\Notifications\\MessageRead' && notification['conversation_id'] == {{ $this->selectedConversation->id }}) {

            markAsRead = true;
        }
    });"
    @scroll-bottom.window="
 $nextTick(()=>
 conversationElement.scrollTop= conversationElement.scrollHeight
 );
 "
    class="w-full overflow-hidden">

    <div class="border-b flex flex-col overflow-y-scroll grow h-full">


        {{-- header --}}
        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b ">

            <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">

                <a class="shrink-0 lg:hidden" href="/service/chat">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>

                </a>

                {{-- avatar --}}
                <div class="shrink-0">
                    <x-avatar src="{{ $selectedConversation->getReceiver()->name }}" />
                </div>

                <h6 class="font-bold truncate"> {{ $selectedConversation->getReceiver()->email_sender }} </h6>
            </div>

        </header>

        {{-- body --}}
        <main
            @scroll="
      scropTop = $el.scrollTop;

      if(scropTop <= 0){

        Livewire.dispatch('loadMore');

      }

     "
            @update-chat-height.window="

         newHeight= $el.scrollHeight;

         oldHeight= height;
         $el.scrollTop= newHeight- oldHeight;

         height=newHeight;

     "
            id="conversation"
            class="flex flex-col gap-3 p-2.5 overflow-y-auto  flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

            @if ($loadedMessages)

                @php
                    $previousMessage = null;
                @endphp

                {{-- welcome user --}}
                <div @class([
                    'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2',
                ])>
                    {{-- avatar --}}
                    <div @class(['shrink-0'])>
                        <x-avatar src="{{ $selectedConversation->name }}" />
                    </div>

                    {{-- message body --}}
                    <div @class([
                        'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col rounded-bl-none border border-gray-200/40 bg-gray-100 gap-2'
                    ])>
                        <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                            Nama : {{ $selectedConversation->name }}
                        </p>
                        <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                            Email : {{ $selectedConversation->email_sender }}
                        </p>
                        <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                            No HP : {{ $selectedConversation->no_hp }}
                        </p>
                        <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                            Company : {{ $selectedConversation->company }}
                        </p>
                    </div>
                </div>

                @foreach ($loadedMessages as $key => $message)
                    {{-- keep track of the previous message --}}

                    @if ($key > 0)
                        @php
                            $previousMessage = $loadedMessages->get($key - 1);
                        @endphp
                    @endif


                    <div wire:key="{{ time() . $key }}" @class([
                        'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2',
                        'ml-auto' =>
                            $message->email_sender !==
                            $selectedConversation->getReceiver()->email_sender,
                    ])>

                        {{-- avatar --}}

                        <div @class([
                            'shrink-0',
                            'invisible' => $previousMessage?->email_sender == $message->email_sender,
                            'hidden' =>
                                $message->email_sender !==
                                $selectedConversation->getReceiver()->email_sender,
                        ])>

                            <x-avatar src="{{ $selectedConversation->getReceiver()->name }}" />

                        </div>
                        {{-- messsage body --}}

                        <div @class([
                            'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col',
                            'rounded-bl-none border border-gray-200/40 bg-gray-100' => !(
                                $message->email_sender === auth()->user()->email
                            ),
                            'rounded-br-none bg-blue-500/80 text-white' =>
                                $message->email_sender === auth()->user()->email,
                        ])>

                            <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                                {{ $message->body }}
                            </p>

                            <div class="ml-auto flex gap-2">

                                <p @class([
                                    'text-xs ',
                                    'text-gray-500' => !($message->email_sender === auth()->user()->email),
                                    'text-white' => $message->email_sender === auth()->user()->email,
                                ])>
                                    {{ $message->created_at->format('g:i a') }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </main>

        {{-- send message  --}}

        <footer class="shrink-0 z-10 bg-white inset-x-0">

            <div class=" p-2 border-t">

                <form wire:submit="sendMessage" method="POST" autocapitalize="off">
                    @csrf
                    <div class="grid grid-cols-12">
                        <input wire:model.live="body" type="text" autocomplete="off" autofocus
                            placeholder="write your message here" maxlength="1700"
                            class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg  focus:outline-none p-3">

                        <button wire:loading.attr="disabled" wire:target="sendMessage" class="col-span-2"
                            type="submit">Send</button>
                    </div>
                </form>

                @error('body')
                    <p> {{ $message }} </p>
                @enderror

            </div>

        </footer>

    </div>

</div>
