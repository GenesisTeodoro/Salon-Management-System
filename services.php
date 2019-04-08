<?php require_once 'servicesProcess.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="iconfont/material-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="dhtmlxScheduler/codebase/dhtmlxscheduler_material.css" 
            rel="stylesheet" type="text/css" charset="utf-8">
    <script src="dhtmlxScheduler/codebase/dhtmlxscheduler.js"></script>
    <title>Lux Beauty</title>
</head>
<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper pink lighten-1">
                        <a href="#" data-target="desktopNavBar" class="sidenav-trigger show-on-large hide-on-med-and-down"><i class="material-icons">menu</i></a>
                        <a href="#" data-target="mobileNavBar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <a href="salonmanagement.php" class="brand-logo center">Lux Beauty</a>
                        <ul class="right hide-on-med-and-down">
                                <li><a id="account" href="#" class="dropdown-trigger" data-target="accountDropdown">
                                    Account
                                    <i class="material-icons left">account_circle</i>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a></li>
                        </ul>
                        <ul class="right hide-on-med-and-down">
                            <li><a id="branch" href="#" class="dropdown-trigger" data-target="branchDropdown">
                                Change Branch
                                <i class="material-icons left">business</i>
                                <i class="material-icons right">arrow_drop_down</i>
                            </a></li>
                        </ul>
            </div>
        </nav>
    </div>    
            <!--DESKTOP SIDENAV-->

            <ul class="sidenav collapsible" data-collapsible="accordion" id="desktopNavBar">
                <li><a class="active waves-effect collapsible-header sidenav-close" href="salonmanagement.php"><i class="material-icons left">home</i>Home</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="calendar.php"><i class="material-icons left">date_range</i>Calendar</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="customers.php"><i class="material-icons left">people</i>Customers</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="appointments.php"><i class="material-icons left">today</i>Appointments</a></li>
                <li><a href="#" class=" waves-effect collapsible-header">
                        <i class="material-icons left">add</i>Add
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="waves-effect sidenav-close" href="services.php">Services</a></li>
                            <li><a class="waves-effect sidenav-close" href="products.php">Products</a></li>
                            <li><a class="waves-effect sidenav-close" href="staffs.php">Staffs</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="reports.php"><i class="material-icons left">assignment</i>Reports</a></li>
            </ul>

            <!--MOBILE SIDENAV-->

            <ul class="sidenav collapsible" data-collapsible="accordion" id="mobileNavBar">
                <li><a class="active waves-effect collapsible-header sidenav-close" href="salonmanagement.php"><i class="material-icons left">home</i>Home</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="calendar.php"><i class="material-icons left">date_range</i>Calendar</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="customers.php"><i class="material-icons left">people</i>Customers</a></li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="appointments.php"><i class="material-icons left">today</i>Appointments</a></li>
                <li><a href="#" class="waves-effect collapsible-header">
                        <i class="material-icons left">add</i>Add
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="waves-effect sidenav-close" href="services.php">Services</a></li>
                            <li><a class="waves-effect sidenav-close" href="products.php">Products</a></li>
                            <li><a class="waves-effect sidenav-close" href="staffs.php">Staffs</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="waves-effect collapsible-header sidenav-close" href="reports.php"><i class="material-icons left">assignment</i>Reports</a></li>
                <div class="divider"></div>
                <li>
                    <a class="red-text waves-effect collapsible-header" href="#">
                        <i class="material-icons left">business</i>Change Branch
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="active waves-effect sidenav-close" href="#">LB - Manila</a></li>
                            <li><a class="waves-effect sidenav-close" href="#">LB - Cubao</a></li>
                            <li><a class="waves-effect sidenav-close" href="#">LB - Marikina</a></li>
                            <li><a class="waves-effect sidenav-close" href="#">LB - Pasig</a></li>
                            <li><a class="waves-effect sidenav-close" href="#">LB - Antipolo</a></li>
                        </ul>
                    </div>
                
                </li>
                <li><a class="red-text waves-effect collapsible-header" href="#"><i class="material-icons left">arrow_back</i>Log out</a></li>
            </ul>

            <!--Quick Sale Modal-->
            
            <div class="fixed-action-btn">
                <a href="#quickSaleModal" class=" btn btn-large pink lighten-1 waves-effect modal-trigger"><i class="material-icons left">monetization_on</i>Quick Sale</a>
            </div>

            <div class="modal modal-fixed-footer" id="quickSaleModal">
                <div class="modal-content">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" id="customerName" class="validate">
                                <label for="customerName">Customer Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input pattern="(0[1-9]|1[0-2])[-/.](0[1-9]|[1-2][0-9]|3[0-1])[-/.](19|20)\d\d" placeholder="MM/DD/YYYY" type="date" id="date" class="validate">
                                <label for="date">Date</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">
                                <a href="#" class="dropdown-trigger" data-target="staffDropdown"></a>
                            </div>
                            <div class="col s2">
                                <a href="#" class="dropdown-trigger" data-target="timeDropdown"></a>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" id="quantity" class="validate">
                                <label for="quantity">Qty.</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="price" class="validate">
                                <label for="price">Price</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">
                                <input type="text" id="discount" class="validate">
                                <label for="discount">Discount by %</label>
                            </div>
                            <div class="input-field col s3">
                                <input disabled value="0" type="text" id="total" class="validate boldText black-text">
                                <label for="total">Sub Total</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4">
                                <a href="#" class="dropdown-trigger" data-target="servicesDropdown"></a>
                            </div>
                            <div class="col s4">
                                <a href="#" class="dropdown-trigger" data-target="productsDropdown"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input disabled value="0" type="text" id="total" class="validate boldText black-text">
                                <label for="total">Grand Total</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button onclick="M.toast({html: 'Your order has been submitted', displayLength: 2000})" href="#!" class="modal-close waves-effect btn pink lighten-1">Submit</button>
                    <button type="reset" href="#!" class="modal-close waves-effect btn pink lighten-1">Cancel</button>
                </div>
            </div>
            
            <!-- Dropdowns-->

            <ul id="accountDropdown" class="dropdown-content">
                    <li><a class="waves-effect" href="#">Account Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="waves-effect" href="#!">Log out</a></li>
            </ul>
            <ul id="branchDropdown" class="dropdown-content">
                <li><a class="active waves-effect" href="#">LB - Manila</a></li>
                <li><a class="waves-effect" href="#">LB - Cubao</a></li>
                <li><a class="waves-effect" href="#">LB - Marikina</a></li>
                <li><a class="waves-effect" href="#">LB - Pasig</a></li>
                <li><a class="waves-effect" href="#">LB - Antipolo</a></li>
            </ul>
            <select id="servicesDropdown" class="dropdown pink lighten-4" multiple>
                <option value="" disabled select>Add Services</option>
                <option value="">Facial Care</option>
                <option value="">Body Massage</option>
                <option value="">Hair Treatment</option>
                <option value="">Nail Spa</option>
            </select>
            <select id="staffDropdown" class="dropdown">
                <option value="" disabled selected>Select Staff</option>
                <option value="">Gerard Way</option>
                <option value="">Ray Toro</option>
                <option value="">Frank Iero</option>
                <option value="">Mikey Way</option>
            </select>
            <select id="timeDropdown" class="dropdown-content">
                <option selected>8:00AM</option>
                <option>8:30AM</option>
                <option>9:00AM</option>
                <option>9:30AM</option>
                <option>10:00AM</option>
                <option>10:30AM</option>
                <option>11:00AM</option>
                <option>11:30AM</option>
                <option>12:00PM</option>
                <option>12:30PM</option>
                <option>1:00PM</option>
                <option>1:30PM</option>
                <option>2:00PM</option>
                <option>2:30PM</option>
                <option>3:00PM</option>
                <option>3:30PM</option>
                <option>4:00PM</option>
                <option>4:30PM</option>
                <option>5:00PM</option>
            </select>
            <select id="productsDropdown" class="dropdown pink lighten-4" multiple>
                <option value="" disabled select>Add Product</option>
                <option value="1">Hair Products</option>
                <option value="1">Face Products</option>
                <option value="1">Body Products</option>
                <option value="1">Nail Products</option>
            </select>

            <!--Services Page Content-->

            <?php ?>
                    <?php
                        $mysqli = new mysqli('localhost','root','','salon') or die(mysqli_error($mysqli));
                        $result = $mysqli->query("SELECT * FROM services") or die($mysqli->error);
                        //pre_r($result);?>
                    <br><br>
                    <div class="container">
                        <form class="col s12" action="" method="POST">
                            <div class="row">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="col s3">
                                    <label>Service Name</label>
                                    <input type="text" name="serviceName" placeholder="Enter Service Name" 
                                        value="<?php echo $serviceName;?>" required>
                                </div>
                                <div class="col s3">
                                    <label>Service Price</label>
                                    <input type="text" name="servicePrice" placeholder="Enter Service Price"
                                        value="<?php echo $servicePrice;?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s8">
                                    <label>Service Description</label>
                                    <input name="serviceDesc" placeholder="Enter Service Description" 
                                        value="<?php echo $serviceDesc;?>" required>
                                </div>
                            </div>

                                <?php
                                if($update == true): ?>
                                    <button onclick="M.toast({html: 'Service has been updated', displayLength: 2000})" class="btn" type="submit" name="update">Update</button>
                                <?php else: ?>
                                    <button onclick="M.toast({html: 'Service has been saved', displayLength: 2000})" class="btn" type="submit" name="save">Save</button>
                                <?php endif; ?>

                        </form>
                        <br><br>
                        <div class="divider"></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Service Price</th>
                                    <th>Service Description</th>
                                    <th colspan=2>Action</th>
                                </tr>
                            </thead>

                            <?php
                                while($row = $result->fetch_assoc()):  ?>

                                <tr>
                                    <td><?php echo $row['serviceName']; ?> </td>
                                    <td>₱ <?php echo $row['servicePrice']; ?> </td>
                                    <td><?php echo $row['serviceDesc']; ?> </td>
                                    <td>
                                        <a class="btn" href="services.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                        <a onclick="M.toast({html: 'Service has been deleted', displayLength: 2000})" class="btn" href="servicesProcess.php?delete=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                        </table>

                        <?php
                            function pre_r($array){
                                echo '<pre>';
                                print_r($array);
                                echo '</pre>';
                            }?>
                    </div>

            
        

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>