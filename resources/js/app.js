/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){
  // if($('input[name="price"]').length > 0){
  //   $('input[name="price"]').keyup(function(){
  //     var input_value = $(this).val();
  //     input_value = input_value.replace(',', '.');
  //     $(this).val(input_value);
  //   });
  // }
  if($('input[name="name"]').length > 0){
    $('input[name="name"]').keyup(function(){
      var name_control = $(this).val();

      name_control = name_control.charAt(0).toUpperCase()+name_control.slice(1).toLowerCase();
      $(this).val(name_control);
    });
  }

  if($('textarea[name="description"]').length > 0){
    $('textarea[name="description"]').keyup(function(){
      var description_control = $(this).val();

      description_control = description_control.charAt(0).toUpperCase()+description_control.slice(1).toLowerCase();
      $(this).val(description_control);
    });
  }

  if($('input[name="category"]').length > 0){
    $('input[name="category"]').keyup(function(){
      var category_control = $(this).val();

      category_control = category_control.charAt(0).toUpperCase()+category_control.slice(1).toLowerCase();
      $(this).val(category_control);
    });
  }

  if($('#edit_product_form').length > 0){
    $('#edit_product_form').on('submit', function(event){
      event.preventDefault();
      var price_value = $('input[name="price"]').val();
      var sale_price_value = $('input[name="sale_price"]').val();

      price_value = price_value.replace(',', '.');
      sale_price_value = sale_price_value.replace(',', '.');
      $('input[name="price"]').val(price_value);
      $('input[name="sale_price"]').val(sale_price_value);

      $(this).unbind('submit');
      $(this).submit();
    });
  }

  if($('#create_product_form').length > 0){
    $('#create_product_form').on('submit', function(event){
      event.preventDefault();
      var price_value = $('input[name="price"]').val();
      var sale_price_value = $('input[name="sale_price"]').val();

      price_value = price_value.replace(',', '.');
      sale_price_value = sale_price_value.replace(',', '.');
      $('input[name="price"]').val(price_value);
      $('input[name="sale_price"]').val(sale_price_value);

      $(this).unbind('submit');
      $(this).submit();
    });
  }

});
