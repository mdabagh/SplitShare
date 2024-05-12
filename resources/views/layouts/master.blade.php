<!DOCTYPE html>
<html dir='ltr' lang='en'>
<head>
    <title>Split Share</title>
    <link rel='stylesheet' id='wp-block-library-rtl-css' href='template/css/style-rtl.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='main-styles-css' href='template/css/style.css' type='text/css' media='all' />
</head>

<body class='MN-2 mobS hdMn bD Rtl onHm onIndx' id='mainCont'>
    <script>
        /*<![CDATA[*/
        (localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainCont').classList.add('drK'): document
            .querySelector('#mainCont').classList.remove('drK') /*]]>*/
    </script>
    <input class='prfI hidden' id='offPrf' type='checkbox'>
    <input class='navI hidden' id='offNav' type='checkbox'>

    <div class='mainWrp'>

        <header class='header' id='header'>
            <div class='headCn'>
                <div class='headD headL'>
                    <div class='headIc'>
                        <label class='tNav tIc bIc' for='offNav'><svg class='line' viewbox='0 0 24 24'>
                                <line x1='3' x2='21' y1='12' y2='12'></line>
                                <line x1='3' x2='21' y1='5' y2='5'></line>
                                <line x1='3' x2='21' y1='19' y2='19'>
                                </line>
                            </svg>
                        </label>
                    </div>
                    <div class='headN section' id='header-title'>
                        <div class='widget Header' data-version='2' id='Header1'>
                            <div class='headInnr'>
                                <h1 class='headH'></h1>
                                <bdi>
                                    <a href="https://bayangar.com/" class='headTtl'>{{ __('layout.title') }}</a>
                                </bdi>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class='headD headR'>
                    <div class='headI'>
                          <div class='headP section' id='header-icon'>
                            <div class='widget TextList' data-version='2' id='TextList000'>
                                <ul class='headIc'>
                                    <li class='isDrk'>
                                        <span aria-label='Dark' class='tDark tIc tDL bIc' onclick='darkMode()' role='button'>
                                            <svg class='line' viewbox='0 0 24 24'>
                                                <g class='d1'>
                                                    <path d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z' transform='translate(-169.3959 -166.45548)'></path>
                                                </g>
                                                <g class='d2'>
                                                    <path class='f' d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'></path>
                                                    <path d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z' stroke-width='2'></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class='isSrh'>
                                        <label aria-label='Search' class='tSrch tIc bIc' for='searchIn'>
                                            <svg class='line' viewbox='0 0 24 24'>
                                                <g transform='translate(2.000000, 2.000000)'>
                                                    <circle cx='9.76659044' cy='9.76659044' r='8.9885584'></circle>
                                                    <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'></line>
                                                </g>
                                            </svg>
                                        </label>
                                    </li>
                                    <li class='isLang'>
                                        <span class='tLang tIc tDL bIc' onclick='toggleLanguage()' role='button'>
                                            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 456.323"><path d="M155.973 43.223C187.119 15.868 223.013 1.405 258.337.098c36.727-1.36 72.763 11.486 102.18 38.81l30.341 28.186 75.479-6.084c24.927-2.009 48.011 20.599 45.471 45.47l-15.012 146.995c-2.539 24.868-20.472 45.467-45.471 45.467h-49.293l-70.66 57.525 5.107-57.525h-42.624v3.573c0 29.56-24.164 53.72-53.723 53.72h-49.386l4.846 54.567c31.837 17.569 63.048 25.015 92.699 21.103 27.807-3.669 54.429-17.375 79.119-42.136l-15.2-13.387 63.242-14.078-7.412 66.223-16.231-15.428c-31.146 27.356-67.04 41.818-102.364 43.126-36.727 1.36-72.763-11.486-102.18-38.811l-8.529-7.923-65.419-53.256H68.915c-29.874 0-50.739-24.421-53.655-52.882L.244 156.359a45.284 45.284 0 01-.103-8.247c1.918-23.82 22.247-43.744 45.855-46.167a46.77 46.77 0 018.551-.115l180.387 14.541c2.586-22.377 21.98-38.48 45.174-40.35l110.201-8.883-35.653-20.239c-32.693-18.559-64.749-26.494-95.166-22.481-27.806 3.668-54.429 17.375-79.119 42.136l15.2 13.387-63.243 14.078 7.413-66.223 16.232 15.427zm121.378 255.632c-23.732-1.438-42.714-21.298-42.714-45.38V132.892L53.257 118.27a30.697 30.697 0 00-5.585.046h-.032c-15.704 1.603-29.781 15.203-31.06 31.086a29.058 29.058 0 00.039 5.281l15.012 147.026c2.031 19.907 16.058 38.022 37.284 38.022h50.187l57.861 47.103-4.183-47.103h67.352c20.449 0 37.219-16.766 37.219-37.216v-3.66zM90.787 173.84h43.401v-12.228h19.389v12.228h43.558v20.079h-8.943c-1.613 12.681-5.159 23.132-11.184 34.396-5.097 9.514-11.678 18.679-19.318 27.464 12.195 14.587 27.337 27.277 45.364 38.845l-9.971 15.544c-18.927-12.143-35.001-25.515-48.21-40.916-11.817 11.43-25.239 22.079-39.3 31.803l-10.482-15.171c13.914-9.626 27.131-20.142 38.504-31.353-10.481-15.336-18.508-32.549-24.063-52.343l17.787-4.987c4.555 16.236 10.941 30.527 19.151 43.318 5.598-6.778 10.441-13.736 14.266-20.88 4.692-8.776 7.213-16.032 8.801-25.72h-78.75V173.84zm309.023 40.975h-54.066l-7.21 24.607h-27.686c11.758-31.119 25.335-68.486 37.098-99.621 4.235-11.244 9.057-29.879 24.463-29.879 15.972 0 21.275 17.073 25.718 28.869l37.663 101.14h-28.545l-7.435-25.116zm-5.884-23.929l-21.084-55.793-21.148 55.793h42.232z"/></svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class='mainIn'>
            <div class='blogMn'>
                <div class='mnBr'>
                    <div class='mnBrs'>
                        <div class='mnH'></div>
                        <div class='mnMob section' id='nav-widget-1'>
                            <div class='widget PageList' data-version='2' id='PageList002'>
                                <ul class='mMenu'>
                                    <li>
                                        <a href='https://bayangar.com/sitemap_index.xml'>{{ __('layout.donate') }}</a>
                                    </li>

                                </ul>
                            </div>
                            <div class='widget LinkList' data-version='2' id='LinkList002'>
                                <div class='mNav'>
                                    <label class='tIc bIc' for='offNav'>
                                        <svg viewbox='0 0 512 512'>
                                            <path d='M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256
                                        c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32
                                        C448,238.3,434.3,224,417.4,224z'>
                                            </path>
                                        </svg>
                                    </label>
                                </div>
                                <ul class='mSoc'>
                                    <li>
                                        <span class='a tIc bIc'>
                                            <svg viewbox='0 0 32 32'>
                                                <path
                                                    d='M24,3H8A5,5,0,0,0,3,8V24a5,5,0,0,0,5,5H24a5,5,0,0,0,5-5V8A5,5,0,0,0,24,3Zm3,21a3,3,0,0,1-3,3H17V18h4a1,1,0,0,0,0-2H17V14a2,2,0,0,1,2-2h2a1,1,0,0,0,0-2H19a4,4,0,0,0-4,4v2H12a1,1,0,0,0,0,2h3v9H8a3,3,0,0,1-3-3V8A3,3,0,0,1,8,5H24a3,3,0,0,1,3,3Z'>
                                                </path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li>
                                        <span class='a tIc bIc'>
                                            <svg viewbox='0 0 32 32'>
                                                <path
                                                    d='M22,3H10a7,7,0,0,0-7,7V22a7,7,0,0,0,7,7H22a7,7,0,0,0,7-7V10A7,7,0,0,0,22,3Zm5,19a5,5,0,0,1-5,5H10a5,5,0,0,1-5-5V10a5,5,0,0,1,5-5H22a5,5,0,0,1,5,5Z'>
                                                </path>
                                                <path
                                                    d='M16,9.5A6.5,6.5,0,1,0,22.5,16,6.51,6.51,0,0,0,16,9.5Zm0,11A4.5,4.5,0,1,1,20.5,16,4.51,4.51,0,0,1,16,20.5Z'>
                                                </path>
                                                <circle cx='23' cy='9' r='1'></circle>
                                            </svg>
                                        </span>
                                    </li>
                                    <li>
                                        <span class='a tIc bIc'>
                                            <svg viewbox='0 0 32 32'>
                                                <path
                                                    d='M13.35,28A13.66,13.66,0,0,1,2.18,22.16a1,1,0,0,1,.69-1.56l2.84-.39A12,12,0,0,1,5.44,4.35a1,1,0,0,1,1.7.31,9.87,9.87,0,0,0,5.33,5.68,7.39,7.39,0,0,1,7.24-6.15,7.29,7.29,0,0,1,5.88,3H29a1,1,0,0,1,.9.56,1,1,0,0,1-.11,1.06L27,12.27c0,.14,0,.28-.05.41a12.46,12.46,0,0,1,.09,1.43A13.82,13.82,0,0,1,13.35,28ZM4.9,22.34A11.63,11.63,0,0,0,13.35,26,11.82,11.82,0,0,0,25.07,14.11,11.42,11.42,0,0,0,25,12.77a1.11,1.11,0,0,1,0-.26c0-.22.05-.43.06-.65a1,1,0,0,1,.22-.58l1.67-2.11H25.06a1,1,0,0,1-.85-.47,5.3,5.3,0,0,0-4.5-2.51,5.41,5.41,0,0,0-5.36,5.45,1.07,1.07,0,0,1-.4.83,1,1,0,0,1-.87.2A11.83,11.83,0,0,1,6,7,10,10,0,0,0,8.57,20.12a1,1,0,0,1,.37,1.05,1,1,0,0,1-.83.74Z'>
                                                </path>
                                            </svg>
                                        </span>
                                    </li>

                                    <li>
                                        <span class='a tIc bIc'>
                                            <svg viewbox='0 0 32 32'>
                                                <path
                                                    d='M24,28a1,1,0,0,1-.62-.22l-6.54-5.23a1.83,1.83,0,0,1-.13.16l-4,4a1,1,0,0,1-1.65-.36L8.2,18.72,2.55,15.89a1,1,0,0,1,.09-1.82l26-10a1,1,0,0,1,1,.17,1,1,0,0,1,.33,1l-5,22a1,1,0,0,1-.65.72A1,1,0,0,1,24,28Zm-8.43-9,7.81,6.25L27.61,6.61,5.47,15.12l4,2a1,1,0,0,1,.49.54l2.45,6.54,2.89-2.88-1.9-1.53A1,1,0,0,1,13,19a1,1,0,0,1,.35-.78l7-6a1,1,0,1,1,1.3,1.52Z'>
                                                </path>
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class='mnMen section' id='nav-widget-2'>
                            <div class='widget HTML' data-version='2' id='HTML000'>
                                <ul class='mnMn' itemscope='itemscope'
                                    itemtype='https://schema.org/SiteNavigationElement'>
                                    <li class='drp br'>
                                    <a class='a' href='https://bayangar.com/' itemprop='url'>
                                            <svg class='line' viewbox='0 0 24 24'>
                                                <g transform='translate(2.400000, 2.000000)'>
                                                    <path d='M1.24344979e-14,11.713 C1.24344979e-14,6.082
                                            0.614,6.475 3.919,3.41 C5.365,2.246 7.615,0 9.558,0
                                            C11.5,0 13.795,2.235 15.254,3.41 C18.559,6.475
                                            19.172,6.082 19.172,11.713 C19.172,20 17.213,20
                                            9.586,20 C1.959,20 1.24344979e-14,20
                                            1.24344979e-14,11.713 Z'>
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class='n' itemprop='name'>{{ __('layout.home') }}</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a class='a' href='https://bayangar.com/about/' itemprop='url'>
                                            <svg class='line' viewbox='0 0 24 24'>
                                                <g transform='translate(2.749500, 2.549500)'>
                                                    <path d='M6.809,18.9067 C3.137,18.9067
                                                9.41469125e-14,18.3517 9.41469125e-14,16.1277
                                                C9.41469125e-14,13.9037 3.117,11.8997
                                                6.809,11.8997 C10.481,11.8997 13.617,13.8847
                                                13.617,16.1077 C13.617,18.3307 10.501,18.9067
                                                6.809,18.9067 Z'>
                                                    </path>
                                                    <path d='M6.809,8.728 C9.219,8.728 11.173,6.774
                                                11.173,4.364 C11.173,1.954 9.219,-2.48689958e-14
                                                6.809,-2.48689958e-14 C4.399,-2.48689958e-14
                                                2.44496883,1.954 2.44496883,4.364 C2.436,6.766
                                                4.377,8.72 6.778,8.728 L6.809,8.728 Z'>
                                                    </path>
                                                    <path d='M14.0517,7.5293 C15.4547,7.1543 16.4887007,5.8753
                                                16.4887007,4.3533 C16.4897,2.7653 15.3627,1.4393
                                                13.8647,1.1323'>
                                                    </path>
                                                    <path d='M14.7113,11.104 C16.6993,11.104 18.3973,12.452
                                                18.3973,13.655 C18.3973,14.364 17.8123,15.092
                                                16.9223,15.301'>
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class='n' itemprop='name'>{{ __('layout.about') }}</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="fCls" for="offNav"></label>
            </div>
            <div class='blogCont'>
                <div class='secIn'>

                    @yield('content')

                   
                    <div class='mobMn section' id='mobile-menu'>
                        <div class='widget TextList' data-version='2' id='TextList99'>
                            <ul>
                                <li class='mH nmH'>
                                    <span aria-label='خانه' data-text='خانه' onClick="window.scrollTo({top: 0});">
                                        <svg class='line' viewbox='0 0 24 24'>
                                            <g transform='translate(2.400000, 2.000000)'>
                                                <path d='M1.24344979e-14,11.713 C1.24344979e-14,6.082
                                0.614,6.475 3.919,3.41 C5.365,2.246 7.615,0 9.558,0
                                C11.5,0 13.795,2.235 15.254,3.41 C18.559,6.475
                                19.172,6.082 19.172,11.713 C19.172,20 17.213,20
                                9.586,20 C1.959,20 1.24344979e-14,20
                                1.24344979e-14,11.713 Z'>
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </li>
                                <li class='mS'>
                                    <label data-text='جستجو' for='searchIn'>
                                        <svg class='line' viewbox='0 0 24 24'>
                                            <g transform='translate(2.000000, 2.000000)'>
                                                <circle cx='9.76659044' cy='9.76659044' r='8.9885584'></circle>
                                                <line x1='16.0183067' x2='19.5423342' y1='16.4851259'
                                                    y2='20.0000001'>
                                                </line>
                                            </g>
                                        </svg>
                                    </label>
                                </li>
                                <li class='mN'>
                                    <label data-text='منو' for='offNav'>
                                        <svg class='line' viewbox='0 0 24 24'>
                                            <g transform='translate(3.000000, 3.000000)'>
                                                <path class='fill' d='M18.00036,3.6738 C18.00036,5.7024 16.35516,7.3476
                            14.32656,7.3476 C12.29796,7.3476 10.65366,5.7024
                            10.65366,3.6738 C10.65366,1.6452
                            12.29796,-6.39488462e-15 14.32656,-6.39488462e-15
                            C16.35516,-6.39488462e-15 18.00036,1.6452
                            18.00036,3.6738 Z'>
                                                </path>
                                                <path class='fill' d='M7.3467,3.6738 C7.3467,5.7024 5.7024,7.3476
                            3.6729,7.3476 C1.6452,7.3476 4.79616347e-15,5.7024
                            4.79616347e-15,3.6738 C4.79616347e-15,1.6452
                            1.6452,-6.39488462e-15 3.6729,-6.39488462e-15
                            C5.7024,-6.39488462e-15 7.3467,1.6452 7.3467,3.6738
                            Z'>
                                                </path>
                                                <path class='fill' d='M18.00036,14.26194 C18.00036,16.29054
                            16.35516,17.93484 14.32656,17.93484
                            C12.29796,17.93484 10.65366,16.29054
                            10.65366,14.26194 C10.65366,12.23334
                            12.29796,10.58814 14.32656,10.58814
                            C16.35516,10.58814 18.00036,12.23334
                            18.00036,14.26194 Z'>
                                                </path>
                                                <path class='fill' d='M7.3467,14.26194 C7.3467,16.29054 5.7024,17.93484
                            3.6729,17.93484 C1.6452,17.93484
                            4.79616347e-15,16.29054 4.79616347e-15,14.26194
                            C4.79616347e-15,12.23334 1.6452,10.58814
                            3.6729,10.58814 C5.7024,10.58814 7.3467,12.23334
                            7.3467,14.26194 Z'>
                                                </path>
                                            </g>
                                        </svg>
                                    </label>
                                </li>
                                <li class='mD'>
                                    <span class='tDL' data-light='روشن' data-text='تاریک' onclick='darkMode()'
                                        role='button'>
                                        <svg class='line' viewbox='0 0 24 24'>
                                            <g class='d1'>
                                                <path
                                                    d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z'
                                                    transform='translate(-169.3959 -166.45548)'>
                                                </path>
                                            </g>
                                            <g class='d2'>
                                                <path class='f' d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5
                            8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015
                            5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'>
                                                </path>
                                                <path d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14
                            4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86
                            19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08
                            12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99
                            4.99Z' stroke-width='2'>
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <footer>
                        <div class='cdtIn section' id='credit-widget'>
                            <div class='widget HTML' data-version='2' id='HTML88'>
                                <div class='footCdt'>
                                    <span class='credit'>© <span id='getYear'>
                                            <script>
                                                var d = new Date();
                                                var n = d.getFullYear();
                                                document.getElementById('getYear').innerHTML = n;
                                            </script>
                                        </span>
                                        &nbsp; </span>
                                    <span>کلیه حقوق مطالب و وبسایت نزد گروه <a href='https://bayangar.com/'>بیانگر</a>
                                        محفوظ است.</span>
                                </div>
                            </div>
                            <div class='widget TextList' data-version='2' id='TextList88'>
                                <div class='toTop tTop' data-text='بالا' onclick='window.scrollTo({top: 0});'>
                                    <svg class='line' viewbox='0 0 24 24'>
                                        <g
                                            transform='translate(12.000000, 12.000000) rotate(-180.000000)
                        translate(-12.000000, -12.000000) translate(5.000000,
                        8.500000)'>
                                            <path d='M14,0 C14,0 9.856,7 7,7 C4.145,7 0,0 0,0'>
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <noscript>
            <input class='nJs hidden' id='forNoJS' type='checkbox'>
            <div class='noJs' data-text='Bayangar works best with JavaScript enabled'></div>
        </noscript>
        <script src="template/js/app.js"></script>
        <script>
            function toggleLanguage() {
                const htmlElement = document.querySelector('html');
                const currentLanguage = htmlElement.getAttribute('lang');

                if (currentLanguage === 'fa') {
                    htmlElement.setAttribute('lang', 'en');
                    htmlElement.setAttribute('dir', 'ltr');

                    var styleSheet = document.createElement('link');
                    styleSheet.rel = 'stylesheet';
                    styleSheet.href = 'template/css/style-ltr.css';
                    styleSheet.type = 'text/css';
                    styleSheet.media = 'all';
                    document.head.appendChild(styleSheet);

                    localStorage.setItem('language', 'en');

                } else {
                    htmlElement.setAttribute('lang', 'fa');
                    htmlElement.setAttribute('dir', 'rtl');

                    var styleSheet = document.querySelector('link[href="template/css/style-ltr.css"]');
                    styleSheet.parentNode.removeChild(styleSheet);

                    localStorage.setItem('language', 'fa');
                }
            }
            document.addEventListener('DOMContentLoaded', function() {
                const htmlElement = document.querySelector('html');
                const savedLanguage = localStorage.getItem('language');
                if (savedLanguage === 'en') {
                    console.log(savedLanguage);
                    htmlElement.setAttribute('lang', 'en');
                    htmlElement.setAttribute('dir', 'ltr');

                    var styleSheet = document.createElement('link');
                    styleSheet.rel = 'stylesheet';
                    styleSheet.href = 'template/css/style-ltr.css';
                    styleSheet.type = 'text/css';
                    styleSheet.media = 'all';
                    document.head.appendChild(styleSheet);
                }else{
                    console.log(savedLanguage);

                    htmlElement.setAttribute('lang', 'fa');
                    htmlElement.setAttribute('dir', 'rtl');

                    var styleSheet = document.querySelector('link[href="template/css/style-ltr.css"]');
                    styleSheet.parentNode.removeChild(styleSheet);
                }
            });
        </script>
</body>
</html>
