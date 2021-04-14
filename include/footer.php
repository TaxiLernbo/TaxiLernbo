<?php
function renderFooter()
{
    echo('<footer class="footer">
    <div class="footerContent">
        <div id="footerLogos" class="footerSections">
            <img class="footerLogo"src="images/logga.png" alt="footerLogo">
            <div class="socialMedia">
                <a>    <i class="fab fa-facebook-f"></i></a>
                <a>    <i class="fab fa-instagram"></i></a>
                <a>    <i class="fab fa-twitter"></i></a>
                <a>    <i class="fab fa-youtube"></i></a>
            </div>

        </div>
        <div id="footerContact" class="footerSections">
            <h5>Kontakt information:</h5> 
            <div id="information">
                <ul>
                    <li>Adress: Västermorsvägen 14, 771 90 Ludvika</li>
                    <li>Telefonnummer: 070-123 23 32</li>
                    <li>Mailadress: lernbotaxi@mail.com</li>
                </ul>
            </div>
        </div>
        <div id="footerLinks" class="footerSections">
            <h5>Länkar:</h5> 
            <div id="links">
                <ul>
                   <a style="text-decoration: none;" href="https://www.folkhalsomyndigheten.se/smittskydd-beredskap/utbrott/aktuella-utbrott/covid-19/skydda-dig-och-andra/rekommendationer-for-att-minska-spridningen-av-covid-19/"><li>Covid-19</li></a> 
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
</body>
<script src="scripts/tools.js"></script>');
}
?>