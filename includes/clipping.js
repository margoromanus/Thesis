AFRAME.registerComponent('clipping', {
    schema: {
      axis: {
        type: 'height',
        default: 'height'
      },
      value: {
        type: 'number',
        default: 1
      }
    },
    init: function() {
      var el = this.el;
      var data = this.data;
      var model = el.object3D;
      el.addEventListener('model-loaded', function(e) {
        
        el.material.clippingPlanes = [ localPlane ]
      });
    }
  });