<?php ?>
<head>
    <div class="header_wrapper">
        <div class="header-left">
            <div class="header_logo"><?php echo get_custom_logo()?></div>
            <div class="menu">
                <ul>
                    <li><a href="/">Новинки</a></li>
                    <li><a href="/">каталог</a></li>
                    <li><a href="/">категории</a></li>
                    <li><a href="/">другое</a></li>
                    <li><a href="/">ТЕГИ</a></li>
                </ul>
            </div>
        </div>

        <div class="header-right">
            <div class="search">
                <input placeholder="Поиск">
            </div>
            <div class="header_icon">
                <div class="icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z" fill="#EFEFEF"/>
                        <path d="M5.33791 17.3206C5.999 14.5269 8.77176 13 11.6426 13H12.3574C15.2283 13 18.001 14.5269 18.6621 17.3206C18.79 17.8611 18.8917 18.4268 18.9489 19.0016C19.0036 19.5512 18.5523 20 18 20H6.00003C5.44775 20 4.99645 19.5512 5.05113 19.0016C5.10833 18.4268 5.21 17.8611 5.33791 17.3206Z" fill="#EFEFEF"/>
                    </svg>
                </div>
                <div class="icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                        <g clip-path="url(#clip0_38_1232)">
                            <path d="M3.45064 11.4083L10.4033 17.9396C10.6428 18.1645 10.7625 18.277 10.9037 18.3047C10.9673 18.3172 11.0327 18.3172 11.0963 18.3047C11.2375 18.277 11.3572 18.1645 11.5967 17.9396L18.5493 11.4083C20.5055 9.57066 20.743 6.54667 19.0978 4.42614L18.7885 4.02741C16.8203 1.49065 12.8696 1.91608 11.4867 4.81372C11.2913 5.22303 10.7087 5.22303 10.5133 4.81372C9.13034 1.91608 5.17969 1.49066 3.21151 4.02742L2.90216 4.42614C1.25692 6.54667 1.49447 9.57066 3.45064 11.4083Z" stroke="#EFEFEF" stroke-width="2"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_38_1232">
                                <rect width="22" height="19" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8 8V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V8" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.58579 7.58579C3 8.17157 3 9.11438 3 11V14C3 17.7712 3 19.6569 4.17157 20.8284C5.34315 22 7.22876 22 11 22H13C16.7712 22 18.6569 22 19.8284 20.8284C21 19.6569 21 17.7712 21 14V11C21 9.11438 21 8.17157 20.4142 7.58579C19.8284 7 18.8856 7 17 7H7C5.11438 7 4.17157 7 3.58579 7.58579ZM10 12C10 11.4477 9.55228 11 9 11C8.44772 11 8 11.4477 8 12V14C8 14.5523 8.44772 15 9 15C9.55228 15 10 14.5523 10 14V12ZM16 12C16 11.4477 15.5523 11 15 11C14.4477 11 14 11.4477 14 12V14C14 14.5523 14.4477 15 15 15C15.5523 15 16 14.5523 16 14V12Z" fill="#EFEFEF"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
