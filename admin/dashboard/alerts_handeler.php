<?php

function alert($alert_type, $head_mesage, $mesage){
    echo'
    <!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
    <style>
      .alert_container {
        position: fixed;
        top: 100px;
        right: 30px;
      }
    </style>
  </head>
  <body>
    <div class="alert_container">
      <div class="row ">
        <div class="toast" data-autohide="true" data-delay="5000">
          <div class="toast-header">
            <strong class="mr-auto text-'.$alert_type.'">'.$head_mesage.'</strong>
            <small class="text-muted">
              <script>
                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes();
                document.write(time);
              </script>
            </small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
              &times;
            </button>
          </div>
          <div class="toast-body">
            '.$mesage.'
          </div>
        </div>
      </div>
    </div>
    <script>
      $(".toast").toast("show");
    </script>
  </body>
</html>
    ';
}
?>
