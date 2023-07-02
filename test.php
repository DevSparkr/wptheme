<?php 
/**
 * Property template
 * 
 * @package wptheme
 */
get_header();
?>
<script>
    jQuery( document ).ready( function( $ ){

$('.wptheme-gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.wptheme-gallery-nav'
});
$('.wptheme-gallery-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.wptheme-gallery',
    focusOnSelect: true,
    arrows: true,
    prevArrow: '<svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
    nextArrow: '<svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>'
});

} );
</script>

<div class="py-14">
    <div class="container">

        <div class="grid grid-cols-1 md:grid-cols-2">
            
            <div class="overflow-hidden">
                <div class="wptheme-gallery">
                    <div class="item">
                        <h4>00</h4>
                    </div>
                    <div class="item">
                        <h4>01</h4>
                    </div>
                    <div class="item">
                        <h4>02</h4>
                    </div>
                    <div class="item">
                        <h4>03</h4>
                    </div>
                    <div class="item">
                        <h4>04</h4>
                    </div>
                </div>
                <div class="wptheme-gallery-nav">
                    <div class="">Zero</div>
                    <div class="">one</div>
                    <div class="">two</div>
                    <div class="">three</div>
                    <div class="">four</div>
                </div>
            </div>

            <div class="">
                <h2 class="mb-3">Home in Merrick Way </h2>
                <a href="" class="mb-2 flex items-center gap-2 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                    </svg>
                    <span class="underline">Merrick Way, Miami, FL 33134, USA</span>
                </a>
                <div class="my-5 flex items-center ga-yp-3 gap-x-5 text-xl">
                    <div class="flex items-center gap-1">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z"></path></svg>
                        3
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                            <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                        </svg>
                        4
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27 22.142V9.858A3.992 3.992 0 1 0 22.142 5H9.858A3.992 3.992 0 1 0 5 9.858v12.284A3.992 3.992 0 1 0 9.858 27h12.284A3.992 3.992 0 1 0 27 22.142ZM26 4a2 2 0 1 1-2 2a2.002 2.002 0 0 1 2-2ZM4 6a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2Zm2 22a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm16.142-3H9.858A3.994 3.994 0 0 0 7 22.142V9.858A3.995 3.995 0 0 0 9.858 7h12.284A3.994 3.994 0 0 0 25 9.858v12.284A3.993 3.993 0 0 0 22.142 25ZM26 28a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2Z"></path></svg>
                        3500
                    </div>
                </div>
                <div class="my-4 price text-3xl font-semibold">
                    Price: <span class="text-primary">$3400</span>
                </div>
                <div class="">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat modi id non suscipit sequi soluta architecto autem repellat ut veritatis. Sunt dolor non aperiam, vitae doloribus reiciendis voluptate tempora et!</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="bg-slate-100 py-10">
    <div class="container">
        <h2 class="mb-3">Additional Information</h2>
        <table class="table-auto">
            <tr>
                <td>Built In:</td>
                <td>2023</td>
            </tr>
            <tr>
                <td>Flooring</td>
                <td>Ceramic Floor,Other</td>
            </tr>
            <tr>
                <td>View</td>
                <td> Intracoastal View,Direct Ocean,Ocean View</td>
            </tr>
            <tr>
                <td>Parking</td>
                <td> 2 Or More Spaces,Covered Parking,Valet Parking</td>
            </tr>
        </table>
    </div>
</div>










<div class="mt-10">
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="">
                <div class="relative">
                    <div class="absolute h-1/2 bottom-0 left-0 w-full z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <img src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/06/zac-gudakov-0qir5hBOj18-unsplash-768x512.jpg" alt="">
                    <div class="z-10 p-4 w-full absolute bottom-0 left-0 flex justify-between items-center">
                        <div class="flex gap-2 items-end">
                            <img class="border-2 border-white w-12 h-12 rounded-full" src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/05/agent-male-1-1-210x210.jpg" alt="">
                            <div class="text-white">
                                <h6>Nathan James</h6>
                                <p class="leading-zero">James Estate Agents</p>
                            </div>
                        </div>
                        <div class="px-3 py-0.5 rounded bg-primary text-white text-sm">For sale</div>
                    </div>
                </div>
                <div class="p-4 bg-gray-100">
                    <h4 class="mb-2">
                        <a href="">
                            Home in Merrick Way
                        </a>
                    </h4>
                    <a href="" class="mb-2 flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="underline">Merrick Way, Miami, FL 33134, USA</span>
                    </a>
                    <div class="mb-2 date text-sm">
                        Added: June 14, 2020 
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="price text-3xl font-semibold text-primary">
                            $3400
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z"/></svg>
                                3
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                    <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                                </svg>
                                4
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27 22.142V9.858A3.992 3.992 0 1 0 22.142 5H9.858A3.992 3.992 0 1 0 5 9.858v12.284A3.992 3.992 0 1 0 9.858 27h12.284A3.992 3.992 0 1 0 27 22.142ZM26 4a2 2 0 1 1-2 2a2.002 2.002 0 0 1 2-2ZM4 6a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2Zm2 22a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm16.142-3H9.858A3.994 3.994 0 0 0 7 22.142V9.858A3.995 3.995 0 0 0 9.858 7h12.284A3.994 3.994 0 0 0 25 9.858v12.284A3.993 3.993 0 0 0 22.142 25ZM26 28a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2Z"/></svg>
                                3500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="relative">
                    <div class="absolute h-1/2 bottom-0 left-0 w-full z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <img src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/06/zac-gudakov-0qir5hBOj18-unsplash-768x512.jpg" alt="">
                    <div class="z-10 p-4 w-full absolute bottom-0 left-0 flex justify-between items-center">
                        <div class="flex gap-2 items-end">
                            <img class="border-2 border-white w-12 h-12 rounded-full" src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/05/agent-male-1-1-210x210.jpg" alt="">
                            <div class="text-white">
                                <h6>Nathan James</h6>
                                <p class="leading-zero">James Estate Agents</p>
                            </div>
                        </div>
                        <div class="px-3 py-0.5 rounded bg-primary text-white text-sm">For sale</div>
                    </div>
                </div>
                <div class="p-4 bg-gray-100">
                    <h4 class="mb-2">
                        <a href="">
                            Home in Merrick Way
                        </a>
                    </h4>
                    <a href="" class="mb-2 flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="underline">Merrick Way, Miami, FL 33134, USA</span>
                    </a>
                    <div class="mb-2 date text-sm">
                        Added: June 14, 2020 
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="price text-3xl font-semibold text-primary">
                            $3400
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z"/></svg>
                                3
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                    <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                                </svg>
                                4
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27 22.142V9.858A3.992 3.992 0 1 0 22.142 5H9.858A3.992 3.992 0 1 0 5 9.858v12.284A3.992 3.992 0 1 0 9.858 27h12.284A3.992 3.992 0 1 0 27 22.142ZM26 4a2 2 0 1 1-2 2a2.002 2.002 0 0 1 2-2ZM4 6a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2Zm2 22a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm16.142-3H9.858A3.994 3.994 0 0 0 7 22.142V9.858A3.995 3.995 0 0 0 9.858 7h12.284A3.994 3.994 0 0 0 25 9.858v12.284A3.993 3.993 0 0 0 22.142 25ZM26 28a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2Z"/></svg>
                                3500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="relative">
                    <div class="absolute h-1/2 bottom-0 left-0 w-full z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <img src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/06/zac-gudakov-0qir5hBOj18-unsplash-768x512.jpg" alt="">
                    <div class="z-10 p-4 w-full absolute bottom-0 left-0 flex justify-between items-center">
                        <div class="flex gap-2 items-end">
                            <img class="border-2 border-white w-12 h-12 rounded-full" src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/05/agent-male-1-1-210x210.jpg" alt="">
                            <div class="text-white">
                                <h6>Nathan James</h6>
                                <p class="leading-zero">James Estate Agents</p>
                            </div>
                        </div>
                        <div class="px-3 py-0.5 rounded bg-primary text-white text-sm">For sale</div>
                    </div>
                </div>
                <div class="p-4 bg-gray-100">
                    <h4 class="mb-2">
                        <a href="">
                            Home in Merrick Way
                        </a>
                    </h4>
                    <a href="" class="mb-2 flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="underline">Merrick Way, Miami, FL 33134, USA</span>
                    </a>
                    <div class="mb-2 date text-sm">
                        Added: June 14, 2020 
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="price text-3xl font-semibold text-primary">
                            $3400
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z"/></svg>
                                3
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                    <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
                                </svg>
                                4
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27 22.142V9.858A3.992 3.992 0 1 0 22.142 5H9.858A3.992 3.992 0 1 0 5 9.858v12.284A3.992 3.992 0 1 0 9.858 27h12.284A3.992 3.992 0 1 0 27 22.142ZM26 4a2 2 0 1 1-2 2a2.002 2.002 0 0 1 2-2ZM4 6a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2Zm2 22a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm16.142-3H9.858A3.994 3.994 0 0 0 7 22.142V9.858A3.995 3.995 0 0 0 9.858 7h12.284A3.994 3.994 0 0 0 25 9.858v12.284A3.993 3.993 0 0 0 22.142 25ZM26 28a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2Z"/></svg>
                                3500
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<?php get_footer(); ?>