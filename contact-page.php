<?php 
    $pageTitle = "Contact Us | Netmatters";

    ini_set('display_errors', 'On');
    include('inc/header.php');
?>


<div class="top-cntct-ctn media">
    <a href="index.php">Home </a>
    <p> / How Can We Help You</p>
</div>
<div class="cntct-layout media">
    <div class="cntct-layout-left">

        <form action="connect.php" method="post">
            <ul class="form">
                <li class="twoColumnPart">
                    <label for="inputName">Name <sup class="sup">*</sup></label>
                    <input class="nameinput id="inputName" type="text" value="" name="name" required>
                </li>
                <li class="twoColumnPart">
                    <label for="inputEmail">Email <sup class="sup">*</sup></label>
                    <input class="emailinput id="inputEmail" type="text" value="" name="email" required>
                </li>
                <li class="twoColumnPart">
                    <label for="inputTelephone">Your Telephone Number <sup class="sup">*</sup></label>
                    <input class="telephoneinput id="inputTelephone" type="text" value="" name="telephone"  required >
                </li>
                <li class="twoColumnPart">
                    <label for="inputSubject">Subject <sup class="sup">*</sup></label>
                    <input class="subjectinput" id="inputSubject" type="text" value="" name="subject" required>
                </li>
                <li>
                    <label for="inputMessage">Message <sup class="sup">*</sup></label>
                    <textarea class="messageinput" id="inputMessage" type="text" name="message" value=" " required> </textarea>

                </li>

                <li>
                    <input type="submit" value="Send Enquiry">
                </li>
            </ul>
        </form>
    </div>
    <div class="cntct-layout-right">
        <p>Call us on:</p>
        <a href="">01603 70 40 20 </a>
        <p>Email us on:</p>
        <a href="">sales@netmatters.com</a>
        <p>Call us at our Gorleston branch on:</p>
        <a href="">01493 603204</a>
        <p>Business Hours:
        <p>
        <p>Monday - Friday 07:00 - 18:00</p>
        <p> Out of Hours IT Support</p>
        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
        <p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 Sunday 10:00 - 18:00</strong></p>
        <p>
            To log a critical task, you will need to call our main line number and select Option 2 to leave an
            Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of
            your call.
        </p>
    </div>

</div>

<div class="media offices">
    <div class="office-left">
        <div class="office-left-inner">
            <div class="office-icn"><i class="fas fa-home"></i></div>
            <h5>Netmatters Office: Wymondham</h5>
            <div class="cntct-line"></div>
            <address>
                Netmatters<br>
                11 Penfold Drive<br>
                Wymondham<br>
                Norfolk<br>
                NR18 0WZ
            </address>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6022.310795642235!2d1.1310218561117646!3d52.57470488080204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1597756108736!5m2!1sen!2suk"
                width="555" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
    <div class="office-right">
        <div class="office-right-inner">
            <div class="office-icn"><i class="fas fa-road"></i></div>
            <h5>Netmatters Office: Gorleston, Great Yarmouth</h5>
            <div class="cntct-line"></div>
            <address>
                Netmatters - Great Yarmouth<br>
                Suite F23 Beacon Innovation Centre, Beacon Park<br>
                Gorleston, Great Yarmouth<br>
                Norfolk<br>
                NR31 7RA
            </address>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10580.962970027076!2d1.7041012170932306!3d52.557015364273376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Gorleston!5e0!3m2!1sen!2suk!4v1597756162576!5m2!1sen!2suk"
                width="555" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</div>


<?php 
    include('inc/footer.php');
?>