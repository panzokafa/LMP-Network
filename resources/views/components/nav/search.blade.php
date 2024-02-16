<div id="searchBar"
    class=" border-black bord nav-menu shadow-lg z-50 absolute opacity-0 invisible w-full inset-x-0  duration-300 xl:top-[80px] top-[84px] bg-white py-5 px-20 text-left flex flex-col justify-center items-center">
    <div class="flex flex-col  w-1/2 gap-x-5 gap-y-10">

        <form action="/search" class="form-inline" method="GET">
            <div class="flex w-full">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>

                <div class="relative w-full">
                    <input type="search" name="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm bg-gray-50 rounded-lg border-s-2 border border-black focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-black dark:focus:border-blue-500"
                        placeholder="Enter Keyword Search">
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 border-black dark:bg-biru rounded-e-lg border ">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>



</div>

<style>
    .searchbar {
        visibility: visible;
        opacity: 1;
    }
</style>
<script>
    var onSearch = false;
    var searchBtn = document.getElementById("searchBtn");
    var searchBar = document.getElementById("searchBar");


    searchBtn.addEventListener("click", function() {
        if (!onSearch) {
            onSearch = true;
            searchBar.classList.add("searchbar");
        } else {
            onSearch = false;
            searchBar.classList.remove("searchbar");
        }
    });
</script>
