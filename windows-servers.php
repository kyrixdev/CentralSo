<?php
include('header.php')
?>

<section id="hero-text" class="text-gray-700 body-font" data-aos="fade-up" data-aos-duration="900">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 flex flex-col md:items-start md:text-left mb-16 md:mb-0 lg:items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 ">
                    <i class="fas fa-quote-left red-quote"></i> Windows RDP Servers <i class="fas fa-quote-right red-quote"></i>
                    </h1>
                    <p class="mb-8 text-center text-gray-900 ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>
                    <div class="flex justify-center">
                        <a href="#prices" id="btn-style-1" class="inline-flex items-center border-0 py-2 px-4 lg:px-12 focus:outline-none rounded-lg text-base mt-4 mr-4 md:mt-0">Check Offers</a>
                    </div>
                    <p class="text-sm font-thin bg-gray-200 text-black p-1 mt-5 m-auto">
                        <span class="text-green-500 font-bold px-2">NEW</span> 50% Off on all <span class="font-bold">VPS Plans</span> and<span class="font-bold"> Colocation</span>.
                    </p>
                </div>
            </div>
</section> 
<setion id="prices" class="red-bg-200">
    <div class="container mx-auto px-5">
                    <div class="bg-transparant">
                        <nav class="tabs flex flex-col sm:flex-row justify-center">
                            <button data-target="panel-1" class="tab active text-gray-900  py-4 px-6 block hover:text-red-800 focus:outline-none border-b-2 font-medium border-red-500">
                                <img class="rounded-full inline-block mr-3" src="img/usa-icon.svg" width="32">North America
                            </button>
                            <button data-target="panel-2" class="tab text-gray-900  py-4 px-6 block hover:text-red-500 focus:outline-none">
                                <img class="rounded-full inline-block mr-2" src="img/eun-icon.svg" width="32">Europe
                            </button>
                            <button data-target="panel-3" class="tab text-gray-900  py-4 px-6 block hover:text-red-500 focus:outline-none">
                                <img class="rounded-full inline-block mr-2" src="img/au-icon.svg" width="32"> Australia
                            </button>
                        </nav>
                    </div>

                    <div id="panels">
                        <div class="panel-1 tab-content active py-5">
                            <div class="grid grid-flow-col grid-rows-4 grid-cols-1 lg:grid-rows-1 lg:grid-cols-4 text-center mx-auto p-5">
                                    <div class="col-start-1 lg:col-start-1">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ffa83cc2;">Bronze</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-2">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#bbbbbb;">Silver</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-3">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color: #ffeb3b;color: #585555;">Gold</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4 mt-4 mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-4">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ff3c3cc2;">Enterprise</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="panel-2 tab-content py-5">
                            <div class="grid grid-flow-col grid-rows-4 grid-cols-1 lg:grid-rows-1 lg:grid-cols-4 text-center mx-auto p-5">
                                    <div class="col-start-1 lg:col-start-1">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ffa83cc2;">Bronze</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-2">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#bbbbbb;">Silver</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-3">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color: #ffeb3b;color: #585555;">Gold</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-4">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ff3c3cc2;">Enterprise</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="panel-3 tab-content py-5">
                            <div class="grid grid-flow-col grid-rows-4 grid-cols-1 lg:grid-rows-1 lg:grid-cols-4 text-center mx-auto p-5">
                                    <div class="col-start-1 lg:col-start-1">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ffa83cc2;">Bronze</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-2">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#bbbbbb;">Silver</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-3">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color: #ffeb3b;color: #585555;">Gold</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 lg:col-start-4">
                                        <div class="service-card bg-white rounded-xl mx-auto">
                                            <div class="mx-auto p-4">
                                                <h2 class="text-3xl bold mt-6 text-gray-900 "><span style="background-color:#ff3c3cc2;">Enterprise</span></h2>
                                                <p class="text-center text-gray-600 font-normal mt-4">Basic Hardware for cheap price</p>
                                            </div>
                                            <div class="p-5">
                                                <ul class="text-left">
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-microchip red-fa mr-2"></i>CPU: <span class="float-right mr-5">2 Cores</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-memory red-fa mr-2"></i>RAM: <span class="float-right mr-5">6GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-hdd red-fa mr-2"></i>SSD Disk: <span class="float-right mr-5">60GB</span></li>
                                                    <li class="text-gray-900  font-normal"><i class="fas fa-ethernet red-fa mr-2 "></i> Network: <span class="float-right mr-5">Unmetered</span></li>  
                                                </ul>
                                                <h3 class="text-2xl text-center text-gray-500 my-5">$10<span class="text-xl">/mo</span></h3>
                                                <a href="" class="text-bold text-large text-gray-900  bg-red-500 rounded-md p-3 mt-5">Deploy Server</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
    </div>
</section>

<section id="features" class="features py-10">
    <div class="container mx-auto">
        <h1 class="text-3xl text-center font-semibold text-gray-900 "><span class="border-b-2 border-red-400">Our Features</span></h1>
        <div class="grid grid-flow-col grid-rows-2 grid-cols-1 lg:grid-rows-1 lg:grid-cols-2 mt-10">
            <div class="col-start-1 lg:col-start-2">
                <img src="img/feature.svg" class="w-3/4 mx-auto">
            </div>
            <div class="col-start-1 lg:col-start-1">
                <div class="mr-auto text-gray-900 ">
                    <div class="grid grid-flow-col grid-rows-2 grid-cols-1 lg:grid-rows-2 lg:grid-cols-2 mt-10">
                        <div class="col-start-1 lg:col-start-1">
                            <i class="fas fa-ethernet text-4xl"></i>
                            <p class="text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-start-1 lg:col-start-2">
                            <i class="fas fa-ethernet text-4xl"></i>
                            <p class="text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-start-1 lg:col-start-1">
                            <i class="fas fa-ethernet text-4xl"></i>
                            <p class="text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-start-1 lg:col-start-2">
                            <i class="fas fa-ethernet text-4xl"></i>
                            <p class="text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="lg:container lg:mx-auto m-5 p-5 mb-12 bg-red-700 lg:w-2/4 rounded-md">
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