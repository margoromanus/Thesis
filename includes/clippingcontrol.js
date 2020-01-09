AFRAME.registerComponent('clippingcontrol', {
    schema:{
        normal: {type: 'vec3', default: {x: 1, y: 0, z: 0}},
        constant: {type: 'number', default: 0}
    },

    update: function() {
        
        var data = this.data;
        var renderer = this.el.sceneEl.renderer;
        var slider = document.getElementById("myRange");
        var globalPlane = new THREE.Plane( data.normal, data.constant );

        renderer.clippingPlanes =[globalPlane];
        
        slider.addEventListener( 'input', ( event ) => {

            const value = parseFloat( event.target.value );
            console.log(value);
            globalPlane.constant = value * 0.01;

        } );
            
    }
       
});

