<?php
include '../Conf/connect.php';
session_start();

// jika session id kosong maka di arahkan ke halaman login
if ($_SESSION['id'] == "") {
  header("location:../Gateaway/login.html");
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
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" sizes="60x60" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

  <!-- aosJS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- daisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />

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
  <title>Fortune - Profile Account</title>
</head>

<body class="bg-gradient-to-t to-[#2E3462] from-[#292E53]/100 h-full">

  <!-- Nav Bar -->
  <div id="nav_float" class="z-10 fixed w-full bottom-0">
    <div class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md" id="popUp_chat">
      <a href="../Index.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/home.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="../statistic/AccountAnalyst.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
      </a>
      <label for="save_modal" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/add.svg" alt="" class="w-max" />
      </label>
      <a href="../Stat/AccountAnalyst.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
        <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
      </a>
    </div>
  </div>
  <!-- Nav Bar -->

  <!-- Modals -->
  <input type="checkbox" id="save_modal" class="modal-toggle" />
  <div class="modal">
    <div class="modal-box w-[25rem] md:w-[50rem] bg-[#2E3462]/70  border border-white border-opacity-20 filter backdrop-blur-lg text-white">
      <h3 class="font-bold text-lg">Please choice your destination!</h3>
      <p class="py-4">There's </p>
      <label for="save_modal" class="absolute top-5 right-5 cursor-pointer active:scale-90 active:transition">
        <img src="../img/close.svg" alt="" class="w-5">
      </label>
      <div class="modal-action w-full">
        <a href="../IO/income.html" class="btn bg-blue-600 text-white w-1/2 border-none">Income</a>
        <a href="../IO/income.html" class="btn bg-blue-600 text-white w-1/2 border-none">Expends</a>
      </div>
    </div>
  </div>
  <!-- Modals END -->

  <div class="container max-w-full h-full py-5">
    <div id="header_profile" class="grid-rows-2 mx-auto w-max mt-10 md:scale-125">
      <div id="photo_profile" class="mx-auto w-max">
        <img src="../img/theProfile.svg" alt="" class="w-40">
      </div>
      <div id="name" class="text-white mx-auto w-max">
        <p class="font-bold text-2xl"><?= $_SESSION['Username'] ?></p>
      </div>
    </div>

    <div id="content_profile" class="mt-5 mb-1 md:flex w-max md:scale-125 gap-10 mx-auto items-center h-[32rem]">
      <div id="cardAndEarning" class="w-80 h-max mx-auto bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10  pt-5 rounded-xl border-white border-2 border-opacity-10">
        <div id="title" class="grid-cols-2 flex justify-between px-5">
          <p class="text-white font-semibold text-lg">Card & Earning</p>
          <img src="../img/more.svg" alt="">
        </div>
        <div>
          <div id="card" class="bg-[url('../img/bg_card.jpg')] scale-[0.8] bg-cover rounded-2xl md:w-80 w-[19rem] mx-auto h-[12.3rem] md:h-[12.5rem] border border-white  border-opacity-30 shadow-lg">
            <!-- overlay_card -->
            <div id="overlay_card" class="w-full h-full filter backdrop-opacity-20 rounded-2xl grid-rows-3 ">
              <!-- upper_Card -->
              <div id="upperCard" class="grid-cols-2 flex justify-between px-5 pt-5">
                <h1 class="text-white font-semibold text-2xl">
                  Your Balance
                </h1>
                <img src="../img/mastercard.svg" alt="" />
              </div>

              <!-- middle_Card -->
              <div id="middleCard" class="px-5 pt-6 pb-[3rem] my-auto w-max">
                <h1 class="text-white text-[1.3rem] font-medium">
                  Rp.
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
                <img src="../img/visa.svg" alt="" />
                <h1 class="text-white">1234 5678 9012 3456</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="settings" class="w-80 h-64 my-5 mx-auto bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10  pt-5 rounded-xl border-white border-2 border-opacity-10">
        <div id="title">
          <h3 class="text-white font-semibold text-lg px-5">Settings</h3>
        </div>
        <div id="content_settings" class="grid-rows-3 px-5 pb-5 pt-5">
          <div id="documentAndreferences" class="flex pt-3">
            <img src="../img/documents.svg" alt="">
            <p class="text-white my-auto pl-1">Documents and References</p>
          </div>
          <div id="security" class="flex py-4">
            <img src="../img/secur.svg" alt="" class="w-8">
            <p class="text-white my-auto pl-1">Security</p>
          </div>
          <div id="accountSettings" class="flex">
            <img src="../img/gear.svg" alt="" class="w-9">
            <p class="text-white my-auto pl-1">Security</p>
          </div>
        </div>
      </div>
    </div>

    <div id="footer" class="grid-rows-5 md:grid-cols-2 mx-auto scale-95  md:flex md:justify-between md:px-20 md:pb-5 mt-24 md:mt-0">
      <div id="footer_sosmed" class="md:order-last md:my-auto">
        <div id="logoTitle" class="flex sm:w-max h-28 mx-auto w-max md:my-auto md:mx-auto md:h-max">
          <img src="../img/logo.svg" alt="" class="sm:w-16 mr-2 w-16" />
          <h2 class="text-white font-bold w-max sm:text-3xl my-auto text-3xl">
            Fortune
          </h2>
        </div>
        <div id="social_media" class="w-max mx-auto md:my-auto md:mx-auto md:pt-5">
          <div class="flex mx-auto w-max">
            <img src="../img/Theinstragram.svg" alt="" class="w-6" />
            <img src="../img/Vector-1.svg" alt="" class="mx-3 w-6" />
            <img src="../img/Vector-2.svg" alt="" class="w-6" />
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
  <!-- aosJS init -->
  <script>
    AOS.init();
  </script>
  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>