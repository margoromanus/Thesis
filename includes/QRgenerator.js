
document.querySelector('#buildingnameQR').addEventListener('change', updateARCode)

//////////////////////////////////////////////////////////////////////////////
//                PDF Generation
//////////////////////////////////////////////////////////////////////////////

function generatePdf(){
        console.log('generate PDF')
        
        var buildingnameQR = document.querySelector('#buildingnameQR').innerHTML
        var urlQrCode = `https://thesisjelle.herokuapp.com/buildingAR.php?title=${buildingnameQR}`
        
        var docDefinition = {
                content: [
                        {
                            image: canvas.toDataURL(),
                            width: 500,
                            alignment: 'center',
                        },
                        {
                            text: [                                        
                                {
                                text: buildingnameQR,
                                fontSize: 48,
                                bold: true,
                                }          
                            ],
                            alignment: 'center',
                            margin: [0, 60],
                        },          
                ],
        }
        pdfMake.createPdf(docDefinition).open();
        pdfMake.createPdf(docDefinition).download(`${buildingnameQR}-marker.pdf`);
}


//////////////////////////////////////////////////////////////////////////////
//                build canvas 
//////////////////////////////////////////////////////////////////////////////
var canvas = document.createElement('canvas');
document.querySelector('#arcode-container').appendChild(canvas)
canvas.width  = 1024;
canvas.height = 1024;
canvas.style.width  = '512px';
canvas.style.height = '512px';

var context = canvas.getContext('2d')

var hiroImage = new Image;
hiroImage.onload = function() {
    var buildingnameQR = document.querySelector('#buildingnameQR').innerHTML
    var urlQrCode = `https://thesisjelle.herokuapp.com/buildingAR.php?title=${buildingnameQR}`

    console.log('image loaded')
    document.querySelector('#buildingnameQR').innerHTML = buildingnameQR
            updateARCode()
}
hiroImage.src = 'images/markers/thesismarkerbase.png';

function updateARCode(){
    var buildingnameQR = document.querySelector('#buildingnameQR').innerHTML
    var urlQrCode = `https://thesisjelle.herokuapp.com/buildingAR.php?title=${buildingnameQR}`
        
        
        // generate the ar-code canvas
        generateArCodeCanvas(canvas, urlQrCode, function onReady(){
                console.log('ar-code generated for', urlQrCode)
        })

     
        
       
}

//////////////////////////////////////////////////////////////////////////////
//                Code Separator
//////////////////////////////////////////////////////////////////////////////

/**
 * Generate AR-Code
 */
function generateArCodeCanvas(canvas, text, onLoad){
        var context = canvas.getContext('2d')
        
        context.drawImage(hiroImage, 0, 0, canvas.width, canvas.height);

        generateQrCodeImage(text, function onLoaded(qrCodeImage){
                console.log('qrcode generated')
                context.drawImage(qrCodeImage,canvas.width*0.50,canvas.height*0.30,canvas.width*0.20, canvas.height*0.20);      
                
                onLoad && onLoad()          
        })
}

/**
 * Generate AR-Code
 */
function generateQrCodeImage(text, onLoaded){
        var container = document.createElement('div')

        var qrcode = new QRCode(container, {
                text: text,
                width: 256,
                height: 256,
                colorDark : '#000000',
                colorLight : '#ffffff',
                // correctLevel : QRCode.CorrectLevel.H
        });

        var qrCodeImage = container.querySelector('img')
        qrCodeImage.addEventListener('load', function(){
                onLoaded(qrCodeImage)
        })
        
}
                