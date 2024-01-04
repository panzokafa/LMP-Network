@extends('layouts.frontend')


@section('content')
    <div>
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide h--[100px]">Slide 01</li>
                    <li class="splide__slide">Slide 02</li>
                    <li class="splide__slide">Slide 03</li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        let isDropdownOpen = false; // Set to true to open the dropdown by default, false to close it by default

        // Function to toggle the dropdown
        function toggleDropdown() {
            isDropdownOpen = !isDropdownOpen;
            if (isDropdownOpen) {
                dropdownMenu.classList.remove('hidden');
            } else {
                dropdownMenu.classList.add('hidden');
            }
        }

        // Initialize the dropdown state
        toggleDropdown();

        // Toggle the dropdown when the button is clicked
        dropdownButton.addEventListener('click', toggleDropdown);

        // Close the dropdown when clicking outside of it
        window.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
                isDropdownOpen = false;
            }
        });
    </script>
@endsection
