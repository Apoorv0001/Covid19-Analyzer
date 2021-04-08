<style type="text/css">
*{margin: 0;padding: 0;box-sizing:border-box;font-family: 'Mulish', sans-serif;}
.nav_style{
    background-color: #d22b2b!important;
}
.nav_style a{
color:white;
}
/////for main header //////
.main_header{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size:3rem;
}
.c_rotate img{
    animation:circ 3s linear infinite;
}
@keyframes circ{
    0% {transform:rotate(0);}
    100% {transform:rotate(360deg);}
}
.leftside img{animation:beat 5s linear infinite;}
@keyframes beat{
    0% {transform:scale(.75);}
    20% {transform:scale(1);}
    40% {transform:scale(.75);}
    60% {transform:scale(1);}
    80% {transform:scale(.75);}
    100% {transform:scale(.75);}
}
.corona_update{
    margin:0 0 30px 0;
}
.corona_update h3{
    color:#ff7675;
}
.corona_update h1{
    font-size:2rem;
    text-align:center;   
}
/*////////////section/////////*/
.sub_section{
    background-color:#faa0a0;
}
tr:nth-child(odd){
    background-color:#ffc300;
}

/* for_card */
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.card_column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.card_row {margin: 0 -5px;}

/* Clear floats after the columns */
.card_row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .card_column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/*  */

</style>