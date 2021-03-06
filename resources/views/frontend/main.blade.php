@extends('frontend.layout.master')

@section('content')

<div :class="layout">
 <div class="column"  v-for="product in products">
   <div class="ui divided items">
  <div class="item">
    <div class="image">
      <img :src="'{{ asset('images/product') }}'+'/'+ product.product_image[0].name">
    </div>
    <div class="content">
      <a class="header">@{{ product.nama }}</a>
      <div class="meta">
        <span class="cinema">@{{ product.harga }}</span>
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
          <div class="ui label">@{{ category.category.nama }}</div>
        </div>
        
      </div>
    </div>
  </div>
 
</div>
 </div>
</div>

<!-- 
<div class="ui divided items" v-for="product in products">
  <div class="item">
    <div class="image">
      <img :src="'{{ asset('images/product') }}'+'/'+ product.product_image[0].name">
    </div>
    <div class="content">
      <a class="header">@{{ product.nama }}</a>
      <div class="meta">
        <span class="cinema">@{{ product.harga }}</span>
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
          <div class="ui label">@{{ category.category.nama }}</div>
        </div>
        
      </div>
    </div>
  </div>
 
</div>
 -->
@endsection