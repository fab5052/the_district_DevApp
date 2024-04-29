$(function() {
    var $horizontalCollapse = $('.js-horizontal-collapse');
    
    $horizontalCollapse.each(function() {
      var $hc = $(this);
      var itemMinWidth = $hc.data('itemMinWidth');
      var itemMaxWidth = $hc.data('itemMaxWidth');
      var $items = $hc.find('.js-horizontal-collapse-item');
      $items.each(function() {
        var $item = $(this);
        $item.css('min-width', itemMinWidth + 'px');
        $item.css('width', itemMinWidth + 'px');
        $item.css('max-width', itemMaxWidth + 'px');
        
        $item.find('a').click(function(evt) {
          evt.stopPropagation();
        });
        
        $item.on('keypress', function(evt) {
          if(evt.keyCode === 13 || evt.keyCode === 32) {
            $(this).trigger('click');
          }
        });
        
        $item.on('mouseenter',function() {
          var $this = $(this);
          $this.siblings().removeClass('is-active');
          $this.siblings().css('width', itemMinWidth + 'px');
          $this.addClass('is-active');
          $this.css('width', itemMaxWidth + 'px');
        });
        
        $item.on('mouseleave',function() {
          var $this = $(this);
          $this.siblings().removeClass('is-active');
          $this.siblings().css('width', itemMinWidth + 'px');
          $this.removeClass('is-active');
          $this.css('width', itemMinWidth + 'px');
        });
        
        $item.on('click ',function() {
          var $this = $(this);
          $this.siblings().removeClass('is-active');
          $this.siblings().css('width', itemMinWidth + 'px');
          $this.toggleClass('is-active');
          if ($this.hasClass('is-active')) {
             $this.css('width', itemMaxWidth + 'px');
          } else {
            $this.css('width', itemMinWidth + 'px');
          }
        });
        
        var $itemInner = $item.find('.js-horizontal-collapse-item-inner');
        $itemInner.css('width', itemMaxWidth + 'px');
      });
    });
  });
  