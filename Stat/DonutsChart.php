<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- icon title -->
    <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="76x76"
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="120x120"
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="152x152"
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      href="../img/iconLogo.svg"
      sizes="60x60"
    />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

    <!-- aosJS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"
      rel="stylesheet"
    />

    <!-- daisyUI -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Tailwind Elements -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
    rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
    tailwind.config = {
    darkMode: "class",
    theme: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
      },
    },
    corePlugins: {
      preflight: false,
    },
    };
    </script>
  
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.js"></script>

    <!-- tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {},
          },
        },
      };
    </script>
    <!-- 
    <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
      </style>  
    -->
    <!-- title -->
    <title>Fortune - Your statistic Money</title>
  </head>
  <body>
    <div id="nav_float" class="z-10 fixed w-full bottom-0">
      <div
        class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md"
        id="popUp_chat"
      >
        <a href="../home_page/homePage.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/Home.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="#" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
          <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../add_income_expend/income.html" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/add.svg" alt="" class="w-max" />
        </a>
        <a href="" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../profile/profile.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
        </a>
      </div>
    </div>
    <div
      class="max-w-full h-full bg-gradient-to-t to-[#2E3462] from-[#292E53]/100"
    >
        <!-- header -->
        <div id="header"
          class="justify-items-end grid-cols-3 grid p-10 pt-14"
        >
          <div id="menu_aside" class="my-auto w-full">
            <button
              type="button"
              class="btn border-none hover:bg-transparent btn-circle"
              data-drawer-backdrop="false"
              data-drawer-target="drawer-left-example"
              data-drawer-show="drawer-left-example"
              data-drawer-placement="left"
              aria-controls="drawer-left-example"
            >
              <img src="../img/menu.svg" alt="" class="w-11 sm:w-12 left-0" />
            </button>
            <div
              id="drawer-left-example"
              class="dark:bg-opacity-100 fixed top-0 left-0 z-50 p-4 overflow-y-auto transition-transform duration-500 -translate-x-full w-full h-full bg-gradient-to-t from-cyan-800 to-[#333757] filter backdrop-blur-[5rem]"
              tabindex="-1"
              aria-labelledby="drawer-left-label"
            >
              <div class="w-full h-full flex justify-center">
                <button
                  type="button"
                  class="outline-none absolute right-14 top-10"
                  data-drawer-hide="drawer-left-example"
                  aria-controls="drawer-left-example"
                >
                  <img src="../img/close.svg" alt="" class="w-9" />
                </button>
                <ul
                  class="h-max w-max my-[20rem] mx-auto md:my-[20rem] md:mx-auto gap-4"
                >
                  <li class="text-center flex">
                    <img
                      src="../img/Iconsax/Linear/home3.svg"
                      alt=""
                      class="my-auto w-10 pr-2"
                    />
                    <a
                      href="#"
                      class="dark:text-white text-white font-bold md:text-4xl text-2xl"
                      >Home</a
                    >
                  </li>
                  <li class="text-center pt-5 flex">
                    <img
                      src="../img/abouti.svg"
                      alt=""
                      class="my-auto w-10 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >About</a
                    >
                  </li>
                  <li class="text-center py-5 flex">
                    <img
                      src="../img/Iconsax/Bold/profile2user.svg"
                      alt=""
                      class="my-auto w-11 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Contact</a
                    >
                  </li>
                  <li class="text-center pb-5 flex">
                    <img
                      src="../img/Iconsax/Linear/setting2.svg"
                      alt=""
                      class="my-auto w-11 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Settings</a
                    >
                  </li>
                  <li class="text-center flex w-40">
                    <img
                      src="../img/profile.svg"
                      alt=""
                      class="w-12 my-auto pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Log In</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="w-max m-auto text-white font-bold text-3xl md:text-4xl">
            Fortune
          </h1>
          <!-- profile -->
          <div id="profile" class="my-auto">
            <button
              class="btn border-none hover:bg-transparent btn-circle bg-transparent"
              id="dropdownDefaultButton"
              data-dropdown-toggle="dropdown"
            >
              <img
                src="../img/profile.svg"
                alt=""
                class="mx-auto my-auto p-0 border-none bg-transparent w-10"
              />
            </button>
            <ul
              id="dropdown"
              aria-labelledby="dropdownDefaultButton"
              class="bg-gradient-to-t from-cyan-700/75 to-[#444A85] bg-opacity-50 border-white ease-in-out hidden border border-opacity-10 shadow-lg text-white m-0 gap-5 rounded-xl md:w-44 w-28 z-40"
            >
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Dashboard
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  About me
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Finance
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div
          id="container_statistic"
          class="bg-gradient-to-t to-[#A2A6A9]/20 from-[#466094]/20 bg-opacity-10 w-[25rem] md:w-[50rem] h-full sm:max-w-md sm:h-full px-6 rounded-2xl mx-auto border-white border-opacity-30 border shadow-lg"
        >
          <div
            id="navbar"
            class="flex  justify-around w-full h-max my-5"
          >
            <a href="ExpensivePreview.html"><img src="../img/previous.svg" alt="" class="w-3" /></a>
            <h3 class="text-white w-max my-auto text-xl font-semibold">
              Account Analysist
            </h3>
            <a href="ExpensivePreview.html"><img src="../img/next.svg" alt="" class="w-3" /></a>
          </div>

          <div id="chart" class="scale-95 md:scale-100">
            <div class="mx-auto w-40 overflow-hidden">
              <canvas
                data-te-chart="doughnut"
                data-te-dataset-data="[2112, 2343, 2545, 3423, 2365, 1985, 987]"
                data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)', 'rgba(66, 133, 244, 0.2)']">
              </canvas>
            </div>
          </div>
          
          <div class="md:">
          <div id="totalCash" class="my-6">
            <h1 class="text-white w-max mx-auto font-semibold text-xl">
              Total Cash
            </h1>
            <div class="divide-x-4 flex justify-around w-full my-3 text-sm md:text-base">
              <div id="income" class="grid-cols-3 flex w-max my-auto">
                <h4 class="text-white pr-1">Rp50.000.000,00</h4>
                <img src="../img/triangleIncome.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
              <div id="expends" class="grid-cols-3 flex pl-3 md:pl-4 w-max my-auto">
                <h4 class="text-white pr-1">Rp30.000.000,00</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
            </div>
          </div>

          <div id="historyCash" class="gap-52 mx-auto w-full md:w-96 my-5 h-full">
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
              <div id="type" class="grid-cols-2 flex gap-2">
                <div
                  id="circle_type"
                  class="w-5 h-5 rounded-full bg-white my-auto"
                ></div>
                <div id="name_type" class="text-white my-auto w-max">
                  Bussiness
                </div>
              </div>
              <div id="date" class="text-white text-[0.7em] flex items-center uppercase my-auto mt-[0.5em] md:text-base md:normal-case md:mt-0">12 Desember 2023</div>
              <div id="total" class="grid-cols-2 flex items-center">
                <h4 class="text-white pr-1">Rp30.000</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
              </div>
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center my-96">
              <div id="type" class="grid-cols-2 flex gap-2">
                <div
                  id="circle_type"
                  class="w-5 h-5 rounded-full bg-white my-auto"
                ></div>
                <div id="name_type" class="text-white my-auto w-max">
                  Bussiness
                </div>
              </div>
              <div id="date" class="text-white text-[0.7em] flex items-center uppercase my-auto mt-[0.5em] md:text-base md:normal-case md:mt-0">12 Desember 2023</div>
              <div id="total" class="grid-cols-2 flex items-center">
                <h4 class="text-white pr-1">Rp30.000</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
              </div>
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
              <div id="type" class="grid-cols-2 flex gap-2">
                <div
                  id="circle_type"
                  class="w-5 h-5 rounded-full bg-white my-auto"
                ></div>
                <div id="name_type" class="text-white my-auto w-max">
                  Bussiness
                </div>
              </div>
              <div id="date" class="text-white text-[0.7em] flex items-center uppercase my-auto mt-[0.5em] md:text-base md:normal-case md:mt-0">12 Desember 2023</div>
              <div id="total" class="grid-cols-2 flex items-center">
                <h4 class="text-white pr-1">Rp30.000</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>

    <script id="for_line_months">
      let progressMonths = document.querySelector("#line_months");
      let progressValue = 0;
      let progressEndValue = 65;
      let speed = 3000;

      let progress = setInterval(() => {
        progressValue++;

        progressMonths.style.background = `conic-gradient(
          #346FB0 ${progressValue * 4}deg,
          #48B5D6 ${progressValue * 3.6}deg
        )`;
        if (progressValue == progressEndValue) {
          clearInterval(progress);
        }
      });
    </script>

    <script id="for_line_weeks">
      let progressWeeks = document.querySelector("#line_weeks");
      let ProgressValue = 0;
      let ProgressEndValue = 75;
      let Speed = 3000;

      let Progress = setInterval(() => {
        ProgressValue++;

        progressWeeks.style.background = `conic-gradient(
          #346FB0 ${ProgressValue * 3.5}deg,
          #48B5D6 ${ProgressValue * 3.5}deg
        )`;
        if (ProgressValue == ProgressEndValue) {
          clearInterval(Progress);
        }
      });
    </script>
    <!-- AOS JS -->
    <script>
      AOS.init();
    </script>
    <!-- Tailwind Elements -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  </body>
</html>