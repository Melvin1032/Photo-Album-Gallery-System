<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0b0a8bec2d.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<footer>
        <div class="row">
            <div class="col">
                <img src="icons/main-logo.png" class="mlogo">
                <p>Gallery Grid is a Photo Album Web System <br>
                developed by the 2nd year students of BSIT in <br>
                ISPSC Candon Campus
                </p>
            </div>
            <div class="col">
                <h3>SCHOOL</h3>
                <p>ISPSC CANDON CAMPUS</p>
                <p>Darapidap, Candon City</p>
                <p>ILOCOS SUR, PHILIPPINES</p>
                <p class="email-id">gallerygrid@gmail.com</p>
            </div>
            <div class="col">
                <h3>Links</h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Send us a Message!</h3>
                <form>
                     <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholer="Enter your Email" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tiktok"></i>
                </div>
            </div>
            <hr>
        </div>
            <p class="copyright" >Gallery Grid Photo Album Gallery © 2024 - All Rights Reserved</p>
            

            
            <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

footer {
    width: 100%;
    position: absolute;
    bottom: 0;
    background: rgb(15,15,15);
    background: linear-gradient(90deg, rgba(15,15,15,1) 0%, rgba(29,14,0,1) 100%);
    color: white;
    padding: 100px  0 30px;
    border-top-left-radius: 125px;
    font-size: 15px;
    font-family: 'popins', sans-serif
}

.col img {
    width: 100px;
    height:100px;
}

.row {
    width: 85%;
    margin: auto;
    display: flex ;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
}

.col {
    flex-basis: 25%;
    padding: 10px 0;
}


.col h3 {
    width: fit-content;
    margin-bottom: 40px;
    position: relative;
}

.email-id {
    width: fit-content;
    border-top: 1px solid #ccc;
    margin: 20px 0;
    cursor: pointer;
}

ul li {
    list-style: none;
    margin-bottom: 1px;
}

ul li a{
    text-decoration: none;
    color: white;
}

form {
    padding-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    margin-bottom: 50px;
}
.fa-envelope {
    padding-right: 10px;
}

form .far {
    font-size: 18px;
    margin-right: 10px;
}

form input {
    width: 100%;
    background: transparent;
    color: #ccc;
    border: 0;
    outline: none;
}

form button {
    background: transparent;
    border:0;
    outline: none;
    cursor: pointer;
}

form button .fas {
    font-size: 16px;
    color: #ccc;
}

.social-icons .fab {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    color: #000;
    background: #fff;
    margin-right: 15px;
    cursor: pointer;
}

hr {
    width: 100%;
    margin: 30px 0;
    border: 0;
    border-bottom: 1px solid #ccc;
}

.copyright {
    text-align: center;
    font-size: 14px
}
            </style>
    </footer>
</body>
</html>