<?php
include('header.php')
?>
<section id="hero-text" class="text-gray-700 body-font" data-aos="fade-up" data-aos-duration="900">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 flex flex-col md:items-start md:text-left mb-16 md:mb-0 lg:items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                    <i class="fas fa-quote-left red-quote"></i>  Hosting that matches your needs! <i class="fas fa-quote-right red-quote"></i>
                    </h1>
                    <p class="mb-8 text-center">Central offers readily deployable and customizable solutions <br>that supports you and your business!</p>
                    <div class="flex justify-center">
                        <button id="btn-style-1" onclick='window.location.replace("/order")' class="inline-flex items-center border-0 py-2 px-4 lg:px-12 focus:outline-none rounded-lg text-base mt-4 mr-4 md:mt-0">Deploy a Server</button>
                        <a href="https://panel.central.so/submitticket.php" class="inline-flex bg-red-100 text-black items-center border-0 py-2 px-12 focus:outline-none rounded-lg text-base mt-4 mr-4 md:mt-0">Contact Us</a>
                    </div>
                    <p class="text-sm font-thin bg-gray-200 text-black p-1 mt-5 m-auto">
                        <span class="text-green-500 font-bold px-2">NEW</span> 50% Off on all <span class="font-bold">VPS Plans</span> and<span class="font-bold"> Colocation</span>.
                    </p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img id="mobile-hide" class="object-cover object-center rounded" src="img/header.jpg">
                </div>
            </div>
</section>  

<section id="order">
    <div class="container mx-auto">
        <h1 class="title-font sm:text-4xl text-3xl font-medium text-center">Services that we provide</h1>
        <h1 class="text-center text-gray-700">Our service is always affordable for everyone.</h1>
        <div class="grid grid-flow-col grid-rows-4 grid-cols-1 lg:grid-rows-1 lg:grid-cols-4 lg:gap-4 text-center mx-auto p-5">
            <a href="/order.php">  
                <div class="col-start-1 lg:col-start-1">
                    <div class="service-card bg-white rounded-xl mx-auto">
                        <div class="mx-auto p-5">
                            <img class="w-1/2 mx-auto" src="img/server.svg">
                            <h2 class="text-xl bold mt-6">Windows VPS</h2>
                            <p class="text-center text-gray-400">Starting at 3$/mo </p>
                        </div>
                    </div>
                </div>
            </a> 
            <a href="/order.php">
                <div class="col-start-1 lg:col-start-2">
                    <div class="service-card bg-white rounded-xl mx-auto">
                        <div class="mx-auto p-5">
                            <img class="w-1/2 mx-auto" src="img/vps.svg">
                            <h2 class="text-xl bold mt-6">Linux VPS</h2>
                            <p class="text-center text-gray-400">Starting at 3$/mo </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/order.php">
                <div class="col-start-1 lg:col-start-3">
                    <div class="service-card bg-white rounded-xl mx-auto">
                        <div class="mx-auto p-5">
                            <img class="w-1/2 mx-auto" src="img/dedicated.svg">
                            <h2 class="text-xl bold mt-6">Dedicated Servers</h2>
                            <p class="text-center text-gray-400">Starting at 3$/mo </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/order.php">
                <div class="col-start-1 lg:col-start-4">
                    <div class="service-card bg-white rounded-xl mx-auto">
                        <div class="mx-auto p-5">
                            <img class="w-1/2 mx-auto" src="img/colo.svg">
                            <h2 class="text-xl bold mt-6">Colocation</h2>
                            <p class="text-center text-gray-400">Starting at 3$/mo </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

<section class="features" id="features">
    <div class="container-full mx-auto special-red p-5 pt-8">
        <h2 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white text-center">
            <i class="fas fa-quote-left text-white white-quote"></i>  Why choose Central? <i class="fas fa-quote-right text-white white-quote"></i>
            <p class="text-center text-lg font-thin">Get the best service solutions at the price you can afford</p>
        </h2>

    <div class="grid grid-flow-col grid-rows-4 grid-cols-1 lg:grid-rows-2 lg:grid-cols-3 lg:gap-3 text-center mx-auto lg:p-5">
        <div class="feature px-5 col-start-1 lg:col-start-1">
            <div class="bg-white mx-auto p-5 rounded-xl">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-red-400"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>
        <div class="feature px-5 col-start-1 lg:col-start-2">
            <div class="bg-transparent text-white mx-auto p-5 rounded-xl border-2 border-white">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-white"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>
        <div class="feature px-5 col-start-1 lg:col-start-3">
            <div class="bg-white mx-auto p-5 rounded-xl">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-red-400"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>

        <div class="feature px-5 col-start-1 lg:col-start-1">
            <div class="bg-white mx-auto p-5 rounded-xl">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-red-400"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>
        <div class="feature px-5 col-start-1 lg:col-start-2">
            <div class="bg-transparent text-white mx-auto p-5 rounded-xl border-2 border-white">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-white"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>
        <div class="feature px-5 col-start-1 lg:col-start-3">
            <div class="bg-white mx-auto p-5 rounded-xl">
                <i class="fas fa-headset font-bold text-3xl mr-2 text-red-400"></i><h3 class="font-bold text-2xl inline-block">Premium Support</h3>
            <div class="text-center font-thin pt-3">
                <p class="text-lg p-2">
                Lorem ipsum dolor sit amet, consectetur adipis elit.
                </p>
            </div>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container locations mx-auto p-5">
    <h6 class="text-center text-3xl text-red-500 font-medium">Locations</h6>
    <h2 class="text-center text-lg font-thin">Server Hosting Locations</h2>
    <div class="map">
        <span class="marker marker-1" location="1" data-toggle="tooltip" data-placement="right" title="Quebec, Canada"></span>
        <span class="marker marker-2" location="2" data-toggle="tooltip" data-placement="right" title="Miami, United States"></span>
        <span class="marker marker-3" location="3" data-toggle="tooltip" data-placement="right" title="Falkenstein, Germany"></span>
    </div>
    <div class="mx-auto grid grid-col-1 grid-row-3 lg:grid-col-3 lg:grid-row-1 grid-flow-col mt-10">
        <div class="feature px-5 col-start-1 mx-auto lg:col-start-1">
            <div class="bg-red-300 text-white mx-auto p-5 rounded-xl border-2 border-white inline-flex">
                <img src="img/eun-icon.svg" width="100">
            <div class="text-left font-thin pt-3 pl-5">
                <p class="text-lg p-2">
                 Paris, France<br/>
                 Frankfurt, Germany <br/>
                </p>
            </div>
            </div>
        </div>

        <div class="feature px-5 col-start-1 mx-auto lg:col-start-2">
            <div class="bg-red-300 text-white mx-auto p-5 rounded-xl border-2 border-white inline-flex">
                <img src="img/usa-icon.svg" width="100">
            <div class="text-left font-thin pt-3 pl-5">
                <p class="text-lg p-2">
                 Dalas, USA<br/>
                 New York, USA <br/>
                </p>
            </div>
            </div>
        </div>

        <div class="feature px-5 col-start-1 mx-auto lg:col-start-3">
            <div class="bg-red-300 text-white mx-auto p-5 rounded-xl border-2 border-white inline-flex">
            <img src="img/au-icon.svg" width="100">
            <div class="text-left font-thin pt-3 pl-5">
                <p class="text-lg p-2">
                 Oceania, Australia<br/>
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="lg:container lg:mx-auto m-5 p-5 bg-red-700 lg:w-2/4 rounded-md">
        <div class="lg:inline-block block">
            <h2 class="text-left text-3xl font-bold text-white">Ready to work together?</h2>
            <h4 class="text-left text-xl font-medium text-white">Check our offers.</h4>
        </div>
        <a href="#" class="block lg:inline-block ml-auto bg-white text-center btn-d">Deploy Now</a>
    </div>
</section>

<?php
include('footer.php')
?>