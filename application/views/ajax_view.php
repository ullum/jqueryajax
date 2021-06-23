<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="div1">
                    <h2>Text ini akan diganti. Bos!</h2><br>
                </div>
                <button class="btn btn-primary">Ambil data dengan Ajax</button>
            </div>
        </div>
    </div>
    <!-- Load bootstrap js file -->
    <script type="text/javascript" src="<?php echo
                                        base_url('assets/js/jquery.min.js'); ?>" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("#div1").load("data.txt");
            });
        });
    </script>
</body>

</html>