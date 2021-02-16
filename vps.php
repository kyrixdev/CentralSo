<?php
include('header.php')
?>

<section id="hero-text" class="text-gray-700 body-font" data-aos="fade-up" data-aos-duration="900">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 flex flex-col md:items-start md:text-left mb-16 md:mb-0 lg:items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                    <i class="fas fa-quote-left red-quote"></i> Virtual Private Servers <i class="fas fa-quote-right red-quote"></i>
                    </h1>
                    <p class="mb-8 text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>
                    <div class="flex justify-center">
                        <a href="prices" id="btn-style-1" class="inline-flex items-center border-0 py-2 px-4 lg:px-12 focus:outline-none rounded-lg text-base mt-4 mr-4 md:mt-0">Check Offers</a>
                    </div>
                    <p class="text-sm font-thin bg-gray-200 text-black p-1 mt-5 m-auto">
                        <span class="text-green-500 font-bold px-2">NEW</span> 50% Off on all <span class="font-bold">VPS Plans</span> and<span class="font-bold"> Colocation</span>.
                    </p>
                </div>
            </div>
</section> 
<setion id="prices" class="red-bg-200">
    <div class="container mx-auto px-5">
                    <div class="bg-white">
                        <nav class="tabs flex flex-col sm:flex-row">
                            <button data-target="panel-1" class="tab active text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                                Description
                            </button>
                            <button data-target="panel-2" class="tab ext-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                Map and Street View
                            </button>
                            <button data-target="panel-3" class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                Other info
                            </button>
                        </nav>
                    </div>

                    <div id="panels">
                        <div class="panel-1 tab-content active py-5">
                            <span class="mr-5">
                                <i class="fal fa-bed mr-1"></i> {{ entry.bedrooms }}
                            </span>
                            <span>
                                <i class="fal fa-bath mr-1"></i> {{ entry.bathrooms }}
                            </span>

                            {{ entry.body }}
                        </div>
                        <div class="panel-2 tab-content py-5">
                            Map here
                        </div>
                        <div class="panel-3 tab-content py-5">
                            other info
                        </div>
                    </div>
    </div>
</section>
<?php
include('footer.php')
?>