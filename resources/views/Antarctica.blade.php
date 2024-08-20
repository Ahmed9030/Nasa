@extends('layout.boot-bree')

@section('title' , "Antarctica")


@section('content')

  <!-- strat landing -->
  <div class="landing d-flex justify-content-center align-items-center">
    <div class="container text-center blur rounded p-3">
        <h1>How is Antarctica doing in light of climate change?</h1>
        <p class="fs-6 text-black-50 mb-5">Is our world in danger?</p>
       <a href="#go"><button>Let's see the danger 👇</button></a>
    </div>
   </div>
  <!-- end landing -->

  <!-- start section 1 -->
  <div class="section-1 mt-5 mb-3 pb-5 pt-5" id="go">
  <div class="container">
    <h1 class="text-center pb-3">Liquid AntarcticaLiquid Antarctica</h1>
      <div class="row gap-0">
          <div class="col-lg-6">
            <p class="text-center text-md-start lh-lg pb-3">
              Figure 1. This map shows the total melt days for the Antarctic Ice Sheet from November 1 to January 15, 2024, with an up-close map of the Antarctic Peninsula below.
              The top middle map shows the total melt days as a difference from average relative to the 1990 to 2020 reference period, with an up-close map of the Antarctic Peninsula below.
              The top right graph shows daily melt extent as a percent of the ice sheet for the 2023 to 2024 melt season through January 15, 2024, with the average values and ranges for the same reference period.
              The bottom right graph shows the same melt extent for the Antarctic Peninsula sub-region. — Credit: National Snow and Ice Data Center
            </p>
          </div>
          <div class="img col-lg-6">
            <img src="imags/section_1.png" alt="" class="img-fluid shadow" >
          </div>

          <div class="img col-lg-6">
            <img src="imags/section_2.png" alt="" class="img-fluid shadow" >
          </div>

            <div class="col-lg-6">
              <p class="text-center text-md-start lh-lg pb-3">
                The plot on the left shows the departure from average air temperature in Antarctica at the 925 hPa level, in degrees Celsius, from December 15, 2023 to January 15, 2024.
                Yellows and reds indicate above average temperatures; blues and purples indicate below average temperatures.
                 The plot on the rights shows the departure from average sea level pressure in Antarctica in millibars for the same time period. Yellows and reds indicate above average air pressures; blues and purples indicate below average air pressures.
                 — Credit: NSIDC courtesy NOAA Earth System Research Laboratory Physical Sciences Laboratory
              </p>
            </div>

      </div>
    </div>
  </div>
  <!-- end section 1 -->

  <!-- start section 2 -->
  <div class="container pt-5 pb-5">
    <div class="row">

      <div class="col-lg-12 d-flex justify-content-center">
        <img src="imags/img-3.png" alt="" class="img-fluid ">
      </div>
    <div class="col-lg-12">
      <p class="text-md-start lh-lg text-center">Figure 3. This graphs shows surface mass balance (SMB) trends as a total mass snow and rain input
        minus evaporation for the Antarctic Ice Sheet from March 1,
         2023 to January 20, 2024, relative to the 1981 to 2010 reference period. The previous four years are shown for comparison,
        as well as the range of variability (standard deviation) for the 30-year reference period. — Credit: X. Fettweis, University of Liège and MAR3.12</p>
    </div>
    </div>
  </div>

  <!-- end section 2 -->

  <!-- start section 3 -->
   <div class="container pt-5 pb-5">
    <div class="section-3">
      <div class="row gap-0 ">

        <div class="col-lg-6">
          <img src="imags/img-4.png" alt="" class="img-fluid shadow">
        </div>

        <div class="col-lg-6 mt-3 align-self-end">
          <blockquote>
            Figure 4. This NASA satellite image uses the Moderate Resolution Imaging Spectroradiometer
            (MODIS) instrument to show melt ponds on ice shelves near the Antarctic
            Peninsula on January 16, 2024. — Credit: NASA Worldview
          </blockquote>
        </div>

        <div class="col-lg-6 mt-3 align-self-end">
          <blockquote class="main-blockquote">
            Figure 5. These plots show high-melt melt days as estimated to be greater than 5 millimeters
            (.20 inches) of water equivalent per day from November 1, 2023 to January 18 2024, the current melt season so far.
             The plot on the left shows the average number (NBR) of days and the plot on the right shows the NBR of days as a difference from average as simulated by the climate
             re-analysis model MAR3.12. — Credit: X. Fettweis, University of Liège and MAR3.12
          </blockquote>
        </div>
        <div class="col-lg-6">
          <img src="imags/img-5.png" alt="" class="img-fluid shadow">
        </div>

      </div>
    </div>
   </div>
  <!-- end section 3 -->

  <!-- start section 4 -->
  <div class="section-4">
     <div class="sha left-shadow d-flex justify-content-center align-items-center">
    <div class="container">
      <article class=" blur">
        <p class="text-white fs-1 lh-base">
          At its most expansive, Antarctic sea ice covers an area the size of Antarctica itself, doubling the size of the frozen continent. But the winter sea ice has been shrinking,
           and this year there was less ice than ever before, going back to when satellites started tracking annual ice extent around 1980.
        </p>
      </article>
   </div>
  </div>

  </div>
  <!-- end section 4 -->

  <!-- start section 5 -->
   <div class="container pt-5 pb-5">
    <div class="row gap-0">

      <div class="col-lg-6">
        <p class="fs1 extraLine">
          Exposed ocean water absorbs more heat than ice does, which then makes it more difficult for ice to re-form.
        </p>
        <article class="small scroll h-300 mb-3">
          <header class="fixed">
            <h5 class="no-margin">Scientists Capture New View of How the Ocean Melts Antarctica’s Ice Shelvesi :- <i class="fa-solid fa-up-down fs-2"></i></h5>
          </header>
          <p class="fs-6">glacier in Antarctica, has yielded the first detailed maps of the underside of an ice shelf, revealing clues to future sea level rise.
            The findings are reported in the journal Science Advances.
            “We have previously used satellite data and ice cores to observe how ice shelves change over time,” explains Anna Wåhlin, a professor of oceanography at the University of Gothenburg and the paper’s lead author. “By navigating the submersible into the cavity, we were able to get high resolution maps of the ice underside. It’s a bit like seeing the back of the moon for the first time.”
            “Our ability to project the future of the global coastline from rising sea levels in a warming world critically depends on data we obtain from beneath Antarctic ice shelves,” adds David Holland, a professor at New York University’s Courant Institute of Mathematical Sciences and one of the paper’s authors.
            The scientists programmed Ran, an autonomous underwater vehicle, to dive into the cavity of Dotson Ice Shelf, 350 meters thick and located in West Antarctica, and scan the ice above it with an advanced sonar system. Dotson Ice Shelf is considered to have a potentially large impact on future sea level rise due to its size and location.</p>
        </article>
      </div>

      <div class="col-lg-6 ">
        <img src="/imags/1.png" alt="" class="img-fluid">
      </div>
    </div>
   </div>
  <!-- end section 5 -->

  <!-- start section 6 -->
   <div class="section-6 inverse-surface ">
   <div class="container pt-5 pb-5">
    <h2 class="text-center">An advanced multibeam sonar system was used to map the base of the ice at a distance of about 50 meters. Illustration: Anna Wåhlin/Science Advances.</h2>

    <div class="row gap-0">

      <div class="col-lg-6">
        <img src="/imags/img-7.png" alt="" class="img-fluid">
      </div>

      <div class="col-lg-6">
        <article  class="small scroll mt-3  h300">
          <p class="fs-6">Over 27 days, the submarine traveled more than 1,000 kilometers (620 miles) back and forth under the glacier, reaching 17 kilometers (10.5 miles) into the cavity in order to capture the phenomena surrounding it.
            Using the data captured by Ran, the scientists were able to measure the currents below the glacier for the first time and prove why the western part of Dotson Ice Shelf melts so fast. Ran’s maps showed, not surprisingly, that the glacier melts faster where strong underwater currents erode its base and, in particular, very high melt at vertical fractures that extend through the glacier.
            But the findings also showed new patterns on the glacier base that raise troubling questions. The base is not smooth, but there is a peak and valley ice-scape with plateaus and formations resembling sand dunes. The researchers suggest that these may have been formed by flowing water under the influence of Earth’s rotation.
            “Earth’s rotation is critical to understanding most phenomena in the climate system, notably hurricanes and other severe-weather phenomena,” says Holland. “It seems these exotic under-ice features are also intimately controlled and shaped by the spinning of the Earth.”</p>

            <p class="fs-6">“The maps that Ran produced represent a huge progress in our understanding of Antarctica's ice shelves,” adds Karen Alley, a glaciologist from the University of Manitoba and co-author of the paper. “We’ve had hints of how complex ice-shelf bases are, but Ran uncovered a more extensive and complete picture than ever before. The imagery from the base of Dotson Ice shelf helps us interpret and calibrate what we see from the satellites.”</p>

            <p class="fs-6">"Our ability to project the future of the global coastline from rising sea levels in a warming world critically depends on data we obtain from beneath Antarctic ice shelves." David Holland, a professor of mathematics and ocean-atmosphere science at NYU's Courant Institute of Mathematical Sciences.”
              Much of the fieldwork for the Science Advances study was conducted in 2022, when Holland led a team to install a mooring beneath the ice shelf. This innovative engineering effort involved drilling a 1,000-foot-deep, one-foot-wide hole through the ice shelf using a hot water drill. The mooring was successfully installed before the ice froze again, allowing scientists to collect data continuously for the past two years—and to produce a time series of the changes in the melting at the bottom of the ice shelf.
              “For the first time, we combined data collected from an autonomous underwater vehicle, sampling at one point in time but covering a large area under an ice shelf, with data from a mooring that we installed with a hot</p>

            <p class="fs-6">water drill through the ice shelf,” notes Holland. “These dual methods provided data at one point in space but spanned over time continuously,”
              The scientists now realize there is a wealth of processes left to discover in future research missions under the glaciers.
              “The mapping has given us new data that we need to look at more closely,” concludes Wåhlin. “It is clear that many previous assumptions about melting of glacier undersides are falling short. Current models cannot explain the complex patterns we see. But with this method, we have a better chance of finding the answers.”
              The research was supported, in part, by grants from the National Science Foundation (164700, 511300, 511600, 529200, 919900).</p>
            <!-- <footer class="fixed"> -->
            <!-- <h5 class="no-margin"></h5> -->
          <!-- </footer> -->
        </article>      </div>

    </div>
  </div>
   </div>
  <!-- end section 6 -->

  <!-- start section 7  -->
  <div class="section-7">
    <div class="container pt-5 pb-5 lh-base">
      <h1 class="text-center">NASA’s Earth Observatory: Antarctic Sea Ice at Near-Historic Lows:-</h1>
        <p class="fs-3 pt-3 text-justify">
          Meanwhile, at the other end of the planet, the maximum winter ice coverage in the Arctic Ocean is consistent with an ongoing 46-year decline.
          Satellite images reveal that the total area of the Arctic Ocean covered in sea ice reached 5.8 million square miles (15.01 million square kilometres) on March 14. That’s 247,000 square miles (640,000 square kilometers) less ice than the average between 1981 and 2010. Overall, the maximum winter ice coverage in the Arctic has shrunk by an area equivalent to the size of Alaska since 1979.
          This year’s Arctic ice maximum is the 14th lowest on record. Complex weather patterns make it difficult to predict what will happen in any given year.
        </p>
        <div class="row gap-0 pt-4">

          <div class="col-lg-6">
            <p class="fs-4 text-justify">
              Shrinking ice makes Earth more susceptible to solar heating. “The sea ice and the snow on top of it are very reflective,” Boisvert said. “In the summer, if we have more sea ice, it reflects the Sun’s radiation and helps keep the planet cooler.”
              On the other hand, the exposed ocean is darker and readily absorbs solar radiation, capturing and retaining that energy and ultimately contributing to warming in the planet’s oceans and atmosphere.
              Sea ice around the poles is more susceptible to the weather than it was a dozen years ago. Ice thickness measurements collected with laser altimeters aboard NASA’s ICESat-2 satellite show that less ice has managed to stick around through the warmer months. This means new ice must form from scratch each year, rather than building on old ice to make thicker layers. Thinner ice, in turn, is more prone to melting than multi-year accumulations.
              “The thought is that in a couple of decades, we’re going to have these essentially ice-free summers,” Boisver
            </p>
          </div>

          <div class="col-lg-6 pt-3">
            <img src="imags/img-8.png" alt="" class="img-fluid shadow">
            <p class="fw-light text-justify">The Arctic Ocean sea ice reached its annual maximum on March 14, continuing the long-term decline in ice at the poles.
              Chart by Lauren Dauphin/NASA Earth Observatory, using data from the National Snow and Ice Data Center</p>
          </div>

        </div>
    </div>
  </div>
  <!-- end section 7  -->
@endsection
