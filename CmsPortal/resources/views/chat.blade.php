<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@include("admin-includes.head-links")
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
    <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 600px;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            width: 100%;
        }

        .chat-body {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            background-color: #fff;
            color: #343a40;
        }

        .chat-message {
            display: flex;
            margin-bottom: 1rem;
            align-items: flex-end;
        }

        .chat-message .message-content {
            max-width: 70%;
            padding: 0.5rem 1rem;
            border-radius: 15px;
            position: relative;
            font-size: 0.9rem;
        }

        .chat-message.sent .message-content {
            background-color: #f3f7fb;
            color: #000;
            box-shadow: var(--bs-box-shadow-sm) !important;
            margin-left: auto;
            border-top-right-radius: 0;
            max-width: 50%;
        }

        .chat-message.received .message-content {
            background-color: #efefef;
            color: #000;
            box-shadow: var(--bs-box-shadow-sm) !important;
            border-top-left-radius: 0;
            max-width: 50%;
        }

        .custom-form-control {
            background-color: #fff;
            border: 3px solid #efefef;
            transition: 600ms;
            outline: 0;
            color: #000;
            width: 100%;
            padding: 5px 8px;
        }

        .custom-form-control:focus {
            color: #495057;
            background-color: #efefef;
            border: 1px solid #efefef;
            outline: 0;
            box-shadow: none;
        }

        .custom-form-control::placeholder {
            padding: 0px 6px;
        }

        .details {
            border-top-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    @include("admin-includes.header")
    @include("admin-includes.sidebar")

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row justify-content-center mb-3">
                                <div class="col-xl-10">
                                    <div class="row justify-content-end mt-0 mx-3">
                                        <a href="{{route('inbox')}}" class="text-muted btn btn-icon btn-sm btn-ghost-primary rounded-circle m-0 p-0" style="font-size: larger;">
                                            <i class=" ri-arrow-go-back-line"></i>
                                        </a>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                            <div class="m-2">
                                                <div class="chat-container shadow-sm border">
                                                    <div class="chat-header border-bottom p-3">
                                                        <div>
                                                            <h5>View Complaints Details</h5>
                                                        </div>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-message received" id="admin_sms">
                                                            <div class="message-content">
                                                                <div>
                                                                    <p style="line-height: 16px;" class="m-0 fw-normal">Product Issues</p>
                                                                    <p style="line-height: 16px;" class="m-0 fw-light">Name: T-Shirt</p>
                                                                    <p style="line-height: 16px;" class="m-0 mb-2 fw-light">Issue: Size</p>
                                                                    <p style="line-height: 16px;" class="m-0 fw-normal">Delivery Issues</p>
                                                                    <p style="line-height: 16px;" class="m-0 mb-2 fw-light">Issue: Late Delivery</p>
                                                                    <p style="line-height: 16px;" class="m-0 fw-normal">Request For</p>
                                                                    <p style="line-height: 16px;" class="m-0 mb-2 fw-light">Order Exchange</p>
                                                                    <p style="line-height: 16px;" class="m-0 fw-normal">Comments</p>
                                                                    <p style="line-height: 16px;" class="m-0 mb-2 fw-light">Urgent Size Change Require in Medium Size</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message sent">
                                                            <div class="message-content ">
                                                                <h6>Replied by: Sheeraz (CSR)</h6>
                                                                <div>
                                                                    <p style="line-height: 16px;" class="m-0 fw-normal">Hi Kailash,</p>
                                                                    <p style="line-height: 16px;" class="m-0 fw-light">We have received your complaint and providing you our best and co-orpetive services. Thank you</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="chatBody">

                                                        </div>
                                                    </div>
                                                    <div class="chat-footer border-top p-3">
                                                        <div class="input-group">
                                                            <textarea rows="5" type="text" class="custom-form-control rounded-3" id="messageInput" placeholder="Type a message..."></textarea>
                                                        </div>
                                                        <div class="d-flex mt-2">
                                                            <button class="btn btn-dark btn-sm rounded-3 mx-1 w-50" type="button" id="sendButton"><i style="vertical-align: middle;" class="bx bx-send"></i> Send Message</button>
                                                            <input type="file" id="fileInput" style="display: none;">
                                                            <button class="btn btn-dark btn-sm rounded-3 mx-1 w-50" type="button" id="fileButton"><i style="vertical-align: middle;" class="bx bx-paperclip"></i> File Attachment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <div class="m-2">
                                                <div class="card mb-1 shadow-sm details">
                                                    <div class="chat-header border-bottom p-3">
                                                        <div>
                                                            <h5>Tickets Details</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Tracking ID: <span class="fw-light">HBY-5YD-WWWY</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Ticket number: <span class="fw-light">343</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Ticket status: <span class="fw-light">New</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Created on: <span class="fw-light">06/12/2024 5:29 pm</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Updated: <span class="fw-light">06/12/2024 5:29 pm</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Last replier: <span class="fw-light">sheeraz</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Category: <span class="fw-light">General</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Replies: <span class="fw-light">1</span></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">Priority: <span class="fw-light">High</span></p>
                                                    </div>
                                                </div>
                                                <div class="card mb-1 shadow-sm details">
                                                    <div class="p-2 border-bottom">
                                                        <h6>View Previous</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <p style="line-height: 20px;" class="m-0 fw-normal"><a href="index.php" class="text-decoration-none">view previous tickets by </a></p>
                                                        <p style="line-height: 20px;" class="m-0 fw-normal">sheraz.h3techs@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="card mb-1 shadow-sm details">
                                                    <div class="p-2 border-bottom">
                                                        <h6>Priority</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <select class="form-select form-select-sm">
                                                            <option selected value="">High</option>
                                                            <option value="">Low</option>
                                                            <option value="">medium</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card mb-1 shadow-sm details">
                                                    <div class="p-2 border-bottom">
                                                        <h6>Transfer</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <select class="form-select form-select-sm">
                                                            <option selected value="">Danish</option>
                                                            <option value="">Sheeraz</option>
                                                            <option value="">Aman-ullah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card mb-1 shadow-sm details">
                                                    <div class="p-2 border-bottom">
                                                        <h6>Status</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <select class="form-select form-select-sm">
                                                            <option selected value="">Open</option>
                                                            <option value="">Close</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- footer here -->
        @include("admin-includes.footer")
    </div>
    @include("admin-includes.theme-backtop-setting")
    <!-- every page links -->
    @include("admin-includes.every_page_links")
    <!-- This Page Links -->
    <!-- charts js -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileModalLabel">File Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modalContent"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#sendButton').on('click', function() {
            sendMessage();
        });

        $('#fileButton').on('click', function() {
            $('#fileInput').click();
        });

        $('#fileInput').on('change', function() {
            const file = this.files[0];
            if (file) {
                const chatBody = $('#chatBody');
                const messageDiv = $('<div></div>').addClass('chat-message sent');
                const messageContent = $('<div><h6 class="pb-1 mb-2 border-bottom fw-normal">Replied by: Sheeraz (CSR)</h6></div>').addClass('message-content');

                const fileType = file.type.split('/')[0];

                let fileElement;

                if (fileType === 'image') {
                    fileElement = $('<img>').attr('src', URL.createObjectURL(file)).css('max-width', '50%');
                } else if (fileType === 'video') {
                    fileElement = $('<div class="video-container" style="position: relative; max-width: 100%; cursor: pointer;"></div>');
                    const video = $('<video muted></video>').css('max-width', '100%');
                    const source = $('<source>').attr('src', URL.createObjectURL(file)).attr('type', file.type);
                    video.append(source);
                    const overlay = $('<div class="video-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: transparent;"></div>');
                    fileElement.append(video).append(overlay);
                } else if (fileType === 'audio') {
                    fileElement = $('<audio controls>');
                    const source = $('<source>').attr('src', URL.createObjectURL(file)).attr('type', file.type);
                    fileElement.append(source);
                } else if (file.type === 'application/pdf') {
                    fileElement = $('<embed>').attr('src', URL.createObjectURL(file)).css('max-width', '100%').css('height', '500px').attr('type', 'application/pdf');
                } else {
                    fileElement = $('<a></a>').attr('href', URL.createObjectURL(file)).attr('download', file.name).text(file.name);
                }

                messageContent.append(fileElement);
                messageDiv.append(messageContent);
                chatBody.append(messageDiv);

                // Attach click event to fileElement to show modal
                fileElement.find('.video-overlay').on('click', function() {
                    $('#modalContent').html(fileElement.find('video').clone().attr('controls', 'controls').css('max-width', '100%'));
                    $('#fileModal').modal('show');
                });

                // Scroll to the bottom of the chat body
                chatBody.scrollTop(chatBody.prop('scrollHeight'));

                // Clear the file input field
                $('#fileInput').val("");
            }
        });

        function sendMessage() {
            const messageInput = $('#messageInput');
            const messageText = messageInput.val().trim();
            var agentName = "Replied by: Sheeraz (CSR)";
            if (messageText !== "") {
                const chatBody = $('#chatBody');
                const messageDiv = $('<div class="fw-light" style="white-space: pre-wrap; text-wrap: wrap; word-wrap: break-word; word-break: break-all;"></div>').addClass('chat-message sent');

                // Create the message content div
                const messageContent = $('<div class="message-content" style="text-wrap: wrap;"></div>');

                // Create the agent name heading and append it to messageContent
                const agent = $('<h6 class="pb-1 mb-1 border-bottom fw-normal"></h6>').html(agentName);
                messageContent.append(agent);

                // Append the message text to messageContent
                messageContent.append($('<div style="text-wrap: wrap;"></div>').html(messageText));

                // Append messageContent to messageDiv
                messageDiv.append(messageContent);

                // Append the message div to the chat body
                chatBody.append(messageDiv);

                // Scroll to the bottom of the chat body
                chatBody.scrollTop(chatBody.prop('scrollHeight'));

                // Clear the input field
                messageInput.val("");
            }
        }

        // Send message on Enter key press, line break on Shift + Enter
        $('#messageInput').on('keydown', function(e) {
            // console.log(`Key pressed: ${e.key}, Shift: ${e.shiftKey}`);

            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                $('#sendButton').click();
            } else if (e.key === 'Enter' && e.shiftKey) {
                e.preventDefault();
                const cursorPosition = this.selectionStart;
                const text = $(this).val();
                $(this).val(text.substring(0, cursorPosition) + '\n' + text.substring(cursorPosition));
                this.selectionStart = this.selectionEnd = cursorPosition + 1;
            }
        });

        // Function to handle file click and show modal
        $(document).on('click', '.chat-message.sent img, .chat-message.sent video, .chat-message.sent embed, .chat-message.sent a', function(event) {
            $('#modalContent').html($(this).clone().css('max-width', '100%'));
            $('#fileModal').modal('show');
        });

        // Pause video when modal is closed
        $('#fileModal').on('hide.bs.modal', function() {
            const video = $('#modalContent').find('video')[0];
            if (video) {
                video.pause();
            }
        });
    });
</script>

</html>