<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="Anil z" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- SITE TITLE -->
  <title>Kinchitkaram Trust</title>
  <script>
    var sc_project = 11981757;
    var sc_invisible = 1;
    var sc_security = "35d2687e";
    var sc_https = 1;
  </script>
  <script src="../../../www.statcounter.com/counter/counter.js" async></script>
  <style>
    .page-title {
      text-align: center;
      font-size: 60px;
      line-height: 1.35;
      color: #000 !important;
    }

    .breadcrumb-nav {
      margin-top: 20px;
      line-height: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .breadcrumb-nav li {
      margin: 0 6px;
      font-size: 20px;
      font-weight: 500;
      list-style-type: none;
    }

    section {
      padding: 50px 0;
      position: relative;
      width: 100%;
      z-index: 1;
    }

    .modal-dialog {
      top: 11%;
    }

    .modal-content {
      background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
    }

    .horo-col {
      background: #f0f0f0;
      padding: 10px;
    }

    .table td {
      border: solid 1px #000 !important;
      height: 80px !important;
      text-align: center;
      vertical-align: middle !important;
    }

    .type-category {
      color: #bb1b1b !important;
    }

    .type-category:hover {
      color: #ff8701 !important;
    }

    /* end */
  </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<body>


  <!-- header -->
  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">
    <div class="container">
      <h2 class="page-title">Edit Horoscope</h2>
      <ul class="breadcrumb-nav">
        <li><a href="index">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li> Horoscope</li>
        <li><i class="fas fa-angle-right"></i></li>
        <li> Edit Horoscope</li>
      </ul>
    </div>
  </section>
  <section class="mem-sec p-3 mt-3 mb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="mb-3">
            <ul class="p-3">
              <li>Click on the right side drop down box and Choose the correct number of the "Zodiac Rashi "</li>
              <li>Choose the correct number of the "Zodiac Amsam" you want for your horoscope.</li>
              <li>You can change this later if you change your mind.</li>
              <li>Click on the Submit that says "Submit Horoscope".</li>
            </ul>
          </div>

          <div class="row mb-5">
            <h2 class="text-center mb-4 type-category">RASI &amp; AMSAM SELECTION</h2>
            <div class="col-md-4 mb-2 eddd">
              <div class="horo">
                <form  method="post" name="horoscope" id="horoscope">
                <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                <input type="hidden" name="device_id" id="device_id" value="1">
                <table class="table" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                  <tbody>
                    <tr>
                      <td id="r12" width="25%">12</td>
                      <td id="r1" width="25%">1</td>
                      <td id="r2" width="25%">2</td>
                      <td id="r3" width="25%">3</td>
                    </tr>
                    <input type="hidden" id="rassi1" name="rassi1">
                    <input type="hidden" id="rassi2" name="rassi2">
                    <input type="hidden" id="rassi3" name="rassi3">
                    <input type="hidden" id="rassi4" name="rassi4">
                    <input type="hidden" id="rassi5" name="rassi5">
                    <input type="hidden" id="rassi6" name="rassi6">
                    <input type="hidden" id="rassi7" name="rassi7">
                    <input type="hidden" id="rassi8" name="rassi8">
                    <input type="hidden" id="rassi9" name="rassi9">
                    <input type="hidden" id="rassi10" name="rassi10">
                    <input type="hidden" id="rassi11" name="rassi11">
                    <input type="hidden" id="rassi12" name="rassi12">
                    <tr>
                      <td id="r11">11</td>
                      <td colspan="2" rowspan="2" align="center" style="vertical-align:middle;">
                        <h3 class="nomargin">RAASI</h3>&nbsp;
                      </td>
                      <td id="r4">4</td>
                    </tr>
                    <tr>
                      <td id="r10">10</td>
                      <td id="r5">5</td>
                    </tr>
                    <tr>
                      <td id="r9">9</td>
                      <td id="r8">8</td>
                      <td id="r7">7</td>
                      <td id="r6">6</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-3 horo-col mb-2">
              <h2 style="color: #9c0202;font-size: 19px;" class="mb-2">Choose Raasi Below</h2>
              <table class="tblLight" cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
                <tbody>
                  <tr>
                    <td>Suryan / Sun</td>
                    <td>
                      <select onchange="CycleHoroscope('txtRSooriyan','r','Sun', $(this).val());" name="txtRSooriyan" id="txtRSooriyan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Chandra / Moon</td>
                    <td><select onchange="CycleHoroscope('txtRChandhiran','r','Moo', $(this).val());" name="txtRChandhiran" id="txtRChandhiran">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Chovva / Mars</td>
                    <td><select onchange="CycleHoroscope('txtRSevvai','r','Mar',$(this).val());" name="txtRSevvai" id="txtRSevvai">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Budha / Mercury </td>
                    <td><select onchange="CycleHoroscope('txtRBudhan','r','Mer',$(this).val());" name="txtRBudhan" id="txtRBudhan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Guru / Jupiter</td>
                    <td><select onchange="CycleHoroscope('txtRGuru','r','Jup',$(this).val());" name="txtRGuru" id="txtRGuru">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Shukra / Venus </td>
                    <td><select onchange="CycleHoroscope('txtRSukkiran','r','Ven',$(this).val());" name="txtRSukkiran" id="txtRSukkiran">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Sani / Saturn </td>
                    <td><select onchange="CycleHoroscope('txtRSani','r','Sat',$(this).val());" name="txtRSani" id="txtRSani">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Sarppa / Raagu </td>
                    <td><select onchange="CycleHoroscope('txtRRaagu','r','Raa',$(this).val());" name="txtRRaagu" id="txtRRaagu">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Shikhi / Kethu </td>
                    <td><select onchange="CycleHoroscope('txtRKethu','r','Ket',$(this).val());" name="txtRKethu" id="txtRKethu">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Mandi / Gulikan</td>
                    <td><select onchange="CycleHoroscope('txtRGulikan','r','Gul',$(this).val());" name="txtRGulikan" id="txtRGulikan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Lagnam / Lagna</td>
                    <td><select onchange="CycleHoroscope('txtRLaknam','r','Lag',$(this).val());" name="txtRLaknam" id="txtRLaknam">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-4 mb-2 eddd">
              <div class="horo">
              </div>
              <table class="table" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                <tbody>
                  <tr>
                    <td id="a12" width="25%">12</td>
                    <td id="a1" width="25%">1</td>
                    <td id="a2" width="25%">2</td>
                    <td id="a3" width="25%">3</td>
                  </tr>
                    <input type="hidden" id="amsam1" name="amsam1">
                    <input type="hidden" id="amsam2" name="amsam2">
                    <input type="hidden" id="amsam3" name="amsam3">
                    <input type="hidden" id="amsam4" name="amsam4">
                    <input type="hidden" id="amsam5" name="amsam5">
                    <input type="hidden" id="amsam6" name="amsam6">
                    <input type="hidden" id="amsam7" name="amsam7">
                    <input type="hidden" id="amsam8" name="amsam8">
                    <input type="hidden" id="amsam9" name="amsam9">
                    <input type="hidden" id="amsam10" name="amsam10">
                    <input type="hidden" id="amsam11" name="amsam11">
                    <input type="hidden" id="amsam12" name="amsam12">
                  <tr>
                    <td id="a11">11</td>
                    <td colspan="2" rowspan="2" align="center" style="vertical-align:middle;">
                      <h3 class="nomargin">AMSAM</h3>&nbsp;
                    </td>
                    <td id="a4">4</td>
                  </tr>
                  <tr>
                    <td id="a10">10</td>
                    <td id="a5">5</td>
                  </tr>
                  <tr>
                    <td id="a9">9</td>
                    <td id="a8">8</td>
                    <td id="a7">7</td>
                    <td id="a6">6</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-2 col-md-6 mb-3 horo-col">
              <h2 style="color: #9c0202;font-size: 19px;" class="mb-2">Choose Amsam Below</h2>
              <table class="tblLight" cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
                <tbody>
                  <tr>
                    <td>Suryan / Sun</td>
                    <td><select onchange="CycleHoroscope1('txtRSooriyan','a','Sun',$(this).val());" name="txtRSooriyan" id="txtRSooriyan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Chandra / Moon</td>
                    <td><select onchange="CycleHoroscope1('txtRChandhiran','a','Moo',$(this).val());" name="txtRChandhiran" id="txtRChandhiran">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Chovva / Mars</td>
                    <td><select onchange="CycleHoroscope1('txtRSevvai','a','Mar',$(this).val());" name="txtRSevvai" id="txtRSevvai">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Budha / Mercury </td>
                    <td><select onchange="CycleHoroscope1('txtRBudhan','a','Mer',$(this).val());" name="txtRBudhan" id="txtRBudhan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Guru / Jupiter</td>
                    <td><select onchange="CycleHoroscope1('txtRGuru','a','Jup',$(this).val());" name="txtRGuru" id="txtRGuru">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Shukra / Venus </td>
                    <td><select onchange="CycleHoroscope1('txtRSukkiran','a','Ven',$(this).val());" name="txtRSukkiran" id="txtRSukkiran">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Sani / Saturn </td>
                    <td><select onchange="CycleHoroscope1('txtRSani','a','Sat',$(this).val());" name="txtRSani" id="txtRSani">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Sarppa / Raagu </td>
                    <td><select onchange="CycleHoroscope1('txtRRaagu','a','Raa',$(this).val());" name="txtRRaagu" id="txtRRaagu">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Shikhi / Kethu </td>
                    <td><select onchange="CycleHoroscope1('txtRKethu','a','Ket',$(this).val());" name="txtRKethu" id="txtRKethu">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Mandi / Gulikan</td>
                    <td><select onchange="CycleHoroscope1('txtRGulikan','a','Gul',$(this).val());" name="txtRGulikan" id="txtRGulikan">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Lagnam / Lagna</td>
                    <td><select onchange="CycleHoroscope1('txtRLaknam','a','Lag',$(this).val());" name="txtRLaknam" id="txtRLaknam">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <hr>
            <div class="col-lg-12 col-md-12 mt-3 mb-3 text-center">
              <button type="submit"  name="submit" onclick="HoroSchope()" class="horo-a" style="cursor: pointer;">SUBMIT HOROSCOPE</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <p class="text-white">Please click donate button to contribute <strong>Rs.1000/- </strong> for the present financial year. To send you any complimentary spiritual material in hard form that the Trust may give to members such as calendar, etc., courier charges of <strong>Rs.100/-</strong> will be added.</p>
          <div class="row">
            <div class="col-lg-12 col-md-6 ">
              <label class="text-white" for="exampleFormControlSelect1"> PREFERRED LANGUAGE FOR SPIRITUAL MATERIAL <span class="quform-required">*</span></label>
            </div>
            <div class="col-lg6 col-md-6">
              <select class="form-select" id="exampleFormControlSelect1" required>
                <option>Choose an Option</option>
                <option>Tamil</option>
                <option>English</option>
              </select>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="donar-details.php"><button type="button" class="btn btn-primary" style="background: red;
    border: none;">Save changes</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- END HEADER -->
  <!-- section starts -->


  <!-- section ends -->




  <!-- START FOOTER -->
  @include('include.footer')
  <!-- hitwebcounter Code START -->


  <!-- END FOOTER -->
  <div class="wats">
    <div class="wats2">
      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{env('MAIN_URL')}}public/assets/images/whatsapp.png"></a>
    </div>
  </div>
  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="{{env('MAIN_URL')}}public/assets/js/jquery-1.12.4.min.js"></script> -->
  <!-- jquery-ui js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery-ui.js"></script>
  <!-- popper min js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/popper.min.js"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="{{env('MAIN_URL')}}public/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- owl-carousel min js  -->
  <script src="{{env('MAIN_URL')}}public/assets/owlcarousel/js/owl.carousel.min.js"></script>
  <!-- magnific-popup min js  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/magnific-popup.min.js"></script>
  <!-- waypoints min js  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/waypoints.min.js"></script>
  <!-- parallax js  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/parallax.js"></script>
  <!-- jquery dd js  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.dd.min.js"></script>
  <!-- countdown js  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.countdown.min.js"></script>
  <!-- jquery.counterup.min js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.counterup.min.js"></script>
  <!-- jquery.parallax-scroll js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.parallax-scroll.js"></script>
  <!-- fit video  -->
  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.fitvids.js"></script>
  <!-- imagesloaded js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- isotope min js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/isotope.min.js"></script>
  <!-- cookie js -->
  <script src="{{env('MAIN_URL')}}public/assets/js/js.cookie.js"></script>

  <script src="{{env('MAIN_URL')}}public/assets/js/scripts.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  <script>
     $(function() {
      $('#horoscope').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      MyProfile()
    })
    // function CycleHoroscope(cellId, value, r, id) {
    //   var cellId = value + id;
    //   for (var i = 0; i < 12; i++) {
    //     var cellElement = document.getElementById(value + i.toString());
    //     if (cellElement) {
    //       var currentContent = cellElement.textContent.trim();
    //       cellElement.textContent = currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
    //         i : currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '');
    //         document.getElementById('rassi1').value = currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
    //         i : currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '');
    //     }
    //   }
    //   var cellElement = document.getElementById(cellId);
    //   if (cellElement) {
    //     var currentContent = cellElement.textContent.trim();
    //     var updatedContent = Number.isInteger(parseInt(currentContent)) ? r : (currentContent !== "" ? currentContent + '/' : "") + r;
    //     cellElement.textContent = updatedContent;
    //     document.getElementById('rassi1').value = updatedContent;
    //   }
    // }

    function CycleHoroscope(cellId, value, r, id) {
      var cellId = value + id;
      for (var i = 0; i <= 12; i++) {
        var cellElement = document.getElementById(value + i.toString());
        if (cellElement) {
          var currentContent = cellElement.textContent.trim();
          cellElement.textContent = currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
            i : currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '');

          document.getElementById('rassi' + i.toString()).value = currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
            i : currentContent.replace(new RegExp(r, 'g'), '').replace(/^\/+|\/+$/g, '');

        }
      }
      var cellElement = document.getElementById(cellId);
      if (cellElement) {
        var currentContent = cellElement.textContent.trim();
        var updatedContent = Number.isInteger(parseInt(currentContent)) ? r : (currentContent !== "" ? currentContent + '/' : "") + r;
        cellElement.textContent = updatedContent;
        document.getElementById('rassi' + id).value = updatedContent;
      }
    }


    function CycleHoroscope1(cellId, value, a, id) {
      var cellId = value + id;
      for (var i = 0; i <= 12; i++) {
        var cellElement = document.getElementById(value + i.toString());
        if (cellElement) {
          var currentContent = cellElement.textContent.trim();
          cellElement.textContent = currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
            i : currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '');

          document.getElementById('amsam' + i.toString()).value = currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
            i : currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '');

        }
      }
      var cellElement = document.getElementById(cellId);
      if (cellElement) {
        var currentContent = cellElement.textContent.trim();
        var updatedContent = Number.isInteger(parseInt(currentContent)) ? a : (currentContent !== "" ? currentContent + '/' : "") + a;
        cellElement.textContent = updatedContent;
        document.getElementById('amsam' + id).value = updatedContent;
      }
    }

    // function CycleHoroscope1(cellId, value, a, id) {
    //   var cellId = value + id;
    //   for (var i = 0; i < 12; i++) {
    //     var cellElement = document.getElementById(value + i.toString());
    //     if (cellElement) {
    //       var currentContent = cellElement.textContent.trim();
    //       cellElement.textContent = currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '') == "" ?
    //         i : currentContent.replace(new RegExp(a, 'g'), '').replace(/^\/+|\/+$/g, '');
    //     }
    //   }
    //   var cellElement = document.getElementById(cellId);
    //   if (cellElement) {
    //     var currentContent = cellElement.textContent.trim();
    //     var updatedContent = Number.isInteger(parseInt(currentContent)) ? a : (currentContent !== "" ? currentContent + '/' : "") + a;
    //     cellElement.textContent = updatedContent;
    //   }
    // }

    function HoroSchope() {
      var formdata = new FormData($('#horoscope')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}rasi-amsam",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {

            $.confirm({
              title: 'Success!',
              content: response['message'],
              type: 'green',
              typeAnimated: true,
              icon: 'fa fa-success',
              closeIcon: true,
              buttons: {
                tryAgain: {
                  text: 'OK',
                  btnClass: 'btn-green',
                  action: function() {
                    window.location.href = '/my-account';
                  }
                },
              }
            });

          }
          if (response['status'] == 401) {
            const obj = response['errors'];
            for (const fieldName in obj) {
              if (obj.hasOwnProperty(fieldName)) {
                $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
                  className: "error",
                  showDuration: 300,
                  autoHideDelay: 2000,
                })
                const inputField = $(`[id="${fieldName}"]`);
                inputField.focus();
                break;
              }
            }
          }
          if (response['status'] == 400) {
            $.confirm({
              title: 'Encountered an error!',
              content: response['message'],
              type: 'red',
              typeAnimated: true,
              icon: 'fa fa-warning',
              closeIcon: true,
              buttons: {
                tryAgain: {
                  text: 'OK',
                  btnClass: 'btn-red',
                  action: function() {}
                },
              }
            });
          }
          if (response['status'] == 500) {
            $.confirm({
              title: 'Encountered an error!',
              content: response['error'],
              type: 'red',
              typeAnimated: true,
              icon: 'fa fa-warning',
              closeIcon: true,
              buttons: {
                tryAgain: {
                  text: 'OK',
                  btnClass: 'btn-red',
                  action: function() {}
                },
              }
            });
          }
          if (response['status'] == 501) {
                    $.confirm({
                        title: 'error!',
                        content: 'Kindly login to proceed',
                        type: 'red',
                        typeAnimated: true,
                        icon: 'fa fa-warning',
                        closeIcon: false,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-red',
                                action: function() {
                                    sessionStorage.clear();
                                    deleteCookie('typeofuser');
                                    deleteCookie('token');
                                    deleteCookie('marital_acc');
                                    window.location.href = '/user-login';
                                }
                            },
                            // close: function() {
                            //     sessionStorage.clear();
                            //     deleteCookie('typeofuser');
                            //     deleteCookie('token');
                            //     deleteCookie('marital_acc');
                            //     window.location.href = '/user-login';
                            // }
                        }
                    });

                }
        },
        error: function(data) {
          console.log('Error:', data);
        },
        complete: function() {
          $('#submit_button').prop('disabled', false);
        }
      });
    }

    function MyProfile() {
      var formdata = new FormData();
      formdata.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
      formdata.append('device_id', '1');
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-profile-data",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            var userData = response['data'][0];
        
           $('#r1').text(userData['r1'] !== null ? userData['r1'] : '1');
           $('#r2').text(userData['r2'] !== null ? userData['r2'] : '2');
            $('#r3').text(userData['r3'] !== null ? userData['r3'] : '3');
            $('#r4').text(userData['r4'] !== null ? userData['r4'] : '4');
            $('#r5').text(userData['r5'] !== null ? userData['r5'] : '5');
            $('#r6').text(userData['r6'] !== null ? userData['r6'] : '6');
            $('#r7').text(userData['r7'] !== null ? userData['r7'] : '7');
            $('#r8').text(userData['r8'] !== null ? userData['r8'] : '8');
            $('#r9').text(userData['r9'] !== null ? userData['r9'] : '9');
            $('#r10').text(userData['r10'] !== null ? userData['r10'] : '10');
            $('#r11').text(userData['r11'] !== null ? userData['r11'] : '11');
            $('#r12').text(userData['r12'] !== null ? userData['r12'] : '12');

            $('#a1').text(userData['a1'] !== null ? userData['a1'] : '1');
            $('#a2').text(userData['a2'] !== null ? userData['a2'] : '2');
            $('#a3').text(userData['a3'] !== null ? userData['a3'] : '3');
            $('#a4').text(userData['a4'] !== null ? userData['a4'] : '4');
            $('#a5').text(userData['a5'] !== null ? userData['a5'] : '5');
            $('#a6').text(userData['a6'] !== null ? userData['a6'] : '6');
            $('#a7').text(userData['a7'] !== null ? userData['a7'] : '7');
            $('#a8').text(userData['a8'] !== null ? userData['a8'] : '8');
            $('#a9').text(userData['a9'] !== null ? userData['a9'] : '9');
            $('#a10').text(userData['a10'] !== null ? userData['a10'] : '10');
            $('#a11').text(userData['a11'] !== null ? userData['a11'] : '11');
            $('#a12').text(userData['a12'] !== null ? userData['a12'] : '12');

            $('#rassi1').val(userData['r1'] !== null ? userData['r1'] : '1');
           $('#rassi2').val(userData['r2'] !== null ? userData['r2'] : '2');
            $('#rassi3').val(userData['r3'] !== null ? userData['r3'] : '3');
            $('#rassi4').val(userData['r4'] !== null ? userData['r4'] : '4');
            $('#rassi5').val(userData['r5'] !== null ? userData['r5'] : '5');
            $('#rassi6').val(userData['r6'] !== null ? userData['r6'] : '6');
            $('#rassi7').val(userData['r7'] !== null ? userData['r7'] : '7');
            $('#rassi8').val(userData['r8'] !== null ? userData['r8'] : '8');
            $('#rassi9').val(userData['r9'] !== null ? userData['r9'] : '9');
            $('#rassi10').val(userData['r10'] !== null ? userData['r10'] : '10');
            $('#rassi11').val(userData['r11'] !== null ? userData['r11'] : '11');
            $('#rassi12').val(userData['r12'] !== null ? userData['r12'] : '12');
            
            $('#amsam1').val(userData['a1'] !== null ? userData['a1'] : '1');
            $('#amsam2').val(userData['a2'] !== null ? userData['a2'] : '2');
            $('#amsam3').val(userData['a3'] !== null ? userData['a3'] : '3');
            $('#amsam4').val(userData['a4'] !== null ? userData['a4'] : '4');
            $('#amsam5').val(userData['a5'] !== null ? userData['a5'] : '5');
            $('#amsam6').val(userData['a6'] !== null ? userData['a6'] : '6');
            $('#amsam7').val(userData['a7'] !== null ? userData['a7'] : '7');
            $('#amsam8').val(userData['a8'] !== null ? userData['a8'] : '8');
            $('#amsam9').val(userData['a9'] !== null ? userData['a9'] : '9');
            $('#amsam10').val(userData['a10'] !== null ? userData['a10'] : '10');
            $('#amsam11').val(userData['a11'] !== null ? userData['a11'] : '11');
            $('#amsam12').val(userData['a12'] !== null ? userData['a12'] : '12');

            // $.confirm({
            //   title: 'Success!',
            //   content: response['message'],
            //   type: 'green',
            //   typeAnimated: true,
            //   icon: 'fa fa-success',
            //   closeIcon: true,
            //   buttons: {
            //     tryAgain: {
            //       text: 'OK',
            //       btnClass: 'btn-green',
            //       action: function() {
            //         window.location.reload();
            //       }
            //     },
            //   }
            // });

          }
          if (response['status'] == 401) {
            const obj = response['errors'];
            for (const fieldName in obj) {
              if (obj.hasOwnProperty(fieldName)) {
                $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
                  className: "error",
                  showDuration: 300,
                  autoHideDelay: 2000,
                })
                const inputField = $(`[id="${fieldName}"]`);
                inputField.focus();
                break;
              }
            }
          }
          if (response['status'] == 400) {
            $.confirm({
              title: 'Encountered an error!',
              content: response['message'],
              type: 'red',
              typeAnimated: true,
              icon: 'fa fa-warning',
              closeIcon: true,
              buttons: {
                tryAgain: {
                  text: 'OK',
                  btnClass: 'btn-red',
                  action: function() {}
                },
              }
            });
          }
          if (response['status'] == 500) {
            $.confirm({
              title: 'Encountered an error!',
              content: response['error'],
              type: 'red',
              typeAnimated: true,
              icon: 'fa fa-warning',
              closeIcon: true,
              buttons: {
                tryAgain: {
                  text: 'OK',
                  btnClass: 'btn-red',
                  action: function() {}
                },
              }
            });
          }
          if (response['status'] == 501) {
                    $.confirm({
                        title: 'error!',
                        content: 'Kindly login to proceed',
                        type: 'red',
                        typeAnimated: true,
                        icon: 'fa fa-warning',
                        closeIcon: false,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-red',
                                action: function() {
                                    sessionStorage.clear();
                                    deleteCookie('typeofuser');
                                    deleteCookie('token');
                                    deleteCookie('marital_acc');
                                    window.location.href = '/user-login';
                                }
                            },
                            // close: function() {
                            //     sessionStorage.clear();
                            //     deleteCookie('typeofuser');
                            //     deleteCookie('token');
                            //     deleteCookie('marital_acc');
                            //     window.location.href = '/user-login';
                            // }
                        }
                    });

                }
        },
        error: function(data) {
          console.log('Error:', data);
        },
        complete: function() {
          $('#submit_button').prop('disabled', false);
        }
      });
    }
  </script>
</body>

</html>