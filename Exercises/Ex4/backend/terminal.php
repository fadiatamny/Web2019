<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../includes/terminal.css">
    <title>Terminal Window</title>

</head>

<body>
    <div class="background">
        <svg viewBox='0 0 1440 831' class="svgBG">
            <rect fill='#ff7700' width='100vw' height='100vh' />
            <polygon fill='#cc0000' points='957 450 539 900 1396 900' />
            <polygon fill='#aa0000' points='957 450 872.9 900 1396 900' />
            <polygon fill='#d6002b' points='-60 900 398 662 816 900' />
            <polygon fill='#b10022' points='337 900 398 662 816 900' />
            <polygon fill='#d9004b' points='1203 546 1552 900 876 900' />
            <polygon fill='#b2003d' points='1203 546 1552 900 1162 900' />
            <polygon fill='#d3006c' points='641 695 886 900 367 900' />
            <polygon fill='#ac0057' points='587 900 641 695 886 900' />
            <polygon fill='#c4008c' points='1710 900 1401 632 1096 900' />
            <polygon fill='#9e0071' points='1710 900 1401 632 1365 900' />
            <polygon fill='#aa00aa' points='1210 900 971 687 725 900' />
            <polygon fill='#880088' points='943 900 1210 900 971 687' />
        </svg>
    </div>
    <div class="gradient"></div>
    <div class="terminalcolor">
        <p>Terminal@Root></p>
    </div>
    <div class="item box" id="firstResponse">
        <div class="typewriter">
            <h1>
                HA ! you fell for it haha.
            </h1>
        </div>
        <div class="typewriter wrapper par1 hidden">
            <h1>
                well... sorry to disappoint but, eh, idk what to do...
            </h1>
        </div>
        <div class="typewriter wrapper par2 hidden">
            <h1>
                Here's a cute kitty for you !
            </h1>
        </div>
        <div class="typewriter wrapper par3 hidden">
            <h1>
                <div style="width:250px;height:150px; padding-bottom: 10vh; margin-left: 30vw;"><iframe src="https://giphy.com/embed/MDJ9IbxxvDUQM" width="250px" height="150px" frameBorder="0" class="giphy-embed" ></iframe></div>
            </h1>
        </div>
        <div class="typewriter wrapper par4 hidden">
            <h1>
                also, what the hell are those login credentials ?!
            </h1>
        </div>
        <div class="typewriter wrapper par5 hidden">
            <h1>
                <?php 
                    $user = $_GET['user'];
                    $pass = $_GET['password'];
                    $victim = $_GET['victim'];

                    echo '<span class="var">'.$user.'</span> n <span class="var">'.$pass.'</span>?!?!';
                    echo 'also, i wonder what did <span class="var">'.$victim.'</span> do to you...';
                ?>
            </h1>
        </div>
        <div class="typewriter wrapper par6 hidden">
            <h1>
                <?php 
                    $sec = $_GET['secret'];

                    echo 'btw amazing secret ! wouldnt ever have known you <span class="var">'.$user.'</span>';
                ?>
            </h1>
        </div>
    </div>

    <div id="dock-container">
        <div id="dock">
            <ul>
                <li>
                    <div class="icon">
                        <svg version="1.0" width="25pt" height="25pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M1347 5099 c-20 -11 -49 -38 -65 -61 -26 -40 -27 -47 -30 -199 l-4
                                -158 -227 -3 -228 -3 -40 -27 c-24 -16 -49 -44 -62 -70 l-21 -44 0 -2192 c0
                                -1951 2 -2197 15 -2229 20 -48 41 -71 87 -94 36 -18 90 -19 1788 -19 1698 0
                                1752 1 1788 19 46 23 67 46 87 94 13 32 15 278 15 2229 l0 2192 -21 44 c-13
                                26 -38 54 -62 70 l-40 27 -228 3 -227 3 -4 158 c-3 152 -4 159 -31 199 -34 53
                                -91 82 -156 82 -61 0 -97 -13 -135 -48 -49 -46 -56 -77 -56 -242 l0 -150 -90
                                0 -90 0 0 145 c0 188 -16 232 -102 276 -47 24 -131 25 -177 1 -19 -9 -48 -34
                                -65 -55 l-31 -39 -3 -164 -3 -164 -90 0 -89 0 0 148 c0 170 -12 210 -76 258
                                -34 26 -45 29 -114 29 -69 0 -80 -3 -114 -29 -64 -48 -76 -88 -76 -258 l0
                                -148 -89 0 -90 0 -3 164 -3 164 -31 39 c-17 21 -46 46 -65 55 -46 24 -130 23
                                -177 -1 -86 -44 -102 -88 -102 -276 l0 -145 -90 0 -90 0 0 149 c0 82 -5 162
                                -11 178 -14 38 -57 83 -96 99 -47 20 -131 17 -176 -7z m-95 -1002 c3 -203 3
                                -204 31 -245 65 -99 218 -112 299 -26 43 47 48 73 48 280 l0 194 90 0 90 0 0
                                -190 c0 -198 7 -238 48 -283 49 -55 163 -74 231 -39 19 9 48 34 65 55 l31 39
                                3 209 3 209 90 0 89 0 0 -192 c0 -220 9 -253 76 -304 34 -26 45 -29 114 -29
                                69 0 80 3 114 29 67 51 76 84 76 304 l0 192 89 0 90 0 3 -209 3 -209 31 -39
                                c17 -21 46 -46 65 -55 68 -35 182 -16 231 39 41 45 48 85 48 283 l0 190 90 0
                                90 0 0 -194 c0 -207 5 -233 48 -280 36 -38 81 -56 142 -56 66 0 123 29 157 82
                                28 41 28 42 31 245 l3 203 100 0 99 0 0 -1960 0 -1960 -1510 0 -1510 0 0 1960
                                0 1960 99 0 100 0 3 -203z" />
                                <path d="M1375 3355 c-143 -51 -165 -255 -36 -336 l45 -29 1176 0 1176 0 45
                                29 c102 64 116 206 30 292 -20 20 -54 42 -76 48 -28 8 -378 11 -1180 11 -956
                                -1 -1146 -3 -1180 -15z" />
                                <path d="M1365 2791 c-69 -31 -115 -104 -115 -182 0 -42 46 -122 87 -149 l37
                                -25 1186 0 1186 0 37 25 c41 27 87 107 87 149 0 78 -46 151 -115 182 -38 18
                                -96 19 -1195 19 -1099 0 -1157 -1 -1195 -19z" />
                                <path d="M1365 2234 c-120 -62 -149 -202 -62 -301 59 -67 -20 -63 1257 -63
                                1277 0 1198 -4 1257 63 78 89 64 210 -33 283 l-37 29 -1176 3 c-1051 2 -1179
                                0 -1206 -14z" />
                                <path d="M1365 1676 c-148 -67 -148 -280 0 -347 38 -18 96 -19 1195 -19 1099
                                0 1157 1 1195 19 135 61 150 247 28 331 l-37 25 -1175 2 c-970 2 -1181 0
                                -1206 -11z" />
                            </g>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg version="1.0" width="25pt" height="25pt" viewBox="0 0 980.000000 980.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,980.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M4517 9789 c-90 -21 -204 -98 -248 -167 -56 -88 -82 -200 -179 -777
                       -34 -198 -64 -363 -68 -366 -4 -4 -108 -41 -232 -84 -295 -101 -408 -148 -621
                       -257 l-176 -91 -29 20 c-16 11 -153 108 -304 215 -338 239 -507 354 -551 372
                       -83 34 -234 27 -324 -15 -62 -29 -176 -128 -351 -304 -191 -193 -269 -289
                       -289 -357 -19 -67 -20 -236 -1 -282 17 -40 117 -191 276 -416 261 -368 329
                       -471 323 -488 -4 -9 -47 -102 -96 -207 -114 -244 -203 -457 -256 -615 -41
                       -126 -71 -187 -94 -195 -6 -2 -174 -32 -372 -65 -471 -80 -639 -115 -701 -145
                       -99 -49 -190 -177 -214 -304 -14 -72 -13 -651 1 -727 14 -75 68 -179 121 -233
                       84 -85 153 -103 801 -212 199 -34 368 -66 375 -72 22 -18 42 -63 97 -228 64
                       -186 125 -344 199 -507 l53 -119 -209 -259 c-272 -337 -433 -549 -460 -610
                       -30 -67 -37 -209 -14 -287 18 -63 83 -154 228 -322 166 -191 321 -341 388
                       -375 183 -92 269 -61 885 324 193 121 355 219 360 219 6 0 75 -40 155 -88 268
                       -161 516 -271 856 -381 l181 -59 37 -220 c83 -492 148 -832 167 -872 31 -64
                       123 -149 208 -191 l75 -37 305 -3 c354 -4 488 5 553 37 59 28 162 122 193 175
                       31 54 64 208 150 701 36 209 68 388 71 397 4 13 45 30 137 59 252 80 465 168
                       734 303 l149 74 81 -58 c249 -179 518 -367 667 -466 189 -127 227 -141 353
                       -131 98 7 159 38 263 129 106 94 378 371 450 458 75 91 84 116 84 240 1 152
                       11 135 -354 655 -108 154 -218 312 -244 352 l-48 72 115 238 c144 299 194 422
                       266 658 17 55 35 106 40 114 10 15 7 15 431 87 433 73 613 110 662 135 68 35
                       144 120 186 206 l37 78 3 341 c2 213 -1 364 -7 400 -24 131 -122 269 -227 319
                       -51 24 -198 53 -664 131 -289 48 -400 70 -412 82 -10 9 -48 112 -87 227 -38
                       116 -105 295 -149 399 l-81 188 290 361 c404 502 409 511 409 673 0 159 -33
                       216 -300 515 -167 186 -267 281 -328 310 -65 32 -167 44 -247 31 -81 -13 -113
                       -31 -605 -335 -195 -121 -362 -222 -371 -224 -9 -3 -88 37 -175 87 -309 179
                       -494 263 -831 377 -152 51 -224 80 -227 92 -3 9 -35 187 -71 396 -86 493 -119
                       647 -150 701 -31 53 -134 147 -193 175 -27 14 -77 25 -126 30 -110 11 -682 9
                       -729 -2z m733 -3084 c115 -20 324 -88 440 -143 410 -196 735 -535 915 -956
                       266 -625 154 -1353 -290 -1885 -253 -304 -643 -539 -1017 -615 -205 -42 -600
                       -40 -783 4 -258 61 -538 199 -750 368 -343 275 -609 727 -654 1112 -31 265
                       -21 583 24 753 136 523 497 965 980 1203 202 99 370 148 591 174 115 13 432 4
                       544 -15z" />
                            </g>
                        </svg>
                    </div>

                </li>
                <li>
                    <div class="icon">
                        <svg version="1.0" width="25pt" height="25pt" viewBox="0 0 860.000000 980.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,980.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M3570 9789 c-77 -12 -227 -89 -293 -149 -31 -28 -72 -75 -91 -104
                       -44 -67 -94 -189 -108 -266 -10 -54 -14 -59 -42 -64 -17 -4 -600 -10 -1296
                       -15 l-1265 -8 -109 -53 c-153 -74 -212 -134 -295 -298 l-62 -122 3 -718 c4
                       -802 1 -767 76 -845 71 -74 107 -88 249 -98 71 -4 162 -8 204 -9 l76 0 5
                       -3293 5 -3293 57 -111 c82 -161 163 -235 350 -317 l58 -26 3216 0 3215 0 96
                       51 c174 93 223 141 306 309 l48 95 5 3292 5 3293 76 0 c42 1 133 5 202 9 142
                       10 166 19 241 88 86 81 82 45 86 860 l3 713 -62 122 c-83 164 -142 223 -295
                       298 l-109 54 -1296 4 -1296 4 -11 75 c-24 149 -114 307 -229 398 -32 25 -100
                       66 -150 91 l-93 44 -712 -1 c-392 -1 -738 -5 -768 -10z m1170 -635 c25 -12 66
                       -43 91 -71 59 -63 69 -105 77 -337 l7 -171 1390 -6 c776 -4 1415 -11 1447 -16
                       94 -15 173 -83 198 -168 11 -38 29 -416 30 -627 l0 -98 -3680 0 -3680 0 0 98
                       c1 225 19 599 31 632 29 84 107 148 197 163 32 5 675 12 1447 16 l1390 6 6
                       190 c6 202 12 230 65 306 33 49 74 77 136 94 43 12 124 14 428 12 357 -2 377
                       -3 420 -23z m2617 -5146 c-4 -1721 -10 -3078 -15 -3136 -10 -113 -24 -140
                       -105 -205 -34 -28 -44 -30 -154 -38 -154 -10 -5412 -10 -5566 0 -110 8 -120
                       10 -154 38 -81 65 -95 92 -105 205 -5 59 -11 1411 -15 3136 l-5 3032 3062 0
                       3062 0 -5 -3032z" />
                                <path d="M3299 5501 c-61 -19 -121 -65 -180 -140 l-36 -46 -7 -1255 c-7 -1311
                       -1 -1637 29 -1740 19 -61 56 -101 138 -146 46 -26 62 -29 137 -29 72 0 92 4
                       135 27 64 33 120 88 134 130 30 92 33 187 38 1323 5 1186 -2 1589 -30 1693 -8
                       29 -25 64 -38 78 -81 87 -223 134 -320 105z" />
                                <path d="M5129 5496 c-72 -19 -146 -82 -185 -159 -27 -51 -36 -555 -31 -1782
                       5 -1243 5 -1243 85 -1321 78 -76 202 -111 299 -85 67 18 159 85 182 134 41 87
                       43 142 48 1342 5 1176 -3 1590 -30 1693 -22 83 -99 150 -203 177 -69 18 -103
                       18 -165 1z" />
                            </g>
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
    x = 3000;
    setTimeout(function(){$('#firstResponse .par1').removeClass('hidden');},x*1);
    setTimeout(function(){$('#firstResponse .par2').removeClass('hidden');},x*2);
    setTimeout(function(){$('#firstResponse .par3').removeClass('hidden');},x*2.5);
    setTimeout(function(){$('#firstResponse .par4').removeClass('hidden');},x*3.5);
    setTimeout(function(){$('#firstResponse .par5').removeClass('hidden');},x*3.6);
    setTimeout(function(){$('#firstResponse .par6').removeClass('hidden');},x*4);

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../includes/terminal.js"></script>
</body>

</html>