<?php
/*
 *  Jyraphe, your web file repository
 *  Copyright (C) 2013
 *  Jerome Jutteau <j.jutteau@gmail.com>
 *  Jimmy Beauvois <jimmy.beauvois@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * This stylesheet is the default stylesheet for Jyraphe.
 * The content is dynamically generated for easier handling.
 */

$dark = '#8B4513';

header('Content-type: text/css');

?>

body {
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size: 100%;
    color:#333333;
    margin:0;
    background:#e5e5e5;
}

a, a:link, a:visited {
    color: #223344;
    text-decoration: underlined;
}

#content {
    background-color: #FFF;
    box-shadow: -4px 6px 9px rgba(50, 50, 50, 0.5);
    margin: 30px auto;
	width: 1070px;
	padding: 15px;
}

fieldset {
  text-align: left;
  font-size:90%;
  width: 50em;
  margin: auto;
  background: white;
  border: 2px solid #dbdbdb;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

fieldset legend {
  color: white;
  font-size:130%;
  background: #cf3b19;
  border: 1px solid #A52E13;
  padding: 5px 20px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

h1 {
  font-size: 175%;
  width: 100%;
  text-align: center;
  padding-top: 16px;
}

h1 a {
  /*padding: 220px 280px 0 280px;*/
  text-decoration: none;
  color: #333;
}

h2 {
  text-decoration: none;
  color: #333;
  text-align: center;
}

fieldset p {
  margin-left: 25%;
}

.jyraphe_info {
  font-size: 120%;
  margin-left: 30%;
}

label {
  float: left;
  width: 12em;
}

div {
	padding: 0 50px 0 50px;
}

input[type=text], input[type=submit], select {
  width: 15em;
  font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
  margin: 5px 10px 5px 0;
}


#jyraphe {
  background: url('hannover_blau-rot.png') right bottom no-repeat;
  position: fixed;
  bottom: 10px;
  right: 10px;
  height: 40px;
  width: 40px;
  clear:both;
}

#copyright {
  text-align: center;
  font-size: 70%;

}

.error, .message {
  width: 50em;
  margin: 5ex auto;
}

.error {
text-align: center;
  padding-bottom: 1ex;
  border: #FB7373 2px solid;
  background-color: #FBB;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.error p:before {
  text-align: center;
  content: url('error.png');
  padding-right: 1ex;
    -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.message {
text-align: center;
  padding: 1ex;
  border: #91C27C 2px solid;
  background-color: #BFB;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.message p:before {
  content: url('ok.png');
  padding-right: 1ex;
}

.info {
  text-align: left;
  width: 50em;
  margin: auto;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

.info h2 {
  text-align: left;
}

.info h3 {
  text-align: center;
}

.info p {
  margin-left: 5%;
  margin-right: 5%;
}

#upload {
  text-align: left;
  font-size: 90%;
  width: 50em;
  /*background: #e5e5e5;*/
  background: #fff;
  border: 0px solid #CCCCCC;
  margin: auto;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

#uploading {
  text-align: center;
  width: 50em;
  background: white;
  border: 2px solid #CCCCCC;
  margin: auto;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;
}

#upload_finished {
font-size:90%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 50em;
  /*background: #B6D7A8;*/
  background: #EEE;
  /*border: 2px solid #91C27C;*/
  border: 2px solid #999;
  margin: auto;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

#self_destruct {
  font-weight: bold;
  color: red;
}

#upload_link_email {
  margin-left: 10px;
}

#upload_image_email {
  padding-bottom: 15px;
  padding-left: 20px;
  background: url(email.png) no-repeat;
}
