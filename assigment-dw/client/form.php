<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-row">
        <div class="w3-col m3  w3-center">
            <p></p>
        </div>
        <div class="w3-col m6">
            <form name="myform" class="w3-container w3-card-4" action="/assigment-dw/api/insert-into-database.php" method="post">
                <h2 class="w3-text-blue">Creat new street</h2>
                <p>
                    <label class="w3-text-blue"><b>Street names</b></label>
                    <input class="w3-input w3-border" name="nameStreet" type="text">
                </p>

                <p>
                    <label class="w3-text-blue"><b>District names</b></label>
                <div class="w3-dropdown-hover">
                    <select name="district" id="">
                        <option value="0">Quan</option>
                        <option value="1">Ha Dong</option>
                        <option value="2">Dong Da</option>
                        <option value="3">Hoai Duc</option>
                        <option value="4">Cau Giay</option>
                    </select>
                </div>
                </p>

                <p>
                    <label class="w3-text-blue"><b>Founded year</b></label>
                    <input class="w3-input w3-border" name="foundedYear" type="text">
                </p>

                <p>
                    <label class="w3-text-blue"><b>Status</b></label>
                <div class="w3-dropdown-hover">
                    <select name="status" id="">
                        <option value="0">Tinh trang</option>
                        <option value="1">Dang su dung</option>
                        <option value="2">Dang thi cong</option>
                        <option value="3">Dang tu sua</option>
                    </select>
                </div>
                </p>
                <p class="w3-center"><button class="w3-btn w3-blue">Submit</button></p>
            </form>
        </div>
        <div class="w3-col m3  w3-center">
            <p></p>
        </div>
    </div>
</body>
</html>
