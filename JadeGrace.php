<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Jade Roller
      </div>
      <div id="author">
        Laura Taylor | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg" style="width:60%">
      <img src="./img/splash-img-skin.png" width="100%" />
    </div>
    <div class="articleText">
      <p>I am not a fad-chaser. It’s just not in me to jump on whatever new product hits the shelves and give it a try on a whim. I prefer to do some research and know what I’m getting myself into before I make a purchase—honestly, I think most of us are like that. This is the story of how I made a huge leap forward in my anti-aging struggle.  </p>

      <p>A lady should never reveal her age, or at least that’s what my mother always said. Suffice it to say I’m not over the hill…but I’m close. I’ve lived a busy life, raising my kids while working a full-time job, and I’ve dealt with my fair share of stress over the years. They always say that stress and lack of sleep are the things that contribute most to age lines, but I’ve always taken my skincare routine very seriously, and for the most part people tend to think I’m a few years younger than I actually am. I thought I was on the right track, until I noticed Rebecca, one of my girlfriends, came into the office…and something was different about her. She had this healthy glow about her that just caught my eye, and she was in a great mood.</p>

      <p>I was having one of those days where I was feeling my actual age, and so just I tried to get through the day without complaining. Of course, by the time lunch rolled around, I was already worn down, and it was then that Rebecca checked in on me as she usually does.</p>

      <p>I finally decided I would just ask her what she had going on; was it a new man in her life, had she won the lottery, or was she just hyped up on too much coffee?</p>


      <div class="blockQuote">
         <i>“Notice anything different about me?” She asked coyly.
            “Well, yes,” I admitted, “but I can’t decide what it is.”
            Rebecca smiled. “It’s my face, Laura.”
            Oh, I thought, she got a facelift? Isn’t that something people don’t like to brag about?
            “I know what you’re thinking,” she laughed, “and no, I didn’t get any kind of cosmetic surgeries or anything. 
            I’ve been using this new thing called <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> and it’s done wonders for me!”

		</i>
      </div>

      <p>She flashed me a winning smile.</p>

	<div class="articleImgsmall" style="width:60%;">
      <img src="./img/coworker.png" width="100%" />
      </div>
      <p>“I see,” I said, still trying to understand what she was talking about. “So it’s like a new skincare product?”</p>

      <p>Rebecca shrugged. “It’s more like a skincare gadget. You’ve got to get one and try it for yourself. You put it in the fridge and let the stone get cooled down, and after your skincare routine, you use it to gently roll your cream or serum or whatever you use into your skin…it feels amazing. I feel all the tension leave my face immediately. I’ve been using it for a few weeks, and, I mean…I can’t see myself letting go of it anytime soon.”</p>

      <p>“Wow,” I said, genuinely impressed. “That sounds like a great find. Where did you hear about it?”</p>

      <p>“Remember my husband gave me that spa day for my birthday a few weeks ago? They used it there as a part of their facial routine, and I asked about it. I loved it so much I just had to get myself one. They gave me the website, and I’ve been using it ever since!”</p>

      <p>“That sounds incredible,” I said, “but I don’t think my husband would be excited about me spending that kind of money on another skincare product. He already thinks I’m breaking the bank.”</p>

      <p>Rebecca tapped my shoulder. “That’s just it, Laura. It’s not expensive at all. I’m telling you, you have to give this thing a try. It’s made a world of difference for me.”</p>

      <p>I wasn’t convinced right away, but I thought it was worth a look. Rebecca was raving about it, so I decided to do some research into <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> to see if it was everything she said it was.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="./img/product.png" width="100%" />
    </div>
    <div class="articleText">
        <p>
            <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> is an innovation 
            in the anti-aging and skin care war we have been 
            waging for decades that actually achieves results! JadeGrace is made of Aventurine, 
            the stone of prosperity: purported to reinforce leadership qualities and decisiveness and promote compassion and empathy.
        </p>

        <p>Less mystical are the scientific principles that JadeGrace was designed with: the cooled stone rolled with light pressure across the face firms the skin, 
            relieves the appearance of under-eye circles, and reduces puffiness. This is achieved by stimulating the lymphatic system and improving blood circulation, 
            and can actually brighten your complexion, tighten pores, and help reduce the appearance of fine lines and wrinkles. Increase the effectiveness of lotion and serum by using the JadeGrace to gently roll the topical ingredients or sheet mask you already use into your skin for better coverage and absorption. Use the Gua Sha stone to relax facial muscles and to accelerate the metabolism of your skin cells, 
            which helps with maintaining the elasticity of your skin, another important anti-aging factor.
        </p>

        <p>The JadeGrace’s Aventurine stone has a naturally-occurring textured surface perfect to evenly apply your facial creams for better absorption by your skin. The stone is fitted over a silicone joint on the metal handle, 
            so the roller is smooth to operate and does not squeak or grind when in use. 
            Achieve high quality skincare and muscle relaxation in just four simple steps:
        </p>

        <p>1)	Place the roller and Guasha in the refrigerator</p>

        <p>2)	Apply topical skin care products to your face as normal</p>

        <p>3)	Use the chilled roller to properly spread and embed your skin care products evenly across your face</p>

        <p>4)	Use the Guasha to relieve facial muscle tension</p>
     
    </div>
    
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> has sold over 8 million units directly to consumers, even without the help of being sold in stores. The JadeGrace has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>
     
      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost.png" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost2.png" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> has started to develop a cult following, and with over 6,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Mike S.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I hear and read so much about this product thanks to a friend recommending this to me. I love how cold the stone feels on my skin, it’s helpful for relieving tension and headaches as well. I've also noticed my skin having a nice glow. It seems to be good quality and does not squeak when rolled.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        A
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Ana V.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/28/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        love it!!! The jade side is nice and cool and can even be stored in the refrigerator for an extra cool experience!
        I had a wrinkle under my left eye from years of pulling that I taunt to add eyeliner. After using this roller for about a month-and-a-half I have noticed quite a decrease in that wrinkle. I anticipate that that wrinkled will be gone within a couple more months!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Edith C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/1/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      It works like a charm. I have some wrinkles around my eyes. Rolled it few times per day in about a month since I got it. Those winkles are gone. Amazing product!

      </div>
    </div>
    <div class="articleText">
      <p>After seeing the incredibly positive reception the JadeGrace was getting on the internet, and with the recommendation from Rebecca, I knew I had to try it for myself. I got on the official website and ordered it the moment it came back in stock.</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
    <div class="articleText">
      <p>
        The <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a>  arrived in just 2 days. 
        It came in a beautiful box with a large and small jade roller attached to a stylish metal handle, 
        and a nice heart-shaped Guasha.
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/unboxing.png" width="100%" />
      </div>

	  <p>
        I wanted to try it right away, so I store it in the fridge while I went through my normal before-bed routine: 
        I washed my face and applied the serum I use every night, 
        then excitedly made my way to the fridge and gave the JadeGrace
        its first test run on my skin.
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/usingProduct.png" width="100%" />
      </div>

      <p>
        The first thing I noticed was the instant response my body had to it; 
        I could feel the soothing chill of the stone firming up my skin, 
        and it certainly did an incredible job of smoothing out the serum I use. 
        I made broad strokes using gentle pressure across my cheeks, chin and forehead, 
        and flipped the roller around to use the smaller stone for my nose and around my eyes. 
        After I completed that, I used the Guasha stone with somewhat firmer pressure to smoothly move across my cheeks, 
        and I could feel the tension easing in my muscles. It was like the chill was seeping through my skin and settling underneath with a softness I haven’t felt before. After I was done I used a wipe to clean off the stones and put them back in the refrigerator, 
        and I settled in to the best sleep I’ve had in a long time.
      </p>

      <p>
        I’m being completely honest when I say I’m a bit of a skeptic and wasn’t expecting much until I used <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> for the first time. 
        The results have to be felt to be believed! The practical effect of the roller enhancing the effectiveness of my topical skincare products and 
        the tension relief was great, but the calming effect was really the cherry on top that I wasn’t expecting. 
        That was when I knew I’d be using JadeGrace regularly.
      </p>

      <p>
        It’s been two months since I started using JadeGrace every evening, and I’ve already experienced the difference. 
        I was the first to notice a difference, but it didn’t take long before my husband and my friends were asking me what I did to make myself look younger! 
        After weeks of positive comments from the people in my life, I can honestly swear by the results. 
        I was so excited to find something that actually worked for me. 
        Thanks to <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a>, I think it’s safe to say I’m winning the anti-aging war!
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/splash-img-skin.png" width="100%" />
      </div>


    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their official website for just $12.95!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	
        Of course! I look at my purchase of <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a>
        as the thing that tipped the scales against aging. I was doing okay before that, 
        but now I’m doing GREAT! Since my purchase, everyone’s taken notice and I’ve been recommending everyone to try 
        JadeGrace—I mean, after the results Rebecca and I have gotten, 
        people are more than willing to give it a try.
     </p>

     <p>
        The JadeGrace was a smart buy. A one-time purchase that elevated my skincare game for good. 
        I don’t know how I would get on without it. I love what this product has done for me so much I’ve bought a 
        few for my girlfriends, and even one for my mother—they are all loving it. My mother was hesitant at first; 
        she’s obviously older than me, so she wasn’t convinced it could do anything for her…until my father complimented 
        her out of the blue one day. 
        That confirmed to her she was getting results, even at her age! 
     </p>

     <p>
        I’ve become convinced that the JadeGrace is an essential part of any skincare routine.
     </p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">JadeGrace</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 8 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
