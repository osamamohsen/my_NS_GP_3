

<?php
$user=$_SESSION['user'];
$id=$user['employees']['id'];
include_once '../../models/links.php';
$linker=new links();
$link=$linker->show_PhoneDataByID($id);
$Data = file_get_contents($link);
$phone = json_decode($Data, TRUE);
$link2=$linker->show_Mobile_By_ID(1);echo '<br/>';
$Data2=file_get_contents($link2);
$mobile=json_decode($Data2, TRUE);
//var_dump($mobile);
?>

<style>
h1{color:#ECF0F1;font-family:'Lobster', cursive;text-shadow:0 3px 3px #1ABC9C,0 6px 5px #2C3E50;
position:relative;}
h1:before{content:"";position:absolute;top:0;left:0;color:#4DCEB4;text-align:center;}
.btn{display:block;background:#3498db;color:#ECF0F1;outline:none;border:none;padding:0.5em 1em;
cursor:pointer;font-size:1em;}
.row-r{letter-spacing:-0.2em;*letter-spacing:normal;word-spacing:-0.1em;}
.lbl_Device{color: #3498db; text-align: center; font-family: cursive; font-size: x-large;}
.lbl_display{color: navy;font-weight: bold;}
.box{display:inline-block;zoom:1;*display:inline;letter-spacing:normal;
word-spacing:normal;vertical-align:top;text-rendering:auto;}
.box{width:100%;}
.full{display:block;margin-bottom:0.1em;padding:0.3em;width: 100%;}



.shareMe {
  /*/background: #1abc9c;*/
  border-top: 2px solid #3498db;
  background: #3498db;
  border-radius: 45px;
} 
.shareMe li a { color: #ecf0f1;}
.shareMe li a:hover,
.shareMe li a:active { border-radius: 45px; background: white; color: #3498db;}

/* biruTabs block */
.biruTabsBox{
  /*background:#ecf0f1;*/
  box-shadow: 0 6px 3px -6px #000; 
}
.tabCaption{
  /*background:#ecf0f1;*/
  color:#2c3e50;
}
/* tabs buttom */
.tabs {
  /*background: #ECF0F1;*/
  color:#3498db;
  border-bottom: 2px solid #3498db;
}

.tab.active{
  /*background:#1abc9c;*/
  background-color: #3498db;
  color: white;
  margin-bottom: 7px;
  border-radius: 45px;
}




/*  = BiruTabs basic
------------------------------*/
/* share links block */
.shareMe {
  list-style-type: none;
  display: block;
  width: 100%;
  /*margin: 0 auto;*/
  text-align:center;
  padding: 0;
} 
.shareMe li {
  display: inline-block;
  margin-left: 0.5em;
}
.shareMe li a {
  text-decoration: none;
  display: block;
  overflow: hidden;
  padding: 0.5em;
  transition:color 0.8s ease;
}

/* biruTabs block */
.biruTabsBox{border-radius:4px;}
.tabs {
  text-align: center;
  list-style: none;
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  text-align: left;
}

.tab {
  display: inline-block;
  line-height: 1.5em;
  z-index: 1000;
  padding: 0.5em 1em;
  font-size: 1em;
  cursor: pointer;  
}
/* tabs buttom */
.tab.active{
  transition:background 1s ease;
}
.tabImg{ 
  height:200px;
  display:block;
  width:100%;
}
.tabCaption{
  padding:0.5em;
  z-index:999999;
}
.biruTab {
  position: relative;
  padding-top: 2em;
  width: 100%;
  overflow: auto;
  /*height: 390px;*/
  /*margin: 0 auto;*/
}
.biruTab ul,
.biruTab ol {
  margin: 0;
  padding:0;
}
.biruTab ul {
  list-style: none;
  width: 100%;
  height: 100%;
}
.biruTab ul li {
  position:relative;
  display: block;
  float: left;
  width: 100%;
  height: auto;   
  padding: 0; 
  -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -ms-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;
}







</style>
<div class="biruTabsBox">
    <div id="biruTabs"  class="biruTab" >
    <ul>
        <li>
        <div class="tabCaption">
          <h3>About US</h3>
          <p>
Network Signal is a software to detect the calls SMS and data problems in Egypt Which can help users and operators to detect the problems they face
          </p>
        </div>
                  <div style="height: 14px;"></div>

      </li>
      <?php if(!isset($_SESSION['operator'])){ ?>
      <li>
        <div style="height: 14px;"></div>
        
        <!--<img class="tabImg" src="http://labs.nakome.com/fotos/bg.gif" alt="" />-->
        <div class="tabCaption">
            <table class="form-group" style="margin-bottom: 20px; width: 100%;">
                <tr><td class="lbl_Device lbl_display">Name</td><td class="lbl_Device"><?php echo $phone[0]['name']; ?></td></tr>
                <tr><td class="lbl_Device lbl_display">Birth date</td><td class="lbl_Device"><?php echo $phone[0]['Datre_of_birth'];?></td></tr>
            <tr><td class="lbl_Device lbl_display">IMEI</td><td class="lbl_Device" > <?php echo $mobile[0]['imei']; ?> </td></tr>
            <tr><td class="lbl_Device lbl_display">OS Version:</td><td class="lbl_Device" ><?php echo $mobile[0]['os_version']; ?></td></tr>
            <tr><td class="lbl_Device lbl_display">Terminal:</td><td class="lbl_Device" ><?php echo $mobile[0]['terminal_id']; ?></td></tr>
            <tr><td class="lbl_Device lbl_display">Manufactor</td><td class="lbl_Device" >
                <?php echo $mobile[0]['manufacturer']; ?></td></tr>

        </table>    
<!--          <h3>Work</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error necessitatibus ullam facilis beatae impedit sint aperiam nobis optio laborum placeat totam quaerat dolorum vel voluptas fuga blanditiis accusamus. Provident natus.</p>-->
        </div>
        <div style="height: 14px;"></div>
      </li>
      <?php } ?>
      
      
      <li>
<!--        <iframe class="tabImg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?hl=es&amp;ie=UTF8&amp;ll=43.361874,-8.412684&amp;spn=0.084242,0.181789&amp;t=h&amp;z=13&amp;output=embed"></iframe>
        -->
              <div style="height: 14px;"></div>
        <div class="tabCaption">
          <form action="">
            <div class="box">
              <label class="full" for="">Name</label>
              <input class="full" type="text">
              <label class="full" for="">Email</label>
              <input class="full" type="text">            
            </div>
            <div class="box">
              <label class="full" for="">Menssage</label>
              <textarea class="full" name="" id="" cols="30" rows="5"></textarea> 
              <input type="submit" class="btn" value="Send" style="width: 100%;"/>          
            </div>
          </form>
                          <div style="height: 14px;"></div>

        </div>
                              <div style="height: 14px;"></div>


      </li>
    </ul>
    <ol class="tabs">
       
      <li class="tab active">About</li>
      <li class="tab"> <?php if(!isset($_SESSION['operator'])){echo 'Temrinal';} else {echo 'Contact';}?> </li>
      <?php if(!isset($_SESSION['operator'])){ ?>
      <li class="tab">Contact</li>
      <?php } ?>
    </ol>
  </div>
</div>   


<br />

<div class="biruTabsBox">
  <div id="biruTabs2" class="biruTab" style="height: 195px;">
    <ul>
      <li>
          <div style="height: 14px;"></div>
        <div class="tabCaption">
          <h3>The idea</h3>
          <p>
              we can solve problems of the call by detect the kind of the problem if its call drop silent call cross talk or network busy
          </p>
        </div>
          <div style="height: 14px;"></div>
      </li>
      <li><div style="height: 14px;"></div>
        <div class="tabCaption">
          <h3>How to</h3>
          <p>
           by detect the kind of the problem if its call drop silent call cross talk x   
          </p>
        </div><div style="height: 14px;"></div>
      </li>
      
      <!--<li>-->
<!--        <iframe class="tabImg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?hl=es&amp;ie=UTF8&amp;ll=43.361874,-8.412684&amp;spn=0.084242,0.181789&amp;t=h&amp;z=13&amp;output=embed"></iframe>
      </li>-->
    </ul>
    <ol class="tabs">
      <li class="tab active">The idea</li>
      <li class="tab">How to</li>
    </ol>
  </div>
</div>   
</html>
<script>
    // init demo
$(function(){
  $('#biruTabs').biruTabs({
    share:true,
    share_link: {
      "link_one":"#",
      "link_two":"#",
      "link_three":"#",
      "link_four":"#"
    },
    share_text: {
      "link_one":"<small>Facebook</small>",
      "link_two":"<small>Twitter</small>",
      "link_three":"<small>Gmail</small>",
      "link_four":"<small>Instagram</small>"
    }
  });
  
  $('#biruTabs2').biruTabs({delay:2000});
});




/*
* 
* biruTabs.js  1.0v
*
* Copyright 2013 @nakome & @aryandhani
* Licensed under the Apache License v2.0
* http://www.apache.org/licenses/LICENSE-2.0
*
*			Defaults:
*			-> delay: false,
*			-> speed: 500,
*			-> complete: false,
*			-> fluid: false,
*			-> share: false,
*     -> share_link: {
*     ->   "link_one":"http://",
*     ->   "link_two":"http://",
*     ->   "link_three":"http://",
*     ->   "link_four":"http://"
*     -> },
*     -> share_text: {
*     ->   "link_one":"one", also you can put icons
*     ->   "link_two":"two",also you can put icons
*     ->   "link_three":"three",also you can put icons
*     ->   "link_four":"four+"also you can put icons
*     -> }
*/
;(function($, biru) {
  
  'use-strict';
  
  //  if not jQuery not get error.
  if(!$) return biru;
  
  
  // if mobile use touchstart
  // if not use click
  function mobilecheck() {
    var check = false;
    (function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
  }
  
  var biruTabs = function() {
    this.el = biru;
    this.items = biru;
    this.sizes = [];
    this.max = [0,0];
    this.current = 0;
    this.interval = biru;
    this.options = {
      speed: 800,
      delay: biru,
      complete: biru,
      fluid: true,
      share: biru,
      share_link: {
        "link_one":"#",
        "link_two":"#",
        "link_three":"#",
        "link_four":"#"
      },
      share_text: {
        "link_one":"one",
        "link_two":"two",
        "link_three":"three",
        "link_four":"four"
      }
    };
    
    var self = this;
    // Init function 
    this.init = function(el, options) {
      this.el = el;
      this.ul = el.children('ul');
      this.max = [el.outerWidth(), el.outerHeight()];
      //alert("height: "+el.outerHeight());
      this.items = this.ul.children('li')
      .each(this.getWidth);
      // Get options
      this.options = $.extend(this.options, options);
      // Get actions
      this.getSlide();
      // if true show share links
      if(this.options.share) this.getShare();
      return this;
    };
    
    //  Get width
    this.getWidth = function(index) {
        //alert(index);
      var el = $(this),
          width = el.outerWidth(), height = el.outerHeight();
      self.sizes[index] = [width, height];
      if(width > self.max[0]) self.max[0] = width;
      if(height > self.max[1]) self.max[1] = height;
    };
    
    //  Get slide
    this.getSlide = function() {
      this.el.css({
        overflow: 'hidden',
        width: self.max[0],
        height: 260
      });
      this.ul.css({
        width: (this.items.length * 100) + '%',
        position: 'relative'
      });
      // Divide in same parts 
      this.items.css('width', (100 / this.items.length) + '%');
      
      if(this.options.delay !== biru) {
        this.start();
        this.el.hover(this.stop, this.start);
      }
      
      // show tabs
      this.tabs();
      
      //  if resize divide in same parts
      if(this.options.fluid) {
        var resize = function() { 
          self.el.css('width', Math.min(Math.round(
            self.el.outerWidth() * 100), 100) + '%');
          self.el.parent().css('width', Math.min(Math.round(
            self.el.outerWidth() * 100), 100) + '%');
        };
        resize();
        $(window).resize(resize);
      }
    };
    
    
      
    this.getShare = function(){
      html = '<ul class="shareMe">'+
        '<li><a href="'+
        this.options.share_link.link_one+'">'+
        this.options.share_text.link_one+
        '</a></li>'+
        '<li><a href="'+
        this.options.share_link.link_two+'">'+
        this.options.share_text.link_two+
        '</a></li>'+
        '<li><a href="'+
        this.options.share_link.link_three+'">'+
        this.options.share_text.link_three+
        '</a></li>'+
        '<li><a href="'+
        this.options.share_link.link_four+'">'+
        this.options.share_text.link_four+
        '</a></li>'+
        '</ul>';
      this.el.parent().append(html);
    };
    
    //  Move biruSlide 
    this.move = function(index, cb) {
      
      // On finish go to start
      if(!this.items.eq(index).length) index = 0;
      if(index < 0) index = (this.items.length - 1);
      
      var target = this.items.eq(index);
      var obj = {height: target.outerHeight()};
      var speed = cb ? 5 : this.options.speed;
      
      if(!this.ul.is(':animated')){
        // Find dot a make active
        self.el.find('.tab:eq('+index+')')
        .addClass('active')
        .siblings()
        .removeClass('active');
        
        // Animate slide
        this.el.animate(obj, speed) 
        && this.ul.animate($.extend({
          left: '-' + index + '00%'
        }, obj), speed, function(data) {
          self.current = index;
          $.isFunction(self.options.complete) 
          && self.options.complete(self.el);
        });
      }
    };
    
		//  Autoplay
		this.start = function() {
			self.interval = setInterval(function() {
				self.move(self.current + 1);
			}, self.options.delay);
		};
		
		//  Stop autoplay
		this.stop = function() {
			self.interval = clearInterval(self.interval);
			return self;
		};
    
    this.tabs = function(){
      this.el
      .addClass('has-tabs')
      .find('.tab')
      .on(mobilecheck() ? 'touchstart' : 'click',
          function() {
        self.move($(this).index());
      });
    };
    
  };
  
  //  Create a jQuery plugin
  $.fn.biruTabs = function(elem) {
    var el = this.length;
    return this.each(function(index) {
      var _self = $(this),
          slide = new biruTabs,
          instance = slide.init(_self, elem);
//          //alert(_self); //alert(slide)
      _self.data('biruSlide' + (el > 1 ? '-' + (index + 1) : ''), instance);
    });
  };
})(window.jQuery, false);
    </script>