<?php
include 'Conf/connect.php';
session_start();

// jika session id kosong maka di arahkan ke halaman login
if ($_SESSION['id'] == "") {
  header("location:Gateaway/login.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- icon title -->
  <link rel="apple-touch-icon" type="image/png" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/svg" sizes="76x76" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/svg" sizes="120x120" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/svg" sizes="152x152" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/svg" href="img/iconLogo.svg" sizes="60x60" />
  <link rel="icon" type="image/png" href="img/iconLogo.svg" />
  <link rel="icon" type="image/png" href="img/iconLogo.svg" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/iconLogo.svg" sizes="192x192" />
  <link rel="icon" type="image/png" href="img/iconLogo.svg" sizes="16x16" />

  <!-- aosJS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  <!-- daisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />

  <!-- Tailwind CSS -->
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

  <!-- style css -->
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      scroll-behavior: smooth 5000s;
    }

    ::-webkit-scrollbar {
      width: 5px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f100;
    }

    ::-webkit-scrollbar-thumb {
      background: rgb(137, 137, 137);
      border-radius: 5px;

    }

    ::-webkit-scrollbar-thumb:hover {
      background: rgb(129, 129, 129);
    }
  </style>
  <title>Fortune - Welcome to the your finance</title>
</head>

<body class="">

  <div id="nav_float" class="z-10 fixed w-full bottom-5">
    <div class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl shadow-md" id="popUp_chat">
      <a href="homePage.html" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
        <img src="img/home.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="statistic/AccountAnalyst.html" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="img/Vector.svg" alt="" class="w-6 my-auto" />
      </a>
      <label for="save_modal" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="img/add.svg" alt="" class="w-max" />
      </label>
      <a href="" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="img/dollar.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="user/profile.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="img/profile.svg" alt="" class="w-6 my-auto" />
      </a>
    </div>
  </div>

  <div class="max-w-full h-max relative bg-gradient-to-t to-[#2E3462] from-[#292E53]/100">
    <div id="content">
      <!-- header -->
      <div id="header" class="w-full grid-cols-3 flex justify-between p-20 pt-14 z-50">
        <div id="menu_aside" class="my-auto">
          <button type="button" class="btn border-none hover:bg-transparent btn-circle" data-drawer-backdrop="false" data-drawer-target="drawer-left-example" data-drawer-show="drawer-left-example" data-drawer-placement="left" aria-controls="drawer-left-example">
            <img src="img/menu.svg" alt="" class="w-11 sm:w-12 left-0" />
          </button>
          <div id="drawer-left-example" class="dark:bg-opacity-100 fixed top-0 left-0 z-50 p-4 overflow-y-auto transition-transform duration-500 -translate-x-full w-full h-full bg-gradient-to-t from-cyan-800 to-[#333757] filter backdrop-blur-[5rem]" tabindex="-1" aria-labelledby="drawer-left-label">
            <div class="w-full h-full flex justify-center">
              <button type="button" class="outline-none absolute right-14 top-10" data-drawer-hide="drawer-left-example" aria-controls="drawer-left-example">
                <img src="img/close.svg" alt="" class="w-9" />
              </button>
              <ul class="h-max w-max my-[20rem] mx-auto md:my-[20rem] md:mx-auto gap-4">
                <li class="text-center flex">
                  <img src="img/Iconsax/Linear/home3.svg" alt="" class="my-auto w-10 pr-2" />
                  <a href="#" class="dark:text-white text-white font-bold md:text-4xl text-2xl">Home</a>
                </li>
                <li class="text-center pt-5 flex">
                  <img src="img/abouti.svg" alt="" class="my-auto w-10 pr-3" />
                  <a href="#" class="text-white font-bold text-2xl md:text-4xl">About</a>
                </li>
                <li class="text-center py-5 flex">
                  <img src="img/Iconsax/Bold/profile2user.svg" alt="" class="my-auto w-11 pr-3" />
                  <a href="#" class="text-white font-bold text-2xl md:text-4xl">Contact</a>
                </li>
                <li class="text-center pb-5 flex">
                  <img src="img/Iconsax/Linear/setting2.svg" alt="" class="my-auto w-11 pr-3" />
                  <a href="#" class="text-white font-bold text-2xl md:text-4xl">Settings</a>
                </li>
                <li class="text-center flex w-40">
                  <img src="img/profile.svg" alt="" class="w-12 my-auto pr-3" />

                  <a href="#" class="text-white font-bold text-2xl md:text-4xl"><?= $_SESSION['Username'] ?></a>

                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="title" class="w-max m-auto text-white md:flex md:items-center md:gap-2">
          <img src="img/logo.svg" alt="" class="w-14 absolute opacity-0 md:relative md:opacity-100">
          <h1 class="font-bold text-3xl md:text-4xl">
            Fortune
          </h1>
        </div>
        <!-- profile -->
        <div id="profile" class="my-auto">
          <button class="btn border-none hover:bg-transparent btn-circle bg-transparent" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
            <img src="img/profile.svg" alt="" class="mx-auto my-auto p-0 border-none bg-transparent w-10" />
          </button>
          <ul id="dropdown" aria-labelledby="dropdownDefaultButton" class="bg-gradient-to-t from-cyan-700/75 to-[#444A85] bg-opacity-50 border-white ease-in-out hidden border border-opacity-10 shadow-lg text-white m-0 gap-5 rounded-xl md:w-44 w-28 z-40">
            <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
              <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
                Dashboard
              </a>
            </li>
            <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
              <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
                About me
              </a>
            </li>
            <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
              <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
                Finance
              </a>
            </li>
            <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
              <a href="Conf/LogOut.php" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
                Log Out
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- main -->
      <div id="main_content" class="grid-rows-5 sm:grid-cols-2 sm:flex sm:gap-56 mx-auto w-max sm:mt-20 h-screen">

        <div id="responsive_mode_cols1" class="">

          <!-- card your_balance -->
          <div id="your_balance" class="w-full md:pb-20 py-5">
            <div id="card" class="bg-[url('img/bg_card.jpg')] bg-cover rounded-2xl md:scale-150 md: w-[20rem] h-[12.3rem] md:h-[12.5rem] mx-auto border border-white border-opacity-30 shadow-lg">
              <!-- overlay_card -->
              <div id="overlay_card" class="w-full h-full filter backdrop-opacity-20 rounded-2xl grid-rows-3 mx-auto">
                <!-- upper_Card -->
                <div id="upperCard" class="grid-cols-2 flex justify-between px-5 pt-5">
                  <h1 class="text-white font-semibold text-2xl">
                    Your Balance
                  </h1>
                  <img src="img/mastercard.svg" alt="" />
                </div>

                <!-- middle_Card -->
                <div id="middleCard" class="px-5 pt-6 pb-[3rem] my-auto w-max">
                  <h1 class="text-white text-[1.3rem] font-medium">
                    <?php
                    // Get Money From Wallet Based on User's ID
                    $result_money = mysqli_query($conn, "SELECT Money FROM Wallet WHERE Email = (SELECT Email FROM User WHERE Id = '{$_SESSION['id']}')");
                    $row = mysqli_fetch_assoc($result_money);
                    echo $row["Money"];
                    ?>
                  </h1>
                </div>

                <!-- under_Card -->
                <div id="underCard" class="flex px-5 justify-between pb-5">
                  <img src="img/visa.svg" alt="" />
                  <h1 class="text-white">1234 5678 9012 3456</h1>
                </div>
              </div>
            </div>
          </div>

          <!-- income & Expend -->
          <div id="incomeExpend" class="grid-cols-2 flex mx-auto w-96 justify-evenly md:scale-125">
            <div id="income" class="text-white w-40 mt-5 flex bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 rounded-xl shadow-md">
              <div class="w-max mx-auto flex py-3">
                <img src="img/income.svg" alt="" class="" />
                <div class="grid-rows-2 pl-2">
                  <h3 class="font-semibold text-lg">Income</h3>
                  <h3 class="text-sm">
                    Rp.
                    <?php
                    // Get Money From Wallet Based on User's ID
                    $result_income = mysqli_query($conn, "SELECT SUM(Amount) AS Total_Income FROM History WHERE Type = 'Income' AND Id_Wallet = '{$_SESSION['id']}'");
                    $row = mysqli_fetch_assoc($result_income);
                    echo $row["Total_Income"];
                    ?>
                  </h3>
                </div>
              </div>
            </div>
            <div id="expend" class="text-white w-40 mt-5 flex bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 rounded-xl shadow-md">
              <div class="w-max mx-auto flex py-3">
                <img src="img/expend.svg" alt="" class="" />
                <div class="grid-rows-2 pl-2">
                  <h3 class="font-semibold text-lg">Expend</h3>
                  <h3 class="text-sm">
                    Rp.
                    <?php
                    // Get Money From Wallet Based on User's ID
                    $result_income = mysqli_query($conn, "SELECT SUM(Amount) AS Total_Income FROM History WHERE Type = 'Expense' AND Id_Wallet = '{$_SESSION['id']}'");
                    $row = mysqli_fetch_assoc($result_income);
                    echo $row["Total_Income"];
                    ?>
                  </h3>
                </div>
              </div>
            </div>
          </div>

          <!-- navbar_choice -->
          <div id="navbar_choice" class="flex grid-cols-4 gap-4 md:scale-110 mx-auto w-max my-5 md:pt-5">
            <div id="guidebook" class="w-14 h-14 border-opacity-20 border-white border bg-gradient-to-t to-[#3D22A8] from-[#4e4891] bg-opacity-50 p-4 rounded-full">
              <img src="img/guidebook.svg" alt="" class="w-5 m-auto" />
            </div>
            <div id="input" class="w-14 h-14 border-opacity-20 border-white border bg-gradient-to-t to-[#3D22A8] from-[#4e4891] bg-opacity-50 p-3 rounded-full">
              <img src="img/input.svg" alt="" class="w-20 m-auto" />
            </div>
            <div id="history" class="w-14 h-14 border-opacity-20 border-white border bg-gradient-to-t to-[#3D22A8] from-[#4e4891] bg-opacity-50 p-3 rounded-full">
              <img src="img/history.svg" alt="" class="w-20 m-auto" />
            </div>
            <div id="FormMoney" class="w-14 h-14 border-opacity-20 border-white border bg-gradient-to-t to-[#3D22A8] from-[#4e4891] bg-opacity-50 p-3 rounded-full">
              <img src="img/formMoney.svg" alt="" class="w-5 m-auto" />
            </div>
          </div>

        </div>
        <div id="responsive_mode_cols2" class="">
          <!-- carousel -->
          <div id="carousel" data-carousel="slide" class="relative w-[28rem] md:scale-125 h-[14rem] rounded-lg overflow-hidden md:h-[14.5rem] object-cover object-center mx-auto">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <div class="w-full h-full bg-white">
                <img src="img/pexels-aleksei-pribÃµlovski-12696950.jpg" alt="" />
              </div>
            </div>
            <!-- Item 2 -->
            <div class="duration-700 ease-in-out h-full w-full rounded-lg" data-carousel-item>
              <div class="w-full h-full bg-white">
                <img src="img/pexels-creative-vix-9754.jpg" alt="" />
              </div>
            </div>
            <!-- Item 3 -->
            <div class="duration-700 ease-in-out h-full w-full rounded-lg" data-carousel-item>
              <div class="w-full h-full bg-white">
                <img src="img/pexels-liam-gant-1414467.jpg" alt="" />
              </div>
            </div>
            <!-- Item 4 -->
            <div class="duration-700 ease-in-out h-full w-full rounded-lg" data-carousel-item>
              <div class="w-full h-full bg-white">
                <img src="img/pexels-michael-giugliano-14456691.jpg" alt="" class="object-cover" />
              </div>
            </div>
          </div>

          <!-- transaction -->
          <div id="transaction" class="grid-rows-2 my-10 md:my-14 mb-24 w-[27rem] mx-auto">
            <div id="title" class="grid-cols-2 flex justify-between z-50">
              <h1 class="ml-7 font-semibold text-2xl text-white">
                Transaction
              </h1>
              <a href="#" class="mr-7 font-semibold text-lg text-white opacity-40">More</a>
            </div>
            <div id="content_transaction" class="grid-rows-5 w-full mx-auto h-64 relative overflow-y-scroll my-5 rounded-xl shadow-inner">
              <!-- <div class="fixed z-30 w-[27rem] overflow-hidden h-14 bg-gradient-to-t from-[#2E3462]/0 to-[#2E3462] rounded-tl-xl rounded-tr-xl"></div> -->


              <?php
              // Mendapatkan bulan dan tahun saat ini
              $currentMonth = date('m');
              $currentYear = date('Y');

              // Query untuk mengambil data dari tabel History berdasarkan ID User dan filter bulan dan tahun
              $query = "SELECT * FROM history WHERE Id_Wallet IN (SELECT Id_Wallet FROM Wallet WHERE Email = (SELECT Email FROM User WHERE Id = '{$_SESSION['id']}')) AND MONTH(Date) = $currentMonth AND YEAR(Date) = $currentYear ORDER BY Id_History DESC";
              $result = mysqli_query($conn, $query);

              // Memeriksa jumlah data yang ditemukan
              $numRows = mysqli_num_rows($result);

              // Jika data kosong, tampilkan pesan "Kosong"
              if ($numRows === 0) { ?>
                <!-- isi di sini -->
                <div class="w-full border border-white/20 h-full flex absolute rounded-xl">
                  <div id="iconAdd" class="m-auto font-bold text-white/40">
                    <img src="img/empty.svg" alt="" class="mx-auto w-12 opacity-40">
                    <p>Data is Empty</p>
                  </div>
                </div>
                <?php
              } else {
                // Jika terdapat data, lakukan looping untuk menampilkan data
                while ($row = mysqli_fetch_assoc($result)) {
                  // Mengakses data yang diinginkan
                  $idHistory = $row['Id_History'];
                  $title = $row['Title'];
                  $amount = $row['Amount'];
                  $description = $row['Description'];
                  $date = $row['Date'];
                  $idBudget = $row['Id_Budget'];
                ?>

                  <div id="item_transaction" class="flex group mb-5 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 hover:bg-white/90 hover:transition-all hover:duration-300 hover:ease-in-out rounded-xl">
                    <div class="p-4 relative">
                      <img src="img/food.svg" alt="" class="w-14 my-auto" />
                      <div class="cursor-pointer">
                        <img src="img/pen.svg" alt="" class="invisible absolute top-6 group-hover:visible group-hover:mx-auto w-6 left-36">
                        <p class="invisible absolute top-6 group-hover:visible group-hover:mx-auto w-40 text-[#2F3462] left-[] font-bold">Edit History</p>
                      </div>
                    </div>
                    <div class="text-white my-auto flex justify-between w-full h-full">
                      <div>
                        <h1 class="font-bold text-xl"><?php echo $title ?></h1>
                        <p><?php echo $date ?></p>
                      </div>
                      <div class="mr-4 my-auto">Rp.<?php echo $amount ?></div>
                    </div>
                  </div>


              <?php
                }
              }
              ?>


              <!-- <div id="item_transaction" class="grid-cols-2 flex mb-5 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 rounded-xl">
                <div class="p-4">
                  <img src="img/food.svg" alt="" class="w-14 my-auto" />
                </div>
                <div class="text-white my-auto flex justify-between w-full h-full">
                  <div>
                    <h1 class="font-bold text-xl">Mealpy Food</h1>
                    <p>12 Desember 2022</p>
                  </div>
                  <div class="mr-4 my-auto">Rp50.000</div>
                </div>
              </div> -->


            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <div id="footer" class="grid-rows-5 md:grid-cols-2 mx-auto  md:flex md:justify-between md:px-20 md:pb-5 mt-24 md:mt-0">
        <div id="footer_sosmed" class="md:order-last md:my-auto">
          <div id="logoTitle" class="flex sm:w-max h-28 mx-auto w-max md:my-auto md:mx-auto md:h-max">
            <img src="img/logo.svg" alt="" class="sm:w-16 mr-2 w-16" />
            <h2 class="text-white font-bold w-max sm:text-3xl my-auto text-3xl">
              Fortune
            </h2>
          </div>
          <div id="social_media" class="w-max mx-auto md:my-auto md:mx-auto md:pt-5">
            <div class="flex mx-auto w-max">
              <img src="img/Theinstragram.svg" alt="" class="w-6" />
              <img src="img/Vector-1.svg" alt="" class="mx-3 w-6" />
              <img src="img/Vector-2.svg" alt="" class="w-6" />
            </div>
            <span class="block text-white py-3 text-opacity-50 text-sm">©Copyright Fortune 2023</span>
          </div>
        </div>

        <div id="footer_infoUs" class="md:max-w-md md:my-auto md:order-first pl-5 mt-10 md:pl-0">
          <div id="contact" class="grid-rows-3 text-white pt-5 md:pb-0 md:pt-0">
            <p>Contact:</p>
            <p>unknown@gmail.com</p>
            <p>081XXXXXX</p>
          </div>
          <div id="address" class="grid-rows-2 text-white pt-5 pb-10 md:pb-0 md:pt-0">
            <p>Address:</p>
            <p>Telkom University,Bandung,Indonesia</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <input type="checkbox" id="save_modal" class="modal-toggle" />
  <div class="modal">
    <div class="modal-box w-[25rem] md:w-[50rem] bg-[#2E3462]/70  border border-white border-opacity-20 filter backdrop-blur-lg text-white">
      <h3 class="font-bold text-lg">Please choice your destination!</h3>
      <p class="py-4">There's </p>
      <label for="save_modal" class="absolute top-5 right-5 cursor-pointer active:scale-90 active:transition">
        <img src="img/close.svg" alt="" class="w-5">
      </label>
      <div class="modal-action w-full">
        <a href="IO/income.html" class="btn bg-blue-600 text-white w-1/2 border-none">Income</a>
        <a href="IO/Expends.html" class="btn bg-blue-600 text-white w-1/2 border-none">Expends</a>
      </div>
    </div>
  </div>

  <!-- aosJS -->
  <script>
    AOS.init();
  </script>
  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>