<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <title>Sum of Even</title>
</head>
<body>
    <div class="container mt-5 bg-secondary p-5">
        <div class="container text-center">
            <div class="row"><h1 class="h1 text-light p-2">Sum of All Odd and Even Numbers</h1></div>
            <div class="row">
                <div class="input-group">
                    <input type="number" name="myNum" id="myNum" class="form-control" style="max-width: 500px; margin-right: 15px;">
                    <span class="input-group-btn">
                        <button class="btn btn-success" onclick="addNum()">Add Number</button>
                        <button class="btn btn-danger" onclick="delRowE()">Clear All</button>
                   </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h3 class="h3 text-light">Numbers Entered</h3>
                <table id="myTable" class="table table-striped table-success">
                    <th>Even</th>
                    <th>Odd</th>
                </table>
            </div>
            <div class="col-md-3 text-light text-center">
                    <h3 class="h3">Sum of all even numbers</h3>
                    <span id="sumEven"><p class="text-light fw-bold text-center">0</p></span>
            </div>
            <div class="col-md-3 text-light text-center">
                <h3 class="h3">Sum of all odd numbers</h3>
                <span id="sumOdd"><p class="text-light fw-bold text-center">0</p></span>
            </div>
        </div>
    </div>
</body>
</html>
