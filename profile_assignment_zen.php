<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Assignment - Pokedex</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top: 25px">
    <!-- Profile Section -->
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/zentiouss.png" class="card-img-top" style="width: 128px; height: 128px; border-radius: 100px;">
                            <h3 class="card-title">Zen</h3>
                            <h5 class="card-text" style="font-size: 14px; opacity: 75%; margin-top: -7.5px">@zentiouss</h5>
                            <h5 class="card-text">Hey I'm Zen!</h5>
                            <h6 class="card-text">I'm currently working on this school project called "Pokedex"</h6>
                            <a class="btn btn-outline-light" role="button" href="https://zentiouss.com">www.zentiouss.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="row">
        <div class="col">
            <h5 class="title" style="margin-top: 5px;">Comments <span class="badge text-bg-secondary" style="border-radius: 100px;">0</span></h5>
        </div>
    </div>

    <!-- Commenting Section -->
    <div class="row">
        <div class="col-9" style="">
            <div class="input-group flex-nowrap">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg></span>
                    <input id="textInput" type="text" class="form-control" placeholder="Comment" aria-label="Comment" aria-describedby="addon-wrapping"/>
                    <button id="sendbutton" type="button" class="btn btn-light hidden"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16"> <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/> </svg></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("textInput")
        .addEventListener("input", (event) => {
            const text = event.originalTarget.value;
            if (text == ""){
                const button = document.getElementById("sendbutton");
                button.classList.add("hidden");
            }else{
                const button = document.getElementById("sendbutton");
                button.classList.remove("hidden");
            }
            console.log(event.originalTarget)
        })
</script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
