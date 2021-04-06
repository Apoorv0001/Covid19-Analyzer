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
</style>