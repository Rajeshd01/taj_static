<style>
        /* Custom styles */
        .navbar-dark .navbar-toggler-icon {
            color: #ffffff;
        }

        .content-section {
            padding: 50px 0;
        }

        .content-section h2 {
            margin-bottom: 20px;
        }

        .content-section p {
            margin-bottom: 30px;
        }

        .logo {
        background-size: contain;
        background-repeat: no-repeat;
        width: 100px; 
        height: 50px; 
        }

        .img-section{
            max-width: 600;
            height: 400;
        }
        /* Icon 1 */
        /* Icon 1 */

.animated-icon1, .animated-icon2, .animated-icon3 {
  width: 30px;
  height: 20px;
  position: relative;
  margin: 0px;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

.animated-icon1 span, .animated-icon2 span, .animated-icon3 span {
  display: block;
  position: absolute;
  height: 3px;
  width: 100%;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}

.animated-icon1 span {
  background: #e65100;
}

.animated-icon2 span {
  background: #e3f2fd;
}

.animated-icon3 span {
  background: #f3e5f5;
}

.animated-icon1 span:nth-child(1) {
 top: 0px;
}

.animated-icon1 span:nth-child(2) {
  top: 10px;
}

.animated-icon1 span:nth-child(3) {
  top: 20px;
}

.animated-icon1.open span:nth-child(1) {
  top: 11px;
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}

.animated-icon1.open span:nth-child(2) {
  opacity: 0;
  left: -60px;
}

.animated-icon1.open span:nth-child(3) {
  top: 11px;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

/* Icon 3*/

.animated-icon2 span:nth-child(1) {
  top: 0px;
}

.animated-icon2 span:nth-child(2), .animated-icon2 span:nth-child(3) {
  top: 10px;
}

.animated-icon2 span:nth-child(4) {
  top: 20px;
}

.animated-icon2.open span:nth-child(1) {
  top: 11px;
  width: 0%;
  left: 50%;
}

.animated-icon2.open span:nth-child(2) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.animated-icon2.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.animated-icon2.open span:nth-child(4) {
  top: 11px;
  width: 0%;
  left: 50%;
}

/* Icon 4 */

.animated-icon3 span:nth-child(1) {
  top: 0px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3 span:nth-child(2) {
  top: 10px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3 span:nth-child(3) {
  top: 20px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3.open span:nth-child(1) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  top: 0px;
  left: 8px;
}

.animated-icon3.open span:nth-child(2) {
  width: 0%;
  opacity: 0;
}

.animated-icon3.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  top: 21px;
  left: 8px;
}
/*card*/
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 4rem 5vw;
    padding: 0;
    list-style-type: none;
}

.card {
    width: 100%; /* Take up full width on mobile */
    background: white;
    padding: .4em;
    border-radius: 6px;
}

.card-image {
    background-image: url("/responsive_web_1/assert/dining.png");
    background-size: cover;
    width: 100%;
    height: 550px; /* Set maximum height for images */
    border-radius: 6px 6px 0 0;
}

.card-image-1 {
    background-image: url("/responsive_web_1/assert/roof.png");
    background-size: cover;
    width: 100%;
    height: 550px; /* Set maximum height for images */
    border-radius: 6px 6px 0 0;
}
.card-image-2 {
    background-image: url("/responsive_web_1/assert/spa.png");
    background-size: cover;
    width: 100%;
    height: 550px; /* Set maximum height for images */
    border-radius: 6px 6px 0 0;
}
.card-image-3 {
    background-image: url("/responsive_web_1/assert/section-4.jpg");
    background-size: cover;
    width: 100%;
    height: 550px; /* Set maximum height for images */
    border-radius: 6px 6px 0 0;
}

.category {
    text-transform: uppercase;
    font-size: 0.7em;
    font-weight: 600;
    color: rgb(63, 121, 230);
    padding: 10px 7px 0;
}

.heading {
    font-weight: 600;
    color: rgb(88, 87, 87);
    padding: 7px;
}

.btn-group {
    margin-bottom: 10px; 
}

.btn-group .btn {
    margin-right: 5px; 
}

@media (max-width: 576px) {
    .cards {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
    }

    .card-image {
        height: 150px; 
    }
}

    </style>