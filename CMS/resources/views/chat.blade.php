<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@13.3.0/build/esm/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @include("includes.head-link")
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

    .chat-message .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 1rem;
        
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

    .form-control {
        background-color: #fff;
        border: 3px solid #efefef;
        transition: 600ms;
        outline: 0;
        color: #000;
    }

    .form-control:focus {
        color: #495057;
        background-color: #efefef;
        border: 1px solid #efefef;
        outline: 0;
        box-shadow: none;
    }

    textarea.form-control {
        height: 50px;
    }
    .details{
        border-top-left-radius:0 !important;
        border-bottom-right-radius:0 !important;
        border-radius: 8px;
    }
</style>
</head>
<body>
    @include("includes.navbar")
    <div class="poppins d-flex container justify-content-center align-items-center" style="margin-top: var(--p-space-300); width:75%;">
        <div class="row w-100 justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="m-2">
                    <div class="chat-container shadow-sm border">
                        <div class="chat-header border-bottom p-3">
                            <div>
                                <h5>View Complaints Details</h5>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="chat-message sent">
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
                            <div class="chat-message received" id="admin_sms">
                                <img src="https://placehold.co/50x50" class="avatar" alt="Avatar">
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
                            <div class="input-group bg-light">
                                <textarea type="text" class="form-control" id="messageInput" placeholder="Type a message..."></textarea>
                                <button class="btn btn-dark button" type="button" id="sendButton"><i class="bi bi-send"></i></button>
                                <input type="file" id="fileInput" style="display: none;">
                                <button class="btn btn-dark button" type="button" id="fileButton"><i class="bi bi-paperclip"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="card mb-3 shadow-sm details mt-2">
                    <div class="chat-header border-bottom p-3">
                        <h6>Tickets Details</h6>
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
                <div class="card mb-3 shadow-sm details">
                    <div class="chat-header border-bottom p-3">
                        <h6>Tickets Details</h6>
                    </div>
                    <div class="card-body">
                        <p style="line-height: 20px;" class="m-0 fw-normal"><a href="index.php" class="text-black text-decoration-none">view previous tickets by </a></p>
                        <p style="line-height: 20px;" class="m-0 fw-normal">sheraz.h3techs@gmail.com</p>
                    </div>
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
                const messageContent = $('<div></div>').addClass('message-content');

                const fileType = file.type.split('/')[0];

                if (fileType === 'image') {
                    const img = $('<img>').attr('src', URL.createObjectURL(file)).css('max-width', '50%');
                    messageContent.append(img);
                } else if (fileType === 'video') {
                    const video = $('<video controls>').css('max-width', '100%');
                    const source = $('<source>').attr('src', URL.createObjectURL(file)).attr('type', file.type);
                    video.append(source);
                    messageContent.append(video);
                } else if (fileType === 'audio') {
                    const audio = $('<audio controls>');
                    const source = $('<source>').attr('src', URL.createObjectURL(file)).attr('type', file.type);
                    audio.append(source);
                    messageContent.append(audio);
                } else if (file.type === 'application/pdf') {
                    const pdf = $('<embed>').attr('src', URL.createObjectURL(file)).css('max-width', '100%').css('height', '500px').attr('type', 'application/pdf');
                    messageContent.append(pdf);
                } else {
                    const fileLink = $('<a></a>').attr('href', URL.createObjectURL(file)).attr('download', file.name).text(file.name);
                    messageContent.append(fileLink);
                }

                messageDiv.append(messageContent);
                chatBody.append(messageDiv);

                // Scroll to the bottom of the chat body
                chatBody.scrollTop(chatBody.prop('scrollHeight'));

                // Clear the file input field
                $('#fileInput').val("");
            }
        });

        function sendMessage() {
            const messageInput = $('#messageInput');
            const messageText = messageInput.val().trim();

            if (messageText !== "") {
                const chatBody = $('#chatBody');

                const messageDiv = $('<div class="fw-light" style="white-space: pre-wrap;"></div>').addClass('chat-message sent');
                const messageContent = $('<div></div>').addClass('message-content').text(messageText);

                messageDiv.append(messageContent);
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
    });
</script>

</html>