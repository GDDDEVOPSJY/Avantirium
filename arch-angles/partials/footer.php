<style media="screen">
  footer {
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgb(255, 255, 255);
    border: #000000;
    height: auto;
    width: 100vw;
    padding-top: 40px;
    color: rgb(0, 0, 0);
  }

  .footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }

  .footer-content p {
    max-width: 500px;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 14px;
    color: #010205;

  }

  .socials {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
  }

  .socials li {
    margin: 0 10px;
  }

  .socials a {
    text-decoration: none;
    color: rgb(23, 13, 13);
    border: 1.1px solid rgb(0, 0, 0);
    padding: 5px;

    border-radius: 50%;

  }

  .socials a i {
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

  }

  .socials a:hover i {
    color: rgb(181, 112, 47);
  }

  .footer-bottom {
    background: rgb(240, 240, 240);
    width: 100vw;
    padding: 20px;
    padding-bottom: 40px;
    text-align: center;
  }

  .footer-bottom p {
    float: center;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  }

  .footer-bottom p a {
    color: #000000;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
  }

  .footer-bottom span {
    text-transform: uppercase;
    text-align: center;
    opacity: .4;
    font-weight: 200;
  }

  .footer-menu {
    float: right;

  }

  .footer-menu ul {
    display: flex;
  }

  .footer-menu ul li {
    padding-right: 10px;
    display: block;
  }

  .footer-menu ul li a {
    color: #0c0c0c;
    text-decoration: none;
  }

  .footer-menu ul li a:hover {
    color: #000000;
  }
  @media (max-width:500px) {
    .footer-menu ul {
      display: flex;
      margin-top: 10px;
      margin-bottom: 20px;
    }
  }
  li {
    display: inline-block;
    margin: 0 10px;

  }
  .p {
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-bottom: 50px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>

<footer>
  <div class="footer-content">
    <ul>
      <li>Careers</li>
      <li>Contacts</li>
    </ul>
  </div>
  <ul class="socials">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
  </ul>
  <p class="p">2nd Floor, Cafeteria Block,<br> Athulya Infopark, Kusumagiri, Kakkanad, Kochi, Kerala 682030</p>
  </div>
  <div class="footer-bottom">
    <p class="pp">copyright &copy;2021 <a href="#">foolishdeveloper</a> </p>
  </div>
</footer>