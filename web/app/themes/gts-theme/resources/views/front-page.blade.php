@extends('layouts.app')
@section('content')
    <style>
        .homepage-image{
            background-image: url('{{asset('images/homepage-banner-mobile.jpg')}}');
            background-size: 177vw 100vh;
            @media (min-width: 1024px) {
                background-image: url('{{asset('images/homepage-banner.webp')}}');
            }
        }
    </style>
    <section class="h-screen text-white bg-black bg-fixed bg-opacity-60 bg-blend-overlay grid place-content-center text-center lg:bg-cover bg-center homepage-image">
        <h1 class="text-4xl font-bold animate-bounce lg:text-6xl">Gentle Touch School</h1>
        <p class="text-xl lg:text-2xl">Wisdom and knowledge</p>
    </section>
    <section class=" grid place-content-center px-6 py-20 justify-items-center bg-gray-300 ">
        <h2 class="text-4xl text-center font-bold lg:text-5xl animate-on-scroll">Welcome to <span class="text-lime-700 block animate-pulse ">Gentle Touch Schools</span> </h2>
        <div class="border-4 border-lime-500 w-3/5 lg:w-2/12 my-2"></div>
        <p class="text-gray-600 text-center text-xl my-2 animate-on-scroll">Welcome to the official website of Gentle Touch International Schools, the school of wisdom and knowledge. A school created with the sole purpose of training leaders of tomorrow in moral and academic prospects. </p>
    </section>
    <section class="text-pink-700 flex flex-col items-center justify-center p-6 bg-white animate-on-scroll">
        <h2 data-aos="fade-up" class="text-4xl font-bold lg:text-5xl">What we stand for</h2>
        <div class="flex flex-col lg:flex-row my-10  ">
            <article class="my-4 border-2 border-pink-700 border-solid p-6 lg:m-4 rounded-lg animate-on-scroll lg:delay-150" >
                <h2 class="p-2 text-xl text-pink text-pink-700 text-xl font-bold text-center lg:text-left">Our Vision</h2>
                <p class="leading-8 lg:text-lg  mt-5 text-justify">Our vision is to train up academic and moral stars who would be an epitome of light to their family, community and nation, children who would serve as an example to others and who would always be recognized as being honest, academic loving, creative, resourceful, polite and discipline. To produce proud patriots who would be the leaders of tomorrow without forgeting about the strugles of the people of today</p>
                <form action="https://gentletouchschool.com/vision-statement">
                    <button type="" class="  w-32 font-bold text-lg h-10 bg-transparent  border-2 border-pink-700 border-solid text-pink-700 m-6 rounded-lg outline-none hover:text-lime-500 hover:border-lime-500">Read more</button>
                </form>
            </article>
            <article class="my-4 border-2  border-pink-700 border-solid p-6 lg:m-4 lg:delay-200 animate-on-scroll rounded-lg" >
                <h2 class="p-2 text-xl text-pink-700 font-bold text-center lg:text-left">Our Mission</h2>
                <p class="leading-8 lg:text-lg mt-5 text-justify">To acheive our visions, we look for clever and creative ways to teach our students both academic and moral lessons, we try our best to teach them in a way that is fun but still manages to get the point we are trying to introduce fully. We also take time to review our information dissemination techniques in hopes of improving it one step at a time. We try our best to ensure condusive learning environment to preent unnecessary distractions </p>
                <form action="https://gentletouchschool.com/mission-statement">
                    <button type="" class="  w-32 font-bold text-lg h-10 bg-transparent  border-2 border-pink-700 border-solid text-pink-700 m-6 rounded-lg outline-none hover:text-lime-500 hover:border-lime-500">Read more</button>
                </form>
            </article>
            
            <article class="my-4 border-2 border-pink-700 border-solid p-6 lg:m-4 lg:delay-300 animate-on-scroll rounded-lg">
                <h2 class="p-2 text-xl  text-pink-700 font-bold text-center lg:text-left">Our Core values</h2>
                <p class="leading-8 lg:text-lg mt-5 text-justify">We deeply believe in the principles of love of our creator and ourselves, the principles of determination and hardwork in everything we do, that is in dissemination of moral and academic values to our pupils. We also believe in the principles of discipline, self control and anger management in everything we do. We also believe in the principles of equality of individuals and we believe in the principle of individual uniqueness</p>
                <form action="https://gentletouchschool.com/core-value-statement">
                    <button type="" class="  w-32 font-bold text-lg h-10 bg-transparent  border-2 border-pink-700 border-solid text-pink-700 m-6 rounded-lg outline-none hover:text-lime-500 hover:border-lime-500">Read more</button>
                </form>
            </article>
        </div>
    </section>
    <section class="bg-black grid grid-col-1 text-2xl text-white lg:gap-3 lg:grid-col-4 lg:p-3 ">
        <h2 class="col-span-1 text-center text-white text-4xl font-bold px-3 py-8 lg:col-span-4 animate-on-scroll ">What we offer</h2>
        <div class="bg-red-600 grid h-96 place-content-center lg:rounded-lg lg:delay-150 animate-on-scroll"><p>Creche</p></div>
        <div class="bg-blue-600 grid h-96 place-content-center lg:rounded-lg lg:delay-200 animate-on-scroll"><p>Pre school</p></div>
        <div class="bg-yellow-600 grid h-96 place-content-center lg:rounded-lg lg:delay-300 animate-on-scroll"><p>Primary</p></div>
        <div class="bg-lime-600 grid h-96 place-content-center lg:rounded-lg lg:delay-350 animate-on-scroll"><p>After School</p></div>
    </section>
    <section class="grid place-content-center h-96">
        <h2 class="text-4xl text-center text-lime-700 font-bold g:delay-150 animate-on-scroll">We are admitting...</h2>
        <a href="https://gentletouchschool.com/admission" class="text-center text-pink-700 g:delay-150 animate-on-scroll">Follow these steps to apply for admission</a>
    </section>
    <section class=" p-6 bg-white">
        @while(have_posts()) @php(the_post())
          @includeFirst(['partials.content-page', 'partials.content'])
        @endwhile
    </section>
@endsection