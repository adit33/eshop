<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>


<body>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
<style type="text/css">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>
<?php echo $__env->yieldPushContent('styles'); ?>
<div id="app">
 <div class="ui main text container">
   <!--  <h1 class="ui header">Sticky Example</h1>
    <p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p> -->
  </div>

<template>
  <swiper :options="swiperOption" ref="mySwiper">
    <!-- slides -->

    <swiper-slide>
      <div class="swiper-zoom-container">
        <img src="http://goboiano.com/wp-content/uploads/2017/04/Koe-no-Katachi-anime.jpg"></img>
      </div>
    </swiper-slide>
    
    <swiper-slide>
      <div class="swiper-zoom-container">
        <img src="https://i.ytimg.com/vi/IEnlmKi8UO4/maxresdefault.jpg"></img>
      </div>
    </swiper-slide>

    <swiper-slide>I'm Slide 3</swiper-slide>
    <swiper-slide>I'm Slide 4</swiper-slide>
    <swiper-slide>I'm Slide 5</swiper-slide>
    <swiper-slide>I'm Slide 6</swiper-slide>
    <swiper-slide>I'm Slide 7</swiper-slide>
    <!-- Optional controls -->
    <div class="swiper-pagination"  slot="pagination"></div>
    <div class="swiper-button-prev" slot="button-prev"></div>
    <div class="swiper-button-next" slot="button-next"></div>
    <div class="swiper-scrollbar"   slot="scrollbar"></div>
  </swiper>
</template>


 <div class="ui borderless main menu">
      <div href="#" class="header item">
        <img class="logo" src="<?php echo e(asset('images/logo.png')); ?>">
        Project Name
      </div>
      <a href="#" class="item">Blog</a>
      <a href="#" class="item">Articles</a>
      <a href="#" class="ui floated dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">Link Item</div>
          <div class="item">Link Item</div>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <div class="item">Link Item</div>
              <div class="item">Link Item</div>
            </div>
          </div>
          <div class="item">Link Item</div>
        </div>
      </a>
      <div class="menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input placeholder="Search..." type="text">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
  <div class="right menu">
    <div class="item">
    <div class="ui compact menu">
  <a class="item">
    <i class="shop icon"></i> Cart
    <div class="floating ui red label">22</div>
  </a>
</div>
      <a href="#" class="item">Login</a>
    </div>
  </div>
    </div>


<!-- <image-slider></image-slider> -->

<div class="ui grid">
  <div class="one wide column"></div>
  <div class="fourteen wide column"> 
    <div class="ui large buttons">
  <button class="ui button" v-on:click="changeLayout('ui one column grid')">One</button>
  <div class="or"></div>
  <button class="ui button" v-on:click="changeLayout('ui two column grid')">Two</button>
</div>
  <?php echo $__env->yieldContent('content'); ?></div>
  <div class="one wide column"></div>
  </div>
  


 
 <!-- footer -->

 <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/components.js')); ?>"></script>
<script type="text/javascript">
    $(document)
    .ready(function() {

      $('.ui.accordion')
    .accordion(); 

      // fix main menu to page on passing
      $('.main.menu').visibility({
        type: 'fixed'
      });
      $('.overlay').visibility({
        type: 'fixed',
        offset: 80
      });

      // lazy load images
      $('.image').visibility({
        type: 'image',
        transition: 'vertical flip in',
        duration: 500
      });

      // show dropdown on hover
      $('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
    })
  ;

</script>

<script>
Vue.component('image-slider',{
  template:`
  <swiper :options="swiperOption" ref="mySwiper">
    <!-- slides -->
    <swiper-slide>I'm Slide 1</swiper-slide>
    <swiper-slide>I'm Slide 2</swiper-slide>
    <swiper-slide>I'm Slide 3</swiper-slide>
    <swiper-slide>I'm Slide 4</swiper-slide>
    <swiper-slide>I'm Slide 5</swiper-slide>
    <swiper-slide>I'm Slide 6</swiper-slide>
    <swiper-slide>I'm Slide 7</swiper-slide>
    <!-- Optional controls -->
    <div class="swiper-pagination"  slot="pagination"></div>
    <div class="swiper-button-prev" slot="button-prev"></div>
    <div class="swiper-button-next" slot="button-next"></div>
    <div class="swiper-scrollbar"   slot="scrollbar"></div>
  </swiper>`
});

new Vue({
  el:"#app",
  name: 'carrousel',
    data() {
      return {
        products:{},
        layout:'ui one column grid',
        swiperOption: {
          notNextTick: true,
          autoplay: 2500,
          direction : 'vertical',
          grabCursor : true,
          setWrapperSize :true,
          autoHeight: true,
          pagination : '.swiper-pagination',
          paginationClickable :true,
          prevButton:'.swiper-button-prev',
          nextButton:'.swiper-button-next',
          scrollbar:'.swiper-scrollbar',
          mousewheelControl : true,
          observeParents:true,
          debugger: true,
          loop:true,
          height:500,
          autoHeight:true,
          setWrapperSize:true,
          onTransitionStart(swiper){
            // console.log(swiper)
          },
          // more Swiper configs and callbacks...
          // ...
        }
      }
    },
    methods:{
      getProducts(){
        var self=this;
        axios.get('api/product').then(function(response){
          self.products=response.data;
        }).catch()
      },
      changeLayout(name){
        this.layout=name;
      }
    },
    // you can find current swiper instance object like this, while the notNextTick property value must be true
    // 如果你需要得到当前的swiper对象来做一些事情，你可以像下面这样定义一个方法属性来获取当前的swiper对象，同时notNextTick必须为true
    computed: {
      swiper() {
        return this.$refs.mySwiper.swiper
      }
    },
    mounted() {
      this.getProducts()
      // console.log('this is current swiper instance object', this.swiper)
      // this.swiper.slideTo(3, 1000, false)
    }
})

    
  
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
