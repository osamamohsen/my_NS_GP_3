<html>
    <style>
        .FAQ{margin-left: 12px; width: 70%;}
        .faq-header{font-size: 2em;border-bottom: 1px dotted #ccc;padding: 1em 0;}
        .faq-c {border-bottom: 1px dotted #ccc;padding: 1em 0;}
        .faq-t {line-height: 1em;color: #aaa; font-family: sans-serif; float:left; font-weight: 700; 
               padding-right: 0.3em; -webkit-transition: all 200ms;-moz-transition: all 200ms;
               transition: all 200ms;}

        .faq-q {
            cursor: pointer;
            font-size: 24px; font-family: cursive;
            font-weight: 100;
        }

        .faq-a {
            font-size: 18px;
            clear: both;
            color: #666;
            display: none;
            padding-left: 1.5em;
        }

    </style>
    <?php if($kind=="NTRA"){ ?>
                <select class="form-control input-lg form-group drop">
                    <option selected>Choose Operator</option>
                    <option value="2" style="color: #7fb03e;">Etislat</option>
                                <option value="0" style="color: orange;">Mobinil</option>
                                <option value="1" style="color: red;">Vodafone</option>
                </select>
            <?php } ?>
    <div class="FAQ">
        <div class="faq-header">Frequently Asked Questions</div>

        <div class="faq-c">
            <div class="faq-q"><span class="faq-t">+</span>What is Network Signal ?</div>
            <div class="faq-a">
                <p>Network signal software provides information about signals strength,
                    display information about cell towers in your current area, know data problems and call problems,
                    display information about device information (Brand, OS, IMSI, IMEI ,etc…)
                    and display information about WIFI (SSID, MAC Address ,etc…)
                    "Coverage map display the distribution of signal level (Signal strength, Rank)</p>
            </div>
        </div>

        <div class="faq-c">
            <div class="faq-q"><span class="faq-t">+</span>Registration </div>
            <div class="faq-a">
                <p>you can only register one account
                    Because every SIM card has unique ID
                    2-you can register by android App not the Website</p>
            </div>
        </div>
        
        <div class="faq-c">
            <div class="faq-q"><span class="faq-t">+</span>What is benefit from Network Signal App ?</div>
            <div class="faq-a">
                <p>The benefit of“Network Signals” is making the interaction between user and operator easier, 
                    The operator could detect the problem which user faced and the operator could determine which
                    the best signals regions which users connect with. And determine the weakest signals then works
                    on it and increase the performance of network.</p>
            </div>
        </div>

        <div class="faq-c">
            <div class="faq-q"><span class="faq-t">+</span>Who is benefit from Network Signal App ?</div>
            <div class="faq-a">
                <p>1-Users
                   2-Operator
                   3-NTRA</p>
            </div>
        </div>
        
          <div class="faq-c">
            <div class="faq-q"><span class="faq-t">+</span>Technical Terms </div>
            <div class="faq-a">
                <p>
                <p2>dBm:</p2>d is an abbreviation for the power ratio in decibels (dB) of the measured power referenced to one milliwatt (mW).
                <p2> Arbitrary Strength Unit (ASU):</p2> is an integer value proportional to the received signal strength measured by the mobile phone.
How to calculate:
In GSM networks: dBm = 2 × ASU – 113
In UMTS networks: dBm = ASU – 116

<p2>Mbps:</p2> short for megabits per second, a measure of data transfer speed (a megabit is equal to one million bits).Network transmissions, for example, are generally measured in Mbps.

The International Mobile Subscriber Identity or <p2>IMSI :</p2> is used to identify the user of a cellular network and is a unique identification associated with all cellular networks. 

The International Mobile Station Equipment Identity or <p2> IMEI:</p2> is a number, usually unique,to identify 3GPP and iDEN mobile phones, as well as some satellite phones

A media access control address <p2>(MAC address)</p2> is a unique identifier assigned to network interfaces for communications on the physical network segment. MAC addresses are used as a network address for most IEEE 802 network technologies, including Ethernet and WiFi

An Internet Protocol address <p2>(IP address): </p2>is a numerical label assigned to each device (e.g., computer, printer) participating in a computer network that uses the Internet Protocol for communication.

<p2>SSID </p2>is the name of the WLAN network Name Like when you login to access dlink name of an access point.

<p2>BSSID </p2> is it the MAC address of access point,One access point can have many SSID profiles,
</p>
            </div>
        </div>

        <script>
            $(".faq-q").click(function () {
                var container = $(this).parents(".faq-c");
                var answer = container.find(".faq-a");
                var trigger = container.find(".faq-t");

                answer.slideToggle("slow");

                if (trigger.hasClass("faq-o")) {
                    trigger.removeClass("faq-o");
                }
                else {
                    trigger.addClass("faq-o");
                }
            });
        </script>

</div>
</html>