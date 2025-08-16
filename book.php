<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelcorp</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Average&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Bellefair&family=Bree+Serif&family=Calistoga&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Kavivanar&family=Kreon:wght@300..700&family=Lemon&family=Paprika&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav_logo">
            <a href="index.html#home"><img src="image/logo.png"></a>
        </div>
        <div class="nav_link">
            <ul>
                <li><a href="index.html#home">HOME</a></li>
                <li><a href="index.html#about">ABOUT</a></li>
                <li><a href="index.html#package">PACKAGE</a></li>
                <li><a href="book.php"><button>BOOK</button></a></li>
            </ul>
        </div>
        <div class="menu_bar">
            <i class="fa fa-reorder"></i>
        </div>
    </nav>
    <div class="drop_down">
        <ul>
            <li><a href="index.html#home">HOME</a></li>
            <li><a href="index.html#about">ABOUT</a></li>
            <li><a href="index.html#package">PACKAGE</a></li>
            <li><a href="book.html"><button>BOOK</button></a></li>
        </ul>
    </div>

    <div class="booking_home">
        <h1>BOOK YOUR TRIP</h1>
        <p>-Seamless Booking for Unforgettable Adventures-</p>  
    </div>
    <section class="booking">
        <form id="booking_form" action="booking.php" method="post">
            <h2>Personal Details</h2>
            <div class="booking_input_boxs">
                <div class="input_box">
                    <label for="fname">First Name :</label>
                    <input type="text" id="fname" name="fname" placeholder="First Name" required>
                    <span id="fnameError" class="error-message" style="display:none;color:red;"></span>
                </div>
                <div class="input_box">
                    <label for="lname">Last Name :</label>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    <span id="lnameError" class="error-message" style="display:none;color:red;"></span>
                </div>
                <div class="input_box">
                    <label for="email">Email :</label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <span id="emailError" class="error-message" style="display:none;color:red;"></span>
                </div>
                <div class="input_box">
                    <label for="phone_num">Phone Number :</label>
                    <input type="tel" id="phone_num" name="phone_num" pattern="[0-9]{10}" placeholder="Phone Number" required>
                    <span id="phoneError" class="error-message" style="display:none;color:red;"></span>
                </div>
                <div class="input_box">
                    <label for="address">Address :</label>
                    <input type="text" id="address" name="address" placeholder="Address" required>
                </div>
            </div>
            <h2>Tour Details</h2>
            <div class="booking_input_boxs">
                <div class="input_box">
                    <label for="destination">Choose Your Destination :</label>
                    <select name="destination" id="destination" required>
                        <option value="Japan">Japan</option>
                        <option value="India">India</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Brazil">Brazil</option>
                        <option value="France">France</option>
                        <option value="Australia">Australia</option>
                        <option value="UAE">UAE</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Egypt">Egypt</option>
                        <option value="NewZealand">New Zealand</option>
                        <option value="Spain">Spain</option>
                        <option value="Greece">Greece</option>
                        <option value="Canada">Canada</option>
                        <option value="Peru">Peru</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Italy">Italy</option>
                        <option value="Indonesia">Indonesia</option>
                    </select>
                </div>
                <div class="input_box">
                    <label for="tickets">Number Of Tickets :</label>
                    <input type="number" name="tickets" id="tickets" placeholder="Number of tickets" required>
                    <span id="ticketsError" class="error-message" style="display:none;color:red;"></span>
                </div>
                <div class="input_box">
                    <label for="arrival">Arrival :</label>
                    <input type="date" name="arrival" id="arrival" required>
                </div>
                <div class="input_box">
                    <label for="leaving">Leaving :</label>
                    <input type="date" name="leaving" id="leaving" required>
                    <span id="dateError" class="error-message" style="display:none;color:red;"></span>
                </div>
            </div>
            <input type="submit" name="submit" class="sub_but" value="Send">
        </form>
    </section>

    <section class="footer">
        <div class="links">
            <div class="link">
                <h2>Quick links</h2>
                <div class="link_list">
                    <ul>
                        <li><a href="index.html#home"><i class="fa fa-angle-double-right">&nbsp;&nbsp;Home</i></a></li>
                        <li><a href="index.html#about"><i class="fa fa-angle-double-right">&nbsp;&nbsp;About us</i></a></li>
                        <li><a href="index.html#package"><i class="fa fa-angle-double-right">&nbsp;&nbsp;Packages</i></a></li>
                        <li><a href="book.php"><i class="fa fa-angle-double-right">&nbsp;&nbsp;Book</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="link">
                <h2>Contact Details</h2>
                <div class="link_list">
                    <ul>
                        <li><i class="fa fa-phone-square">&nbsp;&nbsp;+94 777777777</i></li>
                        <li><i class="fa fa-phone-square">&nbsp;&nbsp;+1 (123) 456-7890</i></li>
                        <li><i class="fa fa-envelope">&nbsp;&nbsp;info@travelcorp.com</i></li>
                        <li><i class="fa fa-map-marker">&nbsp;&nbsp;Bangalore, Karnataka, India.</i></li>
                    </ul>
                </div>
            </div>
            <div class="link">
                <h2>Social Media</h2>
                <div class="link_list">
                    <ul>
                        <li><a href="https://x.com/"><i class="fa fa-twitter-square">&nbsp;&nbsp;Twitter</i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play">&nbsp;&nbsp;Youtube</i></a></li>
                        <li><a href="https://web.facebook.com/"><i class="fa fa-facebook-square">&nbsp;&nbsp;Facebook</i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram">&nbsp;&nbsp;Instagram</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <hr>
            <p>Created by <span>WebCrafters</span> || All rights reserved</p>
        </div>
    </section>

    <script>
        const menuBar = document.querySelector('.menu_bar');
        const dropDown = document.querySelector('.drop_down');
        
        menuBar.onclick = function() {
            dropDown.classList.toggle('open');
        }

        window.addEventListener("scroll", function() {
            let nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        });

        document.getElementById('booking_form').addEventListener('submit', function(event) {
            let isValid = true;

            
            const fname = document.getElementById('fname').value.trim();
            const fnameError = document.getElementById('fnameError');
            const lname = document.getElementById('lname').value.trim();
            const lnameError = document.getElementById('lnameError');
            const nameRegex = /^[A-Za-z\s]+$/;

            if (!fname || !nameRegex.test(fname)) {
                fnameError.textContent = '*Please enter a valid first name (letters and spaces only).*';
                fnameError.style.display = 'block';
                isValid = false;
            } else {
                fnameError.style.display = 'none';
            }

            if (!lname || !nameRegex.test(lname)) {
                lnameError.textContent = '*Please enter a valid last name (letters and spaces only).*';
                lnameError.style.display = 'block';
                isValid = false;
            } else {
                lnameError.style.display = 'none';
            }

            
            const email = document.getElementById('email').value.trim();
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!email || !emailRegex.test(email)) {
                emailError.textContent = '*Please enter a valid email address.*';
                emailError.style.display = 'block';
                isValid = false;
            } else {
                emailError.style.display = 'none';
            }

            
            const phone = document.getElementById('phone_num').value.trim();
            const phoneError = document.getElementById('phoneError');
            const phoneRegex = /^[0-9]{10}$/;

            if (!phone || !phoneRegex.test(phone)) {
                phoneError.textContent = '*Please enter a valid 10-digit phone number.*';
                phoneError.style.display = 'block';
                isValid = false;
            } else {
                phoneError.style.display = 'none';
            }

            
            const arrival = document.getElementById('arrival').value;
            const leaving = document.getElementById('leaving').value;
            const dateError = document.getElementById('dateError');

            const today = new Date().setHours(0, 0, 0, 0); 
            const arrivalDate = new Date(arrival).setHours(0, 0, 0, 0);
            const leavingDate = new Date(leaving).setHours(0, 0, 0, 0);

            if (arrivalDate < today) {
                dateError.textContent = '*Arrival date cannot be in the past.*';
                dateError.style.display = 'block';
                isValid = false;
            } else if (arrivalDate > leavingDate) {
                dateError.textContent = '*Arrival date cannot be after the leaving date.*';
                dateError.style.display = 'block';
                isValid = false;
            } else {
                dateError.style.display = 'none';
            }

            
            const tickets = document.getElementById('tickets').value;
            const ticketsError = document.getElementById('ticketsError');

            if (tickets <= 0) {
                ticketsError.textContent = '*Please enter a valid number of tickets.*';
                ticketsError.style.display = 'block';
                isValid = false;
            } else {
                ticketsError.style.display = 'none';
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
