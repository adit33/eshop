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

 <div class="ui main text container">
   <!--  <h1 class="ui header">Sticky Example</h1>
    <p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p> -->
  </div>


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

<div class="ui grid">
  <div class="two wide column"></div>
  <div class="nine wide column"> <?php echo $__env->yieldContent('content'); ?></div>
  <div class="five wide column">
    <div class="ui accordion">
  <div class="active title">
    <i class="dropdown icon"></i>
    What is a dog?
  </div>
  <div class="active content">
    <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    What kinds of dogs are there?
  </div>
  <div class="content">
    <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    How do you acquire a dog?
  </div>
  <div class="content">
    <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
    <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
  </div>
</div>

  </div>
</div>
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
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
