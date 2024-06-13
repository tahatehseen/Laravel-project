<style>
 /* Style The Dropdown Button */
    .dropbtn {
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .drop-content {
        display: none;
        /* position: absolute; */
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    /* Links inside the dropdown */
    .drop-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .drop-content a:hover {
        background:#ededed;
    }
</style>
<nav class="Polaris-ShadowBevel" style="z-index: 1000; --pc-shadow-bevel-z-index: 32;--pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100);">
    <div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-min-height:100%;vertical-align: middle;">
        <div class="mob-center ">
            <ul style="display: flex; padding:6px; justify-content: center; margin:0;">
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="{{Route('home')}}">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=ETI89AT9Xeqo&format=png" width="19" height="19" alt="Home icon" class="loaded"> App Instruction</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn  Polaris-Button Polaris-Button--sizeSmall Polaris-Button--textAlignCenter">
                    <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=OKXXNn38cTcC&format=png" width="17" height="17" alt="Home icon" class="loaded">
                            Message</button>
                        <div class="drop-content" style="z-index: 1000; position: fixed; width: 10%;">
                            <a href="#">Admin</a>
                            <a href="#">Customer</a>
                        </div>
                    </div>
                </li>
                <!-- <div class="Polaris-Backdrop"></div> -->
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="#">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=G0QpPvSgtsFN&format=png" width="19" height="19" alt="Home icon" class="loaded"> Order Verification</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="#">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=100&id=9VUapBpADpGE&format=png&color=000000" width="17" height="17" alt="Home icon" class="loaded">
                        Bulk SMS</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn Polaris-Button Polaris-Button--sizeSmall Polaris-Button--textAlignCenter">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=100&id=lUAhXJeo12PL&format=png&color=000000" width="17" height="17" alt="Home icon" class="loaded">
                        Abandoned Cart</button>
                        <div class="drop-content" style="z-index: 1000; position: fixed; width: 10%;">
                            <a href="#">Abandoned Orders</a>
                            <a href="#">Discount Codes</a>
                            <a href="#">Message Setting</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="#">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=77&id=UWsL0In9hUI3&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Orders</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="#">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=85843&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Plans</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn  Polaris-Button Polaris-Button--sizeSmall Polaris-Button--textAlignCenter">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=30&id=59996&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Settings</button>
                        <div class="drop-content" style="z-index: 1000; position: fixed; width: 10%;">
                            <a href="#">API Configuration</a>
                            <a href="#">App Setting</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        var currentPath = window.location.pathname;
        var currentFile = currentPath.substring(currentPath.lastIndexOf('/') + 1);
        // console.log(currentFile);
        $('nav li a').each(function() {
            var hrefFile = $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);
            if (hrefFile === currentFile) {
                $(this).parent('li').addClass('active');
            }
        });

        $('.redirectDropdown').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
        });
        $(document).ready(function() {
            // Use event delegation for efficient handling of multiple dropdowns
            $('.dropdown').on('click', '.dropbtn', function() {
                // Target the closest drop-content element using closest()
                const dropdownContent = $(this).closest('.dropdown').find('.drop-content');

                if (dropdownContent.css('display') === 'none') {
                    dropdownContent.css('display', 'block');
                } else {
                    dropdownContent.css('display', 'none');
                }
            });
        });

        $('.drop-content').on('mouseleave', function() {
            $('.drop-content').css('display', 'none')
        })
    });
</script>