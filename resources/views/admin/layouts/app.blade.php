<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SteakHouse') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="index">
<svg style="display: none;">
    <symbol id="cart-svg">
        <svg viewBox="0 0 128.000000 128.000000">
            <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)">
                <path d="M145 1256 c-60 -28 -97 -66 -124 -126 -20 -43 -21 -64 -21 -490 0 -426 1 -447 21 -490 27 -60 64 -98 124 -126 l50 -24 445 0 445 0 50 24 c60 28 97 66 124 126 20 43 21 64 21 490 l0 445 -24 50 c-28 60 -66 97 -126 124 -43 20 -64 21 -490 21 l-445 0 -50 -24z m631 -141 c34 -8 86 -25 115 -38 60 -27 174 -109 182 -131 4 -9 -33 -64 -90 -135 l-96 -121 -247 0 -247 0 -96 121 c-57 71 -94 126 -90 135 8 22 123 104 182 131 117 52 266 67 387 38z"/>
                <path d="M738 886 c-49 -73 -88 -136 -88 -140 0 -3 27 -6 59 -6 l59 0 25 108 c33 142 39 172 35 172 -2 0 -42 -60 -90 -134z"/>
            </g>
        </svg>
    </symbol>
    <symbol id="steak-svg">
        <svg viewBox="0 0 785.000000 1300.000000">
            <g transform="translate(0.000000,1300.000000) scale(0.100000,-0.100000)">
                <path d="M2895 12920 c-608 -72 -1169 -252 -1535 -492 -139 -91 -173 -126 -203 -210 -121 -335 -140 -827 -52 -1367 27 -166 67 -349 81 -373 16 -27 165 -159 266 -234 384 -286 859 -478 1523 -614 61 -13 111 -24 113 -26 2 -1 -26 -67 -62 -146 -106 -235 -134 -303 -211 -518 -41 -113 -121 -323 -179 -467 -111 -276 -150 -392 -190 -563 -14 -58 -45 -172 -70 -254 -64 -209 -70 -251 -63 -451 13 -346 32 -422 144 -589 l74 -109 -11 -51 c-35 -154 -118 -413 -175 -541 -35 -80 -220 -597 -395 -1105 -114 -331 -154 -436 -279 -733 -39 -92 -71 -172 -71 -178 0 -15 -13 -11 -73 22 -31 17 -64 29 -73 27 -11 -2 -45 -71 -100 -203 -46 -110 -84 -206 -84 -214 0 -8 -79 -212 -176 -455 -240 -601 -296 -739 -355 -864 -28 -59 -77 -174 -109 -257 -64 -166 -136 -338 -230 -550 -141 -316 -229 -538 -286 -720 -23 -73 -28 -109 -29 -190 0 -93 2 -105 32 -165 56 -113 180 -209 318 -245 84 -22 238 -20 314 4 170 53 257 168 355 469 26 79 62 185 81 236 18 51 54 176 80 277 33 130 73 251 137 414 50 127 119 309 153 405 35 96 95 258 135 360 39 102 137 358 216 570 79 212 153 401 164 421 10 19 39 91 63 160 25 68 54 148 66 177 12 29 21 65 21 81 0 26 -4 29 -57 40 -31 6 -67 11 -80 11 -29 0 -32 -13 68 295 42 132 89 283 104 335 53 191 169 538 296 887 134 367 188 523 303 885 37 114 75 227 85 251 l19 44 65 6 c215 20 431 141 572 319 88 111 197 313 315 583 56 127 139 309 185 405 46 96 106 231 134 300 139 344 292 744 312 819 l23 85 28 -60 c15 -32 27 -65 28 -72 0 -7 32 -97 71 -200 77 -204 111 -302 289 -827 124 -365 171 -537 269 -983 143 -646 236 -927 388 -1171 78 -124 206 -198 413 -238 135 -25 572 -25 747 0 158 23 372 77 458 116 116 53 261 174 313 261 60 102 137 385 152 560 7 69 23 224 37 345 31 277 42 440 49 780 8 361 -7 520 -82 864 -189 866 -425 1566 -760 2251 -128 260 -213 410 -335 587 -439 635 -929 1090 -1539 1426 -296 163 -500 241 -796 306 -274 59 -420 71 -857 70 -306 -1 -425 -5 -542 -19z m936 -90 c281 -22 495 -60 704 -127 102 -32 310 -122 302 -130 -2 -1 -30 6 -63 17 -97 34 -281 78 -416 100 -774 125 -1724 40 -2293 -207 -38 -17 -108 -43 -155 -58 -205 -66 -327 -152 -392 -276 -19 -37 -23 -59 -23 -135 1 -83 4 -96 38 -169 89 -188 369 -382 781 -544 181 -71 301 -108 613 -190 804 -212 1336 -419 1719 -672 137 -90 196 -142 293 -254 310 -358 502 -767 805 -1715 47 -146 116 -351 154 -455 151 -412 267 -833 378 -1365 121 -582 193 -755 370 -888 92 -68 159 -94 265 -100 94 -5 166 11 249 53 156 82 312 274 417 514 42 97 42 66 -1 -101 -87 -338 -152 -442 -329 -528 -123 -59 -343 -121 -452 -127 -157 -9 -204 16 -301 163 -127 193 -171 330 -473 1469 -135 513 -222 843 -295 1120 -134 513 -228 782 -392 1110 -166 334 -359 602 -615 850 -401 389 -905 643 -1548 781 -598 128 -1198 334 -1458 500 -174 111 -239 174 -356 348 -72 107 -97 174 -97 259 0 174 161 307 557 461 583 227 1381 344 2014 296z m289 -180 c302 -37 618 -116 930 -232 178 -67 412 -205 605 -358 111 -88 464 -443 566 -570 305 -378 486 -655 634 -965 75 -157 96 -204 276 -635 61 -146 126 -301 144 -345 35 -84 93 -269 169 -545 26 -91 64 -225 86 -297 37 -127 111 -466 146 -678 25 -149 32 -801 10 -987 -21 -182 -88 -484 -137 -615 -48 -130 -133 -304 -190 -391 -53 -82 -161 -192 -219 -225 -67 -38 -162 -60 -226 -52 -86 10 -188 66 -265 144 -100 103 -125 163 -209 501 -187 754 -395 1482 -612 2140 -100 306 -205 610 -218 632 -6 10 -10 23 -10 30 0 17 -121 301 -186 437 -63 131 -223 379 -344 531 -177 224 -360 372 -628 509 -287 146 -560 242 -1292 456 -687 202 -1001 329 -1298 525 -241 159 -321 308 -246 458 48 97 147 162 359 235 55 19 156 57 225 85 262 105 615 182 970 212 69 6 143 12 165 14 77 8 711 -4 795 -14z m-2760 -1005 c115 -168 259 -286 430 -353 292 -115 1192 -387 1434 -433 60 -12 144 -34 186 -49 354 -128 456 -168 534 -207 518 -258 870 -555 1051 -887 25 -47 82 -143 126 -213 82 -130 209 -379 272 -533 151 -370 256 -724 468 -1580 183 -737 249 -979 344 -1265 113 -340 182 -503 252 -595 l35 -45 -89 -6 c-182 -13 -400 21 -505 78 -188 103 -308 404 -608 1533 -221 830 -306 1112 -452 1495 -106 277 -242 557 -363 746 l-43 66 82 7 c93 8 150 31 154 63 5 31 -18 36 -258 58 -91 8 -190 20 -220 26 -58 11 -192 50 -188 55 2 1 50 14 108 28 57 15 122 37 144 49 46 25 86 79 86 115 0 28 19 30 -200 -21 -259 -61 -355 -72 -645 -72 -269 1 -379 11 -607 55 -314 62 -653 181 -938 331 -218 115 -475 302 -606 440 l-50 54 -32 150 c-66 311 -87 543 -78 855 4 118 9 239 13 268 l6 53 51 -93 c29 -52 77 -130 106 -173z m2575 -2125 c208 -71 355 -137 355 -160 0 -18 -142 -415 -198 -555 -33 -82 -102 -256 -152 -385 -51 -129 -108 -275 -127 -325 -64 -161 -331 -673 -434 -832 -65 -99 -198 -188 -279 -185 -19 1 -71 14 -115 29 -142 50 -183 114 -171 268 19 247 368 1424 623 2102 l38 101 80 9 c105 11 199 -5 380 -67z m-593 51 c15 -5 11 -21 -31 -131 -180 -469 -318 -901 -489 -1530 -55 -201 -108 -409 -117 -464 -21 -116 -16 -215 14 -274 45 -87 151 -151 313 -187 66 -14 88 -15 147 -5 178 30 268 156 631 880 94 188 147 310 236 540 37 96 109 273 160 392 51 120 102 248 113 285 10 38 27 94 36 127 l16 58 24 -22 c13 -13 43 -59 66 -104 l42 -81 -16 -61 c-8 -34 -41 -130 -72 -215 -32 -85 -90 -244 -130 -354 -119 -326 -191 -489 -538 -1210 -134 -279 -169 -343 -240 -435 -105 -134 -284 -230 -472 -250 -94 -11 -125 -19 -125 -32 0 -5 -16 -28 -34 -50 -30 -35 -55 -102 -181 -481 -81 -243 -178 -523 -217 -622 -96 -246 -383 -1123 -499 -1528 -22 -78 -38 -98 -62 -79 -6 5 -37 17 -66 27 -76 25 -161 65 -161 76 0 16 77 214 148 380 97 227 200 500 298 789 222 658 278 815 350 971 29 63 75 192 103 286 28 94 60 194 71 222 11 29 20 59 20 67 0 9 -31 50 -69 92 -86 97 -134 166 -149 217 -39 137 -54 467 -26 601 48 234 165 611 288 934 37 96 101 272 141 390 40 118 111 303 158 410 46 107 101 239 122 292 l38 97 71 -6 c39 -3 79 -9 88 -12z m-1719 -5911 c90 -36 214 -67 308 -76 39 -4 68 -10 67 -13 -2 -4 -16 -44 -33 -89 -34 -95 -32 -94 -141 -57 -88 30 -152 61 -252 122 -62 39 -72 49 -66 67 8 27 33 76 39 76 2 0 37 -13 78 -30z m-110 -286 c64 -31 141 -57 239 -81 l145 -35 -34 -92 c-75 -199 -156 -426 -183 -511 -15 -49 -56 -157 -90 -240 -33 -82 -98 -260 -144 -395 -46 -135 -109 -312 -141 -395 -102 -267 -136 -367 -176 -517 -58 -219 -182 -574 -239 -688 -48 -96 -151 -184 -226 -196 -77 -11 -267 49 -348 111 -77 59 -98 190 -56 343 27 98 176 461 292 712 53 113 111 246 131 295 19 50 56 144 82 210 26 66 101 235 165 375 138 300 204 454 258 605 60 165 217 545 226 545 2 0 47 -21 99 -46z"/>
                <path d="M4280 12485 c-74 -21 -192 -80 -327 -164 -61 -38 -138 -84 -172 -101 -57 -28 -63 -29 -89 -16 -15 8 -56 20 -90 27 -54 11 -76 11 -170 -5 -301 -51 -477 -140 -498 -250 -15 -81 26 -169 93 -202 33 -16 61 -19 203 -19 l165 0 136 68 c152 77 163 79 433 97 249 17 334 -3 473 -108 80 -59 433 -403 542 -527 266 -301 549 -676 633 -836 67 -130 101 -166 162 -176 62 -10 85 2 112 60 13 29 24 64 24 78 0 69 -170 325 -380 574 -116 136 -229 289 -298 400 -90 146 -176 250 -292 351 -219 191 -384 303 -518 351 -37 13 -74 26 -82 29 -8 4 25 19 77 35 54 17 109 43 135 62 49 37 88 99 88 139 0 35 -50 92 -104 120 -54 28 -179 34 -256 13z m202 -61 c168 -47 91 -163 -138 -208 -205 -41 -224 -47 -224 -65 0 -13 52 -42 202 -112 235 -110 362 -181 473 -266 139 -105 216 -194 391 -454 155 -230 196 -284 354 -474 138 -166 215 -275 269 -383 30 -59 31 -63 15 -87 -35 -53 -72 -19 -152 141 -114 226 -315 477 -652 814 -130 129 -262 269 -294 310 -95 121 -233 252 -310 295 -120 67 -175 78 -386 79 -246 1 -374 -27 -612 -134 -77 -35 -107 -43 -174 -48 -145 -9 -204 19 -204 95 0 101 109 177 290 204 101 14 257 7 324 -16 l48 -16 85 40 c46 23 153 81 236 130 176 103 223 127 292 152 63 23 93 23 167 3z"/>
            </g>
        </svg>
    </symbol>
    <symbol id="add-steak-svg">
        <svg viewBox="0 0 676.000000 759.000000">
            <g transform="translate(0.000000,759.000000) scale(0.100000,-0.100000)">
                <path d="M1896 7569 c-394 -42 -820 -143 -1139 -270 -126 -50 -296 -136 -411 -207 -50 -31 -93 -56 -95 -57 -2 0 -27 -22 -56 -50 -37 -35 -61 -68 -78 -110 -36 -88 -76 -258 -92 -398 -17 -144 -19 -463 -4 -644 21 -258 93 -654 128 -703 30 -42 210 -196 321 -274 363 -256 794 -427 1395 -555 55 -12 129 -29 165 -37 36 -9 85 -17 110 -20 25 -2 89 -9 143 -15 68 -8 106 -8 125 -1 53 20 188 23 280 6 91 -16 345 -102 454 -153 88 -41 118 -65 187 -152 69 -89 203 -356 258 -514 19 -55 55 -154 80 -220 44 -117 81 -219 108 -300 7 -22 43 -125 79 -229 36 -103 66 -190 66 -192 0 -2 -193 -4 -430 -4 l-430 0 0 83 c0 45 -7 150 -15 232 -9 83 -24 258 -35 390 -55 655 -58 685 -92 745 -47 86 -55 90 -186 90 -113 0 -114 0 -141 -29 -15 -15 -43 -61 -64 -101 l-37 -72 0 -669 0 -669 -578 0 c-661 0 -630 3 -806 -88 -137 -71 -156 -95 -155 -191 1 -113 11 -129 110 -179 62 -31 115 -48 185 -62 55 -10 131 -25 169 -34 58 -13 153 -16 573 -16 l502 0 2 -502 c2 -277 3 -548 3 -603 0 -81 5 -115 27 -180 15 -44 30 -97 33 -118 6 -36 11 -41 76 -72 84 -40 235 -71 301 -61 50 8 107 54 120 98 3 13 6 341 7 731 l1 707 519 0 519 0 31 -127 c17 -71 56 -240 86 -378 122 -546 190 -766 312 -1010 30 -60 60 -121 66 -135 22 -46 107 -119 180 -154 157 -74 266 -91 592 -91 330 1 519 26 750 101 128 42 191 81 291 179 101 100 119 132 178 308 53 157 73 260 90 462 9 99 25 254 36 345 30 253 43 554 37 865 -7 348 -11 380 -103 790 -151 671 -372 1350 -611 1875 -17 36 -40 88 -53 115 -46 102 -191 387 -236 467 -88 154 -301 461 -418 602 -238 286 -551 594 -761 748 -5 4 -32 25 -60 46 -208 159 -612 388 -845 479 -206 80 -433 137 -700 175 -216 31 -809 35 -1064 7z m817 -79 c455 -28 782 -104 1056 -245 122 -63 140 -80 49 -45 -328 124 -757 189 -1253 190 -415 0 -797 -43 -1130 -126 -118 -30 -353 -107 -404 -134 -20 -10 -86 -35 -146 -55 -158 -53 -248 -99 -319 -166 -89 -83 -111 -131 -111 -245 0 -84 3 -95 37 -165 46 -93 89 -143 192 -223 187 -146 407 -258 741 -376 100 -35 222 -70 540 -155 774 -205 1268 -405 1686 -681 275 -182 562 -606 778 -1154 68 -170 221 -620 322 -940 23 -74 57 -175 76 -225 152 -396 280 -847 393 -1385 98 -468 154 -653 232 -777 105 -164 266 -265 428 -267 135 -1 254 54 376 174 120 119 229 291 294 466 16 44 29 72 30 63 0 -30 -31 -182 -60 -294 -54 -200 -107 -320 -168 -378 -105 -100 -460 -227 -637 -227 -90 0 -137 14 -180 52 -50 44 -140 182 -184 286 -37 83 -131 354 -131 375 0 5 -7 23 -14 40 -8 18 -35 109 -61 202 -25 94 -57 213 -71 265 -15 52 -41 151 -59 220 -18 69 -78 298 -134 510 -112 419 -131 495 -186 705 -115 442 -177 646 -273 886 -291 729 -723 1248 -1322 1587 -295 168 -655 296 -1059 378 -295 60 -729 191 -1056 321 -222 87 -425 211 -540 328 -77 77 -197 250 -220 315 -26 74 -30 162 -9 222 30 85 140 188 279 260 340 175 763 298 1280 372 145 21 292 35 540 49 118 7 237 6 398 -3z m355 -185 c260 -28 405 -59 697 -151 313 -99 425 -149 625 -279 208 -136 323 -235 566 -485 120 -123 343 -380 330 -380 -3 0 4 -10 15 -22 75 -90 250 -339 327 -468 136 -225 237 -436 387 -805 29 -71 95 -227 145 -345 106 -248 104 -242 215 -625 46 -159 98 -337 115 -395 36 -124 121 -532 147 -710 26 -181 26 -839 0 -1013 -25 -168 -90 -448 -126 -544 -59 -160 -151 -346 -216 -438 -59 -84 -162 -177 -232 -211 -52 -26 -68 -29 -159 -29 -95 0 -104 2 -175 37 -71 35 -172 122 -202 175 -57 98 -73 148 -176 554 -152 597 -258 983 -361 1319 -21 69 -53 172 -70 230 -203 671 -436 1314 -582 1604 -43 86 -192 317 -281 436 -68 90 -211 247 -287 314 -133 117 -394 265 -655 372 -157 64 -466 169 -685 234 -1034 303 -1313 409 -1640 626 -120 80 -181 137 -230 220 -32 53 -35 65 -35 134 1 92 21 137 97 204 63 58 112 83 249 131 57 20 167 61 244 92 328 130 716 207 1174 233 189 11 609 2 779 -15z m-2732 -1031 c103 -139 227 -245 352 -301 144 -64 473 -174 852 -284 463 -135 502 -146 590 -163 147 -30 191 -42 350 -100 267 -97 342 -127 460 -187 254 -129 329 -176 505 -310 234 -178 388 -345 495 -537 24 -42 79 -135 123 -207 271 -438 449 -916 671 -1800 30 -121 93 -376 140 -566 115 -467 176 -693 287 -1064 66 -220 180 -487 244 -570 l38 -50 -94 -7 c-175 -13 -384 19 -498 76 -41 22 -87 65 -160 152 -92 111 -255 602 -461 1389 -17 66 -33 127 -36 137 -4 15 12 17 153 20 171 3 182 7 229 67 17 24 19 43 19 216 0 173 -2 192 -19 216 -49 64 -50 64 -306 67 l-236 3 -78 257 c-133 436 -291 819 -461 1117 -37 66 -81 139 -96 162 -16 23 -29 44 -29 46 0 2 40 6 88 9 96 6 152 27 152 57 0 23 -17 27 -224 46 -88 9 -190 20 -226 26 -67 11 -233 60 -226 66 2 2 53 17 114 33 161 42 213 75 236 148 9 29 0 28 -122 -2 -268 -68 -443 -90 -717 -90 -243 0 -391 15 -635 64 -588 118 -1168 406 -1502 747 -65 66 -68 71 -88 155 -78 329 -109 680 -90 1023 15 276 10 268 85 132 34 -63 89 -149 121 -193z m2474 -2500 c38 -61 58 -123 71 -220 15 -112 27 -479 28 -827 l1 -298 24 -24 c25 -25 55 -36 176 -62 59 -13 157 -18 469 -22 l395 -6 42 -130 43 -130 -522 -5 c-502 -5 -523 -6 -557 -25 -73 -43 -70 -7 -70 -802 l0 -713 -135 0 -135 0 0 701 c0 766 2 735 -58 791 -43 40 -101 48 -340 48 -198 0 -261 5 -652 50 -238 27 -437 53 -442 58 -19 19 -27 71 -13 82 23 19 115 41 215 50 52 5 140 14 195 19 55 6 312 10 571 11 449 0 473 1 495 19 l24 19 0 529 c0 290 -3 593 -7 673 -9 168 -1 202 51 237 19 13 49 23 68 23 29 0 37 -6 63 -46z m1614 -1488 c28 -59 19 -178 -16 -216 -18 -19 -28 -20 -140 -18 l-120 3 -34 120 c-18 66 -33 126 -34 133 0 9 39 12 164 12 l164 0 16 -34z"/>
                <path d="M3305 7143 c-95 -13 -236 -78 -420 -193 -49 -32 -118 -71 -152 -88 l-62 -32 -48 22 c-71 31 -159 34 -291 8 -313 -60 -473 -169 -443 -301 13 -58 50 -106 101 -132 40 -20 59 -22 180 -21 154 2 197 11 277 59 114 68 176 86 338 101 256 23 440 15 478 -19 7 -7 19 -13 27 -15 38 -9 166 -109 270 -212 64 -63 149 -146 189 -185 250 -238 707 -814 821 -1033 30 -57 68 -117 84 -133 39 -38 91 -53 125 -36 30 14 71 89 71 128 0 63 -127 261 -322 500 -238 293 -316 397 -361 484 -8 17 -44 69 -80 117 -36 47 -62 90 -59 94 4 4 1 4 -6 0 -7 -4 -15 -1 -18 8 -3 8 -53 57 -112 108 -247 217 -397 316 -560 371 -41 14 -69 27 -64 31 5 3 47 17 93 32 85 27 117 43 156 79 32 30 63 87 63 117 0 79 -152 157 -275 141z m183 -85 c52 -35 55 -73 9 -118 -17 -17 -34 -31 -39 -31 -18 -3 -24 -5 -43 -15 -23 -13 -90 -30 -195 -50 -104 -20 -150 -33 -150 -43 0 -4 80 -46 178 -92 97 -45 197 -94 222 -107 134 -72 222 -126 227 -138 3 -8 9 -12 13 -9 5 3 12 1 15 -5 4 -6 23 -21 43 -34 99 -63 210 -197 399 -476 129 -191 165 -239 372 -490 118 -144 179 -233 227 -332 l33 -71 -20 -28 c-11 -16 -29 -29 -40 -29 -24 0 -69 61 -126 174 -49 98 -90 163 -176 280 -116 159 -181 231 -482 536 -127 129 -245 253 -261 274 -104 141 -256 284 -355 336 -106 55 -193 73 -359 73 -212 1 -375 -36 -591 -134 -87 -40 -103 -44 -204 -49 -123 -8 -162 1 -191 44 -12 19 -15 38 -11 68 11 81 84 144 204 177 106 28 321 32 407 7 l59 -17 96 46 c53 25 139 72 191 104 140 85 205 121 279 153 58 25 76 28 147 26 68 -3 87 -7 122 -30z"/>
            </g>
        </svg>
    </symbol>
    <symbol id="add-to-cart-svg">
        <svg viewBox="0 0 128.000000 128.000000">
            <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)">
                <path d="M414 992 l-139 -247 -124 -3 -124 -3 6 -42 c3 -23 15 -91 27 -152 11 -60 25 -132 30 -160 5 -27 20 -113 34 -190 14 -77 26 -141 26 -142 0 -2 213 -3 474 -3 443 0 475 1 480 18 3 9 10 46 16 82 6 36 20 110 30 165 54 281 70 370 70 396 l0 29 -118 0 -118 0 -124 223 c-68 122 -132 234 -143 250 l-19 28 -33 -21 -34 -21 -39 20 -40 20 -138 -247z m347 -38 l117 -209 -240 -3 c-133 -1 -243 0 -245 2 -8 8 230 427 240 423 6 -2 63 -97 128 -213z m-506 -247 c-5 -17 1 -26 24 -40 16 -9 32 -17 35 -17 3 0 17 18 31 40 l25 40 260 0 260 0 20 -40 c11 -22 26 -40 33 -40 10 0 37 15 65 36 2 1 -1 12 -8 23 -11 21 -9 21 100 21 101 0 110 -2 110 -19 0 -17 -19 -124 -70 -386 -10 -55 -24 -129 -30 -165 -6 -36 -13 -73 -16 -82 -5 -17 -36 -18 -470 -18 -255 0 -464 4 -464 8 0 7 -21 120 -95 517 -14 72 -25 133 -25 138 0 4 50 7 110 7 110 0 110 0 105 -23z"/>
                <path d="M590 535 l0 -95 -90 0 -90 0 0 -45 0 -45 90 0 90 0 0 -90 0 -90 45 0 45 0 0 90 0 90 95 0 95 0 0 45 0 45 -95 0 -95 0 0 95 0 95 -45 0 -45 0 0 -95z"/>
            </g>
        </svg>
    </symbol>
</svg>
<div id="admin">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('js/contact_me.js') }}"></script>
<script src="{{ asset('js/freelancer.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
