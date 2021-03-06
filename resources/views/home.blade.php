<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5d9332551.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta charset="UTF-8">
</head>

<body>

    <!-- HEADER -->

    <div class="header">
        <div class="header-container">
            <div class="navbar">
                <div class="logo"><a href="home"><i class="fas fa-store-alt"></i></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="sellers">Commercants</a></li>
                        <li><a href="products">Produits</a></li>
                    </ul>
                </div>
            </div>

            <div class="header-content">
                <div class="text">
                    <h2>monMarché.drindrin</h2>
                    <h1>Design</h1>
                    <br><br>
                    <div class="description">
                        En commandant sur monmarche.DrinDrin.fr vous soutenez un petit producteur, un jeune commerçant,
                        un artisan des métiers de bouche... ou pas
                        <br><br>
                        Tous ont un point commun : une forte envie de vous faire partager leur amour du bon, du
                        raisonné, voire du bio
                        <br><br>
                        Comment : en vous apportant leurs produits au plus proche de chez vous
                        <br>
                    </div>
                    <br><br><br>
                    <a href="#find-your-market" class="btn-rounded">Trouver mon Marché</a>
                </div>
                <div class="banner"><img src="{{ asset('img/on-the-way.svg') }}" alt=""></div>
            </div>
        </div>
    </div>
    <br><br>

    <!-- FIND YOUR ZONE -->

    <a name="find-your-market"></a>
    <div class="find-yout-zone">
        <div class="titre">
            <h1>Trouver Mon Marché</h1>
        </div>
        <br><br>
        <div class="map_image">
            <svg xmlns="http://www.w3.org/2000/svg" width="1030" height="740" version="1.0">
                <a href="16e">
                    <path id="path35778" class="arrondissement arr16"
                        d="M 190.14348,559.79467 L 183.46807,557.5 L 154.33273,553.7406 L 120.49814,520.84587 L 115.79889,484.19173 L 129.89664,465.39474 L 152.45303,467.27444 L 158.09213,453.17669 L 187.22746,391.14662 L 219.18235,329.11654 L 243.61844,281.18421 L 273.69363,248.28947 L 275.53165,243.08175 L 276.51318,242.65038 L 338.54325,268.96617 L 347.94175,289.64286 L 362.03949,328.17669 L 370.49814,345.09399 L 370.17877,345.41828 L 345.1222,349.79323 L 317.86656,381.74812 L 273.69363,430.6203 C 273.69363,430.6203 216.33967,519.18768 189.68883,559.70365"
                        sodipodi:nodetypes="ccccccccccccccccccccccc" inkscape:label="#path35778" />
                </a>
                <a href="9e">
                    <path id="path35828" class="arrondissement arr09"
                        d="M 500.66732,298.1015 L 490.79889,281.18421 L 495.49814,260.50752 L 495.02821,192.83835 L 514.29513,184.3797 L 554.70867,200.35714 L 606.4004,185.31955 L 608.20316,185.17573 L 608.2801,185.31955 L 610.62973,291.99248 L 564.10716,282.12406 L 500.66732,298.1015 z "
                        sodipodi:nodetypes="cccccccccccc" inkscape:label="#path35828" />
                </a>
                <a href="18e">
                    <path id="path35816" class="arrondissement arr18"
                        d="M 704.82561,45.281956 L 709.78386,106.37218 L 680.64852,175.92105 L 679.70867,177.80075 L 645.87408,178.7406 L 608.12622,185.03191 L 606.4004,185.31955 L 554.70867,200.35714 L 514.29513,184.3797 L 494.08837,193.30827 L 494.55829,186.2594 L 486.09965,163.70301 L 501.58429,53.922222 L 510.53574,53.740602 L 572.56581,52.800753 L 642.11468,45.281956 L 704.82561,45.281956 z "
                        sodipodi:nodetypes="ccccccccccccccccc" inkscape:label="#path35816" />
                </a>
                <a href="19e">
                    <path id="path35852" class="arrondissement arr19"
                        d="M 678.76882,176.8609 L 682.52822,176.8609 L 707.90416,184.3797 L 707.90416,193.7782 L 716.3628,236.07143 L 748.31769,276.02522 L 818.20699,254.01 L 830.42504,258.70925 L 863.31977,256.82955 L 889.63556,247.43106 L 913.56101,235.33233 L 902.45303,212.57519 L 877.07709,208.81579 L 855.46055,190.0188 L 852.641,162.76316 L 851.70115,127.04887 L 841.3628,94.15414 L 826.32521,68.778196 L 799.06957,47.161655 L 753.95679,43.402256 L 704.82561,45.281956 L 709.78386,106.37218 L 680.64852,175.92105"
                        sodipodi:nodetypes="ccccccccccccccccccccccc" inkscape:label="#path35852" />
                </a>
                <a href="20e">
                    <path id="path35866" class="arrondissement arr20"
                        d="M 936.5691,464.4838 L 849.22203,456.07767 L 849.22203,446.67918 L 845.46263,427.88218 L 831.36489,399.6867 L 815.38744,382.7694 L 806.9288,380.8897 L 797.5303,347.99497 L 749.25754,276.50532 L 818.20699,254.01 L 830.42504,258.70925 L 863.31977,256.82955 L 889.63556,247.43106 L 913.72105,235.6524 L 924.06957,285.88346 L 929.70867,337.57519 L 935.34777,383.62782 L 937.22746,434.3797 L 936.5691,464.4838 z "
                        sodipodi:nodetypes="ccccccccccccccccccc" inkscape:label="#path35866" />
                </a>
                <a href="15e">
                    <path id="path35966" class="arrondissement arr15"
                        d="M 317.39664,381.74812 L 273.69363,430.6203 C 273.69363,430.6203 215.89957,520.10788 189.6961,560.20926 L 213.54325,567.83834 L 232.34025,561.2594 L 251.13724,580.52632 L 291.55077,601.67293 L 348.8816,633.62782 L 369.11574,640.12921 L 378.01694,627.98872 L 390.23498,615.77068 L 423.12972,575.35714 L 459.78386,522.72556 L 473.8816,516.14662 L 482.34025,490.77068 L 450.38536,472.91353 L 440.04701,478.55263 L 431.58837,477.61278 L 412.79137,465.39474 L 405.27258,471.03384 L 317.39664,381.74812 z "
                        sodipodi:nodetypes="ccccccccccccccccccccc" inkscape:label="#path35966" />
                </a>
                <a href="14e">
                    <path id="36032" class="arrondissement arr14"
                        d="M 369.11574,640.12921 L 415.61092,654.30451 L 486.09965,674.04135 L 509.59589,688.1391 L 551.88912,705.99624 L 583.94089,702.2968 L 584.78386,692.83835 L 581.02446,668.40226 L 571.62596,631.74812 L 570.68611,610.13158 L 564.10716,580.05639 L 565.98686,565.95865 L 575.88602,531.78643 L 544.37032,522.72556 L 482.81018,491.24061 L 473.8816,516.14662 L 459.78386,522.72556 L 423.12972,575.35714 L 390.23498,615.77068 L 378.01694,627.98872 L 369.11574,640.12921 z "
                        sodipodi:nodetypes="ccccccccccccccccccccc" inkscape:label="#path36032" />
                </a>
                <a href="13e">
                    <path id="path36018" class="arrondissement arr13"
                        d="M 583.94089,702.2968 L 584.78386,692.83835 L 581.02446,668.40226 L 571.62596,631.74812 L 570.68611,610.13158 L 564.10716,580.05639 L 565.98686,565.95865 L 575.88602,531.78643 L 597.94175,537.76316 L 622.37784,541.52256 L 663.73122,519.90602 L 689.53331,480.66577 L 780.27258,580.99624 L 810.84493,618.2508 L 790.61092,630.80827 L 744.55829,656.18421 L 698.50566,688.1391 C 698.50566,688.1391 655.27258,693.7782 651.51318,693.7782 C 647.75378,693.7782 623.31769,687.19925 623.31769,687.19925 L 601.70115,700.35714 L 583.94089,702.2968 z "
                        sodipodi:nodetypes="cccccccccccccccccsccc" inkscape:label="#path36018" />
                </a>
                <a href="5e">
                    <path id="path36006" class="arrondissement arr05"
                        d="M 689.79247,480.953 L 663.73122,519.90602 L 622.37784,541.52256 L 597.94175,537.76316 L 575.44683,531.44879 L 544.37032,523.66541 L 583.37409,414.17294 L 614.85904,428.7406 L 625.19739,429.68045 L 644.93423,441.8985 L 667.49062,455.99624 L 689.79247,480.953 z "
                        sodipodi:nodetypes="cccccccccccc" inkscape:label="#path36006" />
                </a>
                <a href="6e">
                    <path id="path35990" class="arrondissement arr06"
                        d="M 582.79658,414.75044 L 568.59125,400.76027 L 546.03486,381.96328 L 529.51276,374.10438 L 518.99438,404.30451 L 511.47558,420.28196 L 503.01694,436.2594 L 450.85528,473.85338 L 482.81018,491.24061 L 544.37032,523.66541 L 582.79658,414.75044 z "
                        sodipodi:nodetypes="ccccccccccc" inkscape:label="#path35990" />
                </a>
                <a href="7e">
                    <path id="path35978" class="arrondissement arr07"
                        d="M 316.81913,382.32562 L 405.27258,471.03384 L 412.79137,465.39474 L 431.58837,477.61278 L 440.04701,478.55263 L 450.85528,473.85338 L 503.01694,436.2594 L 511.47558,420.28196 L 518.99438,404.30451 L 529.23566,373.98494 L 491.52358,358.46704 L 442.6514,340.6099 L 403.17772,340.6099 L 369.02376,346.57329 L 343.96719,350.94824 L 316.81913,382.32562 z "
                        sodipodi:nodetypes="cccccccccccccccc" inkscape:label="#path35978" />
                </a>
                <a href="8e">
                    <path id="path35798" class="arrondissement arr08"
                        d="M 370.60414,345.25613 L 362.30517,328.17669 L 348.20743,289.64286 L 337.39916,268.96617 L 351.02698,238.89098 L 494.82397,193.30827 L 495.76382,260.50752 L 491.06457,281.18421 L 501.40292,297.16165 L 490.12472,302.80075 L 480.72623,319.71805 L 471.38302,348.68381 L 444.07209,339.45489 L 404.59841,339.45489 L 370.60414,345.25613 z "
                        sodipodi:nodetypes="ccccccccccccccc" inkscape:label="#path35798" />
                </a>
                <a href="17e">
                    <path id="path35790" class="arrondissement arr17"
                        d="M 501.58429,53.922222 L 486.09965,163.70301 L 494.55829,186.2594 L 493.61844,193.7782 L 350.7613,238.89098 L 337.13348,268.96617 L 276.02242,242.86607 L 279.33273,232.31203 L 247.37784,236.07143 L 253.95679,214.45489 L 272.75378,182.5 L 318.80641,136.44737 L 366.73874,105.43233 L 409.97183,79.116542 L 461.66355,55.620301 L 501.58429,53.922222 z "
                        sodipodi:nodetypes="cccccccccccccccc" inkscape:label="#path35790" />
                </a>
                <a href="12e">
                    <path id="path35890" class="arrondissement arr12"
                        d="M 848.58189,451.25436 L 849.22203,456.07767 L 936.5691,464.4838 L 935.34777,466.33459 L 926.88912,491.71053 L 925.94927,510.50752 L 911.85152,552.80075 L 886.47558,545.28196 L 852.641,569.71805 L 864.85905,584.75564 L 831.02446,604.49248 L 810.84493,618.2508 L 780.27258,580.99624 L 680.80342,470.50847 L 682.52822,459.75564 L 697.56581,464.45489 L 711.66355,417.46241 L 737.03949,429.68045 L 848.58189,451.25436 z "
                        sodipodi:nodetypes="ccccccccccccccccccc" inkscape:label="#path35890" />
                </a>
                <a href="11e">
                    <path id="path35876" class="arrondissement arr11"
                        d="M 673.59965,312.19925 L 748.31769,276.02522 L 797.5303,347.99497 L 806.9288,380.8897 L 815.38744,382.7694 L 831.36489,399.6867 L 845.46263,427.88218 L 849.22203,446.67918 L 848.58189,453.68733 L 737.03949,429.68045 L 711.04377,417.76212 L 702.26506,393.96617 L 692.86656,348.85338 L 683.46807,322.53759 L 673.59965,312.19925 z "
                        sodipodi:nodetypes="ccccccccccccccc" inkscape:label="#path35876" />
                </a>
                <a href="3e">
                    <path id="path35918" class="arrondissement arr03"
                        d="M 630.00618,298.83331 L 616.89228,338.77689 L 612.97934,350.26315 L 643.05453,362.01128 L 704.45896,401.42913 L 702.26506,393.96617 L 692.86656,348.85338 L 683.46807,322.53759 L 673.59965,312.19925 L 630.00618,298.83331 z "
                        sodipodi:nodetypes="cccccccccc" inkscape:label="#path35918" />
                </a>
                <a href="4e">
                    <path id="path35932" class="arrondissement arr04"
                        d="M 704.45896,401.42913 L 711.04377,417.76212 L 697.56581,464.45489 L 682.52822,459.75564 L 680.71286,470.4081 L 667.49062,455.99624 L 644.93423,441.8985 L 625.19739,429.68045 L 614.85904,428.7406 L 584.78386,413.23309 L 596.06205,395.84587 L 612.97934,349.79323 L 643.05453,362.01128 L 704.45896,401.42913 z "
                        sodipodi:nodetypes="cccccccccccccc" inkscape:label="#path35932" />
                </a>
                <a href="10e">
                    <path id="path35842" class="arrondissement arr10"
                        d="M 607.34025,185.31955 L 610.1598,292.46241 L 674.06957,312.19925 L 747.37784,275.54511 L 716.3628,236.07143 L 707.90416,193.7782 L 707.90416,184.3797 L 682.52822,176.8609 L 679.70867,176.39098 L 679.70867,177.80075 L 645.87408,178.7406 L 608.12622,185.03191 L 607.34025,185.31955 z "
                        sodipodi:nodetypes="ccccccccccccc" inkscape:label="#path35842" />
                </a>
                <a href="2e">
                    <path id="path35904" class="arrondissement arr02"
                        d="M 610.62973,292.63262 L 564.10716,282.12406 L 499.8875,298.7111 L 518.05453,316.8985 L 597.0019,341.33459 L 616.81551,338.17604 L 630.00618,298.83331 L 610.62973,292.63262 z "
                        sodipodi:nodetypes="cccccccc" inkscape:label="#path35904" />
                </a>
                <a href="1er">
                    <path id="path35946" class="arrondissement arr01"
                        d="M 470.91768,348.61086 L 492.67859,357.31203 L 547.18987,380.80827 L 569.74626,399.60526 L 584.78386,413.23309 L 596.06205,395.84587 L 612.97934,350.26315 L 616.81551,338.17604 L 597.0019,341.33459 L 518.05453,316.8985 L 500.19739,298.57142 L 489.85904,302.80075 L 480.46055,319.71805 L 470.91768,348.61086 z "
                        sodipodi:nodetypes="cccccccccccccc" inkscape:label="#path35946" />
                </a>
                <a href="#">
                    <path id="Limites"
                        style="fill:none;fill-opacity:0.75;fill-rule:evenodd;stroke:rgb(251, 251, 251);stroke-width:4;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;display:inline"
                        d="M 689.10716,480.43233 L 663.73122,519.90602 L 622.37784,541.52256 L 597.94175,537.76316 L 575.44683,531.44879 L 544.37032,523.66541 L 582.90416,414.64286 M 616.89228,338.77689 L 612.97934,350.73308 M 629.89664,299.04135 L 616.89228,338.77689 M 585.72371,412.76316 L 596.06205,395.84587 L 612.97934,349.79323 M 711.66355,417.46241 L 697.56581,464.45489 L 682.52822,459.75564 L 680.64852,470.09399 M 608.2801,185.31955 L 610.1598,292.46241 L 674.06957,312.19925 L 747.37784,275.54511 L 716.3628,236.07143 L 707.90416,193.7782 L 707.90416,184.3797 L 682.52822,176.8609 L 678.76882,176.8609 M 276.51318,242.65038 L 338.54325,268.96617 L 347.94175,289.64286 L 362.03949,328.17669 L 370.49814,345.09399 M 335.72371,268.96617 L 350.7613,238.89098 L 493.61844,193.7782 L 494.55829,186.2594 L 486.09965,163.70301 L 502.07709,53.740602 M 705.08461,45.281956 L 709.78386,106.37218 L 680.64852,175.92105 L 679.70867,177.80075 L 645.87408,178.7406 L 608.12622,185.03191 L 606.4004,185.31955 L 554.70867,200.35714 L 514.29513,184.3797 L 495.02821,192.83835 L 495.49814,260.50752 L 490.79889,281.18421 L 501.13724,297.16165 L 489.85904,302.80075 L 480.46055,319.71805 L 471.06205,347.91353 M 500.19739,299.04135 L 564.10716,282.12406 L 611.09965,291.52256 M 915.0115,235.21301 L 889.63556,247.43106 L 863.31977,256.82955 L 830.42504,258.70925 L 818.20699,254.01 L 749.25754,276.50532 M 749.25754,276.50532 L 797.5303,347.99497 L 806.9288,380.8897 L 815.38744,382.7694 L 831.36489,399.6867 L 845.46263,427.88218 L 849.22203,446.67918 L 849.22203,456.07767 M 673.12972,312.19925 L 683.46807,322.53759 L 692.86656,348.85338 L 702.26506,393.96617 L 711.04377,417.76212 L 737.03949,429.68045 L 848.58189,451.25436 L 849.22203,456.07767 L 937.56789,466.41602 M 499.25754,299.9812 L 518.05453,316.8985 L 597.0019,341.33459 L 616.73874,337.57519 M 612.97934,349.79323 L 643.05453,362.01128 L 705.0024,402.3426 M 316.92671,381.74812 L 405.27258,471.03384 L 412.79137,465.39474 L 431.58837,477.61278 L 440.04701,478.55263 L 450.38536,472.91353 L 482.34025,490.77068 L 473.8816,516.14662 L 459.78386,522.72556 L 423.12972,575.35714 L 390.23498,615.77068 L 378.01694,627.98872 L 368.61844,640.20677 M 529.33273,373.28947 L 518.99438,404.30451 L 511.47558,420.28196 L 503.01694,436.2594 L 451.32521,474.79323 M 483.2801,491.71053 L 544.37032,522.72556 M 576.32521,532.12406 L 565.98686,565.95865 L 564.10716,580.05639 L 570.68611,610.13158 L 571.62596,631.74812 L 581.02446,668.40226 L 584.78386,692.83835 L 583.84401,702.23684"
                        sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                        inkscape:label="#path10848" />
                </a>
                <text sodipodi:linespacing="125%" id="text15336" class="number" y="381.74808" x="239.85907"
                    xml:space="preserve">
                    <tspan y="381.74808" x="239.85907" id="tspan15338" sodipodi:role="line">16</tspan>
                </text>
                <text xml:space="preserve" x="417.49063" y="278.51279" id="text15368" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15370" x="417.49063" y="278.51279">8</tspan>
                </text>
                <text xml:space="preserve" x="378.01697" y="170.28189" id="text15340" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15342" x="378.01697" y="170.28189">17</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15344" class="number" y="129.86835" x="590.42297"
                    xml:space="preserve">
                    <tspan y="129.86835" x="590.42297" id="tspan15346" sodipodi:role="line">18</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15372" class="number" y="249.13313" x="536.51105"
                    xml:space="preserve">
                    <tspan y="249.13313" x="536.51105" id="tspan15374" sodipodi:role="line">9</tspan>
                </text>
                <text xml:space="preserve" x="646.8139" y="257.68793" id="text15376" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15378" x="646.8139" y="257.68793">10</tspan>
                </text>
                <text xml:space="preserve" x="757.71625" y="164.64278" id="text15348" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15350" x="757.71625" y="164.64278">19</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15352" class="number" y="338.51498" x="847.94177"
                    xml:space="preserve">
                    <tspan y="338.51498" x="847.94177" id="tspan15354" sodipodi:role="line">20</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15380" class="number" y="378.92853" x="734.21991"
                    xml:space="preserve">
                    <tspan y="378.92853" x="734.21991" id="tspan15382" sodipodi:role="line">11</tspan>
                </text>
                <text xml:space="preserve" x="788.73132" y="520.84576" id="text15356" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15358" x="788.73132" y="520.84576">12</tspan>
                </text>
                <text xml:space="preserve" x="539.67102" y="368.59018" id="text15397" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15399" x="539.67102" y="368.59018">1</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15401" class="number" y="324.41724" x="566.92664"
                    xml:space="preserve">
                    <tspan y="324.41724" x="566.92664" id="tspan15403" sodipodi:role="line">2</tspan>
                </text>
                <text xml:space="preserve" x="648.6936" y="352.61273" id="text15405" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15407" x="648.6936" y="352.61273">3</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15409" class="number" y="410.88342" x="639.2951"
                    xml:space="preserve">
                    <tspan y="410.88342" x="639.2951" id="tspan15411" sodipodi:role="line">4</tspan>
                </text>
                <text xml:space="preserve" x="309.40793" y="529.30444" id="text15318" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15320" x="309.40793" y="529.30444">15</tspan>
                </text>
                <text xml:space="preserve" x="423.1297" y="411.82324" id="text15392" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15394" x="423.1297" y="411.82324">7</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15388" class="number" y="457.87589" x="521.8139"
                    xml:space="preserve">
                    <tspan y="457.87589" x="521.8139" id="tspan15390" sodipodi:role="line">6</tspan>
                </text>
                <text xml:space="preserve" x="601.70111" y="499.22928" id="text15384" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15386" x="601.70111" y="499.22928">5</tspan>
                </text>
                <text sodipodi:linespacing="125%" id="text15360" class="number" y="614.83081" x="659.03198"
                    xml:space="preserve">
                    <tspan y="614.83081" x="659.03198" id="tspan15362" sodipodi:role="line">13</tspan>
                </text>
                <text xml:space="preserve" x="478.58093" y="620.46985" id="text15364" class="number"
                    sodipodi:linespacing="125%">
                    <tspan sodipodi:role="line" id="tspan15366" x="478.58093" y="620.46985">14</tspan>
                </text>
            </svg>
        </div>
    </div>

    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>
