

<!DOCTYPE html>
<html>
<head>
        <!-- https://davidshimjs.github.io/qrcodejs/ -->
        <script src='https://raw.githack.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js'></script>

        <!-- Include pdfMake - http://pdfmake.org/ -->
        <script src='includes/pdfmake.min.js'></script>
        <script src='includes/vfs_fonts.js'></script>
</head>

<body>
        <!-- input fields -->
        <div class="row" id='row-ui' >
              
                <div class="col s12">
                        <input id="buildingnameQR" type="text" value="Philips Pavilion">
                        
                </div>


                              


                <div class="input-field col s4 offset-s4">
                        
                        <a onclick='generatePdf()' class="waves-effect waves-light btn-large" title='Generate a PDF instruction page'>Pdf</a>
                </div>                

        </div>

        <!-- qr code display -->
        <div class="row">
             <div class="valign center" style="width: 100%;" id='arcode-container' ></div>           
        </div>
        

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
                Materialize.updateTextFields();
        });
        </script>

        <script src="includes/QRgenerator.js"></script>
</body>
</html>