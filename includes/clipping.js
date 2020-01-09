AFRAME.registerComponent('clipping', {
    
    init: function() {
      var el = this.el;
      var data = this.data;
      var model = el.object3D;
      el.addEventListener('model-loaded', function(e) {
        
        el.material.clippingPlanes = [ localPlane ]
      });
    }
  });