<?php
require_once('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Laundry | pricing</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
</head>

<body>
    <div class="row">
        <div class="content">
            <?php
            if (isset($_SESSION['memberUserId'])) {
            ?>
                <nav>
                    <div class="header">
                        <div class="logoWrapper">
                            <img class="logo" src="logo.jpg" />
                            <input type="checkbox" id="check">
                            <label for="check" class="checkbtn">
                                <i class="fas fa-bars"></i>
                            </label>
                            <div class="topnav">
                                <ul>
                                    <li><a href="usermanagement.php">Home</a></li>
                                    <li><a href="pricing.php">Pricing</a></li>
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="about">

                </div>
            <?php } else {
            ?>
                <nav>
                    <div class="header">
                        <div class="logoWrapper">
                            <img class="logo" src="logo.jpg" />
                            <input type="checkbox" id="check">
                            <label for="check" class="checkbtn">
                                <i class="fas fa-bars"></i>
                            </label>
                            <div class="topnav">
                                <ul>
                                    <li><a href="usermanagement.php">Home</a></li>
                                    <li><a href="userregister.php">Sign up</a></li>
                                    <li><a href="usersignin.php">Log in</a></li>
                                    <li><a href="pricing.php">Pricing</a></li>
                                    <li><a href="aboutus.php">About us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            <?php  } ?>

        </div>
    </div>

    <div class="aboutimg">
        <img id="pricing" src="pricing.jpg" alt="aboutus">
    </div>
    <div class="pricingdetails">
        <h1>Only Wash price list</h1><br>
        <table>
            <colgroup>
                <col width="275">
                <col width="324">
            </colgroup>
            <tbody>
                <tr class="su-even">
                    <td style="text-align: center"><strong>
                            <h3><b>Heavy Clothes</b></h3>
                        </strong></td>
                    <td style="text-align: center;"><strong>
                            <h3><b>Price Range</b></h3>
                        </strong></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Up to weight 4.5 kgs</td>
                    <td style="text-align: center;">₹269 – ₹300</td>
                </tr>
                <tr class="su-even">
                    <td style="text-align: center;">Up to weight 5.5 kgs</td>
                    <td style="text-align: center;">₹299 – ₹330</td>
                </tr>
                <tr>
                    <td style="text-align: center;">Up to weight 6.5 kgs</td>
                    <td style="text-align: center;">₹329 – ₹350</td>
                </tr>
                <tr class="su-even">
                    <td style="text-align: center;">Up to weight 7.5 kgs</td>
                    <td style="text-align: center;">₹359 – ₹400</td>
                </tr>
            </tbody>
    </div>
    </table>
    <br>
    <table>
        <colgroup>
            <col width="275">
            <col width="324">
        </colgroup>
        <tbody>
            <tr class="su-even">
                <td style="text-align: center"><strong>
                        <h3><b>Regular Clothes</b></h3>
                    </strong></td>
                <td style="text-align: center;"><strong>
                        <h3><b>Price Range</b></h3>
                    </strong></td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 4.5 kgs</td>
                <td style="text-align: center;">₹269 – ₹300</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 5.5 kgs</td>
                <td style="text-align: center;">₹299 – ₹330</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 6.5 kgs</td>
                <td style="text-align: center;">₹329 – ₹350</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 7.5 kgs</td>
                <td style="text-align: center;">₹359 – ₹400</td>
            </tr>
        </tbody>
        </div>
    </table>
    <br>
    <h1>Wash and Iron price list</h1><br>

    <table>
        <colgroup>
            <col width="275">
            <col width="324">
        </colgroup>
        <tbody>
            <tr class="su-even">
                <td style="text-align: center"><strong>
                        <h3><b>Heavy Clothes</b></h3>
                    </strong></td>
                <td style="text-align: center;"><strong>
                        <h3><b>Price Range</b></h3>
                    </strong></td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 4.5 kgs</td>
                <td style="text-align: center;">₹269 – ₹300</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 5.5 kgs</td>
                <td style="text-align: center;">₹299 – ₹330</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 6.5 kgs</td>
                <td style="text-align: center;">₹329 – ₹350</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 7.5 kgs</td>
                <td style="text-align: center;">₹359 – ₹400</td>
            </tr>
        </tbody>
        </div>
    </table>
    <br>
    <table>
        <colgroup>
            <col width="275">
            <col width="324">
        </colgroup>
        <tbody>
            <tr class="su-even">
                <td style="text-align: center"><strong>
                        <h3><b>Regular Clothes</b></h3>
                    </strong></td>
                <td style="text-align: center;"><strong>
                        <h3><b>Price Range</b></h3>
                    </strong></td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 4.5 kgs</td>
                <td style="text-align: center;">₹269 – ₹300</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 5.5 kgs</td>
                <td style="text-align: center;">₹299 – ₹330</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 6.5 kgs</td>
                <td style="text-align: center;">₹329 – ₹350</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 7.5 kgs</td>
                <td style="text-align: center;">₹359 – ₹400</td>
            </tr>
        </tbody>
        </div>
    </table>
    <br>
    <h1>Dry wash price list</h1><br>
    <table>
        <colgroup>
            <col width="275">
            <col width="324">
        </colgroup>
        <tbody>
            <tr class="su-even">
                <td style="text-align: center"><strong>
                        <h3><b>Heavy Clothes</b></h3>
                    </strong></td>
                <td style="text-align: center;"><strong>
                        <h3><b>Price Range</b></h3>
                    </strong></td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 4.5 kgs</td>
                <td style="text-align: center;">₹269 – ₹300</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 5.5 kgs</td>
                <td style="text-align: center;">₹299 – ₹330</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 6.5 kgs</td>
                <td style="text-align: center;">₹329 – ₹350</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 7.5 kgs</td>
                <td style="text-align: center;">₹359 – ₹400</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 4.5 kgs</td>
                <td style="text-align: center;">₹269 – ₹300</td>
            </tr>
            <tr class="su-even">
                <td style="text-align: center;">Up to weight 5.5 kgs</td>
                <td style="text-align: center;">₹299 – ₹330</td>
            </tr>
            <tr>
                <td style="text-align: center;">Up to weight 6.5 kgs</td>
                <td style="text-align: center;">₹329 – ₹350</td>
            </tr>
        </tbody>
        </div>
    </table>

</body>

</html>