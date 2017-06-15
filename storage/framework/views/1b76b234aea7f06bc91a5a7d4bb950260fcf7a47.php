<?php $__env->startSection('content'); ?>
<div class="ui divided items" v-for="product in products">
  <div class="item">
    <div class="image">
      <img :src="'images/product/'+ product.product_image.name">{{ product.product_image | json }}
    </div>
    <div class="content">
      <a class="header">{{ product.nama }}</a>
      <div class="meta">
        <span class="cinema">{{ product.harga }}</span>
      </div>
      <div class="description">
        <p></p>
      </div>
      <div class="extra">
        <div class="ui right floated primary button">
          Buy tickets
          <i class="right chevron icon"></i>
        </div>
        <div v-for="category in product.product_category">
          <div class="ui label">{{ category.category.nama }}</div>
        </div>
        
      </div>
    </div>
  </div>
 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>