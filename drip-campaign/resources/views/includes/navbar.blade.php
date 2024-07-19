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
        background-color: #fff;
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
        background: rgba(241, 242, 244, 1);
    }
</style>

<nav class="Polaris-ShadowBevel" style="z-index: 120; --pc-shadow-bevel-z-index: 32;--pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100);">
    <div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-min-height:100%;vertical-align: middle;">
        <div class="mob-center">
            <ul style="display: flex; padding:6px; justify-content: center; margin:0;">
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="{{Route('home')}}">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=80&id=4inu0yHcBPi2&format=png" width="19" height="19" alt="Home icon" class="loaded"> Dashboard</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="https://cms.kiz.app/authenticate/token?shop=voice-of-customer.myshopify.com&amp;target=https%3A%2F%2Fcms.kiz.app%2Finbox&amp;host=YWRtaW4uc2hvcGlmeS5jb20vc3RvcmUvdm9pY2Utb2YtY3VzdG9tZXI">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=30&id=4k4CK3sgG-x7&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Inbox</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="https://cms.kiz.app/authenticate/token?shop=voice-of-customer.myshopify.com&amp;target=https%3A%2F%2Fcms.kiz.app%2Faddstaff&amp;host=YWRtaW4uc2hvcGlmeS5jb20vc3RvcmUvdm9pY2Utb2YtY3VzdG9tZXI">
                        <img style="vertical-align: top;" src="https://img.icons8.com/?size=80&id=112560&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Add Staff</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="{{Route('plans')}}">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=85843&format=png" width="17" height="17" alt="Home icon" class="loaded">
                        Plans</a>
                </li>
                <li>
                    <a class="a" style="text-decoration: none; color: black;" href="{{Route('guide')}}">
                        <img style="vertical-align: middle;" src="https://img.icons8.com/?size=24&id=ETI89AT9Xeqo&format=png" width="19" height="19" alt="Home icon" class="loaded"> App Instruction</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn  Polaris-Button Polaris-Button--pressable Polaris-Button--sizeSmall Polaris-Button--textAlignCenter">
                            <img style="vertical-align: middle;" src="https://img.icons8.com/?size=30&id=59996&format=png" width="17" height="17" alt="Home icon" class="loaded">
                            Settings</button>
                        <div class="drop-content" style="z-index: 1000; position: fixed; width: 10%;">
                            <a href="https://cms.kiz.app/authenticate/token?shop=voice-of-customer.myshopify.com&amp;target=https%3A%2F%2Fcms.kiz.app%2Fsettings&amp;host=YWRtaW4uc2hvcGlmeS5jb20vc3RvcmUvdm9pY2Utb2YtY3VzdG9tZXI">Basic Setting</a>
                            <a href="https://cms.kiz.app/authenticate/token?shop=voice-of-customer.myshopify.com&amp;target=https%3A%2F%2Fcms.kiz.app%2Fnotification&amp;host=YWRtaW4uc2hvcGlmeS5jb20vc3RvcmUvdm9pY2Utb2YtY3VzdG9tZXI">Notification Setting</a>
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
        var currentFile = currentPath.substring(currentPath.lastIndexOf('/'));
        // console.log(currentFile);
        $('nav li a').each(function() {
            var hrefFile = $(this).attr('href').substring($(this).attr('href').lastIndexOf('/'));
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

        $(document).click(function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.drop-content').css('display', 'none');
            }
        });

        // $('.drop-content').on('mouseleave', function() {
        //     $('.drop-content').css('display', 'none')
        // });
    });
</script>