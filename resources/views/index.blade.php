
@extends('layout.boot-bree')
@section("title", setting('site.title'))

@section('content')


 <!-- strat landing -->
<div class="landing">
    <div class="indicator"></div>

    <nav>
    <div>
        <div class="svg-container">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"
            />
        </svg>
        </div>
        <div>Globe Express</div>
    </div>
    <div>

        <div class="svg-container">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
            />
        </svg>
        </div>
        <div class="svg-container">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
        >
            <path
            fill-rule="evenodd"
            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
            clip-rule="evenodd"
            />
        </svg>
        </div>
    </div>
    </nav>

    <div id="demo"></div>

    <div class="details" id="details-even">
    <div class="place-box">
        <div class="text text-light">{{$posts->first()->category->name}}</div>
    </div>
    <div class="title-box-1 text-light"><div class="title-1">{{$posts->first()->title}}</div></div>
    <div class="title-box-2 text-light"><div class="title-2">ANTONIEN</div></div>
    <div class="desc text-light">
        {{$posts->first()->excerpt}}
    </div>
    <div class="cta">
        <button class="bookmark">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
        >
            <path
            fill-rule="evenodd"
            d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
            clip-rule="evenodd"
            />
        </svg>
        </button>
        <button class="discover">Discover Location</button>
    </div>
    </div>

    <div class="details" id="details-odd">
    <div class="place-box">
        <div class="text text-light">Switzerland Alps</div>
    </div>
    <div class="title-box-1 text-light"><div class="title-1">SAINT </div></div>
    <div class="title-box-2 text-light"><div class="title-2">ANTONIEN</div></div>
    <div class="desc text-light">
        Tucked away in the Switzerland Alps, Saint Antönien offers an idyllic retreat for those seeking tranquility and adventure alike. It's a hidden gem for backcountry skiing in winter and boasts lush trails for hiking and mountain biking during the warmer months.
    </div>
    <div class="cta">
        <button class="bookmark">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
        >
            <path
            fill-rule="evenodd"
            d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
            clip-rule="evenodd"
            />
        </svg>
        </button>
        <button class="discover">Discover Location</button>
    </div>
    </div>

    <div class="pagination" id="pagination">
    <div class="arrow arrow-left">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5"
        />
        </svg>
    </div>
    <div class="arrow arrow-right">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5"
        />
        </svg>
    </div>
    <div class="progress-sub-container" >
        <div class="progress-sub-background" >
            <div class="progress-sub-foreground" ></div>
        </div>
    </div>
    <div class="slide-numbers" id="slide-numbers"></div>
    </div>

    <div class="cover" ></div>
</div>
  <!-- end landing -->

  <!-- start map section -->
   <div class="container pt-5 pb-5 d-flex justify-content-center">
    <div class="row">
        <h1 class="text-center">Our planet is sending us a distress call. Are we listening?</h1>
        <div id='map' class="map w-100"></div>
    </div>
   </div>
  <!-- end map section -->

  <script>
    const map = L.map('map').setView([26.216533358841275,29.338254883000417], 2);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

   // antarctia circle
   let content = `<h3>Antarctica</h3> <a href='{{route("antar")}}'><button> More Info 🔭</button></a>`
   const circle0 = L.circle([-73.07740507503578,0.23950987850670913], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500000
        }).addTo(map).bindPopup(content);
</script>

@foreach ($posts as $key => $post)
    <script>
        var location_map = "{{$post->location}}";
        var locationArray = location_map.split(",");

        const circle{{$key}} = L.circle([parseFloat(locationArray[1]), parseFloat(locationArray[0])], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$post->circle_size}}
        }).addTo(map).bindPopup('<h3>{{$post->title}}</h3> <br> {{$post->excerpt}} <a href="{{route('post.show' , $post->id)}}"><button> More Info 🔭</button></a>');
    </script>
@endforeach

{{-- start show the posts of categories --}}

<div class="container pt-5 pb-5">
    {{-- start the first category --}}
    <h2 class=" b-border pb-3">{{$categories->first()->name}}</h2>
    <div class="row gap-0">
        @foreach ($categories->first()->posts as $post)
        <div class="col-lg-4 pb-4">
            <article class="no-padding">
                    <div class="grid no-space">
                      <div class="s6">
                        <img class="responsive" src="{{Voyager::image($post->image)}}">
                        <div class="absolute top left right padding top-shadow white-text">
                          <h5>{{$post->title}}</h5>
                          <p>{{$post->category->name}}</p>
                        </div>
                      </div>
                      <div class="s6">
                        <div class="padding">
                          {{-- <h5>Title</h5> --}}
                          <p name="excerpt">{{$post->excerpt}}</p>
                          {{-- <nav> --}}
                            <a href="{{route('post.show' , $post->id)}}" class="align-self-end"><button class="border round mt-5 primary">More</button></a>
                          {{-- </nav> --}}
                        </div>
                      </div>
                    </div>
                  </article>
            </div>
        @endforeach
    </div>
        {{-- end the first category --}}

        {{-- start the sceond category --}}
        <h2 class=" b-border pb-3">{{$categories->skip(1)->first()->name}}</h2>
        <div class="row gap-0">
            @foreach ($categories->skip(1)->first()->posts as $post)
            <div class="col-lg-4 pb-4">
                <article class="no-padding">
                        <div class="grid no-space">
                          <div class="s6">
                            <img class="responsive" src="{{Voyager::image($post->image)}}">
                            <div class="absolute top left right padding top-shadow white-text">
                              <h5>{{$post->title}}</h5>
                              <p>{{$post->category->name}}</p>
                            </div>
                          </div>
                          <div class="s6">
                            <div class="padding">
                              {{-- <h5>Title</h5> --}}
                              <p name="excerpt">{{$post->excerpt}}</p>
                              {{-- <nav> --}}
                                <a href="{{route('post.show' , $post->id)}}" class="align-self-end"><button class="border round mt-5 primary">More</button></a>
                              {{-- </nav> --}}
                            </div>
                          </div>
                        </div>
                      </article>
                </div>
            @endforeach
        </div>
        {{-- end the sceond category --}}

        <div class="d-flex justify-content-center">
            <a href="{{route('categories')}}" class="btn border round primary">More Categories</a>
        </div>
</div>

{{-- end show the posts of categories --}}



<script>
    const data = [
    {
        place:'{{$posts->first()->category->name}}',
        title:'{{$posts->first()->title}}',
        title2:'',
        description:'{{$posts->first()->excerpt}}',
        image:'{{Voyager::image($posts->first()->image)}}'
    },
    {
        place:'{{$posts->skip(1)->first()->category->name}}',
        title:'{{$post->skip(1)->first()->title}}',
        title2:'',
        description:'{{$post->skip(1)->first()->excerpt}}',
        image:'{{Voyager::image($post->skip(1)->first()->image)}}'
    },
    {
        place:'{{$posts->skip(2)->first()->category->name}}',
        title:'{{$posts->skip(2)->first()->title}}',
        title2:'',
        description:'{{$posts->skip(2)->first()->excerpt}}',
        image:'{{Voyager::image($posts->skip(2)->first()->image)}}'
    },
    {
        place:'{{$posts->skip(3)->first()->category->name}}',
        title:'{{$posts->skip(3)->first()->title}}',
        title2:'',
        description:'{{$posts->skip(3)->first()->excerpt}}',
        image:'{{Voyager::image($posts->skip(3)->first()->image)}}'
    },
    {
        place:'{{$posts->skip(4)->first()->category->name}}',
        title:'{{$posts->skip(4)->first()->title}}',
        title2:'',
        description:'{{$posts->skip(4)->first()->excerpt}}',
        image:'{{Voyager::image($posts->skip(4)->first()->image)}}'
    },
    {
        place:'Cappadocia - Turkey',
        title:'Göreme',
        title2:'Valley',
        description:'Göreme Valley in Cappadocia is a historical marvel set against a unique geological backdrop, where centuries of wind and water have sculpted the landscape into whimsical formations. The valley is also famous for its open-air museums, underground cities, and the enchanting experience of hot air ballooning.',
        image:'https://assets.codepen.io/3685267/timed-cards-6.jpg'
    },
]

    const _ = (id)=>document.getElementById(id)
    const cards = data.map((i, index)=>`<div class="card" id="card${index}" style="background-image:url(${i.image})"  ></div>`).join('')



    const cardContents = data.map((i, index)=>`<div class="card-content" id="card-content-${index}">
    <div class="content-start"></div>
    <div class="content-place">${i.place}</div>
    <div class="content-title-1">${i.title}</div>
    <div class="content-title-2">${i.title2}</div>

    </div>`).join('')


    const sildeNumbers = data.map((_, index)=>`<div class="item" id="slide-item-${index}" >${index+1}</div>`).join('')
    _('demo').innerHTML =  cards + cardContents
    _('slide-numbers').innerHTML =  sildeNumbers


    const range = (n) =>
    Array(n)
        .fill(0)
        .map((i, j) => i + j);
    const set = gsap.set;

    function getCard(index) {
    return `#card${index}`;
    }
    function getCardContent(index) {
    return `#card-content-${index}`;
    }
    function getSliderItem(index) {
    return `#slide-item-${index}`;
    }

    function animate(target, duration, properties) {
    return new Promise((resolve) => {
        gsap.to(target, {
        ...properties,
        duration: duration,
        onComplete: resolve,
        });
    });
    }

    let order = [0, 1, 2, 3, 4, 5];
    let detailsEven = true;

    let offsetTop = 200;
    let offsetLeft = 700;
    let cardWidth = 200;
    let cardHeight = 300;
    let gap = 40;
    let numberSize = 50;
    const ease = "sine.inOut";

    function init() {
    const [active, ...rest] = order;
    const detailsActive = detailsEven ? "#details-even" : "#details-odd";
    const detailsInactive = detailsEven ? "#details-odd" : "#details-even";
    const { innerHeight: height, innerWidth: width } = window;
    offsetTop = height - 430;
    offsetLeft = width - 830;

    gsap.set("#pagination", {
        top: offsetTop + 330,
        left: offsetLeft,
        y: 200,
        opacity: 0,
        zIndex: 60,
    });
    gsap.set("nav", { y: -200, opacity: 0 });

    gsap.set(getCard(active), {
        x: 0,
        y: 0,
        width: window.innerWidth,
        height: window.innerHeight,
    });
    gsap.set(getCardContent(active), { x: 0, y: 0, opacity: 0 });
    gsap.set(detailsActive, { opacity: 0, zIndex: 22, x: -200 });
    gsap.set(detailsInactive, { opacity: 0, zIndex: 12 });
    gsap.set(`${detailsInactive} .text`, { y: 100 });
    gsap.set(`${detailsInactive} .title-1`, { y: 100 });
    gsap.set(`${detailsInactive} .title-2`, { y: 100 });
    gsap.set(`${detailsInactive} .desc`, { y: 50 });
    gsap.set(`${detailsInactive} .cta`, { y: 60 });

    gsap.set(".progress-sub-foreground", {
        width: 500 * (1 / order.length) * (active + 1),
    });

    rest.forEach((i, index) => {
        gsap.set(getCard(i), {
        x: offsetLeft + 400 + index * (cardWidth + gap),
        y: offsetTop,
        width: cardWidth,
        height: cardHeight,
        zIndex: 30,
        borderRadius: 10,
        });
        gsap.set(getCardContent(i), {
        x: offsetLeft + 400 + index * (cardWidth + gap),
        zIndex: 40,
        y: offsetTop + cardHeight - 100,
        });
        gsap.set(getSliderItem(i), { x: (index + 1) * numberSize });
    });

    gsap.set(".indicator", { x: -window.innerWidth });

    const startDelay = 0.6;

    gsap.to(".cover", {
        x: width + 400,
        delay: 0.5,
        ease,
        onComplete: () => {
        setTimeout(() => {
            loop();
        }, 500);
        },
    });
    rest.forEach((i, index) => {
        gsap.to(getCard(i), {
        x: offsetLeft + index * (cardWidth + gap),
        zIndex: 30,
        delay: 0.05 * index,
        ease,
        delay: startDelay,
        });
        gsap.to(getCardContent(i), {
        x: offsetLeft + index * (cardWidth + gap),
        zIndex: 40,
        delay: 0.05 * index,
        ease,
        delay: startDelay,
        });
    });
    gsap.to("#pagination", { y: 0, opacity: 1, ease, delay: startDelay });
    gsap.to("nav", { y: 0, opacity: 1, ease, delay: startDelay });
    gsap.to(detailsActive, { opacity: 1, x: 0, ease, delay: startDelay });
    }

    let clicks = 0;

    function step() {
    return new Promise((resolve) => {
        order.push(order.shift());
        detailsEven = !detailsEven;

        const detailsActive = detailsEven ? "#details-even" : "#details-odd";
        const detailsInactive = detailsEven ? "#details-odd" : "#details-even";

        document.querySelector(`${detailsActive} .place-box .text`).textContent =
        data[order[0]].place;
        document.querySelector(`${detailsActive} .title-1`).textContent =
        data[order[0]].title;
        document.querySelector(`${detailsActive} .title-2`).textContent =
        data[order[0]].title2;
        document.querySelector(`${detailsActive} .desc`).textContent =
        data[order[0]].description;

        gsap.set(detailsActive, { zIndex: 22 });
        gsap.to(detailsActive, { opacity: 1, delay: 0.4, ease });
        gsap.to(`${detailsActive} .text`, {
        y: 0,
        delay: 0.1,
        duration: 0.7,
        ease,
        });
        gsap.to(`${detailsActive} .title-1`, {
        y: 0,
        delay: 0.15,
        duration: 0.7,
        ease,
        });
        gsap.to(`${detailsActive} .title-2`, {
        y: 0,
        delay: 0.15,
        duration: 0.7,
        ease,
        });
        gsap.to(`${detailsActive} .desc`, {
        y: 0,
        delay: 0.3,
        duration: 0.4,
        ease,
        });
        gsap.to(`${detailsActive} .cta`, {
        y: 0,
        delay: 0.35,
        duration: 0.4,
        onComplete: resolve,
        ease,
        });
        gsap.set(detailsInactive, { zIndex: 12 });

        const [active, ...rest] = order;
        const prv = rest[rest.length - 1];

        gsap.set(getCard(prv), { zIndex: 10 });
        gsap.set(getCard(active), { zIndex: 20 });
        gsap.to(getCard(prv), { scale: 1.5, ease });

        gsap.to(getCardContent(active), {
        y: offsetTop + cardHeight - 10,
        opacity: 0,
        duration: 0.3,
        ease,
        });
        gsap.to(getSliderItem(active), { x: 0, ease });
        gsap.to(getSliderItem(prv), { x: -numberSize, ease });
        gsap.to(".progress-sub-foreground", {
        width: 500 * (1 / order.length) * (active + 1),
        ease,
        });

        gsap.to(getCard(active), {
        x: 0,
        y: 0,
        ease,
        width: window.innerWidth,
        height: window.innerHeight,
        borderRadius: 0,
        onComplete: () => {
            const xNew = offsetLeft + (rest.length - 1) * (cardWidth + gap);
            gsap.set(getCard(prv), {
            x: xNew,
            y: offsetTop,
            width: cardWidth,
            height: cardHeight,
            zIndex: 30,
            borderRadius: 10,
            scale: 1,
            });

            gsap.set(getCardContent(prv), {
            x: xNew,
            y: offsetTop + cardHeight - 100,
            opacity: 1,
            zIndex: 40,
            });
            gsap.set(getSliderItem(prv), { x: rest.length * numberSize });

            gsap.set(detailsInactive, { opacity: 0 });
            gsap.set(`${detailsInactive} .text`, { y: 100 });
            gsap.set(`${detailsInactive} .title-1`, { y: 100 });
            gsap.set(`${detailsInactive} .title-2`, { y: 100 });
            gsap.set(`${detailsInactive} .desc`, { y: 50 });
            gsap.set(`${detailsInactive} .cta`, { y: 60 });
            clicks -= 1;
            if (clicks > 0) {
            step();
            }
        },
        });

        rest.forEach((i, index) => {
        if (i !== prv) {
            const xNew = offsetLeft + index * (cardWidth + gap);
            gsap.set(getCard(i), { zIndex: 30 });
            gsap.to(getCard(i), {
            x: xNew,
            y: offsetTop,
            width: cardWidth,
            height: cardHeight,
            ease,
            delay: 0.1 * (index + 1),
            });

            gsap.to(getCardContent(i), {
            x: xNew,
            y: offsetTop + cardHeight - 100,
            opacity: 1,
            zIndex: 40,
            ease,
            delay: 0.1 * (index + 1),
            });
            gsap.to(getSliderItem(i), { x: (index + 1) * numberSize, ease });
        }
        });
    });
    }

    async function loop() {
    await animate(".indicator", 2, { x: 0 });
    await animate(".indicator", 0.8, { x: window.innerWidth, delay: 0.3 });
    set(".indicator", { x: -window.innerWidth });
    await step();
    loop();
    }

    async function loadImage(src) {
    return new Promise((resolve, reject) => {
        let img = new Image();
        img.onload = () => resolve(img);
        img.onerror = reject;
        img.src = src;
    });
    }

    async function loadImages() {
    const promises = data.map(({ image }) => loadImage(image));
    return Promise.all(promises);
    }

    async function start() {
    try {
        await loadImages();
        init();
    } catch (error) {
        console.error("One or more images failed to load", error);
    }
    }

    start()
</script>

@endsection
