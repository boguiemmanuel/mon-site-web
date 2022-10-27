      
<footer>
          <div class="services_list">
              <div class="service">
                  <img src="images/clock.png" alt="">
                  <h2>reseaux</h2>
                  <p>########</p>
                  <p>#####"""#</p>
              </div>

              <div class="service">
                <img src="images/pin.png" alt="">
                <h2>Adresses</h2>
                <p>yopougon toits rouge</p>
                <p>Abidjan</p>
            </div>
            <div class="service">
                <img src="images/email.png" alt="">
                <h2>Emails</h2>
                <p>email@gmail.com</p>
                <p>bogui@gmail.com</p>
            </div>
            <div class="service">
                <img src="images/call.png" alt="">
                <h2>Numbers</h2>
                <p>+225 0747860451</p>
                <p>+255 56833799</p>
            </div>
            
            <hr>
          </div>

          <p class="footer_text">Réalisé par <span>bogui emmanuel</span> | Tous les droits sont réservés.</p>
      </footer>

      <style>
        /* footer CSS */

footer {
    background-color: rgba(0,0,0,0.05);
}
footer .services_list {
    padding: 10px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.service img {
    width: 40px;
    background-color: #27ae60;
    padding: 10px;
    border-radius: 50%;
    margin-bottom: 10px;

}
.service {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: 25px auto;
}
.service  p {
    color: #333;
}
hr {
    background-color: #ccc;
    border: 0;
    height: 2px;
    width: 100%;
}
.footer_text {
    text-align: center;
    font-size: 15px;
    padding: 8px 0;
}
.footer_text span {
    color: #27ae60;
}
.toggle_menu {
    display: none;
}

      </style>