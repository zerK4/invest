<div class="footer_link">
    <a href="#proiecte" ><div class="footer-button fa fa-facebook-square"> Facebook</div></a></i>
    <a href="#proiecte"><div class="footer-button fa fa-instagram"> Instagram</div></a></i>
    <a href="#proiecte"><div class="footer-button fa fa-envelope"> Mail</div></a></i>
</div>
<div class="copywrite"><p>Copywrite <i class="fa fa-copyright copywright"> Zerka Design </i></p></div>

/*footer*/
footer {
    opacity: 1;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3rem;
    background-color: rgba(255, 255, 255, 0.2);
    box-shadow: 0px 8px 8px 10px rgb(172, 171, 171);
    z-index: 0;
    position: relative;
}
footer:hover{
    background: rgb(172, 171, 171);
    color: white;
}
footer a{
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    opacity: 1;
    transition: 1s;
    font-size: 20px;
}
footer a:hover{
    color: white;
    opacity: 0.6;
    transition: 1s;
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation: glow 1s ease-in-out infinite alternate;
    animation: glow 1s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
    from {
      text-shadow: 0 0 10px rgb(56, 56, 56), 0 0 20px rgb(0, 0, 0), 0 0 30px #3a3a3a, 0 0 40px #000000, 0 0 50px #292929, 0 0 60px #1f1f1f, 0 0 70px #000000;
    }
    to {
      text-shadow: 0 0 20px #fff, 0 0 30px #000000, 0 0 40px #3f3f3f, 0 0 50px #636262, 0 0 60px #444444, 0 0 70px #646464, 0 0 80px #000000;
    }
  }
.footer_link{
    position: relative;
    display: flex;
    justify-content: center;
    justify-content: space-evenly;
    padding-top: .8rem;
}
.copywrite{
    display: flex;
    justify-content: flex-end;
    position: relative;
    align-items: center;
    margin-right: 10px;
}
.copywrite:hover{
    color: rgb(0, 0, 0);
    opacity: 0.6;
    transition: 1s;
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation: glow 1s ease-in-out infinite alternate;
    animation: glow 1s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
    from {
      text-shadow: 0 0 10px rgb(56, 56, 56), 0 0 20px rgb(0, 0, 0), 0 0 30px #3a3a3a, 0 0 40px #000000, 0 0 50px #292929, 0 0 60px #1f1f1f, 0 0 70px #000000;
    }
    to {
      text-shadow: 0 0 20px #fff, 0 0 30px #000000, 0 0 40px #3f3f3f, 0 0 50px #636262, 0 0 60px #444444, 0 0 70px #646464, 0 0 80px #000000;
    }
  }


/*footer end*/