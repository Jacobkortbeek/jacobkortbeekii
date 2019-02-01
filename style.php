<?php
    header("Content-type: text/css; charset: UTF-8");

    $fontColor = the_field( 'font_color', optoins );

?>
/*
Theme Name: Jacob Kortbeek
Theme URI: http://jacobkortbeek.com
Author: Jacob Kortbeek
Author URI: http://jacobkortbeek.com
Description: This is my new website theme, built in a page builder moduler fashion.
Requires at least: WordPress 4.9.6
Version: 1.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: Jacob Kortbeek
Tags: bootstrap, animations, interactive.
*/

html, body {
  font-family: 'Ubuntu', sans-serif !important;
  color: <?php echo $fontColor; ?>!important; }

.jumbotron {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; }

.fullCenter {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }

.round {
  border-radius: 1000px; }

.pad-top {
  padding-top: 10em; }

.pad-bottom {
  padding-bottom: 3em; }

.pad-top-cont {
  padding-top: 5em; }

.padAll {
  padding: 2em; }

.test-red {
  background-color: red; }

.test-blue {
  background-color: blue; }

.margin-bot {
  margin-bottom: 3em; }

.margin-top {
  margin-top: 10em; }

.margin-topBot {
  margin-top: 3em;
  margin-bottom: 3em; }

.curvedCorner {
  border-radius: 10px; }

.marginLeft {
  margin-left: 1em; }

@media only screen and (min-width: 1320px) {
  .dNonePc {
    display: none !important; } }

.jk-card {
  position: relative;
  background-color: #f8f8f8;
  height: 30rem;
  width: 100%;
  overflow: hidden;
  border-radius: 10px; }
  .jk-card .jk-card-image {
    height: 23rem;
    width: 100%;
    overflow: hidden; }
    .jk-card .jk-card-image img {
      height: 100%;
      width: 100%; }
  .jk-card .jk-card-content {
    padding-left: 0.75em; }
  .jk-card .jk-card-reveal {
    background-color: #f8f8f8;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1em;
    transform: translateY(30rem);
    transition: all 950ms ease-in-out; }
    .jk-card .jk-card-reveal p {
      height: 20rem;
      width: 18rem;
      overflow: hidden; }
    .jk-card .jk-card-reveal a {
      color: black;
      background-color: aliceblue;
      text-decoration: none;
      border-radius: 5px;
      padding: 1em;
      float: right; }
  .jk-card:hover .jk-card-reveal {
    transform: translateY(0rem); }

.jk-nav {
  z-index: 98;
  position: fixed;
  top: 0%;
  right: 0%;
  padding: 1.5em; }
  .jk-nav i {
    font-size: 1.5em; }

.jk-nav-cont {
  z-index: 99;
  transform: translate(100%, 0%);
  transition: all .5s ease-in-out;
  background-color: #f4f5ed;
  position: fixed;
  right: 0%;
  top: 0%;
  padding: 2em;
  height: 100%;
  width: 10em;
  font-size: 1.5em; }
  .jk-nav-cont.showNav {
    transform: translate(0%, 0%); }
  .jk-nav-cont i {
    font-size: 2em; }
  .jk-nav-cont ul {
    list-style-type: none; }
    .jk-nav-cont ul li {
      margin: .5em; }
      .jk-nav-cont ul li a {
        text-decoration: none;
        color: black; }
        .jk-nav-cont ul li a:hover {
          color: #525252; }

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0, 0, 0, 0.5);
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); }

.imgCont {
  color: white;
  width: 100%;
  position: relative; }
  .imgCont .tap {
    position: absolute;
    bottom: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2em;
    animation-name: Pulse;
    animation-duration: 3s;
    animation-iteration-count: infinite; }
  .imgCont:hover .tap {
    display: none; }
  .imgCont:hover h4 {
    color: white;
    height: 100%;
    width: 100%;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-align-content: center;
    -moz-align-content: center;
    -ms-align-content: center;
    align-content: center;
    position: absolute;
    top: 0%;
    left: 0%;
    transform: translate(-50%, -50%); }
  .imgCont:hover .overlay {
    opacity: 1; }
  .imgCont img {
    height: auto;
    width: 100%; }
  .imgCont a {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2em; }

.portCont .link {
  position: absolute;
  top: 70%;
  left: 25%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 2em; }

.portCont .read {
  position: absolute;
  top: 70%;
  left: 75%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 2em; }

.backgroundGrey {
  background-color: #ebebeb; }

.backgroundRed {
  background-color: red; }

.bottomBorderBlue {
  border-bottom: 5px solid #3f9fe6; }

.bottomBorderRed {
  border-bottom: 5px solid #e63f3f; }

.bottomBorderYellow {
  border-bottom: 5px solid #ffff44; }

.bottomBorderRandom {
  border-bottom: 5px solid #3f9fe6; }

.bg-boneWhite {
  background-color: #f4f5ed; }

.bg-darkBoneWhite {
  background-color: #e3e1d2; }

.zLow {
  z-index: -20; }

.tapBlog {
  position: absolute;
  bottom: 25%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 2em;
  animation-name: Pulse;
  animation-duration: 3s;
  animation-iteration-count: infinite; }

@keyframes Pulse {
  0% {
    opacity: 1; }
  10% {
    opacity: 1; }
  20% {
    opacity: 1; }
  30% {
    opacity: 0; }
  40% {
    opacity: 1; }
  50% {
    opacity: 0; }
  60% {
    opacity: 1; }
  70% {
    opacity: 1; }
  80% {
    opacity: 1; }
  90% {
    opacity: 1; }
  100% {
    opacity: 1; } }

.color {
  background-color: red; }

.jumbotron {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; }

.fullCenter {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }

.round {
  border-radius: 1000px; }

.pad-top {
  padding-top: 10em; }

.pad-bottom {
  padding-bottom: 3em; }

.pad-top-cont {
  padding-top: 5em; }

.padAll {
  padding: 2em; }

.test-red {
  background-color: red; }

.test-blue {
  background-color: blue; }

.margin-bot {
  margin-bottom: 3em; }

.margin-top {
  margin-top: 10em; }

.margin-topBot {
  margin-top: 3em;
  margin-bottom: 3em; }

.curvedCorner {
  border-radius: 10px; }

.marginLeft {
  margin-left: 1em; }

@media only screen and (min-width: 1320px) {
  .dNonePc {
    display: none !important; } }

.jumbotron {
  overflow: hidden;
  text-align: center;
  height: 80vh;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center;
  background-attachment: fixed;
  padding: 0 !important; }
  .jumbotron .parra-cont {
    position: relative;
    height: 100%;
    width: 100%;
    overflow: hidden; }
    .jumbotron .parra-cont .heroTextCont {
      position: absolute;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      -moz-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-align-content: center;
      -moz-align-content: center;
      -ms-align-content: center;
      align-content: center;
      height: 100%;
      width: 100%;
      background-color: rgba(242, 242, 242, 0.25);
      z-index: 50; }
      .jumbotron .parra-cont .heroTextCont h1 {
        z-index: 1500; }
  .jumbotron .foreGround-mountain {
    height: 320px;
    width: 732px;
    background-size: auto, auto;
    background-position: bottom right;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 0%;
    right: 0%; }
  .jumbotron .main-mountain {
    height: 521px;
    width: 730px;
    background-size: auto, auto;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    top: 30%;
    right: 40%; }
  .jumbotron .top-moutain {
    height: 308px;
    width: 487px;
    background-size: auto, auto;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    top: 25%;
    right: 0%; }

@media only screen and (max-width: 737px) {
  .img-text img {
    height: 40em;
    width: 40em; } }

.img-text img {
  height: 16em;
  width: 16em; }

@media only screen and (max-width: 737px) {
  .circle-container {
    position: absolute;
    width: 40em;
    height: 40em;
    padding: 0;
    border-radius: 50%;
    list-style: none; }
    .circle-container > * {
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 3em;
      height: 3em;
      margin: -1.5em; }
      .circle-container > *:nth-of-type(1) {
        transform: rotate(0deg) translate(20em) rotate(0deg); }
      .circle-container > *:nth-of-type(2) {
        transform: rotate(24deg) translate(20em) rotate(-24deg); }
      .circle-container > *:nth-of-type(3) {
        transform: rotate(48deg) translate(20em) rotate(-48deg); }
      .circle-container > *:nth-of-type(4) {
        transform: rotate(72deg) translate(20em) rotate(-72deg); }
      .circle-container > *:nth-of-type(5) {
        transform: rotate(96deg) translate(20em) rotate(-96deg); }
      .circle-container > *:nth-of-type(6) {
        transform: rotate(120deg) translate(20em) rotate(-120deg); }
      .circle-container > *:nth-of-type(7) {
        transform: rotate(144deg) translate(20em) rotate(-144deg); }
      .circle-container > *:nth-of-type(8) {
        transform: rotate(168deg) translate(20em) rotate(-168deg); }
      .circle-container > *:nth-of-type(9) {
        transform: rotate(192deg) translate(20em) rotate(-192deg); }
      .circle-container > *:nth-of-type(10) {
        transform: rotate(216deg) translate(20em) rotate(-216deg); }
      .circle-container > *:nth-of-type(11) {
        transform: rotate(240deg) translate(20em) rotate(-240deg); }
      .circle-container > *:nth-of-type(12) {
        transform: rotate(264deg) translate(20em) rotate(-264deg); }
      .circle-container > *:nth-of-type(13) {
        transform: rotate(288deg) translate(20em) rotate(-288deg); }
      .circle-container > *:nth-of-type(14) {
        transform: rotate(312deg) translate(20em) rotate(-312deg); }
      .circle-container > *:nth-of-type(15) {
        transform: rotate(336deg) translate(20em) rotate(-336deg); } }

.circle-container {
  position: absolute;
  width: 16em;
  height: 16em;
  padding: 0;
  border-radius: 50%;
  list-style: none;
  z-index: 20; }
  .circle-container > * {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 3em;
    height: 3em;
    margin: -1.5em; }
    .circle-container > *:nth-of-type(1) {
      transform: rotate(0deg) translate(8em) rotate(0deg); }
    .circle-container > *:nth-of-type(2) {
      transform: rotate(24deg) translate(8em) rotate(-24deg); }
    .circle-container > *:nth-of-type(3) {
      transform: rotate(48deg) translate(8em) rotate(-48deg); }
    .circle-container > *:nth-of-type(4) {
      transform: rotate(72deg) translate(8em) rotate(-72deg); }
    .circle-container > *:nth-of-type(5) {
      transform: rotate(96deg) translate(8em) rotate(-96deg); }
    .circle-container > *:nth-of-type(6) {
      transform: rotate(120deg) translate(8em) rotate(-120deg); }
    .circle-container > *:nth-of-type(7) {
      transform: rotate(144deg) translate(8em) rotate(-144deg); }
    .circle-container > *:nth-of-type(8) {
      transform: rotate(168deg) translate(8em) rotate(-168deg); }
    .circle-container > *:nth-of-type(9) {
      transform: rotate(192deg) translate(8em) rotate(-192deg); }
    .circle-container > *:nth-of-type(10) {
      transform: rotate(216deg) translate(8em) rotate(-216deg); }
    .circle-container > *:nth-of-type(11) {
      transform: rotate(240deg) translate(8em) rotate(-240deg); }
    .circle-container > *:nth-of-type(12) {
      transform: rotate(264deg) translate(8em) rotate(-264deg); }
    .circle-container > *:nth-of-type(13) {
      transform: rotate(288deg) translate(8em) rotate(-288deg); }
    .circle-container > *:nth-of-type(14) {
      transform: rotate(312deg) translate(8em) rotate(-312deg); }
    .circle-container > *:nth-of-type(15) {
      transform: rotate(336deg) translate(8em) rotate(-336deg); }

.hvr-img ul {
  list-style-type: none; }
  .hvr-img ul li {
    opacity: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-align-content: center;
    -moz-align-content: center;
    -ms-align-content: center;
    align-content: center;
    border-radius: 100px; }
    .hvr-img ul li:nth-child(1) {
      transition: all 0.5s ease-in-out; }
    .hvr-img ul li:nth-child(2) {
      transition: all 1s ease-in-out; }
    .hvr-img ul li:nth-child(3) {
      transition: all 1.5s ease-in-out; }
    .hvr-img ul li:nth-child(4) {
      transition: all 2s ease-in-out; }
    .hvr-img ul li:nth-child(5) {
      transition: all 2.5s ease-in-out; }
    .hvr-img ul li:nth-child(6) {
      transition: all 3s ease-in-out; }
    .hvr-img ul li:nth-child(7) {
      transition: all 3.5s ease-in-out; }
    .hvr-img ul li:nth-child(8) {
      transition: all 4s ease-in-out; }
    .hvr-img ul li:nth-child(9) {
      transition: all 4.5s ease-in-out; }
    .hvr-img ul li:nth-child(10) {
      transition: all 5s ease-in-out; }
    .hvr-img ul li:nth-child(11) {
      transition: all 5.5s ease-in-out; }
    .hvr-img ul li:nth-child(12) {
      transition: all 6s ease-in-out; }
    .hvr-img ul li:nth-child(13) {
      transition: all 6.5s ease-in-out; }
    .hvr-img ul li:nth-child(14) {
      transition: all 7s ease-in-out; }
    .hvr-img ul li:nth-child(15) {
      transition: all 7.5s ease-in-out; }
    .hvr-img ul li a {
      height: 100%;
      width: 100%;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      -moz-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-align-content: center;
      -moz-align-content: center;
      -ms-align-content: center;
      align-content: center;
      border-radius: 100px;
      color: black;
      font-size: 1.8em; }
  .hvr-img ul:hover li:nth-of-type(1) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(2) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(3) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(4) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(5) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(6) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(7) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(8) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(9) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(10) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(11) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(12) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(13) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(14) {
    opacity: 1; }
  .hvr-img ul:hover li:nth-of-type(15) {
    opacity: 1; }

.currentProject {
  height: 100%;
  width: 100%; }

.skillList {
  margin: 0;
  padding: 0;
  margin-top: 2em;
  color: black;
  list-style-type: none;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }
  .skillList li {
    opacity: 0;
    transition: .5s ease;
    background-color: #eceed9;
    height: 3em;
    width: 3em;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-align-content: center;
    -moz-align-content: center;
    -ms-align-content: center;
    align-content: center;
    border-radius: 100px;
    margin: 1.2em; }
    .skillList li a {
      height: 100%;
      width: 100%;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      -moz-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-align-content: center;
      -moz-align-content: center;
      -ms-align-content: center;
      align-content: center;
      border-radius: 100px;
      text-decoration: none;
      color: black;
      font-size: 1.8em; }
      .skillList li a i {
        padding: 0 !important;
        font-size: 1em !important; }

.portCont {
  margin: 1em; }

.contactItemCont .contactItem {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  -ms-justify-content: flex-start;
  justify-content: flex-start;
  -ms-flex-pack: flex-start;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center;
  padding: 2em;
  height: 9em; }
  .contactItemCont .contactItem a {
    color: black; }
  .contactItemCont .contactItem i {
    font-size: 1.5em;
    padding-right: .8em; }

.contactIcons {
  margin: 0 !important;
  text-decoration: none;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }
  .contactIcons li {
    transition: .5s ease;
    background-color: #eceed9;
    height: 3em;
    width: 3em;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-align-content: center;
    -moz-align-content: center;
    -ms-align-content: center;
    align-content: center;
    border-radius: 100px;
    margin: 1.2em; }
    .contactIcons li a {
      height: 100%;
      width: 100%;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      -moz-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-align-content: center;
      -moz-align-content: center;
      -ms-align-content: center;
      align-content: center;
      border-radius: 100px;
      text-decoration: none;
      color: black;
      font-size: 1.8em; }
      .contactIcons li a i {
        padding: 0 !important;
        font-size: 1em !important; }

.homeForm form p {
  width: 100%; }
  .homeForm form p label {
    width: 100%; }
    .homeForm form p label span {
      width: 100%; }
      .homeForm form p label span input {
        width: 100%;
        height: 3.5em; }
      .homeForm form p label span textarea {
        width: 100%; }

.post {
  transition: all 2s ease-in-out;
  background-color: #f4f5ed; }
  @media only screen and (max-width: 737px) {
    .post .postCont {
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: column-reverse;
      -moz-flex-direction: column-reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
      -webkit-flex-wrap: wrap;
      -moz-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-align-content: center;
      -moz-align-content: center;
      -ms-align-content: center;
      align-content: center; } }
  .post .postCont .post-textCont {
    height: 100%;
    width: auto;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-align-content: center;
    -moz-align-content: center;
    -ms-align-content: center;
    align-content: center; }
  .post .postCont img {
    height: auto;
    width: 100%; }
  .post .postButtonCont {
    margin-bottom: 1em; }

.postTitle {
  height: 20vh;
  width: 100%;
  background-color: orange; }

.tools-dropdown form {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-flex-wrap: nowrap;
  -moz-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-align-content: center;
  -moz-align-content: center;
  -ms-align-content: center;
  align-content: center; }
  .tools-dropdown form select {
    background-color: #f4f5ed;
    -webkit-appearance: none;
    -webkit-border-radius: 0px;
    border: none;
    height: 2.5em;
    width: 10em;
    margin: 2em;
    margin-bottom: 0em;
    text-indent: 1em; }
  .tools-dropdown form input {
    background-color: #f4f5ed;
    border: none;
    height: 2.5em;
    width: 10em;
    margin: 2em; }
    .tools-dropdown form input:hover {
      background-color: #e3e1d2;
      cursor: pointer; }

.headerAbout {
  height: 30vh;
  width: 100%;
  background-color: red; }

.post .heading {
  height: 20vh;
  width: 100%;
  background-color: limegreen; }

.post .img img {
  height: auto;
  width: 100%; }

.post .img a {
  height: 2em;
  width: 2em;
  border: 2px solid white;
  position: absolute;
  bottom: 15%;
  right: 10%;
  color: white;
  font-size: 2em;
  text-decoration: none; }
