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

        .details {
            border-top-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            border-radius: 8px;
        }

        .accordion-button:not(.collapsed) {
            background-color: white !important;
            border-bottom: 1px solid lightgray;
            box-shadow: none;
        }

        .accordion-button:focus {
            color: #495057;
            /*background-color: #efefef;*/
            border-bottom: 1px solid lightgray;
            outline: 0;
            box-shadow: none;
        }
    </style>
</head>

<body>
    @include("includes.navbar")
    <div class="poppins d-flex container justify-content-end align-items-center" style="margin-top: var(--p-space-300); width:75%;">
        <div class="d-flex justify-content-end">
            <a href="{{route('Inbox')}}" class="mx-2 btn btn-dark btn-sm button"><i class="bi bi-arrow-left-circle"></i> Go Back</a>
        </div>
    </div>
    <div class="poppins container justify-content-center align-items-center" style="margin-top: var(--p-space-100); width:75%;">
        <div class="row justify-content-center" style="margin-left:-2px;">
            <div class="col-xl-4">
                <div class="accordion Polaris-Button--pressable" id="orderAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOrderInfo">
                            <button class="accordion-button collapsed p-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrderInfo" aria-expanded="true" aria-controls="collapseOrderInfo">
                                Order Info
                            </button>
                        </h2>
                        <div id="collapseOrderInfo" class="accordion-collapse collapse" aria-labelledby="headingOrderInfo" data-bs-parent="#orderAccordion">
                            <div class="accordion-body" style="height:140px !important;">
                                <p class="m-0 fw-medium">Order ID: <span class="fw-light" style="font-size: small;">HBY-5YD-WWWY</span></p>
                                <p class="m-0 fw-medium">Order number: <span class="fw-light" style="font-size: small;">343</span></p>
                                <p class="m-0 fw-medium">Order status: <span class="fw-light" style="font-size: small;">delivered</span></p>
                                <p class="m-0 fw-medium">Created on: <span class="fw-light" style="font-size: small;">06/12/2024 5:29 pm</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="accordion Polaris-Button--pressable" id="productAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingProductInfo">
                            <button class="accordion-button collapsed p-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductInfo" aria-expanded="false" aria-controls="collapseProductInfo">
                                Product Info
                            </button>
                        </h2>
                        <div id="collapseProductInfo" class="accordion-collapse collapse" aria-labelledby="headingProductInfo" data-bs-parent="#productAccordion">
                            <div class="accordion-body" style="height:140px !important; overflow-y: scroll;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th><img class="img-thumbnail" style="height:50px !important; margin-right:var(--p-space-150);" src="https://th.bing.com/th/id/OIG1.AZASYWE9Q1XuHg1p_csv?w=1024&h=1024&rs=1&pid=ImgDetMain" alt=""></th>
                                            <td>
                                                <span>Adventure T-Shirt</span>
                                                <br>
                                                <span>Black &nbsp; xl</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img class="img-thumbnail" style="height:50px !important; margin-right:var(--p-space-150);" src="https://th.bing.com/th/id/OIG4._5XzLAnVKeXycISlSNzO?w=1024&h=1024&rs=1&pid=ImgDetMain" alt=""></th>
                                            <td>
                                                <span>Fancy T-Shirt</span>
                                                <br>
                                                <span>White &nbsp; xl</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="accordion Polaris-Button--pressable" id="complaintAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingComplaintDetails">
                            <button class="accordion-button collapsed p-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComplaintDetails" aria-expanded="false" aria-controls="collapseComplaintDetails">
                                Complaint Details
                            </button>
                        </h2>
                        <div id="collapseComplaintDetails" class="accordion-collapse collapse" aria-labelledby="headingComplaintDetails" data-bs-parent="#complaintAccordion">
                            <div class="accordion-body">
                                <p class="m-0 fw-medium">Tracking ID: <span class="fw-light" style="font-size: small;">HBY-5YD-WWWY</span></p>
                                <p class="m-0 fw-medium">Ticket number: <span class="fw-light" style="font-size: small;">343</span></p>
                                <p class="m-0 fw-medium">Complaint status: <span class="fw-light" style="font-size: small;">Open</span></p>
                                <p class="m-0 fw-medium">Created on: <span class="fw-light" style="font-size: small;">06/12/2024 5:29 pm</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Chat Row-->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="m-2">
                    <div class="chat-container shadow-sm border">
                        <div class="chat-header border-bottom p-3">
                            <div>
                                <h5>View Complaints Details</h5>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="chat-message received" id="admin_sms">
                                <div class="message-content ">
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
                                <div class="message-content">
                                    <h6 class="pb-1 mb-1 border-bottom fw-normal">Replied by: Sheeraz (CSR)</h6>
                                    <div>
                                        <p style="line-height: 16px;" class="m-0 fw-normal">Hi Kailash,</p>
                                        <p style="line-height: 16px;" class="m-0 fw-light">We have received your complaint and providing you our best and co-orpetive services. Thank you</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chatBody">

                            </div>
                        </div>
                        <div class="chat-footer border-top p-2">
                            <textarea type="text" rows="5" class="form-control" id="messageInput" placeholder="Type a message..."></textarea>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-dark button" style="margin:5px 3px; width: 50%;" type="button" id="sendButton"><i class="bi bi-send"></i> Send</button>
                                <input type="file" id="fileInput" style="display: none;">
                                <button title="Attach File" class="btn btn-sm btn-dark button" style="margin:5px 3px; width: 50%;" type="button" id="fileButton"><i class="bi bi-paperclip"></i> File Attachment</button>
                            </div>
                            <div class="mt-1 text-center">
                                <!-- <label style="vertical-align: middle;" for="fileInput">File Send</label> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="card mb-2 shadow-sm mt-2">
                    <div class="chat-header border-bottom p-3">
                        <h5>Tickets Details</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-0 fw-medium">Tracking ID: <span class="fw-light" style="font-size: small; ">HBY-5YD-WWWY</span></p>
                        <p class="m-0 fw-medium">Ticket number: <span class="fw-light" style="font-size: small;">343</span></p>
                        <p class="m-0 fw-medium">Ticket status: <span class="fw-light" style="font-size: small;">New</span></p>
                        <p class="m-0 fw-medium">Created on: <span class="fw-light" style="font-size: small;">06/12/2024 5:29 pm</span></p>
                        <p class="m-0 fw-medium">Updated: <span class="fw-light" style="font-size: small;">06/12/2024 5:29 pm</span></p>
                        <p class="m-0 fw-medium">Last replier: <span class="fw-light" style="font-size: small;">sheeraz</span></p>
                        <p class="m-0 fw-medium">Category: <span class="fw-light" style="font-size: small;">General</span></p>
                        <p class="m-0 fw-medium">Replies: <span class="fw-light" style="font-size: small;">1</span></p>
                        <p class="m-0 fw-medium">Priority: <span class="fw-light" style="font-size: small;">High</span></p>
                    </div>
                </div>
                <div class="card mb-2 shadow-sm">
                    <div class="chat-header border-bottom p-2">
                        <h5>Actions</h5>
                    </div>
                    <div class="card-body">
                        <!--Priority-->
                        <div style="margin-bottom: var(--p-space-150);">
                            <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Priority</span>
                            </label>
                            <div class="Polaris-Select" style="min-width:130px;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option selected value="">High</option>
                                    <option value="">Low</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">High</span>
                                    <span class="Polaris-Select__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                </path>
                                                <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop">
                                </div>
                            </div>
                        </div>
                        <!--Transfer-->
                        <div style="margin-bottom: var(--p-space-150);">
                            <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Transfer</span>
                            </label>
                            <div class="Polaris-Select" style="min-width:130px;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option selected value="">Sheeraz</option>
                                    <option value="">Danish</option>
                                    <option value="">Amanullah</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">Sheeraz</span>
                                    <span class="Polaris-Select__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                </path>
                                                <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop">
                                </div>
                            </div>
                        </div>
                        <!--Status-->
                        <div style="margin-bottom: var(--p-space-150);">
                            <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                            </label>
                            <div class="Polaris-Select" style="min-width:130px;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option selected value="">Open</option>
                                    <option value="">Close</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">Open</span>
                                    <span class="Polaris-Select__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                </path>
                                                <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- checking -->
    <!-- Modal Structure -->
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

        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

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