!function(n){"use strict";var t=function(t){this.$target=t,this.$scope=n(".dhvc-woocommerce-page"),this.$images=n(".woocommerce-product-gallery__image",t),this.gallery_images=n(".dhvc-woo-product-gallery__images"),this.gallery_thumbnails=n(".dhvc-woo-product-gallery__thumbnails"),this.zoom_enabled="yes"===this.gallery_images.data("zoom")&&n.isFunction(n.fn.zoom),this.photoswipe_enabled="yes"===this.gallery_images.data("lightbox")&&"undefined"!=typeof PhotoSwipe,this.initSlick=this.initSlick.bind(this),this.initZoom=this.initZoom.bind(this),this.initZoomForTarget=this.initZoomForTarget.bind(this),this.initPhotoswipe=this.initPhotoswipe.bind(this),this.getGalleryItems=this.getGalleryItems.bind(this),this.openPhotoswipe=this.openPhotoswipe.bind(this),this.initSlick()};t.prototype.initSlick=function(){var r=this,o=n(".variations_form",this.$scope);if(this.photoswipe_enabled&&r.initPhotoswipe(),this.zoom_enabled&&(r.initZoom(),this.$target.on("woocommerce_gallery_init_zoom",r.initZoom)),this.$target.hasClass("with-thumbnails")){this.gallery_images.slick({arrows:!0,dots:!1,draggable:!0,fade:!0,slidesToShow:1,slidesToScroll:1,infinite:!1,speed:300,adaptiveHeight:!1,asNavFor:".dhvc-woo-product-gallery__thumbnails",responsive:[{breakpoint:768,settings:{fade:!1}}]}),this.zoom_enabled&&this.gallery_images.on("afterChange",function(t,i,e,o){var a=n(".woocommerce-product-gallery__image",this.gallery_images);r.initZoomForTarget(a.eq(e))}),this.gallery_thumbnails.slick({arrows:this.gallery_thumbnails.data("arrows"),prevArrow:'<span class="slick-arrow__prev"><i class="slick-arrow__prev__icon" aria-hidden="true"></i></span>',nextArrow:'<span class="slick-arrow__next"><i class="slick-arrow__next__icon" aria-hidden="true"></i></span>',dots:!1,centerMode:!1,centerPadding:0,customPaging:5,draggable:!1,swipeToSlide:!1,slidesToShow:4,slidesToScroll:1,infinite:!1,speed:300,vertical:this.gallery_thumbnails.data("vertical"),focusOnSelect:!0,verticalSwiping:!0,asNavFor:".dhvc-woo-product-gallery__images",responsive:[{breakpoint:768,slidesToShow:4,settings:{vertical:!1,arrows:this.gallery_thumbnails.data("mobile-arrows")}}]});var a=this.gallery_thumbnails.find("[data-slick-index=0] img"),s=a.attr("src");o.length&&o.on("show_variation",function(t,i,e){i&&i.image&&i.image.src&&1<i.image.src.length&&(o.wc_variations_image_update(i),r.gallery_thumbnails.find('img[src="'+s+'"]').each(function(){n(this).wc_set_variation_attr("src",i.image.gallery_thumbnail_src),n(this).attr("data-changesrc",!0)}),a.wc_set_variation_attr("src",i.image.gallery_thumbnail_src))}).on("reset_image",function(){o.wc_variations_image_update(!1),a.wc_reset_variation_attr("src"),r.gallery_thumbnails.find("img[data-changesrc]").each(function(){n(this).wc_reset_variation_attr("src"),n(this).attr("data-changesrc",!1)})}),this.$target.on("woocommerce_gallery_reset_slide_position",function(){r.gallery_images.slick("slickGoTo",0)})}else o.length&&o.on("show_variation",function(t,i,e){i&&i.image&&i.image.src&&1<i.image.src.length&&o.wc_variations_image_update(i)}).on("reset_image",function(){o.wc_variations_image_update(!1)})},t.prototype.initZoom=function(){this.initZoomForTarget(this.$images.first())},t.prototype.initZoomForTarget=function(t){if(!this.zoom_enabled)return!1;var e=this.$target.width(),o=!1;if(n(t).each(function(t,i){if(n(i).find("img").data("large_image_width")>e)return!(o=!0)}),o){var i=n.extend({touch:!1},wc_single_product_params.zoom_options);"ontouchstart"in document.documentElement&&(i.on="click"),t.trigger("zoom.destroy"),t.zoom(i),setTimeout(function(){t.find(":hover").length&&t.trigger("mouseover")},100)}},t.prototype.initPhotoswipe=function(){this.zoom_enabled&&0<this.$images.length?(this.$target.prepend('<a href="#" class="woocommerce-product-gallery__trigger"></a>'),this.$target.on("click",".woocommerce-product-gallery__trigger",this.openPhotoswipe),this.$target.on("click",".woocommerce-product-gallery__image a",function(t){t.preventDefault()})):this.$target.on("click",".woocommerce-product-gallery__image a",this.openPhotoswipe)},t.prototype.getGalleryItems=function(){var t=this.$images,a=[];return 0<t.length&&t.each(function(t,i){var e=n(i).find("img");if(e.length){var o={src:e.attr("data-large_image"),w:e.attr("data-large_image_width"),h:e.attr("data-large_image_height"),title:e.attr("data-caption")?e.attr("data-caption"):e.attr("title")};a.push(o)}}),a},t.prototype.openPhotoswipe=function(t){t.preventDefault();var i,e=n(".pswp")[0],o=this.getGalleryItems(),a=n(t.target);i=a.is(".woocommerce-product-gallery__trigger")||a.is(".woocommerce-product-gallery__trigger img")?this.$target.find(".slick-active"):a.closest(".woocommerce-product-gallery__image");var r=n.extend({index:n(i).index(),addCaptionHTMLFn:function(t,i){return t.title?(i.children[0].textContent=t.title,!0):(i.children[0].textContent="",!1)}},wc_single_product_params.photoswipe_options);new PhotoSwipe(e,PhotoSwipeUI_Default,o,r).init()},n.fn.dhvc_woo_product_gallery=function(){return new t(this),this},n(document).ready(function(){n(".dhvc-woo-product-gallery").dhvc_woo_product_gallery()})}(window.jQuery);