(function () {
  var $left_arrow, $right_arrow, animate_next, animate_previous;

  $right_arrow = $('#j-gallery-right-arrow');

  $left_arrow = $('#j-gallery-left-arrow');

  $right_arrow.click(function (e) {
      e.preventDefault();
      $('.j-gallery-slide-holder').velocity('finish');
      animate_next('#j-gallery-slide-right');
      animate_next('#j-gallery-slide-center', 175);
      return animate_next('#j-gallery-slide-left', 350);
  });

  $left_arrow.click(function (e) {
      e.preventDefault();
      $('.j-gallery-slide-holder').velocity('finish');
      animate_previous('#j-gallery-slide-left');
      animate_previous('#j-gallery-slide-center', 175);
      return animate_previous('#j-gallery-slide-right', 350);
  });

  animate_next = function (selector, delay, cb) {
      if (delay == null) {
          delay = 0;
      }
      if (cb == null) {
          cb = null;
      }
      return setTimeout(function () {
          var $bg_curr, $bg_next, $bg_prev, $el;
          $el = $(selector + " .j-gallery-slide-holder");
          $bg_prev = $el.find('.j-gallery-bg-previous');
          $bg_curr = $el.find('.j-gallery-bg-current');
          $bg_next = $el.find('.j-gallery-bg-next');
          $.Velocity.hook($el, "translateX", "-" + (100 / 3) + "%");
          return $.Velocity.animate($el, {
              translateX: "-" + (200 / 3) + "%",
              duration: 350
          }).then(function (elms) {
              var next_bg_image;
              next_bg_image = $.Velocity.hook($bg_prev, "background-image");
              $.Velocity.hook($bg_prev, "background-image", $.Velocity.hook($bg_curr, "background-image"));
              $.Velocity.hook($bg_curr, "background-image", $.Velocity.hook($bg_next, "background-image"));
              $.Velocity.hook($el, "translateX", "-" + (100 / 3) + "%");
              $.Velocity.hook($bg_next, "background-image", next_bg_image);
              if (typeof cb === 'function') {
                  return cb(elms);
              }
          });
      }, delay);
  };

  animate_previous = function (selector, delay, cb) {
      return setTimeout(function () {
          var $bg_curr, $bg_next, $bg_prev, $el;
          $el = $(selector + " .j-gallery-slide-holder");
          $bg_prev = $el.find('.j-gallery-bg-previous');
          $bg_curr = $el.find('.j-gallery-bg-current');
          $bg_next = $el.find('.j-gallery-bg-next');
          $.Velocity.hook($el, "translateX", "-" + (100 / 3) + "%");
          return $.Velocity.animate($el, {
              translateX: "0",
              duration: 350
          }).then(function (elms) {
              var prev_bg_image;
              prev_bg_image = $.Velocity.hook($bg_next, "background-image");
              $.Velocity.hook($bg_next, "background-image", $.Velocity.hook($bg_curr, "background-image"));
              $.Velocity.hook($bg_curr, "background-image", $.Velocity.hook($bg_prev, "background-image"));
              $.Velocity.hook($el, "translateX", "-" + (100 / 3) + "%");
              $.Velocity.hook($bg_prev, "background-image", prev_bg_image);
              if (typeof cb === 'function') {
                  return cb(elms);
              }
          });
      }, delay);
  };

}).call(this);
