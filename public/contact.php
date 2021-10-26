<?php
  include('head.inc.php');

?>
  
  <!-- component -->
<section class="w-full text-gray-900 py-36 mt-20 bg-center bg-cover bg-no-repeat"
    style="background:url('./imgPro/webmaster2.svg') no-repeat">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
        <!-- <div class="lg:w-3/6 lg:pr-0 pr-0"> -->
            <!-- <h1 class="font-medium text-5xl text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1> -->
            <!-- <p class="leading-relaxed mt-4 text-white"> -->
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit,  -->
                <!-- sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        <!-- </div> -->
        <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-800 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-300">Nom et Prénom </label>
                <input type="text" id="name" name="nom" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-300">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-300">Phone</label>
                <input type="email" id="phone" name="phone" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-300">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out"> </textarea>
            </div>
            <button class="text-white bg-indigo-500 rounded-md border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 text-lg">Submit</button>
        </div>
    </div>
</section>

<?php
  
  require_once('foot.inc.php');
?>